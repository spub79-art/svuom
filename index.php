<?php

require_once __DIR__ . '/app/bootstrap.php';

svuom_bootstrap_web();

$request = SvuomRequest::fromGlobals();

if ($request->isLegacy()) {
    require __DIR__ . '/legacy/index-legacy.php';
    exit;
}

$route = SvuomRouter::match($request);

if ($route === null) {
    http_response_code(404);
    SvuomRouter::renderNotFound($request->lang);
    exit;
}

SvuomRouter::dispatch($route, $request);

?>
