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

<div class="card shadow" style="float: left; width: 65%;">
    <div class="card-header py-3 main-title">
        <h6 class="m-0 font-weight-bold text-primary ">MENU</h6>
    </div>
    <div class="card-body ">
        <div class="table-responsive">

            <form method="post" action="food_av_search.php"
                class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search"
                style="width:35%; padding-top: 4px;">
                
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." name=search autocomplete=off required
                        aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-secondary" type="submit">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>

            <a href="orderfood.php" class="btn btn-info btn-icon-split add-item" style="margin-top:-1px">
                <span class="icon text-white-50">
                    <i class="fas fa-user-plus"></i>
                </span>
                <span class="text">
                &nbsp;&nbsp;SEE ALL&nbsp;&nbsp;
                </span>
            </a>

            <p>Results for <b><i>'<?=$search?>'</i></b></p>

            <hr>

            <?php
                $table_name="food";
                $column = "status";
                $condition="Available";
                $get_userData = order_dn_search($table_name, $search);
        
                foreach ($get_userData as $key => $row) {
                    $food_id=$row['food_id'];
                    $food_name=$row['food_name'];
                    $image=$row['image'];
                    $description=$row['description'];
                    $price=$row['price'];
                    $status=$row['status'];
                    
            ?>

            <div class="card food-item-available" style="width: 18rem;">
                <img class="card-img-top crop-img" src="assets/food/<?=$image?>" alt="Card image cap">
                    <div class="card-body" style="margin-top: 200px;">
                        <div style="max-height: 180px; overflow: auto; min-height: 180px;">
                            <h4 class="card-title"><?= $food_name?></h4>
                            <p class="card-text"><?=$description?>
                            </p>
                        </div>
                        <p class="card-text text-success" style="margin: 5% 0% 2% 0%;"><b><?=$price?>php</b></p>
                        <form method="post" action="cart_add_proc.php?id=<?=$food_id?>">
                            <input class="text-center" type=number min=1 style="width: 27%; height: 2rem;" name="quantity" required autocomplete=off>
                            <input class="btn btn-sm btn-success" type="submit" style="height: 2rem;"name="Add to Cart">
                        </form>
                        
                    </div>
            </div>

        <?php } ?>

        </div>
    </div>
</div>

<div class="card shadow" style="width: 35%;">
    <div class="card-header py-3 main-title">
        <h6 class="m-0 font-weight-bold text-primary ">CART</h6>
    </div>
    <div class="card-body ">
        <div class="table-responsive">
        
            <table class="table carttelem" style="width: 80%" >
                <thead>
                    <tr>
                    <th scope="col" style="width: 180px;">Foodname</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Cost</th>
                    <th scope="col">&nbsp;</th>
                    </tr>
                </thead>

                <?php
$total_list=array();

                $table_name="cart";
                $column = "id";
                $condition=$_SESSION['idxx'];
                $get_userData = get_where_custom($table_name, $column, $condition);
        
                foreach ($get_userData as $key => $row) {
                    $cart_id=$row['cart_id'];
                    $idxx=$row['id'];
                    $food_id=$row['food_id'];
                    $food_name=$row['food_name'];
                    $quantity=$row['quantity'];
                    $price=$row['price'];
                    $cost=$row['cost'];
                ?>


                <tbody>
                    <tr>
                    <th scope="row"><?= $food_name?></th>
                    <td><?= $price?></td>
                    <td><?= $quantity?></td>
                    <td><?= $cost?></td>
                    <td><a href="cart_delete.php?id=<?=$cart_id?>" class="btn btn-sm btn-outline-danger">Remove</a></td>
                    </tr>

                <?php   $total_list[]=$cost;
                    } ?>
                </tbody>
            </table>
            <hr>
            <div class="carttelem" style="color: #000; width: 80%">
                <h6 style="margin-left: -1%;"><b>Total</b></h6>
                <h2 class="text-right"><b><?= array_sum($total_list)?></b></h2>
            </div>

            <a href="order_add.php" class="btn btn-success btn-icon-split add-item" style="float: right; margin-right:10%;">
                <span class="icon text-white-50">
                    <i class="fas fa-user-plus"></i>
                </span>
                <span class="text">
                    BUY NOW
                </span>
            </a>

        </div>
    </div>
</div>

<?php
include "footer.php";
?>

<!-- This page is for Menu (Customer view) -->