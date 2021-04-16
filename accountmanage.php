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




<div class="card w-100">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">ACCOUNTS</h6>
            </div>
            <div class="card-body">

            <form method="post" action="account_search.php"
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

            <!-- <form method="post" action="account_search.php">
                <div class="input-group mb-3 w-25" style="float: left;">
                    <input type="text" class="form-control" placeholder="" name="search" autocomplete="off" required>
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
                    </div>
                </div>
            </form> -->

            <a href="account_add.php" class="btn btn-primary btn-icon-split add-item" style="margin-top:-1px">
                <span class="icon text-white-50">
                    <i class="fas fa-user-plus"></i>
                </span>
                <span class="text">
                    ADD USER
                </span>
            </a>

            <hr>

              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    
    <thead>
    <tr>
        <td>&nbsp;</td>
        <td>Username</td>
        <td>School ID</td>
        <td>Fullname</td>
        <td>User Type</td>
        <td>Status</td>
        <td>Attempts</td>
        <td>Option</td>

    </tr>
    </thead>

    <tfoot>
    <tr>
        <td>&nbsp;</td>
        <td>Username</td>
        <td>School ID</td>
        <td>Fullname</td>
        <td>User Type</td>
        <td>Status</td>
        <td>Attempts</td>
        <td>Option</td>

    </tr>
    </tfoot>

    <tbody>

    <?php
        $table_name="accounts";

        $user_data=get($table_name);

        foreach ($user_data as $key => $row) {
            $id=$row['id'];
            $user_type=$row['user_type'];
            $reference_id=$row['reference_id'];
            $fullname=$row['fullname'];
            $username=$row['username'];
            $statusxx=$row['statusxx'];
            $counterxx=$row['counterxx'];
            // if ($user_type==0){
            //     $user_type="GOVERNOR";
            // } elseif ($user_type==1){
            //     $user_type="FACULTY";
            // } elseif ($user_type==2){
            //     $user_type="DEAN";
            // } 

    ?>

    <tr>

        <td>&nbsp;</td>
        <td><?= $username ?></td>
        <td><?= $reference_id ?></td>
        <td><?= $fullname ?></td>
        <td><?= $user_type ?></td>
        <td><?php
            if($statusxx=="0"){
                echo "Active";
            } else{
                echo "Inactive";
            }?></td>
        <td><?= $counterxx ?></td>
        <td>
            <?php
            if($statusxx=="0"){
            ?>
                <a href="account_deact.php?id=<?= $id?>" class="btn btn-light btn-icon-split add-item" style="margin-top:-1px">
                <span class="icon text-white-50">
                    <i class="fas fa-user-plus"></i>
                </span>
                <span class="text">
                    DEACTIVATE
                </span>
            </a>
            <?php
            } else{
            ?>
                <a href="account_act.php?id=<?= $id?>" class="btn btn-dark btn-icon-split add-item" style="margin-top:-1px">
                <span class="icon text-white-50">
                    <i class="fas fa-user-plus"></i>
                </span>
                <span class="text">
                    &nbsp;ACTIVATE&nbsp;&nbsp;&nbsp;&nbsp;
                </span>
            </a>
            <?php
            }
            ?>
            
            <a href="account_edit.php?id=<?= $id?>" class="btn btn-warning btn-circle btn-md">
                <i class="far fa-edit"></i>
            </a>
            &nbsp;&nbsp;&nbsp;
            <a href="account_delete.php?id=<?= $id?>" class="btn btn-danger btn-circle btn-md">
                <i class="far fa-trash"></i>
            </a>
        </td>

    </tr>

    <?php   } ?>
    </tbody>
</table>

</div>
</div>
</div>


<?php
// print_r($user_data);
include "footer.php";
?>

<!-- This page is for Menu (Customer view) --