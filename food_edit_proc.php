<?php

    session_start();
	include "perfect_function.php";

    $table_name = 'food';
    $column = "food_id";
    
    echo $_GET['id'];
	//get user ID from URL
    $id = $_GET['id'];
   
    $get_userData = get_where_custom($table_name, $column, $id);

    //fetch result and pass it  to an array
    foreach ($get_userData as $key => $row) {
        $imagex=$row['image'];
    }

    
        $food_name=$_POST['food_name'];
        $image=$_FILES['image']['name'];
        $description=$_POST['description'];
        $price=$_POST['price'];
        $status=$_POST['status'];

    if ($image==""){
        $user_editedValues = array(
            "food_name" => $food_name ,
            
            "description" => $description ,
            "price" => $price ,
            "status" => $status
            
        );

        update_from($user_editedValues, $id, $table_name, $column);
        $_SESSION['alert_msg']=2;
        
    } else{
        
        $target="assets/food/".basename($_FILES['image']['name']);

        $user_editedValues = array(
            "food_name" => $food_name ,
            "image" => $image ,
            "description" => $description ,
            "price" => $price ,
            "status" => $status
            
        );

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)){
            $msg="Uploaded image successefully";
        } else {
            $msg="There was a problem uploading the image";
        }

        update_from($user_editedValues, $id, $table_name, $column);
        $_SESSION['alert_msg']=2;
    }
    
    // if($username==$_SESSION['username']){
    //     $_SESSION['firstlast']=$firstname." ".$lastname;
    // }
    
    //     // ______________________________________________________________________________________________________________________
    // // GETTING ENTRY ID
    
    // date_default_timezone_set('Asia/Singapore');

    // $table_name="logs";
    // $username= $_SESSION['username'];
    // $fullname=$_SESSION['firstlast'];
    // $user_type=$_SESSION['access'];
    // $xdate=date('Y-m-d');
    // $xtime=date('h:i:sa');
    // $action="Edited in accounts(".$id.")";
    
    // $user_data=array(
    //     "username" => $username ,
    //     "fullname" => $fullname ,
    //     "user_type" => $user_type ,
    //     "xdate" => $xdate ,
    //     "xtime" => $xtime ,
    //     "action" => $action 

    // );

    // echo insert($user_data, $table_name);
    
// ______________________________________________________________________________________________________________________

    header("Location: menucontent.php");
?>