<?php

// require "functions.php";

$config = require "config.php";
$db = new Database($config['database']);

$heading = "Notes";

$notes = $db->query("select * from notes", [])->findAllOrFail();
// dumpAndDie($notes);

require "views/notes.view.php";
