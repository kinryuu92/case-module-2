<?php


namespace App\Controller;
use App\Model\SigInModel;

class SigInController
{
    protected $siginModel;
    public function __construct()
    {
        $this->siginModel = new SigInModel();
    }
    public function Create() {
        if ($_SERVER['REQUEST_METHOD'] == 'GET'){
            var_dump("hghghghh");
            include 'src/View/member_sigin/sigin.php';
        }
        else if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $result = $this->siginModel->Sigin(
                $username,
                $password,
                $email,
                $phone
            );
            include 'src/View/member_sigin/sigin.php';
        }
    }
}