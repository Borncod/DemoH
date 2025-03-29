<?php

if($_SERVER["REQUEST_METHOD"]==="POST"){


    $username = $_POST["username"];
    $password = $_POST["password"];
    $user_image = $_POST["u_image"];
    $dob = $_POST["dob"];
}

require_once "../config/Dbh.php";
require_once "../config/signup.php";

$signup = new Signup($username,$password,$user_image,$dob);