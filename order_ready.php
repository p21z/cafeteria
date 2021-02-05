<?php
    session_start();
	include "perfect_function.php";

    $table_name = 'orders';
    $column = "order_id";
    
    echo $_GET['id'];
	//get user ID from URL
	$id = $_GET['id'];
    
        $statusx="Ready";
        echo $statusx;
        
        
	$user_editedValues = array(
        "status" => $statusx
        
	);

    update_from($user_editedValues, $id, $table_name, $column);
    $_SESSION['alert_msg']=2;
    
    // if($username==$_SESSION['username']){
    //     $_SESSION['firstlast']=$firstname." ".$lastname;
    // }
    
    //     // ______________________________________________________________________________________________________________________
    // // GETTING ENTRY ID
    
    date_default_timezone_set('Asia/Singapore');

    $table_name="logs";
    $username= $_SESSION['username'];
    $fullname=$_SESSION['fullname'];
    $user_type=$_SESSION['access'];
    $xdate=date('Y-m-d');
    $xtime=date('h:i:sa');
    $action="Edited in orders(".$id.")";
    
    $user_data=array(
        "username" => $username ,
        "fullname" => $fullname ,
        "user_type" => $user_type ,
        "xdate" => $xdate ,
        "xtime" => $xtime ,
        "action" => $action 

    );

    echo insert($user_data, $table_name);
    
// ______________________________________________________________________________________________________________________

	header("Location: customerorder.php");
?>