<?php


namespace App\Controller;

use App\Model\RoomModel;

class RoomController
{
    protected $roomModel;
    public function __construct()
    {
        $this->roomModel = new RoomModel();
    }
    public function index()
    {
        $rooms = $this->roomModel->getAll();
        include "src/View/room-list.php";
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            include "src/View/AddRoom.php";
        } else if  ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $room_name = $_REQUEST['room'];
            $status = $_REQUEST['status'];
            $style = $_REQUEST['style'];
            $room_rates = $_REQUEST['rate'];
            $img = $_REQUEST['img'];
            $result = $this->roomModel->create_room(
                $room_name,
                $status,
                $style,
                $room_rates,
                $img
            );
            include "src/View/AddRoom.php";
        }
    }
    public function delete()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $room_id = $_GET['id'];
            $room = $this->roomModel->delete($room_id);
            include 'src/View/delete.php';
        }else {
            $room_id = $_POST['id'];
           $this->roomModel->delete($room_id);
           header('Location: index.php');
        }
    }
    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $id = $_REQUEST['id'];
            $room = $this->roomModel->getRoomById($id);
            include "src/View/edit.php";
        } else if  ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $room_id = $_POST['id'];
            $room_name = $_POST['room_name'];
            $status = $_POST['status'];
            $style = $_POST['style'];
            $room_rates = $_POST['room_rates'];
            $img = $_POST['img'];

            $this->roomModel->edit($room_id,$room_name, $status, $style, $room_rates, $img);
//            header("location:index.php?page=edit");
        }
    }



};