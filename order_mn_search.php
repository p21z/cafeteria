<?php
include "header.php";
$search=$_POST['search'];
?>

<form method="post" action="order_mn_search.php"
    class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search"
    style="width:35%; padding-top: 4px;">
    
    <div class="input-group">
        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." name="search" autocomplete="off" required
            aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
            <button class="btn btn-secondary" type="submit">
                <i class="fas fa-search fa-sm"></i>
            </button>
        </div>
    </div>
</form>

<a href="receipt.php" class="btn btn-info btn-icon-split add-item" style="margin-top:-1px">
                <span class="icon text-white-50">
                    <i class="fas fa-user-plus"></i>
                </span>
                <span class="text">
                &nbsp;&nbsp;SEE ALL&nbsp;&nbsp;
                </span>
            </a>

            <p>Results for <b><i>'<?=$search?>'</i></b></p>

<hr>


<div class="card">
    <div class="card-header">
        ORDER HISTORY
    </div>
    <div class="card-body">
    <?php
        // echo $_SESSION['idxx'];
                $table_name="orders";
                $column = "id";
                $valuex = $_SESSION['idxx'] ;
                
                
                $get_userData = order_mn_search($table_name, $search, $valuex);
        
                foreach ($get_userData as $key => $row) {
                    $order_id=$row['order_id'];
                    $total_list=$row['total_list'];
                    $statusxx=$row['status'];
                    $carts=$row['carts'];
                    $id=$row['id'];
                    $fullname=$row['fullname'];
                    
                    if ($statusxx=="Denied"){
                        $state="danger";
                    } elseif ($statusxx=="Claimed"){
                        $state="success";
                    } else {
                        $state="primary";
                    }
                    
                ?>

    <div class="card shadow" style="width: 32%; float: left; margin: 10px 5px; min-height: 420px;">
        <div class="card-header py-3 main-title">
            <h6 class="m-0 font-weight-bold text-primary ">ORDER #<?= $order_id?></h6>
        </div>
        <div class="card-body" style="max-height: 420px; overflow: auto; min-height: 420px;">
            <div class="table-responsive">
            
                <table class="table carttelem" style="width: 80%;" >
                <h4 style="margin: 5px 0px 20px 20px; color: #000;">For: <b><?=$fullname?></b></h4>
                    <thead>
                        <tr>
                        <th scope="col" style="width: 180px;">Foodname</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Cost</th>
                        <th scope="col">&nbsp;</th>
                        </tr>
                    </thead>
                    <?= $carts ?>
                </table>
                <hr>
                <div class="carttelem" style="color: #000; width: 80%">
                    <h6 style="margin-left: -5px;"><b>Total</b></h6>
                    <h2 class="text-right"><b><?= $total_list?></b></h2>
                </div>

                <button class="btn btn-<?=$state?> btn-icon-split add-item" disabled style="float: right; margin-right:5%;">
                    <span class="icon text-white-50">
                        <i class="fas fa-user-plus"></i>
                    </span>
                    <span class="text">
                        &nbsp;&nbsp;<?=$statusxx?>&nbsp;&nbsp;
                    </span>
                </button>

            </div>
        </div>
    </div>

<?php
            }
?>
    </div>
</div>



<?php
include "footer.php";
?>

<!-- This page is for Menu (Customer view) -->