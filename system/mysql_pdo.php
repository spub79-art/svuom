<?php

/**
 * PDO vrstva nahrazující odstraněné mysql_* v PHP 8+.
 * Staging i produkce mají běžet pod PHP 8.1+ (php5.6 je zastaralé).
 */

if (defined('SVUOM_MYSQL_PDO_LOADED')) {
    return;
}

define('SVUOM_MYSQL_PDO_LOADED', true);

if (!defined('MYSQL_ASSOC')) {
    define('MYSQL_ASSOC', 1);
}
if (!defined('MYSQL_NUM')) {
    define('MYSQL_NUM', 2);
}
if (!defined('MYSQL_BOTH')) {
    define('MYSQL_BOTH', 3);
}

class SvuomMysqlResult
{
    private $rows;
    private $index = 0;

    public function __construct(array $rows)
    {
        $this->rows = $rows;
    }

    public function fetch($resultType = null)
    {
        if ($resultType === null) {
            $resultType = MYSQL_BOTH;
        }
        if ($this->index >= count($this->rows)) {
            return false;
        }

        $row = $this->rows[$this->index++];

        if ($resultType === MYSQL_NUM) {
            return array_values($row);
        }

        if ($resultType === MYSQL_ASSOC) {
            $out = array();
            foreach ($row as $key => $value) {
                if (!is_int($key)) {
                    $out[$key] = $value;
                }
            }
            return $out;
        }

        return $row;
    }

    public function count()
    {
        return count($this->rows);
    }
}

function svuom_mysql_pdo()
{
    static $pdo = null;
    static $failed = false;

    if ($failed) {
        return false;
    }

    if ($pdo !== null) {
        return $pdo;
    }

    $cfg = svuom_config();
    $dsn = 'mysql:host=' . $cfg['db_host'] . ';dbname=' . $cfg['db_name'] . ';charset=utf8';

    try {
        $pdo = new PDO($dsn, $cfg['db_user'], $cfg['db_pass'], array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_SILENT,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_BOTH,
        ));
    } catch (PDOException $e) {
        $failed = true;
        return false;
    }

    return $pdo;
}

function mysql_pconnect($server, $username, $password)
{
    if (svuom_mysql_pdo() === false) {
        return false;
    }

    $GLOBALS['svuom_mysql_link'] = 1;
    return $GLOBALS['svuom_mysql_link'];
}

function mysql_connect($server, $username, $password)
{
    return mysql_pconnect($server, $username, $password);
}

function mysql_select_db($database_name, $link_identifier = null)
{
    return true;
}

function mysql_query($query, $link_identifier = null)
{
    $pdo = svuom_mysql_pdo();
    if ($pdo === false) {
        return false;
    }

    $trimmed = ltrim($query);
    $isSelect = preg_match('/^(SELECT|SHOW|DESCRIBE|EXPLAIN)\b/i', $trimmed) === 1;

    if ($isSelect) {
        $stmt = $pdo->query($query);
        if ($stmt === false) {
            return false;
        }

        return new SvuomMysqlResult($stmt->fetchAll(PDO::FETCH_BOTH));
    }

    return $pdo->exec($query) !== false;
}

function mysql_num_rows($result)
{
    if ($result instanceof SvuomMysqlResult) {
        return $result->count();
    }

    return 0;
}

function mysql_fetch_array($result, $result_type = null)
{
    if ($result_type === null) {
        $result_type = MYSQL_BOTH;
    }
    if ($result instanceof SvuomMysqlResult) {
        return $result->fetch($result_type);
    }

    return false;
}

?>
