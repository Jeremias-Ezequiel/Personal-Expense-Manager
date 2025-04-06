<?php

class Dbh
{
    private $DBHost = '127.0.0.1';
    private $DBPort = 3307;
    private $DBUser = 'root';
    private $DBPass = 'Abcdef2020';
    private $DBName = 'expensemanager';

    protected function connection()
    {
        try {
            $dsn = 'mysql:host=' . $this->DBHost . ';port=' . $this->DBPort . ';dbname=' . $this->DBName . ';charset=utf8;';
            $pdo = new PDO($dsn, $this->DBUser, $this->DBPass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            die('There is an error: ' . $e->getMessage());
        }
    }
}
