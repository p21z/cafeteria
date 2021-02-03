<?php
    include "header.php";

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
            
    
        }

?>

<div align=center>

  <div class="card mb-4 w-75">

    <div class="card-header">
        ADD NEW USER
    </div>

    <form method="post" action="<?= $form_location ?>">

      <div class="" style="">

        <input type="text" name="fullname" class="form-control form-control-user" autocomplete=off value="<?=   $fullname ?>" style="width:40%; margin-left:3%; margin-top:3%;">

        <input type="text" name="username" class="form-control form-control-user" autocomplete=off value="<?=   $username ?>" style="width:40%; margin-left:3%; margin-top:3%;" readonly>

        <select type="text" name="user_type" class="form-control form-control-user" autocomplete=off required style="width:40%; margin-left:6%; margin-right: 3%; margin-top:3%;">
          <option value="">User type:</option>
          <option value="Employee">Employee</option>
          <option value="Student">Student</option>
          <option value="Staff">Staff</option>
        </select>

        <input type="text" name="reference_id" class="form-control form-control-user" autocomplete=off value="<?=   $reference_id ?>"  style="width:40%; margin-left:3%; margin-top:3%;" readonly>

      </div>

        <br>
        <br>

        <!-- BUTTONS -->
        <button type="submit" class="btn btn-success btn-icon-split" style="margin-left:%; margin-top:3%; margin-bottom: 5%">
          <span class="icon text-white-50">
            <i class="fas fa-user-plus"></i>
          </span>
          <span class="text">
            EDIT USER
          </span>
        </button>
          
        &nbsp;&nbsp;
        <a href="accountmanage.php" class="btn btn-danger btn-icon-split" style=" margin-top:3%; margin-bottom: 5%">
          <span class="icon text-white-50">
            <i class="fas fa-ban"></i>
          </span>
          <span class="text">
            CANCEL
          </span>
        </a>

      
    <form>

  </div>

</div>


<?php
include "footer.php";
?>