<?php
session_start();
include "perfect_function.php";

print_r($_SESSION);
$id = $_GET['id'];

// CHECK FOR ITEM ALREADY INSIDE CART
    $table_namexx="cart";    
    $col1 = "id";
    $idxx=$_SESSION['idxx'];
    $col2 = "food_id";

    $rowcount=count_where_double_and($table_namexx, $col1, $idxx, $col2, $id);
    echo "rowcount: ". $rowcount. "<br>";

// taking food_id
    $table_name = "food";
    $column = "food_id";
    $get_userData = get_where_custom($table_name, $column, $id);
    //fetch result and pass it  to an array
        foreach ($get_userData as $key => $row) {
            
            $food_idxx=$row['food_id'];
            $food_name=$row['food_name'];
            $price=$row['price'];
               
        }

    

// make a get function for cart here (id, food_id, price and cost lang) CHECK
// if (id==idxx && food_id==food_idxx) then CHECK
// pricexx = $row[price]+$_post[price];CHECK
// $cost=$quantity*$price; CHECK
// sql update CHECK
if (($rowcount==1)){

    $table_namexx="cart";    
    $col1 = "id";
    $idxx=$_SESSION['idxx'];
    $col2 = "food_id";

    $get_userData = get_where_double($table_namexx, $col1, $idxx, $col2, $id);
    //fetch result and pass it  to an array
        foreach ($get_userData as $key => $row) {
            
            $cart_id=$row['cart_id'];
            $quantity=$row['quantity'];
            $price=$row['price'];
               
        }

    $table_name="cart";
    $column="cart_id";
    $idcc=$cart_id;
    $quantity2=$quantity+$_POST['quantity'];
    $cost=$quantity2*$price;

    $user_editedValues = array(
            "quantity" => $quantity2 ,
            "cost" => $cost
        );

    update_from($user_editedValues, $idcc, $table_name, $column);
    $_SESSION['alert_msg']=2;

} else {

    $table_name="cart";
    $quantity=$_POST['quantity'];
    $cost=$quantity*$price;

$user_data=array(
    
    "id" => $idxx ,
    "food_id" => $food_idxx ,
    "food_name" => $food_name ,
    "quantity" => $quantity ,
    "price" => $price ,
    "cost" => $cost

);

echo insert($user_data, $table_name);
$_SESSION['alert_msg']=1;

echo "<br>". $table_name. "<br>". $idxx. "<br>".$food_idxx."<br>".$food_name."<br>".$price."<br>".$quantity."<br>".$cost;
}

header ("Location: orderfood.php");
?>
