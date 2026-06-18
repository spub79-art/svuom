<?php

/**
 * Pretty URL routes — pattern matchuje path BEZ jazykoveho prefixu (/cz, /en).
 */
return array(
    array(
        'name' => 'home',
        'pattern' => '#^/$#',
        'template' => 'pages/home',
        'layout' => 'home',
        'title' => array('cz' => 'SVÚOM s.r.o.', 'en' => 'SVUOM Ltd.'),
    ),
    array(
        'name' => 'articles_list',
        'pattern' => '#^/aktuality/?$#',
        'template' => 'pages/articles-list',
        'title' => array('cz' => 'Aktuality — SVÚOM', 'en' => 'News — SVUOM'),
    ),
    array(
        'name' => 'article_detail',
        'pattern' => '#^/aktuality/(\d+)(?:-[^/]+)?/?$#',
        'template' => 'pages/article-detail',
        'title' => array('cz' => 'Aktualita — SVÚOM', 'en' => 'News — SVUOM'),
    ),
    array(
        'name' => 'search',
        'pattern' => '#^/hledat/?$#',
        'template' => 'pages/search',
        'title' => array('cz' => 'Hledání — SVÚOM', 'en' => 'Search — SVUOM'),
    ),
);

?>
