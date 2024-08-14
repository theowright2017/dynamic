<?php

$routes = require "routes.php";

$uri = $_SERVER['REQUEST_URI'];

$parsedURL = parse_url($uri)['path'];



function abort($code = 404)
{
    http_response_code($code);
    require "views/{$code}.php";
    die();
}

if (array_key_exists($parsedURL, $routes)) {
    require $routes[$parsedURL];
} else {
    abort();
}
;