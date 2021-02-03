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
        <img src="assets/img/pexels-katerina-holmes-5905614.jpg" class="card-img-top crop-landing" alt="...">
        <div class="card-body">
            <h2 class="card-title">Cafeteria Reservation and Queueing System</h2>
            <h5 class="card-title">Registration</h5>
            
            <div>

            <form method="post" action="register_proc.php">

            <input type="text" name="username" class="form-control form-control-user" autocomplete=off required placeholder="Username" style="width:44%; margin-left:3%; margin-top:3%;  float: left;">
                <input type="text" name="fullname" class="form-control form-control-user" autocomplete=off required placeholder="Full name" style="width:44%; margin-left:3%; margin-top:3%; float: left;">
            </div>

            <div>
                <input type="password" name="password" class="form-control form-control-user" autocomplete=off required placeholder="Password" style="width:44%; margin-left:3%; margin-top:3%; float: left;">
                <select type="text" name="user_type" class="form-control form-control-user" autocomplete=off required style="width:44%; margin-left:3%; margin-right: 3%; margin-top:3%; float: left;">
                    <option value="">User type:</option>
                    <option value="Employee">Employee</option>
                    <option value="Student">Student</option>
                    <option value="Staff">Staff</option>
                </select>
            </div>

            <div>
            <input type="text" name="reference_id" class="form-control form-control-user" autocomplete=off required placeholder="School ID" style="width:91%; margin-left:3%; margin-top:3%; float:left">
            </div>

            <div style="margin-top: 200px;">
            <!-- <a href="register_proc.php" class="btn btn-success" style="margin-top: 30px;">Enter</a> -->
            <button type=submit class="btn btn-success" style="margin-top: 30px;">Enter</button>
            </form>
            <a href="index.php" class="btn btn-primary" style="margin-top: 30px;">Log in</a>
            </div>
        </div>
    </div>

</div>
