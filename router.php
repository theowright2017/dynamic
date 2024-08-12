<?php

$uri = $_SERVER['REQUEST_URI'];

$parsedURL = parse_url($uri)['path'];

$routes = [
    "/" => "controllers/index.php",
    "/about" => "controllers/about.php",
    "/contact" => "controllers/contact.php",
];

function abort($code = 404) {
    http_response_code($code);
    require "views/{$code}.php";
    die();
}

if (array_key_exists($parsedURL, $routes)) {
    require "controllers/index.php";
} else {
   abort();
};