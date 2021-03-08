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
        if ($_SERVER["REQUEST_METHOD"] == "GET"){
            $rooms = $this->roomModel->getAll();
            include "src/View/tbl_room/room-list.php";
        }else if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $search = $_REQUEST['search'];if ($search !=null){
            $rooms = $this->roomModel->searchRoom($search);
            include "src/View/tbl_room/room-list.php";
            }
        }
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            include "src/View/tbl_room/AddRoom.php";
        } else if  ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $room_name = $_REQUEST['room'];
            $status = $_REQUEST['status'];
            $style = $_REQUEST['style'];
            $room_rates = $_REQUEST['rate'];
            $img = $_FILES['img']['name'];
            $img_tmp = $_FILES['img']['tmp_name'];
            move_uploaded_file($img_tmp,'img/'.$img);
            $result = $this->roomModel->create_room(
                $room_name,
                $status,
                $style,
                $room_rates,
                $img
            );
            include "src/View/tbl_room/AddRoom.php";
        }
    }

    public function delete()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $room_id = $_GET['id'];
            $room = $this->roomModel->delete($room_id);
            include 'src/View/tbl_room/delete.php';
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
            include "src/View/tbl_room/edit.php";
        } else if  ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $room_id = $_POST['id'];
            $room_name = $_POST['room_name'];
            $status = $_POST['status'];
            $style = $_POST['style'];
            $room_rates = $_POST['room_rates'];
            $img = $_POST['img'];
            if ($img == NULL ) {
                $img = $_POST['old-img'];
            }
            $this->roomModel->edit($room_id,$room_name, $status, $style, $room_rates, $img);
            header('Location: index.php');
        }
    }

};