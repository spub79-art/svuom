<?php

$root = is_dir('/var/www/html/new.www') ? '/var/www/html/new.www' : dirname(__DIR__);

echo "=== HTTP_HOST new.svuom.cz ===\n";
$_SERVER['HTTP_HOST'] = 'new.svuom.cz';
require $root . '/config/app.php';
$c = svuom_config();
echo "env={$c['environment']} db={$c['db_name']} user={$c['db_user']} pass=" . (strlen($c['db_pass']) ? 'set' : 'EMPTY') . "\n";

echo "\n=== secrets.php keys (bez hesel) ===\n";
$secretsFile = $root . '/config/secrets.php';
if (is_readable($secretsFile)) {
    $secrets = require $secretsFile;
    foreach ($secrets as $env => $vals) {
        if (!is_array($vals)) {
            continue;
        }
        $keys = array_keys($vals);
        echo "$env: " . implode(', ', $keys) . "\n";
        if (isset($vals['db_name'])) {
            echo "  db_name override: {$vals['db_name']}\n";
        }
    }
} else {
    echo "secrets.php missing\n";
}

echo "\n=== zaloha pred git (pokud existuje) ===\n";
$bak = '/var/www/html/new.www.pre-git-bak/system/dbconnection.php';
if (is_readable($bak)) {
    $txt = file_get_contents($bak);
    if (preg_match('/mysql_select_db\s*\(\s*[\'"]([^\'"]+)/', $txt, $m)) {
        echo "pre-git-bak db: {$m[1]}\n";
    } else {
        echo "pre-git-bak: db name not found in dbconnection.php\n";
    }
} else {
    echo "zaloha nenalezena\n";
}

echo "\n=== produkce www config (pokud existuje) ===\n";
$prod = '/var/www/html/www/system/dbconnection.php';
if (is_readable($prod)) {
    $txt = file_get_contents($prod);
    if (preg_match('/mysql_select_db\s*\(\s*[\'"]?(\w+)/', $txt, $m)) {
        echo "prod dbconnection: {$m[1]}\n";
    }
}

echo "\n=== test pripojeni k databazim ===\n";
require_once $root . '/system/mysql_pdo.php';

$candidates = array('new.svuom', 'svuom_staging', 'svuom', 'svuom_new');
$tried = array();

foreach ($candidates as $dbName) {
    if (isset($tried[$dbName])) {
        continue;
    }
    $tried[$dbName] = true;

    $testCfg = $c;
    $testCfg['db_name'] = $dbName;
    $dsn = svuom_build_pdo_dsn($testCfg);

    try {
        $pdo = new PDO($dsn, $c['db_user'], $c['db_pass']);
        $cnt = $pdo->query('SELECT COUNT(*) FROM informace')->fetchColumn();
        echo "OK  $dbName  informace=$cnt\n";
    } catch (Exception $e) {
        $msg = $e->getMessage();
        if (strpos($msg, 'Access denied') !== false) {
            echo "DEN $dbName  (access denied)\n";
        } elseif (strpos($msg, 'Unknown database') !== false) {
            echo "MISS $dbName  (neexistuje)\n";
        } else {
            echo "FAIL $dbName  ($msg)\n";
        }
    }
}

?>
