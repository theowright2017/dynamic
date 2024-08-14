<?php

// require "functions.php";

$config = require base_path('config.php');

view("index.view.php", [
    'heading' => 'Home',
]);
