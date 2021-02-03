<?php
    session_start();

    include "perfect_function.php";

    $msg="";

    $target="assets/food/".basename($_FILES['image']['name']);

    $table_name="food";

        $food_name=$_POST['food_name'];
        $image=$_FILES['image']['name'];
        $description=$_POST['description'];
        $price=$_POST['price'];
        $status=$_POST['status'];

        // $user_type=$_POST['user_type'];

    $user_data=array(
    
        "food_name" => $food_name ,
        "image" => $image ,
        "description" => $description ,
        "price" => $price ,
        "status" => $status

    );

    echo insert($user_data, $table_name);
    $_SESSION['alert_msg']=1;
    

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)){
        $msg="Uploaded image successefully";
    } else {
        $msg="There was a problem uploading the image";
    }

        // ______________________________________________________________________________________________________________________
    // GETTING ENTRY ID
    // $table_name = "accounts";
    // $column = "acc_id";

    // $user_data=get_last($table_name, $column);
    
    //     foreach ($user_data as $key => $row) {
    //         $acc_id=$row['acc_id'];

            
    //     }
    
    
    // date_default_timezone_set('Asia/Singapore');

    // $table_name="logs";
    // $username= $_SESSION['username'];
    // $fullname=$_SESSION['firstlast'];
    // $user_type=$_SESSION['access'];
    // $xdate=date('Y-m-d');
    // $xtime=date('h:i:sa');
    // $action="Added in accounts(".$acc_id.")";
    
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