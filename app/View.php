<?php

class SvuomView
{
    public static function render($template, array $data = array())
    {
        extract($data, EXTR_SKIP);
        $templateFile = dirname(__DIR__) . '/templates/' . $template . '.php';
        if (!is_readable($templateFile)) {
            http_response_code(500);
            echo 'Chybi sablona: ' . htmlspecialchars($template, ENT_QUOTES, 'UTF-8');
            return;
        }

        include $templateFile;
    }

    public static function e($value)
    {
        return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
    }
}

?>
