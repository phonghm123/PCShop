<?php
    session_start();
    if(!isset($_SESSION['dangnhap'])){
        header('Location:login.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_admincp.css">
    <title> TRANG QUẢN TRỊ</title>
</head>
<body>
    <h3 class="admincp_tile" style="background-color: pink;"> WELLCOME! </h3>
    <div class="wrapper">
    <?php
        include("config/connect.php");
        include("modules/header.php");
        include("modules/menu.php");
        include("modules/main.php");
        ?>
    </div>
</body>
</html>