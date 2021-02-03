<?php
    session_start();

    include "perfect_function.php";

    $table_name="accounts";

        $user_type=$_POST['user_type'];
        $reference_id=$_POST['reference_id'];
        $fullname=$_POST['fullname'];
        $username=$_POST['username'];
        $password1=$_POST['password'];
        $password2=$_POST['password'];

        // $user_type=$_POST['user_type'];

    $user_data=array(
    
        "user_type" => $user_type ,
        "reference_id" => $reference_id ,
        "fullname" => $fullname ,
        "username" => $username ,
        "password1" => $password1 ,
        "password2" => $password2
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

    header("Location: accountmanage.php");

?>