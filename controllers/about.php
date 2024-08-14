<?php

// require "functions.php";

$config = require base_path('config.php');
// dumpAndDie($config);
view("about.view.php", [
    'heading' => 'About Us',
]);
