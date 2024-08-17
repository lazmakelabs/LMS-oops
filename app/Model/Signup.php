<?php

class Signup extends Dbh
{
    private $name;
    private $email;
    private $phone_no;
    private $pass;
    private $c_pass;

    public function __construct($name, $email, $phone_no, $pass, $c_pass)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone_no = $phone_no;
        $this->pass = $pass;
        $this->c_pass = $c_pass;
    }

    public function insertUser(){
        $query = 'INSERT INTO register (Full_name ,Phoneno , E_mail, Passwrd) VALUES (:Full_name, :Phoneno, :E_mail, :Passwrd);';
        $pdo = $this->connect();
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':Full_name', $this->name);
        $stmt->bindParam(':E_mail', $this->email);
        $stmt->bindParam(':Phoneno', $this->phone_no);
        $stmt->bindParam(':Passwrd', $this->pass);
        $stmt-> execute();
    }
}