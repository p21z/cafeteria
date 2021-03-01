<?php
    include "header.php";

    $id = $_GET['id'];
    $form_location = "changepass_proc.php?id=".$id;

    if (isset($_SESSION['changepass'])){
        if ($_SESSION['changepass']==1){
            echo "
                <div class='card mb-4 py-3 border-bottom-success'>
                    <div class='card-body'>
                    PASSWORD SUCCESSFULLY CHANGED
                    </div>
                </div>";
                unset($_SESSION['changepass']);
        }
    }

    if (isset($_SESSION['changepass'])){
        if ($_SESSION['changepass']==2){
            echo "
                <div class='card mb-4 py-3 border-bottom-success'>
                    <div class='card-body'>
                    WRONG OLD PASSWORD OR NEW PASSWORD DOESN'T MATCH
                    </div>
                </div>";
                unset($_SESSION['changepass']);
        }
    }

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
        EDIT USER
    </div>

    <form method="post" action="<?= $form_location ?>">

      <div class="" style="">

        <input type="password" name="oldpass" class="form-control form-control-user" autocomplete=off placeholder="Old Password" style="width:40%; margin-left:3%; margin-top:3%;">

        <input type="password" name="newpass1" class="form-control form-control-user" autocomplete=off placeholder="New Password" style="width:40%; margin-left:3%; margin-top:3%;" >

        <input type="password" name="newpass2" class="form-control form-control-user" autocomplete=off placeholder="Confirm New Password" style="width:40%; margin-left:3%; margin-top:3%;" >


      </div>

        <br>
        <br>

        <!-- BUTTONS -->
        <button type="submit" class="btn btn-success btn-icon-split" style="margin-left:%; margin-top:3%; margin-bottom: 5%">
          <span class="icon text-white-50">
            <i class="fas fa-user-plus"></i>
          </span>
          <span class="text">
            CHANGE PASSWORD
          </span>
        </button>
        
        &nbsp;&nbsp;
        <a href="user_edit.php?id=<?=$_SESSION['idxx']?>" class="btn btn-danger btn-icon-split" style=" margin-top:3%; margin-bottom: 5%">
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