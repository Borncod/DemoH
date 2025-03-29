<?php

if($_SERVER["REQUEST_METHOD"]==="POST"){


    $username = $_POST["username"];
    $password = $_POST["password"];
    $user_image = $_POST["user_image"];
    $dob = $_POST["dob"];
}

require_once "../DemoH/config/Dbh.php";
require_once "../DemoH/config/signup.php";

$signup = new Signup($username,$password,$user_image,$dob);