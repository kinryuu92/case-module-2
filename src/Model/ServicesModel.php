<?php


namespace App\Model;


class ServicesModel
{
    protected $database;

    public function __construct()
    {
        $db = new DBConnection();
        $this->database = $db->connect();
    }

    public function getAll()
    {
       $sql = "SELECT * FROM tbl_services";
       $stmt = $this->database->query($sql);
       $stmt->execute();
       return $stmt->fetchAll();
    }

}