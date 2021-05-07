<?php

class Dbc {

    private string $host = 'localhost';
    private string $db_name = 'reservation';
    private string $user = 'root';
    private string $pass = '';

    public function connect(): PDO
    {

        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->db_name;
        $pdo = new PDO($dsn, $this->user, $this->pass);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }

}