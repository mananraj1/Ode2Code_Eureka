<?php
session_start();
include 'db-config/config.php';

if(isset($_SESSION['id']))
{
    $cid=$_SESSION['id'];
    $row_cus=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM `customers` WHERE `id`=$cid"));
}

if(isset($_POST['pay_type']))
{
    $pay_type=$_POST['pay_type'];
    $store_id=$_SESSION['store_id'];
    $amount= $_POST['amount'];
    
    if($pay_type=="COD")
    mysqli_query($conn,"INSERT INTO `orders`(`sid`,`cid`,`pay_type`,`amount`,`pay_status`,`del_status`) VALUES ('$store_id','$cid','$pay_type','$amount','0','0')");
    else
    mysqli_query($conn,"INSERT INTO `orders`(`sid`,`cid`,`pay_type`,`amount`,`pay_status`,`del_status`) VALUES ('$store_id','$cid','$pay_type','$amount','1','0')");
    
    $row_order = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM `orders` WHERE `sid`='$store_id' AND `cid`='$cid' AND `pay_type`='$pay_type' AND `amount`='$amount' ORDER BY id DESC"));
    $oid=$row_order['id'];
    
    $len=count($_SESSION['cart']);
    $price_sum=0;
    for($i=0;$i<$len;++$i)
    {
        $pid=$_SESSION['cart'][$i];
        if(mysqli_query($conn,"INSERT INTO `order_products`(`oid`,`pid`) VALUES ('$oid','$pid')"))
        {
            $st=1;
        }
    }
                                
    if($st==1)
    {
        unset($_SESSION['cart']);
        echo "<script>alert('Order Placed, Your Order ID is : ".$oid."')</script>";
         echo "<script>window.location.href='orders.php'</script>";
    }
    
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="icon.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="icon.png">
    <meta name="theme-color" content="#ff6700">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Voxo">
    <meta name="msapplication-TileImage" content="icon.png">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Voxo">
    <meta name="keywords" content="Voxo">
    <meta name="author" content="Voxo">
    <link rel="icon" href="icon.png" type="image/x-icon" />
    <title>Electronic Store</title>

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- bootstrap css -->
    <link id="rtl-link" rel="stylesheet" type="text/css" href="assets/css/vendors/bootstrap.css">

    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/font-awesome.css">

    <!-- feather icon css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/feather-icon.css">

    <!-- animation css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/animate.css">

    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/slick/slick-theme.css">

    <!-- Theme css -->
    <link id="color-link" rel="stylesheet" type="text/css" href="assets/css/demo1.css">
    
</head>

<body class="theme-color1 light ltr">
    <script>
        document.body.style.setProperty("--theme-color","#ff6700");
    </script>

    <!-- header start -->
    <header id="home">
        <?php include 'includes/topbar.php';?>
        <?php include 'includes/navbar.php';?>
    </header>
    <!-- header end -->

    <!-- mobile fix menu start -->
    <?php include 'includes/mobile_footer.php';?>
    
    
    <?php include 'modals/sign_in.php';?>
    <!-- mobile fix menu end -->
    <!-- mobile fix menu end -->

    

    <!-- Cart Section Start -->
    <section class="cart-section section-b-space">
        <div class="container">
            <div class="row">
                

                <div class="col-sm-12 table-responsive mt-4">
                    <table class="table cart-table">
                        <thead>
                            <tr class="table-head">
                                <th scope="col">image</th>
                                <th scope="col">product name</th>
                                <th scope="col">price</th>
                                <th scope="col">quantity</th>
                                <th scope="col">total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $len=count($_SESSION['cart']);
                            $price_sum=0;
                            for($i=0;$i<$len;++$i)
                            {
                                $pid=$_SESSION['cart'][$i];
                                $row_products= mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM `products` WHERE `id`='$pid'"));
                                
                                $price_sum+=$row_products['dprice'];
                            ?>
                            <tr>
                                <td>
                                    <a href="product-left-sidebar.html">
                                        <img src="<?php echo $row_products['image'];?>" class=" blur-up lazyload"
                                            alt="">
                                    </a>
                                </td>
                                <td>
                                    <a href="#"><?php echo $row_products['pname'];?> </a>
                                   
                                </td>
                                <td>
                                    <h2>₹ <?php echo $row_products['dprice'];?></h2>
                                </td>
                                <td>
                                    <div class="qty-box">
                                        <div class="input-group">
                                            <input type="number" name="quantity" class="form-control input-number"
                                                value="1">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h2 class="td-color">₹ <?php echo $row_products['dprice'];?></h2>
                                </td>
                            </tr>
                            
                            <?php
                                                    }?>
                        </tbody>
                        
                    </table>
                </div>

                <div class="col-12 mt-md-5 mt-4">
                    <div class="row">
                        <div class="col-sm-7 col-5 order-1">
                            <div class="left-side-button text-end d-flex d-block justify-content-end">
                                <form method="post">
                                    <button  type="submit" name="clear_cart" class="btn btn-solid-default btn-block">Clear Cart</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-sm-5 col-7">
                            <div class="left-side-button float-start">
                                <a href="shop.php" class="btn btn-solid-default btn fw-bold mb-0 ms-0"><i class="fas fa-arrow-left"></i> Continue Shopping</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="cart-checkout-section">
                    <div class="row g-4">
                        <div class="col-lg-4 col-sm-6">
                            <div class="promo-section">
                                
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6 ">
                            <div class="checkout-button">
                               <form class="row g-3" method="post" id="checkout">
                                    <div class="col-7">
                                        <input type="hidden" name="amount" value="<?php echo $price_sum;?>">
                                        <select name="pay_type"  class="form-control">
                                            <option value="COD">COD / In-Counter Pay</option>
                                            <option value="PayU">Payu (Online Debit card/Credit card/UPI)</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="cart-box">
                                <div class="cart-box-details">
                                    <div class="total-details">
                                        <div class="top-details">
                                            <h3>Cart Totals</h3>
                                            <h6>Total MRP <span>₹ <?php echo $price_sum;?></span></h6>
                                            <h6>Coupon Discount <span>₹ 0.00</span></h6>
                                            <h6>Convenience Fee <span><del>₹ 0.00</del></span></h6>
                                        </div>
                                        <div class="bottom-details">
                                            <a href="#" onclick="checkout()">Process Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <script>
                            function checkout()
                            {
                                document.getElementById("checkout").submit();
                            }
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br><br><br><br>
    <!-- Cart Section End -->

    <?php include 'includes/footer.php';?>
    <!-- theme Setting End -->

    <!-- tap to top Section Start -->
    <div class="tap-to-top">
        <a href="#home">
            <i class="fas fa-chevron-up"></i>
        </a>
    </div>
    <!-- tap to top Section End -->

    <div class="bg-overlay"></div>

    <!-- latest jquery-->
    <script src="assets/js/jquery-3.5.1.min.js"></script>

    <!-- Add To Home js -->
    <script src="assets/js/pwa.js"></script>

    <!-- Bootstrap js -->
    <script src="assets/js/bootstrap/bootstrap.bundle.min.js"></script>

    <!-- feather icon js -->
    <script src="assets/js/feather/feather.min.js"></script>

    <!-- lazyload js -->
    <script src="assets/js/lazysizes.min.js"></script>

    <!-- Slick js -->
    <script src="assets/js/slick/slick.js"></script>
    <script src="assets/js/slick/slick-animation.min.js"></script>
    <script src="assets/js/slick/custom_slick.js"></script>

    <!-- timer js -->
    <script src="assets/js/count-down-timer.js"></script>

    <!-- Notify js -->
    <script src="assets/js/bootstrap/bootstrap-notify.min.js"></script>

    <!-- script js -->
    <script src="assets/js/script.js"></script>
</body>

</html>