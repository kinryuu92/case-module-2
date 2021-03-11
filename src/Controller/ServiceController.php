<?php


namespace App\Controller;
use App\Model\ServicesModel;

class ServiceController
{
    protected $serviceModel;
    public function __construct()
    {
        $this->serviceModel = new ServicesModel();
    }
    public function index(){
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $services = $this->serviceModel->getAll();
            include "src/View/tbl_service/service-list.php";
        }
    }

    public function Create_services()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            include "src/View/tbl_service/add_service.php";
        } else if  ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $service_name = $_REQUEST['service_name'];
            $service_price = $_REQUEST['service_price'];
            $img = $_FILES['img']['name'];
            $img_tmp = $_FILES['img']['tmp_name'];
            move_uploaded_file($img_tmp,'img/'.$img);
            $result = $this->serviceModel->create_services(
                $service_name,
                $service_price,
                $img
            );
            include "src/View/tbl_service/add_service.php";
        }
    }

    public function delete($id)
    {
        $id = $_REQUEST['id'];
        $this->serviceModel->delete($id);
        $this->index();
    }

    public function EditService()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET'){
            $id = $_REQUEST['id'];
            $service = $this->serviceModel->getServiceById($id);
            include "src/View/tbl_service/edit_service.php";
        }else if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $service_id = $_POST['id'];
            $service_name = $_POST['service_name'];
            $service_prices = $_POST['service_prices'];
            $img = $_FILES['img']['name'];
            $img_tmp = $_FILES['img']['tmp_name'];
            $message = 'service created';
            move_uploaded_file($img_tmp,'img/'.$img);
            if ($img == NULL ) {
                $img = $_POST['old-img'];
            }
            $this->serviceModel->edit_service($service_id,$service_name,$service_prices,$img);
            header('Location: index.php');
        }
    }
}