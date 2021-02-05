<?php
include "header.php";
?>



<div align=center>

  <div class="card mb-4 w-75">

    <div class="card-header">
        ADD NEW USER
    </div>

    <form method="post" action="account_add_proc.php">

      <div class="" style="">

        <input type="text" name="fullname" class="form-control form-control-user" autocomplete=off placeholder="Full name" style="width:40%; margin-left:3%; margin-top:3%;">

        <input type="text" name="username" class="form-control form-control-user" autocomplete=off placeholder="Username" style="width:40%; margin-left:3%; margin-top:3%;">

        <input type="password" name="password" class="form-control form-control-user" autocomplete=off placeholder="Password" style="width:40%; margin-left:3%; margin-top:3%;">

        <select type="text" name="user_type" class="form-control form-control-user" autocomplete=off required style="width:40%; margin-left:6%; margin-right: 3%; margin-top:3%;">
          <option value="">User type:</option>
          <option value="Admin">Admin</option>
          <option value="Employee">Employee</option>
          <option value="Student">Student</option>
          <option value="Staff">Staff</option>
        </select>

        <input type="text" name="reference_id" class="form-control form-control-user" autocomplete=off placeholder="School ID" style="width:40%; margin-left:3%; margin-top:3%;">

      </div>

        <br>
        <br>

        <!-- BUTTONS -->
        <button type="submit" class="btn btn-success btn-icon-split" style="margin-left:%; margin-top:3%; margin-bottom: 5%">
          <span class="icon text-white-50">
            <i class="fas fa-user-plus"></i>
          </span>
          <span class="text">
            ADD USER
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