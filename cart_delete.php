<?php
    $id = $_GET['id'];
    include "header.php";
?>

<div align=center>
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <div class="card shadow w-50">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DELETE FOOD</h6>
            </div>
            
            <div class="card-body">
                Are you sure you want to delete the record?
                <br><br>
                    <a href="cart_delete_proc.php?id=<?= $id?>" class="btn btn-success btn-circle btn-md">
                        YES
                    </a>
                &nbsp;&nbsp;&nbsp;
                    <a href="orderfood.php?" class="btn btn-danger btn-circle btn-md">
                        NO
                    </a>
            
            </div>

        </div>
    </div>
</div>
<?php
    include "footer.php";
?>