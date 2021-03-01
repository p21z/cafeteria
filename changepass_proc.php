<?php
    session_start();
	include "perfect_function.php";

    $id = $_GET['id'];
    $form_location = "account_edit_proc.php?id=".$id;

    $table_name = "accounts";
    $column = "id";
    $get_userData = get_where_custom($table_name, $column, $id);

    //fetch result and pass it  to an array
            foreach ($get_userData as $key => $row) {
                
                $user_type=$row['user_type'];
                $reference_id=$row['reference_id'];
                $username=$row['username'];
                $fullname=$row['fullname'];
                $password1=$row['password1'];
                $password2=$row['password2'];
                
        
            }

            if (($_POST['oldpass']==$password1) AND ($_POST['oldpass']==$password2) AND ($_POST['newpass1']==$_POST['newpass2'])){

                $table_name = 'accounts';
                $column = "id";
                
                echo $_GET['id'];
                //get user ID from URL
                $id = $_GET['id'];
                
                    
                    $password1=$_POST['newpass1'];
                    
                $user_editedValues = array(
                    "password1" => $password1 ,
                    "password2" => $password1
                    
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
                $action="Changed password in accounts(".$id.")";
                
                $user_data=array(
                    "username" => $username ,
                    "fullname" => $fullname ,
                    "user_type" => $user_type ,
                    "xdate" => $xdate ,
                    "xtime" => $xtime ,
                    "action" => $action 

                );

                echo insert($user_data, $table_name);
                $_SESSION['changepass']=1;
                // ______________________________________________________________________________________________________________________
            } else {
                $_SESSION['changepass']=2;
            }

	header("Location: changepass.php?id=".$_SESSION['idxx']);
?>