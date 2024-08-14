<?php

const BASE_PATH = __DIR__ . '/../';
require BASE_PATH.'core/functions.php';


spl_autoload_register(function ($class) {
     // core\Database
     $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
// var_dump('hel--', $class);
     require base_path("{$class}.php");
});

$router = new \core\Router();
$routes = require base_path('routes.php');

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

$router->route($uri, $method);