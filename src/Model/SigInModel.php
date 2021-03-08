<?php


namespace App\Model;


class SigInModel
{
    protected $database;
    public function __construct()
    {
        $db = new DBConnection();
        $this->database = $db->connect();
    }
    public function Sigin($username,$password,$email,$phone){
        $sql = "INSERT INTO member (username,password,email,phone)
                VALUES (:username,:password,:email,:phone)";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":username",$username);
        $stmt->bindParam(":password", $password);
        $stmt->bindParam(":email",$email);
        $stmt->bindParam(":phone",$phone);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}