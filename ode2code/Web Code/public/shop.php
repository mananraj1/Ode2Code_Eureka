<?php
session_start();
include 'db-config/config.php';

if(isset($_SESSION['id']))
{
    $cid=$_SESSION['id'];
    $row_cus=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM `customers` WHERE `id`=$cid"));
}
else
{
    echo "<script>window.location.href='login.php'</script>";
}

if(isset($_POST['select_store']))
{
    unset($_SESSION['cart']);
    $store_id= $_POST['store_id'];
    $_SESSION['store_id']=$store_id;
}
$store_id=$_SESSION['store_id'];
if($store_id!='')
{
    $store_row=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM `stores` WHERE `id`='$store_id'"));
}

if(isset($_POST['pid']))
{
    $count=count($_SESSION['cart']);
    $_SESSION['cart'][$count]=$_POST['pid'];
   
}
?>

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
    <title>Xiaomi Store</title>

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
    
    <!--Plugin CSS file with desired skin-->
    <link rel="stylesheet" href="assets/css/vendors/ion.rangeSlider.min.css" />

    <!-- Theme css -->
    <link id="color-link" rel="stylesheet" type="text/css" href="assets/css/demo2.css">

</head>

<body class="theme-color2 light ltr">

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
    
    
    <?php include 'modals/select_store.php';?>
    <!-- mobile fix menu end -->

    <!-- Breadcrumb section start -->
    <section class="breadcrumb-section section-b-space">
        <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3>Shop Listing</h3>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.php">
                                    <i class="fas fa-home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">MI Store</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb section end -->

    <!-- Shop Section start -->
    <section class="section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <div class="category-option">
                        <div class="button-close mb-3">
                            <button class="btn p-0"><i data-feather="arrow-left"></i> Close</button>
                        </div>
                        <div class="accordion category-name" id="accordionExample">
                            <div class="accordion-item category-rating">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne">
                                        Category
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne">
                                    <div class="accordion-body category-scroll">
                                        <ul class="category-list">
                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" type="checkbox"
                                                        id="flexCheckDefault10">
                                                    <label class="form-check-label"
                                                        for="flexCheckDefault10">Xiaomi Phones</label>
                                                    
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" type="checkbox"
                                                        id="flexCheckDefault11">
                                                    <label class="form-check-label" for="flexCheckDefault11">Redmi Phones
                                                        Solly</label>
                                                    
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" type="checkbox"
                                                        id="flexCheckDefault12">
                                                    <label class="form-check-label"
                                                        for="flexCheckDefault12">TV</label>
                                                    
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" type="checkbox"
                                                        id="flexCheckDefault13">
                                                    <label class="form-check-label"
                                                        for="flexCheckDefault13">Laptops</label>
                                                    
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" type="checkbox"
                                                        id="flexCheckDefault14">
                                                    <label class="form-check-label"
                                                        for="flexCheckDefault14">Fitness</label>
                                                    
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" type="checkbox"
                                                        id="flexCheckDefault15">
                                                    <label class="form-check-label"
                                                        for="flexCheckDefault15">Home</label>
                                                    
                                                </div>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Slider Section End -->
                        </div>
                    </div>
                </div>

                <div class="col-lg-9 col-12 ratio_30">
                    <div class="row g-4">
                        
                    </div>
                    <!-- label and featured section -->

                    <!-- Prodcut setion -->
                    <div
                        class="row g-sm-4 g-3 row-cols-lg-4 row-cols-md-3 row-cols-2 mt-1 custom-gy-5 product-style-2 ratio_asos product-list-section">
                        
                        <?php 
                        $res_products= mysqli_query($conn,"SELECT * FROM `products` WHERE `sid`='$store_id'");
                        while($row_products=mysqli_fetch_assoc($res_products))
                        {?>
                        <div>
                            
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="#">
                                            <img src="<?php echo $row_products['image'];?>"
                                                class="bg-img blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                    
                                    <div class="cart-wrap">
                                        <ul>
                                            <li>
                                                <a href="#" onclick="add_to_cart(<?php echo $row_products['id'];?>)" class="addtocart-btn"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                    <i data-feather="shopping-bag"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <div class="main-price">
                                        <a href="#" class="font-default">
                                            <h6 class="ms-0"><?php echo $row_products['pname'];?></h6>
                                        </a>
                                        <br>
                                        <h3 class="theme-color">₹ <del><?php echo $row_products['price'];?></del><br>₹ <?php echo $row_products['dprice'];?></h3>
                                        
                                        <button onclick="location.href = 'cart.html';" class="btn listing-content">Add
                                            To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        } ?>
                        
                        <!-- Prodcut setion -->
                    </div>

                    
                </div>
            </div>
        </div>
    </section>
    <form method="post" id="add_to_cart">
        <input type="hidden" name="pid" id="pid">
    </form>
    
    <script>
        function add_to_cart(i)
        {
            document.getElementById("pid").value=i;
            document.getElementById("add_to_cart").submit();
        }
    </script>
    <!-- Shop Section end -->


    <!-- footer start -->
    <?php include 'includes/footer.php';?>
    <!-- footer end -->

    <!-- Cart Successful Start -->
    <div class="modal fade cart-modal" id="addtocart" tabindex="-1" role="dialog" aria-label="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content ">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <div class="modal-contain">
                        <div>
                            <div class="modal-messages">
                                <i class="fas fa-check"></i> Item successfully added to your cart.
                            </div>
                            <div class="modal-product">
                                <div class="modal-contain-details">
                                    <div class="shop-cart-button mt-3">
                                        <a href="#"
                                            class="btn default-light-theme conti-button default-theme default-theme-2 rounded">CONTINUE
                                            SHOPPING</a>
                                        <a href="cart.php"
                                            class="btn default-light-theme conti-button default-theme default-theme-2 rounded">VIEW
                                            CART</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                </div>
            </div>
        </div>
    </div>
    <!-- Cart Successful End -->

   

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

    <!-- Bootstrap js-->
    <script src="assets/js/bootstrap/bootstrap.bundle.min.js"></script>

    <!-- feather icon js-->
    <script src="assets/js/feather/feather.min.js"></script>

    <!-- lazyload js-->
    <script src="assets/js/lazysizes.min.js"></script>

    <!-- Slick js-->
    <script src="assets/js/slick/slick.js"></script>
    <script src="assets/js/slick/slick-animation.min.js"></script>
    <script src="assets/js/slick/custom_slick.js"></script>

    <!-- Price Filter js -->
    <script src="assets/js/price-filter.js"></script>

    <!--Plugin JavaScript file-->
    <script src="assets/js/ion.rangeSlider.min.js"></script>

    <!-- Filter Hide and show Js -->
    <script src="assets/js/filter.js"></script>

    <!-- Notify js-->
    <script src="assets/js/bootstrap/bootstrap-notify.min.js"></script>

    <!-- script js -->
    <script src="assets/js/script.js"></script>
</body>

</html>