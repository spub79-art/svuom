<?php

require_once dirname(__DIR__) . '/config/app.php';
require_once dirname(__DIR__) . '/system/mysql_pdo.php';
require_once dirname(__DIR__) . '/system/dbconnection.php';

require_once __DIR__ . '/Request.php';
require_once __DIR__ . '/Router.php';
require_once __DIR__ . '/View.php';
require_once __DIR__ . '/Url.php';
require_once __DIR__ . '/InformaceRepository.php';
require_once __DIR__ . '/TopicFormatter.php';

function svuom_bootstrap_web()
{
    svuom_apply_staging_noindex();
    dbconnection();
}

?>
