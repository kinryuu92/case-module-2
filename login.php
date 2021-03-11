<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
<div class="body"></div>
<div class="grad"></div>
<div class="header">
    <div>Welcome<span>My Hotel</span></div>
</div>
<br>
<div class="login">
    <form action="" method="post">
        <input type="text" placeholder="username" name="user"><br>
        <input type="password" placeholder="password" name="password"><br>
        <input type="submit" value="Login">
    </form>
</div>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $user = $_POST["user"];
    $pass = $_POST["password"];
    if ($user == 'admin' && $pass == 'admin'){
        header("location: index.php");
    }else{
        echo "<h1><span style='color: red!important;'>Login Error</span></h1>";
    }
}
?>
</body>
</html>
<style>
    body{
        margin: 0;
        padding: 0;
        background: #fff;

        color: #fff;
        font-family: Arial;
        font-size: 12px;
    }

    .body{
        position: absolute;
        top: -20px;
        left: -20px;
        right: -40px;
        bottom: -40px;
        width: auto;
        height: auto;
        background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS0lHUPAhNDaw0h_zUTW1XLe99ToH5vymAsbg&usqp=CAU);
        background-size: cover;
        -webkit-filter: blur(4px);
        z-index: 0;
    }

    .grad{
        position: absolute;
        top: -20px;
        left: -20px;
        right: -40px;
        bottom: -40px;
        width: auto;
        height: auto;
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.65))); /* Chrome,Safari4+ */
        z-index: 1;
        opacity: 0.7;
    }

    .header{
        position: absolute;
        top: calc(50% - 35px);
        left: calc(50% - 330px);
        z-index: 2;
    }

    .header div{
        float: left;
        color: violet;
        font-family: 'Exo', sans-serif;
        font-size: 35px;
        font-weight: 200;
    }

    .header div span{
        color: #5379fa !important;
    }

    .login{
        position: absolute;
        top: calc(50% - 75px);
        left: calc(50% - 50px);
        height: 150px;
        width: 350px;
        padding: 10px;
        z-index: 2;
    }

    .login input[type=text]{
        width: 250px;
        height: 30px;
        background: transparent;
        border: 1px solid rgba(255,255,255,0.6);
        border-radius: 2px;
        color: #fff;
        font-family: 'Exo', sans-serif;
        font-size: 16px;
        font-weight: 400;
        padding: 4px;
    }

    .login input[type=password]{
        width: 250px;
        height: 30px;
        background: transparent;
        border: 1px solid rgba(255,255,255,0.6);
        border-radius: 2px;
        color: #fff;
        font-family: 'Exo', sans-serif;
        font-size: 16px;
        font-weight: 400;
        padding: 4px;
        margin-top: 10px;
    }

    .login input[type=submit]{
        width: 260px;
        height: 35px;
        background: #fff;
        border: 1px solid #fff;
        cursor: pointer;
        border-radius: 2px;
        color: #a18d6c;
        font-family: 'Exo', sans-serif;
        font-size: 16px;
        font-weight: 400;
        padding: 6px;
        margin-top: 10px;
    }

    .login input[type=submit]:hover{
        opacity: 0.4;
    }

    /*.login input[type=submit]:active{*/
    /*    opacity: 0.4;*/
    /*}*/

    .login input[type=text]:focus{
        outline: none;
        border: 1px solid rgba(255,255,255,0.9);
    }

    .login input[type=password]:focus{
        outline: none;
        border: 1px solid rgba(255,255,255,0.9);
    }

    .login input[type=button]:focus{
        outline: none;
    }

    ::-webkit-input-placeholder{
        color: rgba(255,255,255,0.6);
    }

</style>
