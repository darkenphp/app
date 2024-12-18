<?php

namespace App;

use PDOStatement;

class Db
{
    public function __construct(private string $host, private string $username, private string $password, private string $database)
    {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
    }

    public function connect(): \PDO
    {
        return new \PDO("mysql:host={$this->host};dbname={$this->database}", $this->username, $this->password);
    }

    public function query(string $sql): PDOStatement
    {
        $pdo = $this->connect();
        return $pdo->query($sql);
    }

    public function debug(): string
    {
        return "Host: {$this->host}, Username: {$this->username}, Password: {$this->password}, Database: {$this->database}";
    }
}