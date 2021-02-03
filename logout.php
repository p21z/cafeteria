<?php
    include "header.php";
?>

<div align=center>
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <div class="card shadow w-50">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">LOGOUT</h6>
            </div>
            
            <div class="card-body">
                Are you sure you want to logout?
                <br><br>
                    <a href="logout_proc.php" class="btn btn-success btn-circle btn-md">
                        YES
                    </a>
                &nbsp;&nbsp;&nbsp;
                    <a href="home.php?" class="btn btn-danger btn-circle btn-md">
                        NO
                    </a>
            
            </div>

        </div>
    </div>
</div>
<?php
    include "footer.php";
?>