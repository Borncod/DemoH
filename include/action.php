<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){


    $username = $_POST["username"];
    $password = $_POST["password"];
    $user_image = $_POST["user_image"];
    $dob = $_POST["dob"];
}

require_once("../config/Dbh.php");
require_once("../config/Signup.php");

$signup = new Signup($username,$password,$dob,$user_image);
$signup->signupUser();