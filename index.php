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

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Document</title>
<!--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">-->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</head>
<body>

<a href="index.php?page=room-list">List Room</a>
<a href="index.php?page=AddRoom">Add new room</a>
<a href="index.php?page=service-list">Service</a>
<a href="index.php?page=sigin">Sig In</a>

<form method="post" action="index.php" class="d-flex">
    <input type="search" class="form-control me-2" name="search" placeholder="Search" aria-label="Search" size="200px">
    <button type="submit" class="btn btn-outline-success">Search</button>
</form>
<div class="container">
    <div class="navbar navbar-default">
        <a class="navbar-brand" href="index.php">Hotel management</a>
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
    default:
        $roomController->index();
        break;
}
ob_end_flush();
?>
</div>
</body>
<!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>-->
<!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>-->
</html>
