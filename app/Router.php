<?php

class SvuomRouter
{
    private static $routes;

    public static function match(SvuomRequest $request)
    {
        $routes = self::routes();

        foreach ($routes as $route) {
            if (!isset($route['pattern'])) {
                continue;
            }
            if (preg_match($route['pattern'], $request->path, $matches)) {
                $route['matches'] = $matches;
                return $route;
            }
        }

        $legacy = self::legacyPathMap();
        if (isset($legacy[$request->path])) {
            return array(
                'name' => 'legacy',
                'legacy_zobraz' => $legacy[$request->path],
            );
        }

        return null;
    }

    public static function dispatch(array $route, SvuomRequest $request)
    {
        if ($route['name'] === 'legacy') {
            $_REQUEST['zobraz'] = $route['legacy_zobraz'];
            $_REQUEST['lang'] = $request->lang;
            require dirname(__DIR__) . '/legacy/index-legacy.php';
            return;
        }

        $lang = $request->lang;
        $pageTitle = isset($route['title'][$lang]) ? $route['title'][$lang] : 'SVÚOM s.r.o.';
        $layout = isset($route['layout']) ? $route['layout'] : 'default';
        $template = $route['template'];
        $data = array(
            'lang' => $lang,
            'pageTitle' => $pageTitle,
            'layout' => $layout,
            'contentTemplate' => $template,
        );

        if ($route['name'] === 'home') {
            $data['articles'] = SvuomInformaceRepository::recent($lang, 5);
            $data['layout'] = 'home';
        }

        if ($route['name'] === 'articles_list') {
            $data['articles'] = SvuomInformaceRepository::listAll($lang, 50);
        }

        if ($route['name'] === 'article_detail') {
            $id = isset($route['matches'][1]) ? (int) $route['matches'][1] : 0;
            $article = SvuomInformaceRepository::find($id, $lang);
            if (!$article) {
                http_response_code(404);
                self::renderNotFound($lang);
                return;
            }
            $data['article'] = $article;
            $data['pageTitle'] = $article['title'] . ($lang === 'en' ? ' — SVUOM' : ' — SVÚOM');
        }

        if ($route['name'] === 'search') {
            $data['query'] = isset($_GET['q']) ? trim((string) $_GET['q']) : '';
            $data['results'] = array();
        }

        SvuomView::render('layouts/' . $data['layout'], $data);
    }

    public static function renderNotFound($lang)
    {
        SvuomView::render('layouts/default', array(
            'lang' => $lang,
            'pageTitle' => $lang === 'en' ? 'Page not found' : 'Stránka nenalezena',
            'layout' => 'default',
            'contentTemplate' => 'pages/not-found',
        ));
    }

    private static function routes()
    {
        if (self::$routes !== null) {
            return self::$routes;
        }

        $file = dirname(__DIR__) . '/config/routes.php';
        self::$routes = is_readable($file) ? require $file : array();

        return self::$routes;
    }

    private static function legacyPathMap()
    {
        $file = dirname(__DIR__) . '/config/legacy_routes.php';
        return is_readable($file) ? require $file : array();
    }
}

?>
