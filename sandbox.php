<?php
include "header.php";
?>

<?php
    $table_name="reserve";
    $column="customer_id";
    $idxx=$_SESSION['idxx'];
    $order_id="reserve_id";

    $user_data=get_latest($table_name, $column, $idxx, $order_id);
    
    foreach ($user_data as $key => $row) {
        $reserve_id=$row['reserve_id'];
        $customer_id=$row['customer_id'];
        $customer_name=$row['customer_name'];
        $status=$row['status'];
        $xtime=$row['xtime'];
        $xdate=$row['xdate'];
    
    }

?>

    <div class="card border-success mb-3" style="max-width: 18rem;">
        <div class="card-header bg-transparent border-success text-success"><b>Reservation ID: <?=$reserve_id ?></b></div>
            <div class="card-body">
                <h5 class="card-title text-success"><?=$customer_name ?></h5>
                <p class="card-text text-success">
                Date reserved: <?=$xdate ?><br>
                Time reserved: <?=$xtime ?>
                </p>
            </div>
        </div>
    </div>

    <?php
    $table_name="reserve";
    $column="customer_id";
    $idxx=$_SESSION['idxx'];
    $order_id="reserve_id";

    $user_data=get_latest_count($table_name, $column, $idxx, $order_id);

    echo $user_data;
    // foreach ($user_data as $key => $row) {
    //     $reserve_id=$row['reserve_id'];
    //     $customer_id=$row['customer_id'];
    //     $customer_name=$row['customer_name'];
    //     $status=$row['status'];
    //     $xtime=$row['xtime'];
    //     $xdate=$row['xdate'];
    
    // }

    echo "<br>";
    $tablename="accounts";
    $trial=count_rows($tablename);
    echo $trial

?>