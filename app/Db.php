<?php

namespace App;

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

    public function query(string $sql): array
    {
        $pdo = $this->connect();
        $stmt = $pdo->query($sql);
        return $stmt->fetchAll();
    }

    public function debug(): string
    {
        return "Host: {$this->host}, Username: {$this->username}, Password: {$this->password}, Database: {$this->database}";
    }
}