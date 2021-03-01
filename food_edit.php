<?php
    include "header.php";

    $id = $_GET['id'];
    $form_location = "food_edit_proc.php?id=".$id;

    $table_name = "food";
    $column = "food_id";
    $get_userData = get_where_custom($table_name, $column, $id);

//fetch result and pass it  to an array
        foreach ($get_userData as $key => $row) {
            
            $food_id=$row['food_id'];
            $food_name=$row['food_name'];
            $image=$row['image'];
            $description=$row['description'];
            $price=$row['price'];
            $status=$row['status'];
            
    
        }

?>
<div align=center>

  <div class="card mb-4 w-75">

    <div class="card-header">
        EDIT FOOD
    </div>

    <form method="post" action="<?= $form_location?>" enctype="multipart/form-data">

      <div class="" style="">

        <input type="text" name="food_name" class="form-control form-control-user" autocomplete=off required value="<?=   $food_name ?>" placeholder="Food name" style="width:40%; margin-left:3%; margin-top:3%;">

        <input type="number" name="price" class="form-control form-control-user" min="1" autocomplete=off required value="<?=   $price ?>" placeholder="Price" style="width:40%; margin-left:3%; margin-top:3%;">

        <select type="text" name="status" class="form-control form-control-user" autocomplete=off required style="width:40%; margin-left:6%; margin-right: 3%; margin-top:3%;">
          <option value="">Status:</option>
          <option value="Available">Available</option>
          <option value="Unavailable">Unavailable</option>
        </select>

        <textarea type="text" name="description" class="form-control form-control-user" autocomplete=off required style="width:40%; margin-left:3%; margin-top:3%;"><?=   $description ?></textarea>

        <div class="input-group mb-3" style="width:40%; margin-left:3%; margin-top:3%;">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
            </div>
            <div class="custom-file">
                <input type="file" name="image" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" value=<?=   $image ?> >
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
            EDIT FOOD
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