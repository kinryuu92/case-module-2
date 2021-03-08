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
}