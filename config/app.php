<?php

/**
 * Konfigurace podle domeny, na ktere web bezi.
 * Hesla jsou v config/secrets.php (mimo git).
 */

function svuom_http_host()
{
    if (!isset($_SERVER['HTTP_HOST'])) {
        return 'cli';
    }

    $host = strtolower($_SERVER['HTTP_HOST']);
    return preg_replace('/:\d+$/', '', $host);
}

function svuom_detect_environment()
{
    $host = svuom_http_host();

    $map = array(
        'new.svuom.cz' => 'staging',
        'localhost' => 'local',
        '127.0.0.1' => 'local',
    );

    if (isset($map[$host])) {
        return $map[$host];
    }

    if (preg_match('/(^|\.)svuom\.cz$/', $host)) {
        return 'production';
    }

    return 'production';
}

function svuom_config()
{
    static $config = null;

    if ($config !== null) {
        return $config;
    }

    $env = svuom_detect_environment();

    $profiles = array(
        'production' => array(
            'environment' => 'production',
            'db_host' => 'localhost',
            'db_name' => 'svuom',
            'db_user' => 'svuom',
            'site_host' => 'www.svuom.cz',
            'site_url' => 'https://www.svuom.cz',
            'debug' => false,
        ),
        'staging' => array(
            'environment' => 'staging',
            'db_host' => 'localhost',
            'db_name' => 'new.svuom',
            'db_user' => 'svuom',
            'site_host' => 'new.svuom.cz',
            'site_url' => 'https://new.svuom.cz',
            'debug' => true,
        ),
        'local' => array(
            'environment' => 'local',
            'db_host' => 'localhost',
            'db_name' => 'svuom',
            'db_user' => 'root',
            'site_host' => 'localhost',
            'site_url' => 'http://localhost',
            'debug' => true,
        ),
    );

    if (!isset($profiles[$env])) {
        $env = 'production';
    }

    $config = $profiles[$env];

    $secretsFile = dirname(__FILE__) . '/secrets.php';
    if (is_readable($secretsFile)) {
        $secrets = require $secretsFile;
        if (is_array($secrets) && isset($secrets[$env]) && is_array($secrets[$env])) {
            $config = array_merge($config, $secrets[$env]);
        }
    }

    if (!isset($config['db_pass'])) {
        $config['db_pass'] = '';
    }

    return $config;
}

function svuom_is_staging()
{
    $cfg = svuom_config();
    return $cfg['environment'] === 'staging';
}

function svuom_robots_meta_content()
{
    if (svuom_is_staging()) {
        return 'noindex, nofollow, noarchive, nosnippet, noimageindex';
    }

    return 'index, follow';
}

function svuom_apply_staging_noindex()
{
    if (!svuom_is_staging()) {
        return;
    }

    if (headers_sent()) {
        return;
    }

    header('X-Robots-Tag: noindex, nofollow, noarchive, nosnippet, noimageindex', true);
}

?>
