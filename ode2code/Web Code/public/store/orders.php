<?php 

session_start();
include '../db-config/config.php';
$title = "Xiaomi Stores | Orders";

$uid=$_SESSION['id'];

if($_SESSION['id']=='')
{
    echo "<script>alert('Session expired, please login again!')</script>";
    echo "<script>window.location.href='index.php'</script>";
}

$row_store=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM `stores` WHERE `id`=$uid"));

$cid='';

if(isset($_POST['cust_id']))
$cid=$_POST['cust_id'];

if(isset($_POST['change_pay_status']))
{
    $rid=$_POST['rid'];
    $status=$_POST['status'];
    mysqli_query($conn,"UPDATE `orders` SET `pay_status`='$status' WHERE `id`='$rid'");
}

if(isset($_POST['change_del_status']))
{
    $rid=$_POST['rid'];
    $status=$_POST['status'];
    mysqli_query($conn,"UPDATE `orders` SET `del_status`='$status' WHERE `id`='$rid'");
}


if(isset($_POST['del_prod']))
{
    $rid=$_POST['rid'];
    mysqli_query($conn,"DELETE FROM `orders` WHERE `id`='$rid'");
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
            <?php include 'modals/add_product_modal.php';?>
            <!-- Container-fluid starts-->
            <div class="page-body">
                <div class="title-header">
                    <h5>All Orders</h5>
                </div>
                
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <hr>
                            <br>
                            
                            <form class="d-inline-flex" id="sel_cust_prod" method="post">
                                <select class="form-control" style="width:300px" name="cust_id" id="city" onchange="sel_cust_prod()">
                                    <option value="">Filter By Customers</option>
                                    <?php
                                    $res_store=mysqli_query($conn,"SELECT * FROM `customers` ORDER BY id DESC");
                                    while($row=mysqli_fetch_assoc($res_store))
                                    {;?>
                                    <option value="<?php echo $row['id'];?>" <?php if($row['id']==$cid) echo 'selected';?>><?php echo $row['name'].'('.$row['username'].')';?></option>
                                    <?php
                                    }?>
                                </select>
                            </form>
                            <br>
                            <br>
                            <script>
                                function sel_store_prod()
                                {
                                    document.getElementById("sel_store_prod").submit();
                                }
                                
                                function sel_cust_prod()
                                {
                                    document.getElementById("sel_cust_prod").submit();
                                }
                            </script>
                            
                            <style>
                                buttons-html5 {
    background-color: #ef3f3e!important;
    border-color: #ef3f3e!important;
}
                            </style>
                            <div class="card" style="box-shadow: 20px 20px 20px 20px #dcdcdc !important">
                                <div class="card-body">
                                    
                                    <div>
                                        <div class="table-responsive table-desi table-product">
                                            <table id="dt1" class="table table-1d all-package">
                                                <thead>
                                                    <tr>
                                                        <th>S No.</th>
                                                        <th>Customer Name</th>
                                                        <th>Phone Number</th>
                                                        <th>Product Name</th>
                                                        <th>Amount</th>
                                                        <th>Payment Type</th>
                                                        <th>Payment Status</th>
                                                        <th>Delivery Status</th>
                                                        <th>Option</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <?php
                                                    if($cid=='')
                                                    $sql="SELECT * FROM `orders` ORDER BY id DESC";
                                                    else 
                                                    $sql="SELECT * FROM `orders` WHERE `cid`='$cid' ORDER BY id DESC";
                                                   
                                                    $res_orders=mysqli_query($conn,$sql);
                                                    $i=0;
                                                    while($row_orders=mysqli_fetch_assoc($res_orders))
                                                    {
                                                            $cid=$row_orders['cid'];
                                                            $row_cust=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM `customers` WHERE `id`='$cid'"));
                                                    ?>
                                                        
                                                    
                                                            <tr>
                                                                <td><?php echo ++$i;?></td>
                                                                <td>
                                                                    <?php echo $row_cust['name'];?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $row_cust['phone'];?>
                                                                </td>
                                                
                                                                <td>
                                                                    Xiaomi 12 Pro 5G
                                                                </td>
        
                                                                <td>
                                                                    <?php echo $row_orders['amount'];?>
                                                                </td>
        
                                                                <td><?php echo $row_orders['pay_type'];?></td>
        
                                                                <td class="td-price">
                                                                    <?php if($row_orders['pay_status']=='1')
                                                                    echo 'Paid';
                                                                    else
                                                                    echo 'Unpaid';
                                                                    ?>
                                                                    <br>
                                                                    <form method="post">
                                                                        <?php if($row_orders['pay_status']=='1'){$st='0';}else{$st='1';}?>
                                                                        <input type="hidden" name="rid" value="<?php echo $row_orders['id'];?>">
                                                                        <input type="hidden" name="status" value="<?php echo $st;?>">
                                                                        <button type="submit" name="change_pay_status" class="btn btn-primary">Change Status</button>
                                                                    </form>
                                                                </td>
                                                                
                                                                <td class="td-price">
                                                                    <?php if($row_orders['del_status']=='1')
                                                                    echo 'Delivered';
                                                                    else
                                                                    echo 'Undelivered';
                                                                    ?>
                                                                    <br>
                                                                    <form method="post">
                                                                        <?php if($row_orders['del_status']=='1'){$st='0';}else{$st='1';}?>
                                                                        <input type="hidden" name="rid" value="<?php echo $row_orders['id'];?>">
                                                                        <input type="hidden" name="status" value="<?php echo $st;?>">
                                                                        <button type="submit" name="change_del_status" class="btn btn-primary">Change Status</button>
                                                                    </form>
                                                                </td>
                                                                
                                                                
                                                                
                                                                
                                                                
        
                                                                <td>
                                                                    <ul>
                                                                        
        
                                                                        <li>
                                                                            <form method="post">
                                                                                    <input type="hidden" name="rid" value="<?php echo $row_orders['id'];?>">
                                                                                    <button type="button" name="" class="btn btn-primary"><span class="lnr lnr-pencil"></span></button>
                                                                            </form>
                                                                        </li>
        
                                                                        <li>
                                                                            
                                                                                <form method="post" onsubmit="return confirm('Are you sure, you want to delete this product?')">
                                                                                    <input type="hidden" name="rid" value="<?php echo $row_orders['id'];?>">
                                                                                    <button type="submit" name="del_prod" class="btn btn-primary"><i class="far fa-trash-alt"></i></button>
                                                                                </form>
                                                                        </li>
                                                                    </ul>
                                                                </td>
                                                                
                                                            </tr>
                                                    
                                                    <?php
                                                    }?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid Ends-->

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