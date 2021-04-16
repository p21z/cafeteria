<?php
session_start();

include "perfect_function.php";

$table_name="accounts";
$username=$_POST['username'];
$password=$_POST['password'];
// echo $username."<br>";

$user_data = get_where_custom($table_name, "username", $username);
	foreach ($user_data as $key => $row) {
        $idxx = $row['id'];
        $password1 = $row['password1'];
        $user_type = $row['user_type'];
        $fullname=$row['fullname'];
        $statusxx=$row['statusxx'];
        $counter=$row['counterxx'];
    }
    $no_acc = count($user_data);
    echo $no_acc;

if ($statusxx==1){
    $_SESSION['login']=2;
    header("Location: index.php");
}else{

    if ($password1==$password){
        
        // echo $password." == ".$password1."<br>";
        $_SESSION['idxx'] = $idxx;
        $_SESSION['access'] = $user_type;
        $_SESSION['username']=$username;
        $_SESSION['fullname']=$fullname;

        $user_editedValues = array(
            "counterxx" => 0
        );

        $username=$_POST['username'];
        $table_name="accounts";
        $condition="username";

        update_from($user_editedValues, $username, $table_name, $condition);
        
        header("Location: home.php");
    } else {

        if (isset($counter)){
            if ($counter>=2){
                $user_editedValues = array(
                    "statusxx" => 1
                );
                $username=$_POST['username'];
                $table_name="accounts";
                $column="username";

                update_from($user_editedValues, $username, $table_name, $column);

                $_SESSION['login']=2;

            } else{
                $counter++;

                $user_editedValues = array(
                    "counterxx" => $counter
                );

                $username=$_POST['username'];
                $table_name="accounts";
                $condition="username";

                update_from($user_editedValues, $username, $table_name, $condition);

                $_SESSION['login']=1;
            }
        }
        
        header("Location: index.php");
    }
}


?>