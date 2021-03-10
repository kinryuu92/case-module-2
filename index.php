<?php

ob_start();

use  App\Controller\RoomController;
use App\Controller\ServiceController;
use App\Controller\SigInController;
require __DIR__ . '/vendor/autoload.php';
$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : '';
$roomController = new RoomController();
$serviceController = new ServiceController();
$siginController = new SigInController();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Minh Tu &mdash; Hotel</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700|Work+Sans:300,400,700" rel="stylesheet">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="index.php?page=room-list" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        LIST ROOMS
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="index.php?page=room-list"> List room</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="./index.php?page=AddRoom">Add new room</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="index.php?page=service-list" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        SERVICES
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="index.php?page=service-list">Service</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="./index.php?page=add_service">Add new service</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=sigin"  >Sig In</a>
                </li>
            </ul>
            <form method="post" action="index.php" class="d-flex">
                <input type="search" class="form-control me-2" name="search" placeholder="Search" aria-label="Search">
                <button type="submit" class="btn btn-outline-success">Search</button>
            </form>
        </div>
    </div>
</nav>

<div class="container">
    <div class="navbar navbar-default">
        <a class="navbar-brand" href="index.php"></a>
    </div>
    <?php

    switch ($page)
    {
        case 'AddRoom':
            $roomController->create();
            break;
        case 'delete':
            $roomController->delete();
            break;
        case 'edit':
            $roomController->edit();
            break;
        case 'service-list':
            $serviceController->index();
            break;
        case 'sigin':
            $siginController->Create();
            break;
        case'add_service':
            $serviceController->Create_services();
            break;
        case 'delete_service':
            $id= $_REQUEST['id'];
            $serviceController->delete($id);
            break;
        case 'edit_service':
            $serviceController->EditService();
            break;
        default:
            $roomController->index();
            break;
    }
ob_end_flush();
?>

</body>
</html>
