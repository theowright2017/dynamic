<?php

// require "functions.php";
use Core\Database;
use Core\App;

$db = App::resolve(Database::class);



$notes = $db->query("select * from notes", [])->findAllOrFail();
// dumpAndDie($notes);

view("notes/index.view.php", [
    'heading' => 'My Notes',
    'notes' => $notes
]);
