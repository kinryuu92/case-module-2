<?php


namespace App\Model;


class RoomModel
{
    protected $database;

    public function __construct()
    {
        $db = new DBConnection();
        $this->database = $db->connect();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM tbl_rooms";
        $stmt = $this->database->query($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function create_room($room_name, $status, $style, $room_rates, $img)
    {
        $sql = "INSERT INTO tbl_rooms (room_name,status,style,room_rates,img)
                VALUES (:room_name,:status,:style,:room_rates,:img)";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":room_name",$room_name);
        $stmt->bindParam(":status", $status);
        $stmt->bindParam(":style",$style);
        $stmt->bindParam(":room_rates",$room_rates);
        $stmt->bindParam(":img",$img);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function delete($id){

        $sql = "DELETE FROM tbl_rooms WHERE room_id = :id";
        $statement = $this->database->prepare($sql);

        $statement->bindParam(":id", $id);
        $statement->execute();
        return $statement->fetchAll();
    }

    public function edit($room_id, $room_name, $status, $style, $room_rates, $img)
    {
        $sql = 'UPDATE tbl_rooms SET room_name=:room_name,status=:status,style=:style,room_rates=:room_rates,img=:img WHERE room_id=:room_id';
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':room_name', $room_name);
        $stmt->bindParam(':room_id', $room_id);
        $stmt->bindParam(':status', $status);
        $stmt->bindParam(':style', $style);
        $stmt->bindParam(':room_rates', $room_rates);
        $stmt->bindParam(':img', $img);
        $stmt->execute();


    }

    public function getRoomById($id)
    {
        $sql = "SELECT * FROM tbl_rooms where room_id = :id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function searchRoom($search)
    {
        $sql = "SELECT * FROM tbl_rooms WHERE room_name LIKE '$search%'" ;
        $stmt = $this->database->query($sql);
        return $stmt->fetchAll();
    }
}