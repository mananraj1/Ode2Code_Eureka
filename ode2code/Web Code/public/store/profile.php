<?php 

session_start();
include '../db-config/config.php';
$title = "Xiaomi Stores | Store Profile";

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

            <!-- Settings Section Start -->
            <div class="page-body">
                <div class="title-header">
                    <h5>Profile Setting</h5>
                </div>

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-sm-12">
                                    <hr>
                                    <!-- Details Start -->
                                    <div class="card">
                                        <div class="card-body">
                                            <form method="post" class="theme-form theme-form-2 mega-form">
                                                <div class="row">
                                                    <div class="mb-4 row align-items-center">
                                                        <label class="form-label-title col-sm-2 mb-0">Store Name</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="name" value="<?php echo $row_store['name'];?>" class="form-control" type="text" placeholder="Enter Your Store Name">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="mb-4 row align-items-center">
                                                        <label class="form-label-title col-sm-2 mb-0">Manager Name</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="name" value="<?php echo $row_store['manager'];?>" class="form-control" type="text" placeholder="Enter Your Store's Manager Name">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="mb-4 row align-items-center">
                                                        <label class="form-label-title col-sm-2 mb-0">Store Phone Number</label>
                                                        <div class="col-sm-10">
                                                            <input type="number" name="contact" value="<?php echo $row_store['contact'];?>" class="form-control" type="text" placeholder="Enter Your Store's Number">
                                                        </div>
                                                    </div>

                                                    <div class="mb-4 row align-items-center">
                                                        <label class="form-label-title col-sm-2 mb-0">Enter Email
                                                            Address</label>
                                                        <div class="col-sm-10">
                                                            <input class="form-control" name="email" type="email" value="<?php echo $row_store['email'];?>" placeholder="Enter Your Email Address" readonly>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="mb-4 row align-items-center">
                                                        <label class="form-label-title col-sm-2 mb-0">State</label>
                                                        <div class="col-sm-10">
                                                            <select class="form-control" name="state" id="state" onchange="change_dist()">
                                                                <?php
                                                                $res = mysqli_query($conn,"SELECT * FROM `state`");
                                                                while($row=mysqli_fetch_assoc($res))
                                                                {
                                                                    $state = $row['name'];
                                                                    ?>
                                                                    <option value="<?php echo $state;?>" <?php if($row_store['state']==$state) echo 'selected';?> ><?php echo $state;?></option>
                                                                
                                                                <?php
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="mb-4 row align-items-center">
                                                        <label class="form-label-title col-sm-2 mb-0">District</label>
                                                        <div class="col-sm-10">
                                                            <select class="form-control" name="district" id="district" onchange="change_city()">
                                                                <option value="<?php echo $row_store['district'];?>"><?php if($row_store['district']=='') echo 'Select District'; else echo $row_store['district'];?></option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="mb-4 row align-items-center">
                                                        <label class="form-label-title col-sm-2 mb-0">City</label>
                                                        <div class="col-sm-10">
                                                            <select class="form-control" name="city" id="city">
                                                                <?php $ccode = $row_store['city'];
                                                                $cname=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM `city` WHERE `id`='$ccode'")); $cname=$cname['name'];?>
                                                                <option value="<?php echo $row_store['city'];?>"><?php if($row_store['city']=='') echo 'Select District'; else echo $cname;?></option>
                                                            </select>
                                                        </div>
                                                    </div>


                                                    
                                                    

                                                    <div class="mb-4 row align-items-center">
                                                        <label
                                                            class="col-sm-2 col-form-label form-label-title">Address</label>
                                                        <div class="col-sm-10">
                                                            <textarea class="form-control" name="address"><?php echo $row_store['address'];?></textarea>
                                                        </div>
                                                    </div>

                                                    

                                                    <div class="mb-4 row align-items-center">
                                                        <center>
                                                        <div class="col-sm-10">
                                                            <button type="submit" name="update_profile" class="btn btn-primary">Update Profile</button>
                                                        </div>
                                                        </center>
                                                        
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- Details End -->
                                    
                                    	<script>
	                                    	    
	                                    	
	                                    	    function change_city()
	                                    	    {
	                                    	        var msg="msg";
	                                    	        var dist = document.getElementById("district").value;
	                                    	         $.ajax({
                                                                type: "POST",
                                                                url: "<?php echo $url;?>api/get_city?district="+dist,
                                                                data: JSON.stringify({ "msg": msg}),
                                                                contentType: "application/json",
                                                                success: function (result) 
                                                                {
                                                                    document.getElementById("city").innerHTML=result;
                                                                    
                                                                    //console.log(result);
                                                                },
                                                                error: function (result, status) 
                                                                {
                                                                  //console.log(result);
                                                                }
                                                            });
	                                    	    }
	                                    	    
	                                    	    
	                                    	    
	                                    	    function change_dist()
	                                    	    {
	                                    	        var msg="msg";
	                                    	        var state = document.getElementById("state").value;
	                                    	         $.ajax({
                                                                type: "POST",
                                                                url: "<?php echo $url;?>api/get_district?state="+state,
                                                                data: JSON.stringify({ "msg": msg}),
                                                                contentType: "application/json",
                                                                success: function (result) 
                                                                {
                                                                    document.getElementById("district").innerHTML=result;
                                                                    //console.log(result);
                                                                    change_city();
                                                                },
                                                                error: function (result, status) 
                                                                {
                                                                  //console.log(result);
                                                                }
                                                            });
                                                    
	                                    	    }
	                                    	    
	                                    	    
	                                    	</script>
	                                    	
                                    <!-- Address Start -->
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card-header-2 mb-3">
                                                <h5>Change Password</h5>
                                            </div>

                                            <form method="post">
                                                <div class="mb-4 row align-items-center">
                                                        <label class="form-label-title col-sm-2 mb-0">New Password</label>
                                                        <div class="col-sm-10">
                                                            <input class="form-control" type="password" placeholder="Enter Your Password">
                                                        </div>
                                                </div>
                                                
                                                <div class="mb-4 row align-items-center">
                                                    <center>
                                                        <div class="col-sm-10">
                                                            <button type="submit" name="update_password" class="btn btn-primary">Update Password</button>
                                                        </div>
                                                    </center>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- Address End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Settings Section End -->
        </div>
        <!-- Page Body End-->

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