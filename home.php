<?php
include "header.php";
?>

<?php
    if (isset($_SESSION['alert_msg'])){
        if ($_SESSION['alert_msg']==1){
            echo "
                <div class='card mb-4 py-3 border-bottom-success'>
                    <div class='card-body'>
                    RECORD SUCCESSFULLY ADDED
                    </div>
                </div>";
                unset($_SESSION['alert_msg']);
        }
    }

    if (isset($_SESSION['alert_msg'])){
        if ($_SESSION['alert_msg']==2){
            echo "
                <div class='card mb-4 py-3 border-bottom-success'>
                    <div class='card-body'>
                    RECORD SUCCESSFULLY EDITED
                    </div>
                </div>";
                unset($_SESSION['alert_msg']);
        }
    }

    if (isset($_SESSION['alert_msg'])){
        if ($_SESSION['alert_msg']==3){
            echo "
                <div class='card mb-4 py-3 border-bottom-success'>
                    <div class='card-body'>
                    RECORD SUCCESSFULLY DELETED
                    </div>
                </div>";
                unset($_SESSION['alert_msg']);
        }
    }
?>

<div class="card shadow w-100">
    <div class="card-header py-3 main-title">
        <h6 class="m-0 font-weight-bold text-primary ">MENU</h6>
    </div>
    <div style="color: black;" class="card-body text-dark">

<?php if($_SESSION['access']=="Admin"){?>
        
        <h2 style="margin-top: 2%;">Admin Modules</h2>
        <hr>
        <div class="row">
            <div class="col-sm-4">
                <div class="card bg-light">
                <div class="card-body">
                    <h4 class="card-title">Accounts</h4>
                    <p class="card-text">Handle details of accounts of users of this system.</p>
                    <a href="accountmanage.php" class="btn btn-primary">Go somewhere</a>
                </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card bg-light">
                <div class="card-body">
                    <h4 class="card-title">Menu Content</h4>
                    <p class="card-text">Modify available and unavailable food on the menu.</p>
                    <a href="menucontent.php" class="btn btn-primary">Go somewhere</a>
                </div>
                </div>
            </div>
        </div>
        <hr>

<?php   } ?>

<?php if($_SESSION['access']=="Admin" OR $_SESSION['access']=="Staff"){?>
        <h2 style="margin-top: 2%;">Staff Modules</h2>
        <hr>
        <div class="row">
            <div class="col-sm-4">
                <div class="card bg-light">
                <div class="card-body">
                    <h4 class="card-title">Table Reservations</h4>
                    <p class="card-text">View the table reservations of customers.</p>
                    <a href="tablereservations.php" class="btn btn-primary">Go somewhere</a>
                </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card bg-light">
                <div class="card-body">
                    <h4 class="card-title">Active Orders</h4>
                    <p class="card-text">View the active orders of customers.</p>
                    <a href="customerorder.php" class="btn btn-primary">Go somewhere</a>
                </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card bg-light">
                <div class="card-body">
                    <h4 class="card-title">Finished Orders</h4>
                    <p class="card-text">View the finished orders of customers.</p>
                    <a href="finishedorder.php" class="btn btn-primary">Go somewhere</a>
                </div>
                </div>
            </div>
        </div>
        <hr>
<?php   } ?>

        <h2 style="margin-top: 2%;">Customer Modules</h2>
        <hr>
        <div class="row">
            <div class="col-sm-4">
                <div class="card bg-light">
                <div class="card-body">
                    <h4 class="card-title">Reserve Table</h4>
                    <p class="card-text">Create a reservation for a table in the cafeteria.</p>
                    <a href="reservetable.php" class="btn btn-primary">Go somewhere</a>
                </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card bg-light">
                <div class="card-body">
                    <h4 class="card-title">Order Food</h4>
                    <p class="card-text">View menu and order in the cafeteria.</p>
                    <a href="orderfood.php" class="btn btn-primary">Go somewhere</a>
                </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card bg-light">
                <div class="card-body">
                    <h4 class="card-title">Receipts</h4>
                    <p class="card-text">Check previous transactions with receipts.</p>
                    <a href="receipt.php" class="btn btn-primary">Go somewhere</a>
                </div>
                </div>
            </div>
        </div>
        <br>
        <br>

    </div>
</div>

<?php
include "footer.php";
?>

<!-- This page is for Menu Content -->