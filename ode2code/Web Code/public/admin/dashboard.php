<?php 

session_start();
include '../db-config/config.php';
$title = "Xiaomi Admin | Dashboard";

$uid=$_SESSION['id'];

if($_SESSION['id']=='')
{
    echo "<script>alert('Session expired, please login again!')</script>";
    echo "<script>window.location.href='index.php'</script>";
}

$row_store=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM `stores` WHERE `id`=$uid"));

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <?php include 'includes/head.php';?>
</head>

<body>
    <!-- tap on top start -->
    <div class="tap-top">
        <span class="lnr lnr-chevron-up"></span>
    </div>
    <!-- tap on tap end -->

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

            <!-- index body start -->
            <div class="page-body">
                <div class="container-fluid">
                    <div class="row">
                        <!-- chart caard section start -->
                        <div class="col-sm-6 col-xxl-3 col-lg-6">
                            <div class="b-b-primary border-5 border-0 card o-hidden">
                                <div class="custome-1-bg b-r-4 card-body">
                                    <div class="media align-items-center static-top-widget">
                                        <div class="media-body p-0">
                                            <span class="m-0">Active Products</span>
                                            <h4 class="mb-0 counter">
                                                <?php
                                                $c=mysqli_num_rows(mysqli_query($conn,"SELECT * FROM `products`"));
                                                echo $c;
                                                ?>
                                            </h4>
                                        </div>
                                        <div class="align-self-center text-center">
                                            <i data-feather="database"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-6 col-xxl-3 col-lg-6">
                            <div class="b-b-success border-5 border-0 card o-hidden">
                                <div class=" custome-4-bg b-r-4 card-body">
                                    <div class="media static-top-widget">
                                        <div class="media-body p-0">
                                            <span class="m-0">Distinct Customers</span>
                                            <h4 class="mb-0 counter">
                                                <?php
                                                $c=mysqli_num_rows(mysqli_query($conn,"SELECT DISTINCT(`id`) FROM `customers`"));
                                                echo $c;
                                                ?>
                                            </h4>
                                        </div>

                                        <div class="align-self-center text-center">
                                            <i data-feather="user-plus"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-6 col-xxl-3 col-lg-6">
                            <div class="b-b-danger border-5 border-0 card o-hidden">
                                <div class=" custome-2-bg  b-r-4 card-body">
                                    <div class="media static-top-widget">
                                        <div class="media-body p-0">
                                            <span class="m-0">Pending Orders</span>
                                            <h4 class="mb-0 counter">
                                                <?php
                                                $c=mysqli_num_rows(mysqli_query($conn,"SELECT * FROM `orders` WHERE `del_status`='0'"));
                                                echo $c;
                                                ?>
                                            </h4>
                                        </div>
                                        <div class="align-self-center text-center">
                                            <i data-feather="shopping-bag"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xxl-3 col-lg-6">
                            <div class="b-b-secondary border-5 border-0  card o-hidden">
                                <div class=" custome-3-bg b-r-4 card-body">
                                    <div class="media static-top-widget">
                                        <div class="media-body p-0">
                                            <span class="m-0">All Orders</span>
                                            <h4 class="mb-0 counter">
                                                <?php
                                                $c=mysqli_num_rows(mysqli_query($conn,"SELECT * FROM `orders`"));
                                                echo $c;
                                                ?>
                                            </h4>
                                        </div>

                                        <div class="align-self-center text-center">
                                            <i data-feather="message-circle"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                        <!-- chart caard section End -->

                        <!-- Earning chart star-->
                        <div class="col-xl-4">
                            <div class="card o-hidden card-hover">
                                <div class="card-header border-0 pb-1">
                                    <div class="card-header-title">
                                        <h4>Earning</h4>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <div id="bar-chart-earning"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Earning chart end-->

                        <!-- Earning chart star-->
                        <div class="col-xl-8">
                            <div class="card o-hidden ">
                                <div class="card-header border-0 pb-1">
                                    <div class="card-header-title">
                                        <h4>Revenue Report</h4>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <div id="report-chart"></div>
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
            <!-- index body end -->
        </div>
        <!-- Page Body End -->
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
    
    
    <!-- Apexchar js -->
    <script src="assets/js/chart/apex-chart/apex-chart1.js"></script>
    <script src="assets/js/chart/apex-chart/moment.min.js"></script>
    <script src="assets/js/chart/apex-chart/apex-chart.js"></script>
    <script src="assets/js/chart/apex-chart/stock-prices.js"></script>
    <script src="assets/js/chart/apex-chart/chart-custom1.js"></script>


    <!-- ratio js -->
    <script src="assets/js/ratio.js"></script>

    <!-- Theme js -->
    <script src="assets/js/script.js"></script>
</body>

</html>