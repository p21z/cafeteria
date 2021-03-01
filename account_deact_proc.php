<?php
session_start();

include "perfect_function.php";

$table_name="accounts";
$id=$_GET['id'];
// echo $username."<br>";

$user_data = get_where_custom($table_name, "id", $id);
	foreach ($user_data as $key => $row) {
        $idxx = $row['id'];
        $statusxx=$row['statusxx'];
        $counter=$row['counterxx'];
    }

$user_editedValues = array(
    "statusxx" => 1

);
$id=$_GET['id'];
$table_name="accounts";
$column="id";

update_from($user_editedValues, $id, $table_name, $column);

header("Location: accountmanage.php");
?>
