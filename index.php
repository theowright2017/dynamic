<?php

require "functions.php";
// require "router.php";
require "Database.php";

// connect to db and execute query
$config = require "config.php";



$db = new Database($config['database']);

$id = $_GET['id'];
$query = "select * from posts where id = :id";


/**
 * bound parameters to prevent SQL injection
 *   - provide query and param separately
 */
$posts = $db->queryAll($query, [':id' => $id]);



foreach ($posts as $post) {
    echo "<li>{$post['title']}</li>";
}

// dumpAndDie($posts);