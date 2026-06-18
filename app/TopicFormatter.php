<?php

class SvuomTopicFormatter
{
    public static function toHtml($topic)
    {
        $trans = array(
            '#' => "<a href='",
            '##' => "' target='_blank'>",
            '###' => '</a>',
            '-#' => '<sub>',
            '-##' => '</sub>',
        );

        $html = strtr(htmlspecialchars(stripslashes((string) $topic), ENT_QUOTES, 'UTF-8'), $trans);

        return nl2br($html);
    }
}

?>
