<?php


namespace App\Controller;
use App\Model\CustomerModel;


class CustomerController
{
    protected $customerModel;
    public function __construct()
    {
        $this->customerModel = new CustomerModel();
    }
    public function index()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET"){
            $customers = $this->customerModel->getAll();
            include "src/View/tbl_customer/customer-list.php";
        }
    }

    public function create_customer()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            include "src/View/tbl_customer/add_customer.php";
        } else if  ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $service_name = $_REQUEST['name'];
            $address = $_REQUEST['address'];
            $sex = $_REQUEST['sex'];
            $id_card = $_REQUEST['id_card'];
            $phone = $_REQUEST['phone'];
            $nationality = $_REQUEST['nationality'];
            $img = $_FILES['img']['name'];
            $img_tmp = $_FILES['img']['tmp_name'];
            move_uploaded_file($img_tmp,'img/'.$img);
            $message = 'Customer created';
            $result = $this->customerModel->create_customer(
                $service_name,
                $address,
                $sex,
                $id_card,
                $phone,
                $nationality,
                $img
            );
            include "src/View/tbl_customer/add_customer.php";
        }
    }
}