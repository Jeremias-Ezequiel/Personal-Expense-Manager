<?php

class Dbh
{
    private $pdo;
    private $DBHost = '127.0.0.1';
    private $DBPort = 3307;
    private $DBUser = 'root';
    private $DBPass = 'Abcdef2020';
    private $DBName = 'expensemanager';

    public function __construct()
    {
        try {
            $dsn = 'mysql:host=' . $this->DBHost . ';port=' . $this->DBPort . ';dbname=' . $this->DBName . ';charset=utf8;';
            $this->pdo = new PDO($dsn, $this->DBUser, $this->DBPass);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Conexion Succesfully";
        } catch (PDOException $e) {
            echo $dsn;
            die('There is an error: ' . $e->getMessage());
        }
    }
}
