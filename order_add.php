<?php
    
    include "header.php";
?>

<div align=center>
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <div class="card shadow w-50">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">BUY FOOD</h6>
            </div>
            
            <div class="card-body">
                Are you sure you are ready to send orders?
                <br><br>
                    <a href="order_add_proc.php" class="btn btn-success btn-circle btn-md">
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