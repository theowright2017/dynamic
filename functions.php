<?php
function dumpAndDie($value) {
    echo '<pre>';
    var_dump($value);
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
        abort($status);
    }
};