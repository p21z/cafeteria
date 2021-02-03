<?php
    session_start();
    include "perfect_function.php";

    
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cafeteria System</title>

    <!-- Custom fonts for this template-->
    <link href="template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="template/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="template/css/main.css" rel="stylesheet">

</head>
<div class="container-fluid" align=center style="height: 100%"> 

    <div class="card shadow-lg" style="width: 50rem; margin: 3% 0% 2% 0%;">
        <img src="assets/img/pexels-katerina-holmes-5905691.jpg" class="card-img-top crop-landing" alt="...">
        <div class="card-body">
            <h2 class="card-title" style="color: #000;">Cafeteria Reservation and Queueing System</h2>
            
            <form method=post action="login_proc.php">
                <input type="text" name="username" placeholder="Username" required autocomplete="off" class="form-control form-control-user" style="width:40%; margin-left:3%; margin-top:6%;">
                <input type="password" name="password" placeholder="Password" required autocomplete="off" class="form-control form-control-user" style="width:40%; margin-left:3%; margin-top:3%;">
                <input type="submit" name="Sign in" class="btn btn-success" style="margin-top: 30px;">
                <a href="register.php" class="btn btn-primary" style="margin-top: 30px;">Register</a>
            </form>
            
        </div>
    </div>

</div>
