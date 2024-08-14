<?php

// require "functions.php";

$config = require base_path('config.php');
$db = new Database($config['database']);

$note = $db->query("select * from notes where id = :id", [
    'id' => $_GET['id']
])->findOrFail();

// dumpAndDie($note);


$currentUserId = 2;



// authorize($note['user_id'] !== $currentUserId);
var_dump('here');
view("notes/show.view.php", [
    'heading' => 'Note',
    'note' => $note
]);
