<?php
include "header.php";
?>

<?php
    if (isset($_SESSION['alert_msg'])){
        if ($_SESSION['alert_msg']==1){
            echo "
                <div class='card mb-4 py-3 border-bottom-success'>
                    <div class='card-body'>
                    RECORD SUCCESSFULLY ADDED
                    </div>
                </div>";
                unset($_SESSION['alert_msg']);
        }
    }

    if (isset($_SESSION['alert_msg'])){
        if ($_SESSION['alert_msg']==2){
            echo "
                <div class='card mb-4 py-3 border-bottom-success'>
                    <div class='card-body'>
                    RECORD SUCCESSFULLY EDITED
                    </div>
                </div>";
                unset($_SESSION['alert_msg']);
        }
    }

    if (isset($_SESSION['alert_msg'])){
        if ($_SESSION['alert_msg']==3){
            echo "
                <div class='card mb-4 py-3 border-bottom-success'>
                    <div class='card-body'>
                    RECORD SUCCESSFULLY DELETED
                    </div>
                </div>";
                unset($_SESSION['alert_msg']);
        }
    }
?>

 <!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Menu Content</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>


<div class="card shadow w-100">
    <div class="card-header py-3 main-title">
        <h6 class="m-0 font-weight-bold text-primary ">MENU</h6>
    </div>
    <div class="card-body ">
        <div class="table-responsive">

        <form method="post" action="menu_search.php"
                class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search w-25" style="float: left; margin-top: 1px;">
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" name="search"
                        aria-label="Search" aria-describedby="basic-addon2" autocomplete="off" required>
                    <div class="input-group-append">
                        <button class="btn btn-secondary" type="submit">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>

            <div class="btn-group" role="group" aria-label="Basic example" style="margin: 5px 2px 5px 14px;">
                <button type="button" class="btn btn-dark" disabled>Filter</button>
                <button type="button" class="btn btn-outline-secondary">
                    <a href="menucontent_available.php">
                        <span class="text">
                            Available
                        </span>
                    </a>
                </button>
                <button type="button" class="btn btn-outline-secondary bg-primary">
                    <a href="menucontent_unavailable.php">
                        <span class="text text-white">
                            Unavailable
                        </span>
                    </a>
                </button>
                <button type="button" class="btn btn-outline-secondary">
                    <a href="menucontent.php">
                        <span class="text">
                            None
                        </span>
                    </a>
                </button>
            </div>
            
            <a href="food_add.php" class="btn btn-primary btn-icon-split add-item btn-sm">
                <span class="icon text-white-50">
                    <i class="fas fa-user-plus"></i>
                </span>
                <span class="text">
                    ADD ITEM
                </span>
            </a>

           <hr>

           <?php
                $table_name="food";
                $column = "status";
                $condition="Unavailable";
                $get_userData = get_where_custom($table_name, $column, $condition);
        
                foreach ($get_userData as $key => $row) {
                    $food_id=$row['food_id'];
                    $food_name=$row['food_name'];
                    $image=$row['image'];
                    $description=$row['description'];
                    $price=$row['price'];
                    $status=$row['status'];
                    
            ?>

            <div class="card food-item-<?php   if ($status=="Available"){?>available<?php } else{?>unavailable bg-light mb-3<?php   }?>" 
            style="width: 18rem;">
                
                <img class="card-img-top crop-img" src="assets/food/<?=$image?>" alt="Card image cap">
                
                    <div class="card-body" style="margin-top: 200px;">
                        <div style="max-height: 180px; overflow: auto; min-height: 180px;">
                            <h4 class="card-title"><?=$food_name?></h4>
                            <p class="card-text">
                                <?=$description?>
                            </p>
                        </div>
                        <p class="card-text text-success" style="margin-top: 15px;"><b><?=$price?>php</b></p>
                        <p class="card-text text-<?php   if ($status=="Available"){?>primary<?php   } else{?>danger<?php   }?>" "><b><?=$status?></b></p>
                        <a href="food_edit.php?id=<?= $food_id?>" class="btn btn-warning">Edit</a>
                        <a href="food_delete.php?id=<?= $food_id?>" class="btn btn-danger">Delete</a>

                    </div>
            </div>

            <?php   } ?>

            <!-- <div class="card food-item-unavailable
                            bg-light mb-3
                        " style="width: 18rem;">
                <img class="card-img-top" src="assets/food/salad.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Salad</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <p class="card-text text-success"><b>100php</b></p>
                        <p class="card-text text-danger"><b>Unavailable</b></p>
                        
                        <a href="#" class="btn btn-warning">Edit</a>
                        <a href="#" class="btn btn-danger">Delete</a>

                    </div>
            </div> -->

        </div>
    </div>
</div>

<?php
include "footer.php";
?>

<!-- This page is for Menu Content -->