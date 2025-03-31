<?php



class Signup extends Dbh {
    private $username;
    private $dob;
    private $u_image;
    private $password;


    public function __construct($username,$password,$dob,$u_image){

        $this->username = $username;
        $this->password = $password;
        $this->dob = $dob;
        $this->u_image = $u_image;
    }

    private function insertUser(){
        $query = "INSERT INTO user (username, pswd, dateOfBirth, user_image) VALUES (:un,:p,:db,:ui);";
        $stmt = parent::connect()->prepare($query);
        $stmt.bindParam(":un", $this->username);
        $stmt.bindParam(":p", $this->password);
        $stmt.bindParam(":db", $this->dob);
        $stmt.bindParam(":ui", $this->u_image);

        $stmt->execute();
    }

    private function isEmptySubmit(){
        if(isset($this->username) && isset($this->password)){
            return false;
        }else{return true;}
    }

    public function signupUser(){
        if($this->isEmptySubmit()){
            header("Location :". $_SERVER["DOCUMENT_ROOT"]. "/index.php");
        }else{
            $this->insertUser();
        }
    }
}