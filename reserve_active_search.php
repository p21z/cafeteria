<?php
include "header.php";
$search=$_POST['search'];
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

<div>
    <div class="card mb-6 w-100" style="min-height: 700px">

    <h4 class="text text-primary" style="margin-top: 2%; margin-left: 2%; text-align: left;">Active Reservations</h4>
    <hr>

        
        <form method="post" action="reserve_active_search.php"
                class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search w-25" style="float: left;">
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" name="search"
                        aria-label="Search" aria-describedby="basic-addon2" autocomplete="off" required>
                    <div class="input-group-append">
                        <button class="btn btn-secondary" type="submit">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>

        <div>
        <a href="tablereservations.php" class="btn btn-info btn-icon-split add-item" style="margin-top: 10px;">
            <span class="icon text-white-50">
                <i class="fas fa-user-plus"></i>
            </span>
            <span class="text">
                &nbsp;&nbsp;SEE ALL&nbsp;&nbsp;
            </span>
        </a>
        </div>
        
        <p style="margin-top: 1%; margin-left: 1%; text-align: left;">Results for <b><i>'<?=$search?>'</i></b></p>
    <hr>
    <div>
<?php
    $table_name="reserve";
    $column = "status";
    $value="Cleared";
    $column2 = "status";
    $value2="Denied";
    
    $get_userData = reserve_active_search($table_name, $search);

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
            
        
            <div class="card border-dark mb-2" style="margin: 15px 0px 15px 20px; float:left;">
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
            
        
            

<?php   }//get_where_not_2_custom closing ?>

</div>
</div>




    <br>
    
    
        


<?php
    echo "<br><br>";
    include "footer.php";
?>