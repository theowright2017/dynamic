<?php

$config = require "config.php";

require "functions.php";
require "Database.php";
require "Response.php";
require "router.php";


// connect to db and execute query




$db = new Database($config['database']);

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}


if ($id) {
    $params = [$id];
    $query = "select * from notes where id = ?";
} else {
    $params = [];
    $query = "select * from notes";
}


/**
 * bound parameters to prevent SQL injection
 *   - provide query and param separately
 */
$posts = $db->query($query, $params)->findAllOrFail();



// foreach ($posts as $post) {
//     echo "<li>{$post['title']}</li>";
// }

// dumpAndDie($posts);