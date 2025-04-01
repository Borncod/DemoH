<?php


if($_SERVER["REQUEST_METHOD"] == "POST"){


    $username = $_POST["username"];
    $password = $_POST["password"];
}

require_once("../config/Dbh.php");
require_once("../config/login_conf.php");

$login = new Login($username,$password);
$login->loginUser();