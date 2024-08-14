<?php

require "Validator.php";

$heading = "Create Note";

$config = require "config.php";
$db = new Database($config['database']);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];
    
    if (! Validator::string($_POST['body'])){
        
        $errors['body'] = "A body of no more than 1,000 characters is required";
        
    }

    if (empty($errors)) {

    

    $db->query('INSERT INTO notes(body, user_id) VALUES(:body, :user_id)', [
        'body' => $_POST['body'],
        'user_id' => 1
    ]);
}
}


require "views/note-create.view.php";