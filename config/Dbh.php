<?php 


class Dbh {
    private $host = "localhost";
    private $dbname = "mydb";
    private $dbusernmae = "root";
    private $dbpassword = "";


    protected function connect(){
         try {
            $pdo = new PDO("mysql:host=".$this->host."; dbname=".$this->dbname,$this->dbusernmae,$this->dbpassword);
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

            return $pdo;
         } catch (PDOException $e) {
            //throw $th;
            die("Failed to connect :". $e->getMessage());
         }
    }
}