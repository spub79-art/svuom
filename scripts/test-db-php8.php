<?php

/**
 * Smoke test DB vrstvy pod PHP 8+ (PDO polyfill).
 * Na serveru: php8.1 scripts/test-db-php8.php
 */

$_SERVER['HTTP_HOST'] = getenv('SVUOM_TEST_HOST') ?: 'new.svuom.cz';

require_once dirname(__DIR__) . '/config/app.php';
require_once dirname(__DIR__) . '/system/mysql_pdo.php';

if (!class_exists('SvuomMysqlResult', false)) {
    echo "SKIP: nativni ext/mysql — spustte pod php8.1+\n";
    exit(0);
}

$db = mysql_pconnect('x', 'x', 'x');
if (!$db) {
    echo "FAIL: mysql_pconnect\n";
    exit(1);
}

mysql_select_db(svuom_config()['db_name']);
mysql_query('SET CHARACTER SET utf8;');

$result = mysql_query('SELECT COUNT(*) AS cnt FROM informace');
if (!$result) {
    echo "FAIL: SELECT informace\n";
    exit(1);
}

$row = mysql_fetch_array($result);
$cnt = isset($row['cnt']) ? $row['cnt'] : $row[0];
echo "OK: informace rows=" . $cnt . " (PDO polyfill)\n";
exit(0);

?>
