<?php 


class Dbh {
    private $host = "0.0.0.0:3306";
    private $dbname = "mydb";
    private $dbusernmae = "root";
    private $dbpassword = "";


    protected function connect(){
         try {
            $pdo = new PDO("mysql:host".$this->host.", dbname".$this->dbname,$this->dbusernmae,$this->dbpassword);
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

            return $pdo;
         } catch (PDOException $e) {
            //throw $th;
            die("Failed to connect :". $e->getMessage());
         }
    }
}