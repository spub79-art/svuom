<?php

class SvuomRequest
{
    public $lang;
    public $path;

    public static function fromGlobals()
    {
        $req = new self();
        $uri = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '/';
        $path = parse_url($uri, PHP_URL_PATH);
        if ($path === false || $path === null) {
            $path = '/';
        }
        $path = '/' . trim($path, '/');

        $req->lang = 'cz';
        $req->path = '/';

        if (preg_match('#^/(cz|en)(/.*)?$#', $path, $m)) {
            $req->lang = $m[1];
            $req->path = isset($m[2]) && $m[2] !== '' ? rtrim($m[2], '/') : '/';
            if ($req->path === '') {
                $req->path = '/';
            }
            return $req;
        }

        return $req;
    }

    public function isPrettyUrl()
    {
        $uri = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '';
        return (bool) preg_match('#^/(cz|en)(/|$)#', parse_url($uri, PHP_URL_PATH));
    }

    public function isLegacy()
    {
        if ($this->isPrettyUrl()) {
            return false;
        }

        if (isset($_GET['zobraz']) || isset($_GET['lang']) || isset($_GET['menutop'])) {
            return true;
        }

        $path = parse_url(isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '', PHP_URL_PATH);
        if ($path === '/index.php' || $path === false || $path === '' || $path === '/') {
            return true;
        }

        return false;
    }
}

?>
