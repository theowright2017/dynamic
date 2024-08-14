<?php

// require "functions.php";
use core\Database;

$config = require base_path('config.php');
// dumpAndDie($config);
$db = new Database($config['database']);



$notes = $db->query("select * from notes", [])->findAllOrFail();
// dumpAndDie($notes);

view("notes/index.view.php", [
    'heading' => 'My Notes',
    'notes' => $notes
]);
