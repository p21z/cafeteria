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

<?php
    $table_name="reserve";
    $column="customer_id";
    $value=$_SESSION['idxx'];
    $column2="status";
    $value2="Cleared";
    $order_id="reserve_id";


    $user_data=get_latest_2($table_name, $column, $value, $column2, $value2, $order_id);

    foreach ($user_data as $key => $row) {
        $reserve_id=$row['reserve_id'];
        $customer_id=$row['customer_id'];
        $customer_name=$row['customer_name'];
        $status=$row['status'];
        $xtime=$row['xtime'];
        $xdate=$row['xdate'];
        $status=$row['status'];
    
    }

    $reserved=get_latest_count_2($table_name, $column, $value, $column2, $value2, $order_id);
    // echo $reserved, $reserve_id, $status;

?>

<div align=center>
    <div class="card mb-6 w-75">

        <div class="card-header">
            TABLE RESERVATION
        </div>
        <form method="post" action="reserve_add_proc.php">

            <button type="submit" class="btn btn-lg btn-dark btn-icon-split" 
                <?php if($reserved==1){?> hidden <?php } ?>
                style="margin-left:%; margin-top:3%; margin-bottom: 5%">
                <span class="icon text-white-50">
                <i class="fas fa-map"></i>
                </span>
                <span class="text">
                SET A RESERVATION
                </span>
            </button>
        </form>

    <?php if($reserved!=0){?>
        <div class="card text-dark bg-light border-secondary mb-3 w-50"  style="margin: 5% auto;">
        <div class="card-header bg-transparent border-secondary"><b>Reservation ID: <?=$reserve_id ?></b></div>
            <div class="card-body">
                <h5 class="card-title"><?=$customer_name ?></h5>
                <p class="card-text">
                Date reserved: <?=$xdate ?><br>
                Time reserved: <?=$xtime ?>
                <h5>Status: <b><?= $status ?></b></h5>
                </p>
                <a href="reserve_delete.php?id=<?=$reserve_id?>" class="btn btn-sm btn-outline-danger w-50">Cancel</a>
            </div>
           
        </div>
    <?php } ?>
    <br>
    <br>
    </div>
    
    

