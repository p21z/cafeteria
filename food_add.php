<?php
include "header.php";
?>

<div align=center>

  <div class="card mb-4 w-75">

    <div class="card-header">
        ADD NEW USER
    </div>

    <form method="post" action="food_add_proc.php" enctype="multipart/form-data">

      <div class="" style="">

        <input type="text" name="food_name" class="form-control form-control-user" autocomplete=off required placeholder="Food name" style="width:40%; margin-left:3%; margin-top:3%;">

        <input type="number" name="price" class="form-control form-control-user" min="1" autocomplete=off required placeholder="Price" style="width:40%; margin-left:3%; margin-top:3%;">

        <select type="text" name="status" class="form-control form-control-user" autocomplete=off required style="width:40%; margin-left:6%; margin-right: 3%; margin-top:3%;">
          <option value="">Status:</option>
          <option value="Available">Available</option>
          <option value="Unavailable">Unavailable</option>
        </select>

        <textarea type="text" name="description" class="form-control form-control-user" autocomplete=off required placeholder="Something about this product..." style="width:40%; margin-left:3%; margin-top:3%;"></textarea>

        <div class="input-group mb-3" style="width:40%; margin-left:3%; margin-top:3%;">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
            </div>
            <div class="custom-file">
                <input type="file" name="image" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" required>
                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
            </div>
        </div>

      </div>

        <br>
        <br>

        <!-- BUTTONS -->
        <button type="submit" class="btn btn-success btn-icon-split" style="margin-left:%; margin-top:3%; margin-bottom: 5%">
          <span class="icon text-white-50">
            <i class="fas fa-user-plus"></i>
          </span>
          <span class="text">
            ADD FOOD
          </span>
        </button>
          
        &nbsp;&nbsp;
        <a href="menucontent.php" class="btn btn-danger btn-icon-split" style=" margin-top:3%; margin-bottom: 5%">
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