<?php
session_start();
class Login extends Dbh {
    private $username;
    private $password;

    public function __construct($username,$password){
        $this->username = $username;
        $this->password = $password;
    }

    public function loginUser(){
        $query = "SELECT * FROM user WHERE username = '$this->username' AND pswd = '$this->password';";
        $stmt = parent::connect()->prepare($query);
        $stmt->execute();
        $res = $stmt->fetch(PDO::FETCH_ASSOC);
        if($res > 0){
            $_SESSION["username"] = $this->username;
            header("Location : '../homepage.php' ");
        }
        else{
            echo "failed!";
            header("Location : '../homepage.php' ");
        }
        
    }

}