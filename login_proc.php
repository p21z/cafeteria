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
        $lastname=$row['lastname'];
    }

if ($password1==$password){
    
    // echo $password." == ".$password1."<br>";
    $_SESSION['idxx'] = $idxx;
    $_SESSION['access'] = $user_type;
    $_SESSION['username']=$username;
    $_SESSION['fullname']=$fullname;
    
    header("Location: home.php");
} else {
    $_SESSION['login']=1;
    header("Location: index.php");
}


?>