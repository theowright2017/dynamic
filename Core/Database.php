<?php

namespace Core;

use PDO;

class Database
{
    public $connection;
    public $statement;
    public function __construct($config, $username = 'root', $password = 'newpassword')
    {


        $configString = "mysql:" . http_build_query($config, '', ';');

        $dsn = $configString;

        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }
    public function query($query, $params = [])
    {


        $this->statement = $this->connection->prepare($query);

        $this->statement->execute($params);

        return $this;
    }
    // public function query($query, $params = []) {
    //     $statement = $this->connection->prepare($query);
    //     $statement->execute($params);
    //     return $statement->fetch();
    // }

    public function findAll() {
        return $this->statement->fetchAll();
    }
    public function find()
    {
        return $this->statement->fetch();
    }

    public function findOrFail()
    {
        $result = $this->find();
        if (! $result) {
            abort();
        }
        return $result;
    }
    public function findAllOrFail()
    {
        $result = $this->findAll();
        if (! $result) {
            abort();
        }
        return $result;
    }
}
;