<?php 

session_start();
include '../db-config/config.php';
$title = "Xiaomi Stores | Products";

$uid=$_SESSION['id'];

if($_SESSION['id']=='')
{
    echo "<script>alert('Session expired, please login again!')</script>";
    echo "<script>window.location.href='index.php'</script>";
}

$row_store=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM `stores` WHERE `id`=$uid"));


if(isset($_POST['change_status']))
{
    $rid=$_POST['rid'];
    $status=$_POST['status'];
    mysqli_query($conn,"UPDATE `products` SET `status`='$status' WHERE `id`='$rid'");
}

if(isset($_POST['del_prod']))
{
    $rid=$_POST['rid'];
    mysqli_query($conn,"DELETE FROM `products` WHERE `id`='$rid'");
}


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <?php include 'includes/head.php';?>
    
    <!-- Data table css -->
	<link href="https://tsc.swebvsmart.in/assets/plugins/datatable/dataTables.bootstrap4.min.css" rel="stylesheet"/>
		
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.bootstrap4.min.css">
</head>

<body>
    <!-- tap on top start-->
    <div class="tap-top">
        <span class="lnr lnr-chevron-up"></span>
    </div>
    <!-- tap on tap end-->

    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper dark-sidebar" id="pageWrapper">
        <!-- Page Header Start-->
        <?php include 'includes/header.php';?>
        <!-- Page Header Ends-->

        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            <?php include 'includes/sidebar.php';?>
            <!-- Page Sidebar Ends-->

            <!-- Container-fluid starts-->
            <div class="page-body">
                <div class="title-header title-header-1">
                    <h5>All Customers</h5>
                </div>
                
                <style>
                    :root {
  --theme-secondary: #ef3f3e;
}
                </style>
                <!-- All User Table Start -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <hr>
                            <div class="card" style="box-shadow: 20px 20px 20px 20px #dcdcdc !important">
                                <div class="card-body">
                                    <div>
                                        <div class="table-responsive table-desi table-product">
                                            <table id="dt1" class="table table-1d all-package">
                                                <thead>
                                                    <tr>
                                                        <th>S No.</th>
                                                        <th>Name</th>
                                                        <th>Phone</th>
                                                        <th>Email</th>
                                                        <th>Username</th>
                                                        <th>State</th>
                                                        <th>District</th>
                                                        <th>City</th>
                                                        <th>Address</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $i=0;
                                                    $res_cid=mysqli_query($conn,"SELECT * FROM `customers` WHERE `id`='$cid'");
                                                    while($row_cust=mysqli_fetch_assoc($res_cid))
                                                    {
                                                    ?>
                                                    <tr>
                                                        <td><?php echo ++$i;?></td>
                                                        <td><?php echo $row_cust['name'];?></td>
                                                        <td><?php echo $row_cust['phone'];?></td>
                                                        <td><?php echo $row_cust['email'];?></td>
                                                        <td><?php echo $row_cust['username'];?></td>
                                                        <td><?php echo $row_cust['state'];?></td>
                                                        <td><?php echo $row_cust['district'];?></td>
                                                        <td><?php echo $row_cust['city'];?></td>
                                                        <td><?php echo $row_cust['address'];?></td>
                                                    </tr>
                                                    <?php
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div class="pagination-box">
                                    <nav class="ms-auto me-auto " aria-label="...">
                                       
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- All User Table Ends-->

                <div class="container-fluid">
               <!-- footer start-->
                <?php include 'includes/footer.php';?>
                <!-- footer End-->
                
            </div>
        </div>
    </div>
    <!-- page-wrapper End-->

    <!-- Modal Start -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <h5 class="modal-title" id="staticBackdropLabel">Logging Out</h5>
                    <p>Are you sure you want to log out?</p>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                    <div class="button-box">
                        <button type="button" class="btn btn--no " data-bs-dismiss="modal">No</button>
                        <button type="button" class="btn  btn--yes btn-primary">Yes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal End -->

       <!-- latest js -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap js -->
    <script src="assets/js/bootstrap/bootstrap.bundle.min.js"></script>

    <!-- feather icon js -->
    <script src="assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="assets/js/icons/feather-icon/feather-icon.js"></script>

    <!-- scrollbar simplebar js -->
    <script src="assets/js/scrollbar/simplebar.js"></script>
    <script src="assets/js/scrollbar/custom.js"></script>

    <!-- Sidebar jquery -->
    <script src="assets/js/config.js"></script>

    <!-- tooltip init js -->
    <script src="assets/js/tooltip-init.js"></script>

    <!-- Plugins JS -->
    <script src="assets/js/sidebar-menu.js"></script>
    <script src="assets/js/notify/bootstrap-notify.min.js"></script>

    <!-- Theme js -->
    <script src="assets/js/script.js"></script>
    
    <!-- DATA TABLE -->
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.bootstrap4.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.colVis.min.js"></script>
	
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Datatables basic
			
			// Datatables with Buttons
			var datatablesButtons = $('#dt1').DataTable({
				"pageLength": 10,
				buttons: ['csv','copy'],
			
			});
			datatablesButtons.buttons().container().appendTo("#dt1_wrapper .col-md-6:eq(0)")
		});
	</script>
	
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Datatables basic
			
			// Datatables with Buttons
			var datatablesButtons = $('#dt2').DataTable({
				"pageLength": 10,
				buttons: ['csv','copy'],
			
			});
			datatablesButtons.buttons().container().appendTo("#dt2_wrapper .col-md-6:eq(0)")
		});
	</script>
	    
	    
</body>

</html>