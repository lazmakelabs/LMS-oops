<?php

class Dbh{
    private $host = 'localhost';
    private $dbname='lms';
    private $dbusername = 'root';
    private $dbpassword = 'makelabs';

    protected function connect()
    {
        try{
            $pdo = new PDO("mysql:host=".$this->host."; dbname=".$this->dbname.";", $this->dbusername, $this->dbpassword);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch(PDOException $e){
            die("Connection Failed:".$e-> getMessage());
        }
    }
}