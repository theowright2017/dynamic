<?php

use Core\Response; 

function dumpAndDie($value) {
    echo '<pre>';
    // var_dump($value);
    echo '</pre>';
    die();
}

// get the url params that the page is on
// echo $_SERVER['REQUEST_URI']; 
function urlIs($url) {
    return $_SERVER['REQUEST_URI'] === $url;
};

function authorize($condition, $status = Response::FORBIDDEN) {
    if (! $condition) {
        // var_dump($status);
        abort($status);
    }

    return true;
};

function abort($code = 404)
{
    http_response_code($code);

    require base_path("views/{$code}.php");

    die();
}

function base_path($path) {
    return BASE_PATH . $path;
};

function view($path, $attributes = [])
{
    extract($attributes);
    
    // var_dump('he---', $heading);
    // var_dump('hello');
    require base_path('views/' . $path);
}