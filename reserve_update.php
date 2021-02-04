<?php
    include "header.php";

    $id = $_GET['id'];
    $form_location = "food_edit_proc.php?id=".$id;

    $table_name = "reserve";
    $column = "reserve_id";
    $get_userData = get_where_custom($table_name, $column, $id);

    $form_location = "reserve_update_proc.php?id=".$id;

//fetch result and pass it  to an array
        foreach ($get_userData as $key => $row) {
            
            $reserve_id=$row['reserve_id'];
            $customer_id=$row['customer_id'];
            $customer_name=$row['customer_name'];
            $xtime=$row['xtime'];
            $xdate=$row['xdate'];
            $status=$row['status'];

        }


?>
<div align=center>
    <div class="card mb-6 w-75">
        <div class="card text-dark bg-light border-secondary mb-3 w-50"  style="margin: 5% auto;">
            <div class="card-header bg-transparent border-secondary"><b>Reservation ID: <?=$reserve_id ?></b></div>
                <div class="card-body">
                    <h5 class="card-title"><?=$customer_name ?></h5>
                    <p class="card-text">
                    Date reserved: <?=$xdate ?><br>
                    Time reserved: <?=$xtime ?>
                    <hr>
                        <form method="post" action="<?=$form_location?>">
                            <select type="text" name="statusx" class="form-control form-control-user" autocomplete=off required style="width:40%; margin-left:2%; margin-right: 3%; margin-top:2%;">
                                <option value="">Pending</option>
                                <option value="Cleansing">Cleansing</option>
                                <option value="Approved">Approved</option>
                                <option value="Denied">Denied</option>
                                <option value="Cleared">Cleared</option>
                            </select>
                        
                    <hr>
                    </p>
                        <button type="submit" class="btn btn-success btn-icon-split" style="margin-left:%; margin-top:3%; margin-bottom: 5%">
                            <span class="icon text-white-50">
                                <i class="fas fa-user-plus"></i>
                            </span>
                            <span class="text">
                                UPDATE
                            </span>
                        </button>
                    </form>

                </div>
            </div>
            <br>
        <br>
        </div>
    </div>
</div>

 

<?php
include "footer.php";
?>