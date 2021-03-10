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

    public function create_services($service_name, $service_prices,$img)
    {
        $sql = "INSERT INTO tbl_services (service_name,service_prices,img)
                VALUES (:service_name,:service_prices,:img)";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":service_name", $service_name);
        $stmt->bindParam(":service_prices",$service_prices);
        $stmt->bindParam(":img",$img);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function delete($id){
        $sql = "DELETE FROM tbl_services WHERE service_id = :id";
        $statement = $this->database->prepare($sql);
        $statement->bindParam(":id", $id);
        $statement->execute();
        return $statement->fetchAll();
    }

    public function getServiceById($id)
    {
        $sql = "SELECT * FROM tbl_services WHERE service_id = :id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function edit_service($service_id, $service_name, $service_prices, $img)
    {
        $sql = 'UPDATE tbl_services SET service_name=:service_name, service_prices=:service_prices, img=:img WHERE service_id=:service_id';
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':service_id', $service_id);
        $stmt->bindParam(':service_name', $service_name);
        $stmt->bindParam(':service_prices', $service_prices);
        $stmt->bindParam(':img', $img);
        $stmt->execute();
    }

}