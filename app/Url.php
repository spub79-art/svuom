<?php

class SvuomUrl
{
    public static function path($lang, $path = '/')
    {
        $path = '/' . trim($path, '/');
        if ($path === '/') {
            return '/' . $lang . '/';
        }

        return '/' . $lang . $path;
    }

    public static function article($lang, $id, $slug = '')
    {
        $segment = (int) $id;
        if ($slug !== '') {
            $segment .= '-' . rawurlencode($slug);
        }

        return self::path($lang, '/aktuality/' . $segment);
    }
}

?>
