<?php

$_SERVER['HTTP_HOST'] = getenv('SVUOM_TEST_HOST') ?: 'new.svuom.cz';

require_once dirname(__DIR__) . '/config/app.php';

$cfg = svuom_config();
echo 'env=' . $cfg['environment'] . "\n";
echo 'db=' . $cfg['db_name'] . "\n";
echo 'user=' . $cfg['db_user'] . "\n";
echo 'pass_set=' . (strlen($cfg['db_pass']) > 0 ? 'yes' : 'no') . "\n";

$dsn = 'mysql:host=' . $cfg['db_host'] . ';dbname=' . $cfg['db_name'] . ';charset=utf8';

try {
    $pdo = new PDO($dsn, $cfg['db_user'], $cfg['db_pass']);
    echo "pdo=OK\n";
} catch (PDOException $e) {
    echo 'pdo=FAIL ' . $e->getMessage() . "\n";
    exit(1);
}

?>
