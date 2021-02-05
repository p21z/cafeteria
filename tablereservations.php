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

<div align=center>
    <div class="card mb-6 w-75">

    <h2 style="margin-top: 2%; margin-left: 2%; text-align: left;">Active Reservations</h2>
    <hr>

<?php
    $table_name="reserve";
    $column = "status";
    $value="Cleared";
    $column2 = "status";
    $value2="Denied";
    $get_userData = get_where_not_2_custom($table_name, $column, $value, $column2, $value2);

    foreach ($get_userData as $key => $row) {
        $reserve_id=$row['reserve_id'];
        $customer_id=$row['customer_id'];
        $customer_name=$row['customer_name'];
        $status=$row['status'];
        $xtime=$row['xtime'];
        $xdate=$row['xdate'];
        $status=$row['status'];
        
?>

        <!-- <div class="card text-dark bg-light border-secondary mb-3 w-50"  style="margin: 5% auto 5%;">
            <div class="card-header bg-transparent border-secondary"><b>Reservation ID: <?=$reserve_id ?></b></div>
                <div class="card-body">
                    <h5 class="card-title"><?=$customer_name ?></h5>
                    <p class="card-text">
                    Date reserved: <?=$xdate ?><br>
                    Time reserved: <?=$xtime ?>
                    <h5>Status: <b><?= $status ?></b></h5>
                    </p>
                    <a href="reserve_update.php?id=<?=$reserve_id?>" class="btn btn-sm btn-outline-primary w-50">Update</a>
                </div>
            </div> -->
        <div>
            <div class="card border-dark mb-2" style="margin: 15px 0px 25px 20px; float:left;">
                <div class="card-header bg-transparent border-dark text-dark"><b>Reservation ID: <?=$reserve_id ?></b></div>
                    <div class="card-body">
                        <h5 class="card-title text-dark"><?=$customer_name ?></h5>
                        <p class="card-text text-dark">
                        Date reserved: <?=$xdate ?><br>
                        Time reserved: <?=$xtime ?>
                        </p>
                        <h5>Status: <b><?= $status ?></b></h5>
                        </p>
                        <a href="reserve_update.php?id=<?=$reserve_id?>" class="btn btn-sm btn-outline-info w-50">Update</a>
                    </div>
                </div>
            

<?php   } ?>
        </div>
    </div>
</div>
</div>

    <br>
    
    <?php

    $counting=count_where_double($table_name, $column, $value, $column2, $value2);
    
    if ($counting!=0){
    ?>

<div align=center>
    <div class="card mb-6 w-75">

    <h2 style="margin-top: 2%; margin-left: 2%; text-align: left;">Inactive Reservations</h2>
    <hr>

<?php
    $table_name="reserve";
    $column = "status";
    $value="Cleared";
    $column2 = "status";
    $value2="Denied";
    $get_userData = get_where_double($table_name, $column, $value, $column2, $value2);
        
    foreach ($get_userData as $key => $row) {
        $reserve_id=$row['reserve_id'];
        $customer_id=$row['customer_id'];
        $customer_name=$row['customer_name'];
        $status=$row['status'];
        $xtime=$row['xtime'];
        $xdate=$row['xdate'];
        $status=$row['status'];
        
        if ($status=="Cleared"){
            $state="success";
        } else {
            $state="danger";
        }
        
?>

        <!-- <div class="card text-dark bg-light border-secondary mb-3 w-50"  style="margin: 5% auto 5%;">
            <div class="card-header bg-transparent border-secondary"><b>Reservation ID: <?=$reserve_id ?></b></div>
                <div class="card-body">
                    <h5 class="card-title"><?=$customer_name ?></h5>
                    <p class="card-text">
                    Date reserved: <?=$xdate ?><br>
                    Time reserved: <?=$xtime ?>
                    <h5>Status: <b><?= $status ?></b></h5>
                    </p>
                    <a href="reserve_update.php?id=<?=$reserve_id?>" class="btn btn-sm btn-outline-primary w-50">Update</a>
                </div>
            </div> -->
        <div>
            <div class="card border-<?=$state?> mb-2 bg-light" style="margin: 15px 0px 25px 20px; float:left;">
                <div class="card-header bg-transparent border-<?=$state?> text-<?=$state?>"><b>Reservation ID: <?=$reserve_id ?></b></div>
                    <div class="card-body">
                        <h5 class="card-title text-<?=$state?>"><?=$customer_name ?></h5>
                        <p class="card-text text-<?=$state?>">
                        Date reserved: <?=$xdate ?><br>
                        Time reserved: <?=$xtime ?>
                        </p>
                        <h5 class="text-<?=$state?>">Status: <b><?= $status ?></b></h5>
                        </p>
                        <!-- <a href="reserve_update.php?id=<?=$reserve_id?>" class="btn btn-sm btn-outline-info w-50">Update</a> -->
                    </div>
                </div>
            

<?php   }
            } ?>
        </div>
    </div>
</div>