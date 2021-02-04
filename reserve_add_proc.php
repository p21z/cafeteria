<?php
    session_start();

    include "perfect_function.php";

    date_default_timezone_set('Asia/Singapore');
    

    $table_name="reserve";

        $customer_id=$_SESSION['idxx'];
        $customer_name=$_SESSION['fullname'];
        $xtime=date('h:i:sa');
        $xdate=date('Y-m-d');

    $user_data=array(
    
        "customer_id" => $customer_id ,
        "customer_name" => $customer_name ,
        "xtime" => $xtime ,
        "xdate" => $xdate ,
        "status" => "Pending"

    );

    echo insert($user_data, $table_name);
    $_SESSION['alert_msg']=1;

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


    header("Location: reservetable.php");

?>