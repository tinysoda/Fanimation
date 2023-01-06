<?php
include ("db.php");

if (!isset($_SESSION['tel'])) {
    $_SESSION['msg'] = "You are not an admin";
    header('location: ../index.html');
}
if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body>
  
<div class="container">
    <div class="content">
        <h3>Hi, <span><?php echo $_SESSION['username']; ?></span></h3>
        <h1>Welcome to admin page <span></span></h1>
        <p>Pick your task</p>
        <a href="product.php"class="btn">Product</a>
        <a href="user.php"class="btn">User</a>
        <a href="index.php?logout='1'" class="btn">Log out</a>
    </div>
</div>
            

    

</body>
</html>