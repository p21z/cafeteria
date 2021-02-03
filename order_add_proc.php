<?php
    session_start();
    include "perfect_function.php";
    
    $idxx=$_SESSION['idxx'];
    $fullname=$_SESSION['fullname'];
?>

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
$cart_items=array();
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

                <?php
                $cart_items[]= "
                <tbody>
                    <tr>
                    <td>". $food_name."</td>
                    <td>". $price. "</td>
                    <td>". $quantity. "</td>
                    <td>". $cost. "</td>
                    </tr>
                    </tbody>";
                    
                   $total_list[]=$cost;
                   
                    } 
                    print_r($cart_items);
                    $total_list_sum=array_sum($total_list)
                    ?>
                
            </table>
            <hr>
            <div class="carttelem" style="color: #000; width: 80%">
                <h6 style="margin-left: -1%;"><b>Total</b></h6>
                <h2 class="text-right"><b><?= $total_list_sum?></b></h2>
            </div>

            <a href="class_add.php" class="btn btn-success btn-icon-split add-item" style="float: right; margin-right:10%;">
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

echo "<br>";
print_r($get_userData);
echo "<br>";

$cart_items_imploded = implode(" ", $cart_items);
$status="Pending";

// echo $cart_items_imploded; // lastname,email,phone

$table_name="orders";

$user_data=array(
    
    "total_list" => $total_list_sum ,
    "status" => $status ,
    "carts" => $cart_items_imploded ,
    "id" => $_SESSION['idxx'] ,
    "fullname" => $fullname
);

echo insert($user_data, $table_name);
$_SESSION['alert_msg']=1;
print_r($_SESSION['alert_msg']);

$table_name="cart";
$id = $_SESSION['idxx'];
$column = "id";
delete_from($id, $table_name, $column);

header ("Location: orderfood.php");
?>



<!-- This page is for Menu (Customer view) -->