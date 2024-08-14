<?php

const BASE_PATH = __DIR__ . '/../';
require BASE_PATH.'core/functions.php';


spl_autoload_register(function ($class) {
     // core\Database
     $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
// var_dump('hel--', $class);
     require base_path("{$class}.php");
});

require base_path('core/router.php');