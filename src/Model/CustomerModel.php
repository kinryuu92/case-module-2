<?php


namespace App\Model;


class CustomerModel
{
    protected $database;

    public function __construct()
    {
        $db = new DBConnection();
        $this->database = $db->connect();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM tbl_customers";
        $stmt = $this->database->query($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function create_customer($customer_name, $address, $sex, $id_card, $phone, $nationality ,$img)
    {
        $sql = "INSERT INTO tbl_customers (customer_name,address,sex,id_card,phone,nationality,img)
                VALUES (:customer_name,:address,:sex,:id_card,:phone, :nationality, :img)";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":customer_name",$customer_name);
        $stmt->bindParam(":address", $address);
        $stmt->bindParam(":sex",$sex);
        $stmt->bindParam(":id_card",$id_card);
        $stmt->bindParam(":phone",$phone);
        $stmt->bindParam(":nationality",$nationality);
        $stmt->bindParam(":img",$img);
        $stmt->execute();
        return $stmt->fetchAll();
    }

}