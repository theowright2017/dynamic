<?php

// require "functions.php";

$config = require "config.php";
$db = new Database($config['database']);

$heading = "Note";

$note = $db->query("select * from notes where id = :id", [
    'id' => $_GET['id']
])->findOrFail();

// dumpAndDie($note);


$currentUserId = 2;



authorize($note['user_id'] !== $currentUserId);

require "views/note.view.php";
