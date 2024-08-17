<?php

if ($_SERVER["REQUEST_METHOD"]==="POST"){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone_no = $_POST["phone_no"];
    $pass = $_POST["pass"];
    $c_pass = $_POST["c_pass"];

    require_once "../../Classes/Dbh.php";
    require_once "../../Classes/Signup.php";   

    $register = new Signup($name, $email, $phone_no, $pass, $c_pass);
    $register->insertUser();
}