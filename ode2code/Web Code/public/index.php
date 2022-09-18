<?php
session_start();
include 'db-config/config.php';

if(isset($_SESSION['id']))
{
    $cid=$_SESSION['id'];
    $row_cus=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM `customers` WHERE `id`=$cid"));
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

    <!-- home slider start -->
    <section class="home-section">
        <div class="container-fluid">
            <div class="slick-1 classic-arrow">
                <div>
                    <div class="home-slider">
                        <img src="assets/img/xiomi_home.jpg" class="bg-img blur-up lazyload" alt="">
                        <div class="home-wrap row">
                            <div class="col-lg-4 col-md-6 col-sm-9 left-content">
                                <div class="offer-wrap">
                                    
                                </div>
                                <div class="home-content">
                                    
                                    <div class="discover-block d-sm-block d-none" data-animation-in="fadeInUp"
                                        data-delay-in="0.7">
                                        <div class="d-flex">
                                            
                                            <div class="discover-content">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 offset-lg-5 right-content d-lg-flex d-none">
                                <div>
                                    
                                    <div class="product-img" data-animation-in="fadeInUp" data-delay-in="0.5">
                                        
                                    </div>
                                </div>
                                <div class="home-social">
                                    <ul>
                                        <li>
                                            <a href="https://www.facebook.com/XiaomiIndia" class="font-default" style="color:#fff !important" target="_blank">
                                                <img src="assets/images/social-icon/1.png"
                                                    class="img-fluid blur-up lazyload" alt="">
                                                <span style="color:#fff !important">Facebook</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.instagram.com/xiaomiindia/" class="font-default" style="color:#fff !important" target="_blank">
                                                <img src="assets/images/social-icon/2.png"
                                                    class="img-fluid blur-up lazyload" alt="">
                                                <span style="color:#fff !important">Instagram</span>
                                            </a>
                                        </li>
                                        <li class="mb-0">
                                            <a href="https://twitter.com/XiaomiIndia" class="font-default" style="color:#fff !important" target="_blank">
                                                <img src="assets/images/social-icon/3.png"
                                                    class="img-fluid blur-up lazyload" alt="">
                                                <span style="color:#fff !important">Twitter</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="home-slider">
                        <img src="https://i02.appmifile.com/871_operator_in/18/09/2022/a565d4bdb28a16e57e61b6e4bb72603d.jpg" class="bg-img blur-up lazyload" alt="">
                        <div class="home-wrap row">
                            <div class="col-lg-4 col-md-6 col-sm-9 left-content">
                                <div class="offer-wrap">
                                    
                                </div>
                                <div class="home-content">
                                    
                                    <div class="discover-block d-sm-block d-none" data-animation-in="fadeInUp"
                                        data-delay-in="0.7">
                                        <div class="d-flex">
                                            
                                            <div class="discover-content">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 offset-lg-5 right-content d-lg-flex d-none">
                                <div>
                                    
                                    <div class="product-img" data-animation-in="fadeInUp" data-delay-in="0.5">
                                        
                                    </div>
                                </div>
                                <div class="home-social">
                                    <ul>
                                        <li>
                                            <a href="https://www.facebook.com/XiaomiIndia" class="font-default" target="_blank">
                                                <img src="assets/images/social-icon/1.png"
                                                    class="img-fluid blur-up lazyload" alt="">
                                                <span>Facebook</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.instagram.com/xiaomiindia/" class="font-default" target="_blank">
                                                <img src="assets/images/social-icon/2.png"
                                                    class="img-fluid blur-up lazyload" alt="">
                                                <span>Instagram</span>
                                            </a>
                                        </li>
                                        <li class="mb-0">
                                            <a href="https://twitter.com/XiaomiIndia" class="font-default" target="_blank">
                                                <img src="assets/images/social-icon/3.png"
                                                    class="img-fluid blur-up lazyload" alt="">
                                                <span>Twitter</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- home slider end -->

    <!-- service section start -->
    <section class="service-section">
        <div class="container">
            <div class="row g-4 g-sm-3">
                <div class="col-xl-3 col-sm-6">
                    <div class="service-wrap">
                        <div class="service-icon">
                            <svg>
                                <use xlink:href="assets/svg/icons.svg#customer"></use>
                            </svg>
                        </div>
                        <div class="service-content">
                            <h3 class="mb-2">Customer Servcies</h3>
                            <span class="font-light">Top notch customer service.</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="service-wrap">
                        <div class="service-icon">
                            <svg>
                                <use xlink:href="assets/svg/icons.svg#shop"></use>
                            </svg>
                        </div>
                        <div class="service-content">
                            <h3 class="mb-2">Pickup At Any Store</h3>
                            <span class="font-light">Free shipping on orders over $65.</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="service-wrap">
                        <div class="service-icon">
                            <svg>
                                <use xlink:href="assets/svg/icons.svg#secure-payment"></use>
                            </svg>
                        </div>
                        <div class="service-content">
                            <h3 class="mb-2">Secured Payment</h3>
                            <span class="font-light">We accept all major credit cards.</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="service-wrap">
                        <div class="service-icon">
                            <svg>
                                <use xlink:href="assets/svg/icons.svg#return"></use>
                            </svg>
                        </div>
                        <div class="service-content">
                            <h3 class="mb-2">Free Returns</h3>
                            <span class="font-light">30-days free return policy.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service section end -->

    <!-- banner section start -->
    <section class="ratio2_1">
        <div class="container">
            <div class="row gy-3">
                <div class="col-xl-5 col-lg-4 col-md-6 custom-col">
                    <div class="collection-banner p-center text-center">
                        <a href="shop.php" class="banner-img">
                            <img src="https://i01.appmifile.com/webfile/globalimg/in/cms/E794F82C-8858-02F1-7C53-6FB0B4D0C4C6.jpg" class="bg-img blur-up lazyload" alt="">
                        </a>
                        <a href="shop.php" class="contain-banner">
                            <div class="banner-content with-bg">
                                <h2 class="mb-2 mins-spacing">Headphone</h2>
                                <span class="s-spacing">BUY ONE GET ONE FREE</span>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 order-lg-0 order-md-1 order-0">
                    <div class="collection-banner text-center collection-center">
                        <h6 class="theme-color mb-2">Get Rewarded</h6>
                        <h2>Earn 10% </h2>
                        <h2>Back Reward</h2>
                        <p class="mt-2">Valid online & in-store with select styles.</p>
                        <button onclick="location.href = 'shop.php';" type="button"
                            class="btn btn-solid-default">Learn more</button>
                    </div>
                </div>

                <div class="col-xl-5 col-lg-4 col-md-6 custom-col">
                    <div class="collection-banner p-center text-center">
                        <a href="shop.php" class="banner-img">
                            <img src="https://i01.appmifile.com/v1/MI_18455B3E4DA706226CF7535A58E875F0267/pms_1563264530.44121333.jpg?width=420&height=420" class="bg-img blur-up lazyload" alt="">
                        </a>
                        <a href="shop.php" class="contain-banner">
                            <div class="banner-content with-bg">
                                <h2 class="mb-2 mins-spacing">Headphone</h2>
                                <span class="s-spacing">BUY ONE GET ONE FREE</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner section end -->

  

    <!-- Banner section 2 start -->
    <section class="ratio2_1">
        <div class="container">
            <div class="row gy-3">
                <div class="col-xl-9 col-lg-8">
                    <div class="timer-banner text-center">
                        <img src="https://i02.appmifile.com/415_operator_in/10/09/2022/5e1ae1ebf48070e1e98b13b04cb4a91c.gif?width=398&height=230" class="bg-img blur-up lazyload" alt="">
                        <div class="coupon-code theme-color">
                            DGR548548
                        </div>
                        <div class="discount-offer">
                            <h5>New Festival Offer
                                <span class="theme-color">70% OFF <a href="#" class="wishlist-icon mt-2"><i
                                            class="fas fa-heart"></i></a></span>
                            </h5>
                        </div>
                        <div>
                            <div class="timer">
                                <ul>
                                    <li>
                                        <div class="counter">
                                            <div>
                                                <h2 id="days1"></h2>Days
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="counter">
                                            <div>
                                                <h2 id="hours1"></h2>Hour
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="counter">
                                            <div>
                                                <h2 id="minutes1"></h2>Min
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="counter">
                                            <div>
                                                <h2 id="seconds1"></h2>Sec
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="banner-btn-grup">
                            <button onclick="location.href = '#';" type="button"
                                class="btn btn-solid-default">Shop Now</button>
                        </div>
                        <div class="social-media">
                            <div class="social-icon">
                                <img src="assets/images/social-icon/1.png" class="img-fluid blur-up lazyload" alt="">
                                <h6>Facebook</h6>
                            </div>

                            <div class="social-icon">
                                <img src="assets/images/social-icon/2.png" class="img-fluid blur-up lazyload" alt="">
                                <h6>Instagram</h6>
                            </div>

                            <div class="social-icon">
                                <img src="assets/images/social-icon/3.png" class="img-fluid blur-up lazyload" alt="">
                                <h6>Twitter</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 small-banner">
                    <div class="collection-banner text-center collection-center">
                        <img src="https://i02.appmifile.com/90_operator_in/11/03/2022/9b1ab6de9e17724d9f1fcde70dac3b4c.jpg?width=612&height=612" class="bg-img blur-up lazyload" alt="">
                        <div class="collection-contain">
                            <h6 class="theme-color mb-2">New Headphone</h6>
                            <h2>50% Cash </h2>
                            <h2>Back Reward</h2>
                            <p class="mt-2 mb-0 font-light">Limited offer </p>
                            <p class="font-light mb-0"> Buy now!!</p>
                            <button onclick="location.href = 'shop.php';" type="button"
                                class="btn btn-solid-default mt-lg-4 mt-2">Shop now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner section 2 end -->

    <!-- product section 2 start -->
    <section class="ratio_asos">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="title text-center">
                        <h5>Just For You</h5>
                        <h2>VR Collection</h2>
                    </div>
                    <div class="product-wrapper slide-7 product-style-1">
                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <div class="top-wishlist">
                                        <span class="font-dark-30">-20%</span>
                                        <a href="wishlist.html" class="heart-wishlist wishlist"><i
                                                class="far fa-heart"></i></a>
                                    </div>
                                    <a href="shop.php" class="text-center">
                                        <img src="assets/images/electronics/product/png/1.png"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>
                                </div>
                                <div class="product-details text-center">
                                    <h3 class="theme-color">
                                        $49.00
                                        <span class="font-light ml-1">$52.00</span>
                                    </h3>
                                    <a href="shop.php" class="font-default">
                                        <h5>Portable charger</h5>
                                    </a>
                                    <ul class="rating">
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <div class="top-wishlist">
                                        <span class="font-dark-30">-10%</span>
                                        <a href="wishlist.html" class="heart-wishlist wishlist"><i
                                                class="far fa-heart"></i></a>
                                    </div>
                                    <a href="shop.php" class="text-center">
                                        <img src="assets/images/electronics/product/png/2.png"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>
                                </div>
                                <div class="product-details text-center">
                                    <h3 class="theme-color">
                                        $52.00
                                        <span class="font-light ml-1">$60.00</span>
                                    </h3>
                                    <a href="shop.php" class="font-default">
                                        <h5>VR Box - Buy VR Headset</h5>
                                    </a>
                                    <ul class="rating">
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <div class="top-wishlist">
                                        <span class="font-dark-30">-8%</span>
                                        <a href="wishlist.html" class="heart-wishlist wishlist"><i
                                                class="far fa-heart"></i></a>
                                    </div>
                                    <a href="shop.php" class="text-center">
                                        <img src="assets/images/electronics/product/png/3.png"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>
                                </div>
                                <div class="product-details text-center">
                                    <h3 class="theme-color">
                                        $52.00
                                        <span class="font-light ml-1">$60.00</span>
                                    </h3>
                                    <a href="shop.php" class="font-default">
                                        <h5>Headset Game For IOS</h5>
                                    </a>
                                    <ul class="rating">
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <div class="top-wishlist">
                                        <span class="font-dark-30">-15%</span>
                                        <a href="wishlist.html" class="heart-wishlist wishlist"><i
                                                class="far fa-heart"></i></a>
                                    </div>
                                    <a href="shop.php" class="text-center">
                                        <img src="assets/images/electronics/product/png/4.png"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>
                                </div>
                                <div class="product-details text-center">
                                    <h3 class="theme-color">
                                        $45.00
                                        <span class="font-light ml-1">$80.00</span>
                                    </h3>
                                    <a href="shop.php" class="font-default">
                                        <h5>Unifree Portable</h5>
                                    </a>
                                    <ul class="rating">
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <div class="top-wishlist">
                                        <span class="font-dark-30">-20%</span>
                                        <a href="wishlist.html" class="heart-wishlist wishlist"><i
                                                class="far fa-heart"></i></a>
                                    </div>
                                    <a href="shop.php" class="text-center">
                                        <img src="assets/images/electronics/product/png/5.png"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>
                                </div>
                                <div class="product-details text-center">
                                    <h3 class="theme-color">
                                        $25.00
                                        <span class="font-light ml-1">$40.00</span>
                                    </h3>
                                    <a href="shop.php" class="font-default">
                                        <h5>Wireless Bluetooth Sunglasses Headset</h5>
                                    </a>
                                    <ul class="rating">
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <div class="top-wishlist">
                                        <span class="font-dark-30">-5%</span>
                                        <a href="wishlist.html" class="heart-wishlist wishlist"><i
                                                class="far fa-heart"></i></a>
                                    </div>
                                    <a href="shop.php" class="text-center">
                                        <img src="assets/images/electronics/product/png/6.png"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>
                                </div>
                                <div class="product-details text-center">
                                    <h3 class="theme-color">
                                        $48.00
                                        <span class="font-light ml-1">$62.00</span>
                                    </h3>
                                    <a href="shop.php" class="font-default">
                                        <h5>Dual EQ Bluetooth 5.0 Portable</h5>
                                    </a>
                                    <ul class="rating">
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <div class="top-wishlist">
                                        <span class="font-dark-30">-12%</span>
                                        <a href="wishlist.html" class="heart-wishlist wishlist"><i
                                                class="far fa-heart"></i></a>
                                    </div>
                                    <a href="shop.php" class="text-center">
                                        <img src="assets/images/electronics/product/png/7.png"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>
                                </div>
                                <div class="product-details text-center">
                                    <h3 class="theme-color">
                                        $58.00
                                        <span class="font-light ml-1">$84.00</span>
                                    </h3>
                                    <a href="shop.php" class="font-default">
                                        <h5>Leapmotion VR</h5>
                                    </a>
                                    <ul class="rating">
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <div class="top-wishlist">
                                        <span class="font-dark-30">-20%</span>
                                        <a href="wishlist.html" class="heart-wishlist wishlist"><i
                                                class="far fa-heart"></i></a>
                                    </div>
                                    <a href="shop.php" class="text-center">
                                        <img src="assets/images/electronics/product/png/5.png"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>
                                </div>
                                <div class="product-details text-center">
                                    <h3 class="theme-color">
                                        $25.00
                                        <span class="font-light ml-1">$40.00</span>
                                    </h3>
                                    <a href="shop.php" class="font-default">
                                        <h5>Wireless Bluetooth Sunglasses Headset</h5>
                                    </a>
                                    <ul class="rating">
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product section 2 end -->

    <!-- tab banner section start -->
    <section class="tab-section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="title text-center">
                        <h5>Special Offer</h5>
                        <h2>Hurry up!</h2>
                    </div>
                    <div class="tab-wrap">
                        
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade" id="Camera" role="tabpanel">
                                <div class="offer-wrap product-style-1">
                                    <div class="row g-xl-4 g-3">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="product-list">
                                                <div class="product-box">
                                                    <div class="img-wrapper">
                                                        <a href="shop.php" class="text-center">
                                                            <img src="assets/images/electronics/product/png/11.png"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-details">
                                                        <h3 class="theme-color">
                                                            $25.00
                                                            <span class="font-light ml-1">$58.00</span>
                                                        </h3>
                                                        <a href="shop.php" class="font-default">
                                                            <h5>Digital Unisex Watch</h5>
                                                        </a>
                                                        <ul class="rating">
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-box">
                                                    <div class="img-wrapper">
                                                        <a href="shop.php" class="text-center">
                                                            <img src="assets/images/electronics/product/png/13.png"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-details">
                                                        <h3 class="theme-color">
                                                            $700.00
                                                            <span class="font-light ml-1">$850.00</span>
                                                        </h3>
                                                        <a href="shop.php" class="font-default">
                                                            <h5>Smart Security Camera (White)</h5>
                                                        </a>
                                                        <ul class="rating">
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-box">
                                                    <div class="img-wrapper">
                                                        <a href="shop.php" class="text-center">
                                                            <img src="assets/images/electronics/product/png/12.png"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-details">
                                                        <h3 class="theme-color">
                                                            $78.00
                                                            <span class="font-light ml-1">$90.00</span>
                                                        </h3>
                                                        <a href="shop.php" class="font-default">
                                                            <h5>White dial Wrist Watch</h5>
                                                        </a>
                                                        <ul class="rating">
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 product-banner">
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="label-block">
                                                        <span class="label label-black">New</span>
                                                        <span class="label label-theme">50% Off</span>
                                                    </div>
                                                    <a href="javascript:void(0)">
                                                        <img src="assets/images/electronics/product/png/14.png"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                    </a>
                                                    <div class="offer-end">
                                                        <h3>Hurry Up !!!!! </h3>
                                                        <h6>Offer Expire in 02 hours</h6>
                                                    </div>
                                                </div>
                                                <div class="product-details text-center">
                                                    <h3 class="theme-color">
                                                        $600.00
                                                        <span class="font-light ml-1">$945.00</span>
                                                    </h3>
                                                    <a href="javascript:void(0)" class="font-default" tabindex="-1">
                                                        <h5 class="main-title">Bluetooth Wireless Earphones(black)</h5>
                                                    </a>
                                                    <ul class="rating">
                                                        <li>
                                                            <i class="fas fa-star theme-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star theme-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="product-list">
                                                <div class="product-box">
                                                    <div class="img-wrapper">
                                                        <a href="shop.php" class="text-center">
                                                            <img src="assets/images/electronics/product/png/8.png"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-details">
                                                        <h3 class="theme-color">
                                                            $52.00
                                                            <span class="font-light ml-1">$60.00</span>
                                                        </h3>
                                                        <a href="shop.php" class="font-default">
                                                            <h5>16MP 4K HD Action Waterproof Camera</h5>
                                                        </a>
                                                        <ul class="rating">
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-box">
                                                    <div class="img-wrapper">
                                                        <a href="shop.php" class="text-center">
                                                            <img src="assets/images/electronics/product/png/9.png"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-details">
                                                        <h3 class="theme-color">
                                                            $30.00
                                                            <span class="font-light ml-1">$50.00</span>
                                                        </h3>
                                                        <a href="shop.php" class="font-default">
                                                            <h5>Ear Bluetooth Wireless Headphone</h5>
                                                        </a>
                                                        <ul class="rating">
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-box">
                                                    <div class="img-wrapper">
                                                        <a href="shop.php" class="text-center">
                                                            <img src="assets/images/electronics/product/png/10.png"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-details">
                                                        <h3 class="theme-color">
                                                            $1000.00
                                                            <span class="font-light ml-1">$1068.00</span>
                                                        </h3>
                                                        <a href="shop.php" class="font-default">
                                                            <h5>Full HD Indoor WiFi Spy Security Camera</h5>
                                                        </a>
                                                        <ul class="rating">
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Audio" role="tabpanel">
                                <div class="offer-wrap product-style-1">
                                    <div class="row g-xl-4 g-3">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="product-list">
                                                <div class="product-box">
                                                    <div class="img-wrapper">
                                                        <a href="shop.php" class="text-center">
                                                            <img src="assets/images/electronics/product/png/9.png"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-details">
                                                        <h3 class="theme-color">
                                                            $30.00
                                                            <span class="font-light ml-1">$50.00</span>
                                                        </h3>
                                                        <a href="shop.php" class="font-default">
                                                            <h5>Ear Bluetooth Wireless Headphone</h5>
                                                        </a>
                                                        <ul class="rating">
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-box">
                                                    <div class="img-wrapper">
                                                        <a href="shop.php" class="text-center">
                                                            <img src="assets/images/electronics/product/png/8.png"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-details">
                                                        <h3 class="theme-color">
                                                            $52.00
                                                            <span class="font-light ml-1">$60.00</span>
                                                        </h3>
                                                        <a href="shop.php" class="font-default">
                                                            <h5>16MP 4K HD Action Waterproof Camera</h5>
                                                        </a>
                                                        <ul class="rating">
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-box">
                                                    <div class="img-wrapper">
                                                        <a href="shop.php" class="text-center">
                                                            <img src="assets/images/electronics/product/png/10.png"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-details">
                                                        <h3 class="theme-color">
                                                            $1000.00
                                                            <span class="font-light ml-1">$1068.00</span>
                                                        </h3>
                                                        <a href="shop.php" class="font-default">
                                                            <h5>Full HD Indoor WiFi Spy Security Camera</h5>
                                                        </a>
                                                        <ul class="rating">
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 product-banner">
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="label-block">
                                                        <span class="label label-black">New</span>
                                                        <span class="label label-theme">50% Off</span>
                                                    </div>
                                                    <a href="javascript:void(0)">
                                                        <img src="assets/images/electronics/product/png/14.png"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                    </a>
                                                    <div class="offer-end">
                                                        <h3>Hurry Up !!!!! </h3>
                                                        <h6>Offer Expire in 02 hours</h6>
                                                    </div>
                                                </div>
                                                <div class="product-details text-center">
                                                    <h3 class="theme-color">
                                                        $600.00
                                                        <span class="font-light ml-1">$945.00</span>
                                                    </h3>
                                                    <a href="javascript:void(0)" class="font-default" tabindex="-1">
                                                        <h5 class="main-title">Bluetooth Wireless Earphones(black)</h5>
                                                    </a>
                                                    <ul class="rating">
                                                        <li>
                                                            <i class="fas fa-star theme-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star theme-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="product-list">
                                                <div class="product-box">
                                                    <div class="img-wrapper">
                                                        <a href="shop.php" class="text-center">
                                                            <img src="assets/images/electronics/product/png/13.png"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-details">
                                                        <h3 class="theme-color">
                                                            $700.00
                                                            <span class="font-light ml-1">$850.00</span>
                                                        </h3>
                                                        <a href="shop.php" class="font-default">
                                                            <h5>Smart Security Camera (White)</h5>
                                                        </a>
                                                        <ul class="rating">
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-box">
                                                    <div class="img-wrapper">
                                                        <a href="shop.php" class="text-center">
                                                            <img src="assets/images/electronics/product/png/11.png"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-details">
                                                        <h3 class="theme-color">
                                                            $25.00
                                                            <span class="font-light ml-1">$58.00</span>
                                                        </h3>
                                                        <a href="shop.php" class="font-default">
                                                            <h5>Digital Unisex Watch</h5>
                                                        </a>
                                                        <ul class="rating">
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-box">
                                                    <div class="img-wrapper">
                                                        <a href="shop.php" class="text-center">
                                                            <img src="assets/images/electronics/product/png/12.png"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-details">
                                                        <h3 class="theme-color">
                                                            $78.00
                                                            <span class="font-light ml-1">$90.00</span>
                                                        </h3>
                                                        <a href="shop.php" class="font-default">
                                                            <h5>White dial Wrist Watch</h5>
                                                        </a>
                                                        <ul class="rating">
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Navigation" role="tabpanel">
                                <div class="offer-wrap product-style-1">
                                    <div class="row g-xl-4 g-3">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="product-list">
                                                <div class="product-box">
                                                    <div class="img-wrapper">
                                                        <a href="shop.php" class="text-center">
                                                            <img src="assets/images/electronics/product/png/12.png"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-details">
                                                        <h3 class="theme-color">
                                                            $78.00
                                                            <span class="font-light ml-1">$90.00</span>
                                                        </h3>
                                                        <a href="shop.php" class="font-default">
                                                            <h5>White dial Wrist Watch</h5>
                                                        </a>
                                                        <ul class="rating">
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-box">
                                                    <div class="img-wrapper">
                                                        <a href="shop.php" class="text-center">
                                                            <img src="assets/images/electronics/product/png/13.png"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-details">
                                                        <h3 class="theme-color">
                                                            $700.00
                                                            <span class="font-light ml-1">$850.00</span>
                                                        </h3>
                                                        <a href="shop.php" class="font-default">
                                                            <h5>Smart Security Camera (White)</h5>
                                                        </a>
                                                        <ul class="rating">
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-box">
                                                    <div class="img-wrapper">
                                                        <a href="shop.php" class="text-center">
                                                            <img src="assets/images/electronics/product/png/11.png"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-details">
                                                        <h3 class="theme-color">
                                                            $25.00
                                                            <span class="font-light ml-1">$58.00</span>
                                                        </h3>
                                                        <a href="shop.php" class="font-default">
                                                            <h5>Digital Unisex Watch</h5>
                                                        </a>
                                                        <ul class="rating">
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 product-banner">
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="label-block">
                                                        <span class="label label-black">New</span>
                                                        <span class="label label-theme">50% Off</span>
                                                    </div>
                                                    <a href="javascript:void(0)">
                                                        <img src="assets/images/electronics/product/png/14.png"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                    </a>
                                                    <div class="offer-end">
                                                        <h3>Hurry Up !!!!! </h3>
                                                        <h6>Offer Expire in 02 hours</h6>
                                                    </div>
                                                </div>
                                                <div class="product-details text-center">
                                                    <h3 class="theme-color">
                                                        $600.00
                                                        <span class="font-light ml-1">$945.00</span>
                                                    </h3>
                                                    <a href="javascript:void(0)" class="font-default" tabindex="-1">
                                                        <h5 class="main-title">Bluetooth Wireless Earphones(black)</h5>
                                                    </a>
                                                    <ul class="rating">
                                                        <li>
                                                            <i class="fas fa-star theme-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star theme-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="product-list">
                                                <div class="product-box">
                                                    <div class="img-wrapper">
                                                        <a href="shop.php" class="text-center">
                                                            <img src="assets/images/electronics/product/png/10.png"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-details">
                                                        <h3 class="theme-color">
                                                            $1000.00
                                                            <span class="font-light ml-1">$1068.00</span>
                                                        </h3>
                                                        <a href="shop.php" class="font-default">
                                                            <h5>Full HD Indoor WiFi Spy Security Camera</h5>
                                                        </a>
                                                        <ul class="rating">
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-box">
                                                    <div class="img-wrapper">
                                                        <a href="shop.php" class="text-center">
                                                            <img src="assets/images/electronics/product/png/9.png"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-details">
                                                        <h3 class="theme-color">
                                                            $30.00
                                                            <span class="font-light ml-1">$50.00</span>
                                                        </h3>
                                                        <a href="shop.php" class="font-default">
                                                            <h5>Ear Bluetooth Wireless Headphone</h5>
                                                        </a>
                                                        <ul class="rating">
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-box">
                                                    <div class="img-wrapper">
                                                        <a href="shop.php" class="text-center">
                                                            <img src="assets/images/electronics/product/png/8.png"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-details">
                                                        <h3 class="theme-color">
                                                            $52.00
                                                            <span class="font-light ml-1">$60.00</span>
                                                        </h3>
                                                        <a href="shop.php" class="font-default">
                                                            <h5>16MP 4K HD Action Waterproof Camera</h5>
                                                        </a>
                                                        <ul class="rating">
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade show active" id="Others" role="tabpanel">
                                <div class="offer-wrap product-style-1">
                                    <div class="row g-xl-4 g-3">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="product-list">
                                                <div class="product-box">
                                                    <div class="img-wrapper">
                                                        <a href="shop.php" class="text-center">
                                                            <img src="assets/images/electronics/product/png/8.png"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-details">
                                                        <h3 class="theme-color">
                                                            $52.00
                                                            <span class="font-light ml-1">$60.00</span>
                                                        </h3>
                                                        <a href="shop.php" class="font-default">
                                                            <h5>16MP 4K HD Action Waterproof Camera</h5>
                                                        </a>
                                                        <ul class="rating">
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-box">
                                                    <div class="img-wrapper">
                                                        <a href="shop.php" class="text-center">
                                                            <img src="assets/images/electronics/product/png/9.png"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-details">
                                                        <h3 class="theme-color">
                                                            $30.00
                                                            <span class="font-light ml-1">$50.00</span>
                                                        </h3>
                                                        <a href="shop.php" class="font-default">
                                                            <h5>Ear Bluetooth Wireless Headphone</h5>
                                                        </a>
                                                        <ul class="rating">
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-box">
                                                    <div class="img-wrapper">
                                                        <a href="shop.php" class="text-center">
                                                            <img src="assets/images/electronics/product/png/10.png"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-details">
                                                        <h3 class="theme-color">
                                                            $1000.00
                                                            <span class="font-light ml-1">$1068.00</span>
                                                        </h3>
                                                        <a href="shop.php" class="font-default">
                                                            <h5>Full HD Indoor WiFi Spy Security Camera</h5>
                                                        </a>
                                                        <ul class="rating">
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 product-banner">
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="label-block">
                                                        <span class="label label-black">New</span>
                                                        <span class="label label-theme">50% Off</span>
                                                    </div>
                                                    <a href="javascript:void(0)">
                                                        <img src="assets/images/electronics/product/png/14.png"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                    </a>
                                                    <div class="offer-end">
                                                        <h3>Hurry Up !!!!! </h3>
                                                        <h6>Offer Expire in 02 hours</h6>
                                                    </div>
                                                </div>
                                                <div class="product-details text-center">
                                                    <h3 class="theme-color">
                                                        $600.00
                                                        <span class="font-light ml-1">$945.00</span>
                                                    </h3>
                                                    <a href="javascript:void(0)" class="font-default" tabindex="-1">
                                                        <h5 class="main-title">Bluetooth Wireless Earphones(black)</h5>
                                                    </a>
                                                    <ul class="rating">
                                                        <li>
                                                            <i class="fas fa-star theme-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star theme-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="product-list">
                                                <div class="product-box">
                                                    <div class="img-wrapper">
                                                        <a href="shop.php" class="text-center">
                                                            <img src="assets/images/electronics/product/png/11.png"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-details">
                                                        <h3 class="theme-color">
                                                            $25.00
                                                            <span class="font-light ml-1">$58.00</span>
                                                        </h3>
                                                        <a href="shop.php" class="font-default">
                                                            <h5>Digital Unisex Watch</h5>
                                                        </a>
                                                        <ul class="rating">
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-box">
                                                    <div class="img-wrapper">
                                                        <a href="shop.php" class="text-center">
                                                            <img src="assets/images/electronics/product/png/13.png"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-details">
                                                        <h3 class="theme-color">
                                                            $700.00
                                                            <span class="font-light ml-1">$850.00</span>
                                                        </h3>
                                                        <a href="shop.php" class="font-default">
                                                            <h5>Smart Security Camera (White)</h5>
                                                        </a>
                                                        <ul class="rating">
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-box">
                                                    <div class="img-wrapper">
                                                        <a href="shop.php" class="text-center">
                                                            <img src="assets/images/electronics/product/png/12.png"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-details">
                                                        <h3 class="theme-color">
                                                            $78.00
                                                            <span class="font-light ml-1">$90.00</span>
                                                        </h3>
                                                        <a href="shop.php" class="font-default">
                                                            <h5>White dial Wrist Watch</h5>
                                                        </a>
                                                        <ul class="rating">
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Phones" role="tabpanel">
                                <div class="offer-wrap product-style-1">
                                    <div class="row g-xl-4 g-3">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="product-list">
                                                <div class="product-box">
                                                    <div class="img-wrapper">
                                                        <a href="shop.php" class="text-center">
                                                            <img src="assets/images/electronics/product/png/12.png"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-details">
                                                        <h3 class="theme-color">
                                                            $78.00
                                                            <span class="font-light ml-1">$90.00</span>
                                                        </h3>
                                                        <a href="shop.php" class="font-default">
                                                            <h5>White dial Wrist Watch</h5>
                                                        </a>
                                                        <ul class="rating">
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-box">
                                                    <div class="img-wrapper">
                                                        <a href="shop.php" class="text-center">
                                                            <img src="assets/images/electronics/product/png/11.png"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-details">
                                                        <h3 class="theme-color">
                                                            $25.00
                                                            <span class="font-light ml-1">$58.00</span>
                                                        </h3>
                                                        <a href="shop.php" class="font-default">
                                                            <h5>Digital Unisex Watch</h5>
                                                        </a>
                                                        <ul class="rating">
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-box">
                                                    <div class="img-wrapper">
                                                        <a href="shop.php" class="text-center">
                                                            <img src="assets/images/electronics/product/png/8.png"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-details">
                                                        <h3 class="theme-color">
                                                            $52.00
                                                            <span class="font-light ml-1">$60.00</span>
                                                        </h3>
                                                        <a href="shop.php" class="font-default">
                                                            <h5>16MP 4K HD Action Waterproof Camera</h5>
                                                        </a>
                                                        <ul class="rating">
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 product-banner">
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="label-block">
                                                        <span class="label label-black">New</span>
                                                        <span class="label label-theme">50% Off</span>
                                                    </div>
                                                    <a href="javascript:void(0)">
                                                        <img src="assets/images/electronics/product/png/14.png"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                    </a>
                                                    <div class="offer-end">
                                                        <h3>Hurry Up !!!!! </h3>
                                                        <h6>Offer Expire in 02 hours</h6>
                                                    </div>
                                                </div>
                                                <div class="product-details text-center">
                                                    <h3 class="theme-color">
                                                        $600.00
                                                        <span class="font-light ml-1">$945.00</span>
                                                    </h3>
                                                    <a href="javascript:void(0)" class="font-default" tabindex="-1">
                                                        <h5 class="main-title">Bluetooth Wireless Earphones(black)</h5>
                                                    </a>
                                                    <ul class="rating">
                                                        <li>
                                                            <i class="fas fa-star theme-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star theme-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="product-list">
                                                <div class="product-box">
                                                    <div class="img-wrapper">
                                                        <a href="shop.php" class="text-center">
                                                            <img src="assets/images/electronics/product/png/9.png"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-details">
                                                        <h3 class="theme-color">
                                                            $30.00
                                                            <span class="font-light ml-1">$50.00</span>
                                                        </h3>
                                                        <a href="shop.php" class="font-default">
                                                            <h5>Ear Bluetooth Wireless Headphone</h5>
                                                        </a>
                                                        <ul class="rating">
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-box">
                                                    <div class="img-wrapper">
                                                        <a href="shop.php" class="text-center">
                                                            <img src="assets/images/electronics/product/png/13.png"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-details">
                                                        <h3 class="theme-color">
                                                            $700.00
                                                            <span class="font-light ml-1">$850.00</span>
                                                        </h3>
                                                        <a href="shop.php" class="font-default">
                                                            <h5>Smart Security Camera (White)</h5>
                                                        </a>
                                                        <ul class="rating">
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-box">
                                                    <div class="img-wrapper">
                                                        <a href="shop.php" class="text-center">
                                                            <img src="assets/images/electronics/product/png/10.png"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-details">
                                                        <h3 class="theme-color">
                                                            $1000.00
                                                            <span class="font-light ml-1">$1068.00</span>
                                                        </h3>
                                                        <a href="shop.php" class="font-default">
                                                            <h5>Full HD Indoor WiFi Spy Security Camera</h5>
                                                        </a>
                                                        <ul class="rating">
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Computer" role="tabpanel">
                                <div class="offer-wrap product-style-1">
                                    <div class="row g-xl-4 g-3">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="product-list">
                                                <div class="product-box">
                                                    <div class="img-wrapper">
                                                        <a href="shop.php" class="text-center">
                                                            <img src="assets/images/electronics/product/png/12.png"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-details">
                                                        <h3 class="theme-color">
                                                            $78.00
                                                            <span class="font-light ml-1">$90.00</span>
                                                        </h3>
                                                        <a href="shop.php" class="font-default">
                                                            <h5>White dial Wrist Watch</h5>
                                                        </a>
                                                        <ul class="rating">
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-box">
                                                    <div class="img-wrapper">
                                                        <a href="shop.php" class="text-center">
                                                            <img src="assets/images/electronics/product/png/13.png"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-details">
                                                        <h3 class="theme-color">
                                                            $700.00
                                                            <span class="font-light ml-1">$850.00</span>
                                                        </h3>
                                                        <a href="shop.php" class="font-default">
                                                            <h5>Smart Security Camera (White)</h5>
                                                        </a>
                                                        <ul class="rating">
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-box">
                                                    <div class="img-wrapper">
                                                        <a href="shop.php" class="text-center">
                                                            <img src="assets/images/electronics/product/png/11.png"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-details">
                                                        <h3 class="theme-color">
                                                            $25.00
                                                            <span class="font-light ml-1">$58.00</span>
                                                        </h3>
                                                        <a href="shop.php" class="font-default">
                                                            <h5>Digital Unisex Watch</h5>
                                                        </a>
                                                        <ul class="rating">
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 product-banner">
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="label-block">
                                                        <span class="label label-black">New</span>
                                                        <span class="label label-theme">50% Off</span>
                                                    </div>
                                                    <a href="javascript:void(0)">
                                                        <img src="assets/images/electronics/product/png/14.png"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                    </a>
                                                    <div class="offer-end">
                                                        <h3>Hurry Up !!!!! </h3>
                                                        <h6>Offer Expire in 02 hours</h6>
                                                    </div>
                                                </div>
                                                <div class="product-details text-center">
                                                    <h3 class="theme-color">
                                                        $600.00
                                                        <span class="font-light ml-1">$945.00</span>
                                                    </h3>
                                                    <a href="javascript:void(0)" class="font-default" tabindex="-1">
                                                        <h5 class="main-title">Bluetooth Wireless Earphones(black)</h5>
                                                    </a>
                                                    <ul class="rating">
                                                        <li>
                                                            <i class="fas fa-star theme-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star theme-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="product-list">
                                                <div class="product-box">
                                                    <div class="img-wrapper">
                                                        <a href="shop.php" class="text-center">
                                                            <img src="assets/images/electronics/product/png/10.png"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-details">
                                                        <h3 class="theme-color">
                                                            $1000.00
                                                            <span class="font-light ml-1">$1068.00</span>
                                                        </h3>
                                                        <a href="shop.php" class="font-default">
                                                            <h5>Full HD Indoor WiFi Spy Security Camera</h5>
                                                        </a>
                                                        <ul class="rating">
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-box">
                                                    <div class="img-wrapper">
                                                        <a href="shop.php" class="text-center">
                                                            <img src="assets/images/electronics/product/png/9.png"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-details">
                                                        <h3 class="theme-color">
                                                            $30.00
                                                            <span class="font-light ml-1">$50.00</span>
                                                        </h3>
                                                        <a href="shop.php" class="font-default">
                                                            <h5>Ear Bluetooth Wireless Headphone</h5>
                                                        </a>
                                                        <ul class="rating">
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-box">
                                                    <div class="img-wrapper">
                                                        <a href="shop.php" class="text-center">
                                                            <img src="assets/images/electronics/product/png/8.png"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-details">
                                                        <h3 class="theme-color">
                                                            $52.00
                                                            <span class="font-light ml-1">$60.00</span>
                                                        </h3>
                                                        <a href="shop.php" class="font-default">
                                                            <h5>16MP 4K HD Action Waterproof Camera</h5>
                                                        </a>
                                                        <ul class="rating">
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Accesories" role="tabpanel">
                                <div class="offer-wrap product-style-1">
                                    <div class="row g-xl-4 g-3">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="product-list">
                                                <div class="product-box">
                                                    <div class="img-wrapper">
                                                        <a href="shop.php" class="text-center">
                                                            <img src="assets/images/electronics/product/png/10.png"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-details">
                                                        <h3 class="theme-color">
                                                            $1000.00
                                                            <span class="font-light ml-1">$1068.00</span>
                                                        </h3>
                                                        <a href="shop.php" class="font-default">
                                                            <h5>Full HD Indoor WiFi Spy Security Camera</h5>
                                                        </a>
                                                        <ul class="rating">
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-box">
                                                    <div class="img-wrapper">
                                                        <a href="shop.php" class="text-center">
                                                            <img src="assets/images/electronics/product/png/9.png"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-details">
                                                        <h3 class="theme-color">
                                                            $30.00
                                                            <span class="font-light ml-1">$50.00</span>
                                                        </h3>
                                                        <a href="shop.php" class="font-default">
                                                            <h5>Ear Bluetooth Wireless Headphone</h5>
                                                        </a>
                                                        <ul class="rating">
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-box">
                                                    <div class="img-wrapper">
                                                        <a href="shop.php" class="text-center">
                                                            <img src="assets/images/electronics/product/png/8.png"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-details">
                                                        <h3 class="theme-color">
                                                            $52.00
                                                            <span class="font-light ml-1">$60.00</span>
                                                        </h3>
                                                        <a href="shop.php" class="font-default">
                                                            <h5>16MP 4K HD Action Waterproof Camera</h5>
                                                        </a>
                                                        <ul class="rating">
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 product-banner">
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="label-block">
                                                        <span class="label label-black">New</span>
                                                        <span class="label label-theme">50% Off</span>
                                                    </div>
                                                    <a href="javascript:void(0)">
                                                        <img src="assets/images/electronics/product/png/14.png"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                    </a>
                                                    <div class="offer-end">
                                                        <h3>Hurry Up !!!!! </h3>
                                                        <h6>Offer Expire in 02 hours</h6>
                                                    </div>
                                                </div>
                                                <div class="product-details text-center">
                                                    <h3 class="theme-color">
                                                        $600.00
                                                        <span class="font-light ml-1">$945.00</span>
                                                    </h3>
                                                    <a href="javascript:void(0)" class="font-default" tabindex="-1">
                                                        <h5 class="main-title">Bluetooth Wireless Earphones(black)</h5>
                                                    </a>
                                                    <ul class="rating">
                                                        <li>
                                                            <i class="fas fa-star theme-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star theme-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="product-list">
                                                <div class="product-box">
                                                    <div class="img-wrapper">
                                                        <a href="shop.php" class="text-center">
                                                            <img src="assets/images/electronics/product/png/12.png"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-details">
                                                        <h3 class="theme-color">
                                                            $78.00
                                                            <span class="font-light ml-1">$90.00</span>
                                                        </h3>
                                                        <a href="shop.php" class="font-default">
                                                            <h5>White dial Wrist Watch</h5>
                                                        </a>
                                                        <ul class="rating">
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-box">
                                                    <div class="img-wrapper">
                                                        <a href="shop.php" class="text-center">
                                                            <img src="assets/images/electronics/product/png/13.png"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-details">
                                                        <h3 class="theme-color">
                                                            $700.00
                                                            <span class="font-light ml-1">$850.00</span>
                                                        </h3>
                                                        <a href="shop.php" class="font-default">
                                                            <h5>Smart Security Camera (White)</h5>
                                                        </a>
                                                        <ul class="rating">
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-box">
                                                    <div class="img-wrapper">
                                                        <a href="shop.php" class="text-center">
                                                            <img src="assets/images/electronics/product/png/11.png"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-details">
                                                        <h3 class="theme-color">
                                                            $25.00
                                                            <span class="font-light ml-1">$58.00</span>
                                                        </h3>
                                                        <a href="shop.php" class="font-default">
                                                            <h5>Digital Unisex Watch</h5>
                                                        </a>
                                                        <ul class="rating">
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star theme-color"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                            <li>
                                                                <i class="fas fa-star"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- tab banner section end -->


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
                                <i class="fas fa-check"></i> 3-stripes full-zip hoodie successfully added to
                                you cart.
                            </div>
                            <div class="modal-product">
                                <div class="modal-contain-img">
                                    <img src="assets/images/fashion/instagram/4.jpg" class="img-fluid blur-up lazyload"
                                        alt="">
                                </div>
                                <div class="modal-contain-details">
                                    <h4>Premier Cropped Skinny Jean</h4>
                                    <p class="font-light my-2">Yellow, Qty : 3</p>
                                    <div class="product-total">
                                        <h5>TOTAL : <span>$1,140.00</span></h5>
                                    </div>
                                    <div class="shop-cart-button mt-3">
                                        <a href="shop.php"
                                            class="btn default-light-theme conti-button default-theme default-theme-2 rounded">CONTINUE
                                            SHOPPING</a>
                                        <a href="cart.html"
                                            class="btn default-light-theme conti-button default-theme default-theme-2 rounded">VIEW
                                            CART</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="ratio_asos mt-4">
                        <div class="container">
                            <div class="row m-0">
                                <div class="col-sm-12 p-0">
                                    <div
                                        class="product-wrapper product-style-2 slide-4 p-0 light-arrow bottom-space spacing-slider">
                                        <div>
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="shop.php">
                                                            <img src="assets/images/fashion/product/front/1.jpg"
                                                                class="bg-img blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-details text-center">
                                                    <div class="rating-details d-block text-center">
                                                        <span class="font-light grid-content">B&Y Jacket</span>
                                                    </div>
                                                    <div class="main-price mt-0 d-block text-center">
                                                        <h3 class="theme-color">$78.00</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="shop.php">
                                                            <img src="assets/images/fashion/product/front/2.jpg"
                                                                class="bg-img blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-details text-center">
                                                    <div class="rating-details d-block text-center">
                                                        <span class="font-light grid-content">B&Y Jacket</span>
                                                    </div>
                                                    <div class="main-price mt-0 d-block text-center">
                                                        <h3 class="theme-color">$78.00</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="shop.php">
                                                            <img src="assets/images/fashion/product/front/3.jpg"
                                                                class="bg-img blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-details text-center">
                                                    <div class="rating-details d-block text-center">
                                                        <span class="font-light grid-content">B&Y Jacket</span>
                                                    </div>
                                                    <div class="main-price mt-0 d-block text-center">
                                                        <h3 class="theme-color">$78.00</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="shop.php">
                                                            <img src="assets/images/fashion/product/front/4.jpg"
                                                                class="bg-img blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-details text-center">
                                                    <div class="rating-details d-block text-center">
                                                        <span class="font-light grid-content">B&Y Jacket</span>
                                                    </div>
                                                    <div class="main-price mt-0 d-block text-center">
                                                        <h3 class="theme-color">$78.00</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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

    <!-- Quick view modal start -->
    <div class="modal fade quick-view-modal" id="quick-view">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <div class="row gy-4">
                        <div class="col-lg-6">
                            <div class="quick-view-image">
                                <div class="quick-view-slider ratio_2">
                                    <div>
                                        <img src="assets/images/electronics/product/1.jpg" class="img-fluid bg-img"
                                            alt="product">
                                    </div>
                                    <div>
                                        <img src="assets/images/electronics/product/8.jpg" class="img-fluid bg-img"
                                            alt="product">
                                    </div>
                                    <div>
                                        <img src="assets/images/electronics/product/9.jpg" class="img-fluid bg-img"
                                            alt="product">
                                    </div>
                                    <div>
                                        <img src="assets/images/electronics/product/8.jpg" class="img-fluid bg-img"
                                            alt="product">
                                    </div>
                                </div>
                                <div class="quick-nav">
                                    <div>
                                        <img src="assets/images/electronics/product/1.jpg"
                                            class="img-fluid blur-up lazyload" alt="product">
                                    </div>
                                    <div>
                                        <img src="assets/images/electronics/product/8.jpg"
                                            class="img-fluid blur-up lazyload" alt="product">
                                    </div>
                                    <div>
                                        <img src="assets/images/electronics/product/9.jpg"
                                            class="img-fluid blur-up lazyload" alt="product">
                                    </div>
                                    <div>
                                        <img src="assets/images/electronics/product/8.jpg"
                                            class="img-fluid blur-up lazyload" alt="product">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="product-right">
                                <h2 class="mb-2">Smart Watch ERT2</h2>
                                <h6 class="font-light mb-1">Model LR274</h6>
                                <ul class="rating">
                                    <li>
                                        <i class="fas fa-star theme-color"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star theme-color"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star theme-color"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                </ul>
                                <div class="price mt-3">
                                    <h3>$20.00</h3>
                                </div>
                                <div class="color-types">
                                    <h4>colors</h4>
                                    <ul class="color-variant mb-0">
                                        <li class="bg-half-light selected"></li>
                                        <li class="bg-light1"></li>
                                        <li class="bg-blue1"></li>
                                        <li class="bg-black1"></li>
                                    </ul>
                                </div>
                                <div class="product-details">
                                    <h4>product details</h4>
                                    <ul>
                                        <li>
                                            <span class="font-light">Display type :</span> Analog
                                        </li>
                                        <li>
                                            <span class="font-light">Mechanism:</span> Quartz
                                        </li>
                                        <li>
                                            <span class="font-light">Warranty:</span> 1 year
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-btns">
                                    <a href="#" class="btn btn-solid-default btn-sm" data-bs-dismiss="modal">Add
                                        to cart</a>
                                    <a href="#" class="btn btn-solid-default btn-sm"
                                        data-bs-dismiss="modal">View details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quick view modal end -->


    <!-- theme Setting Start
    <div class="theme-setting">
        <ul>
            <li>
                <button id="darkButton" class="btn btn-sm dark-buttton">Dark</button>
            </li>
            <li>
                <button class="btn btn-sm rtl-button">RTL</button>
            </li>
            <li class="color-picker">
                <input type="color" class="form-control form-control-color" id="ColorPicker1" value="#ff6700"
                    title="Choose your color">
            </li>
        </ul>
    </div>
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

    <!-- Bootstrap js-->
    <script src="assets/js/bootstrap/bootstrap.bundle.min.js"></script>

    <!-- feather icon js-->
    <script src="assets/js/feather/feather.min.js"></script>

    <!-- lazyload js-->
    <script src="assets/js/lazysizes.min.js"></script>

    <!-- Add To Home js -->
    <script src="assets/js/pwa.js"></script>

    <!-- Slick js-->
    <script src="assets/js/slick/slick.js"></script>
    <script src="assets/js/slick/slick-animation.min.js"></script>
    <script src="assets/js/slick/custom_slick.js"></script>

    <!-- Timer js -->
    <script src="assets/js/timer1.js"></script>

    <!-- newsletter js -->
    <script src="assets/js/newsletter.js"></script>

    <!-- Notify js-->
    <script src="assets/js/bootstrap/bootstrap-notify.min.js"></script>

    <!-- script js -->
    <script src="assets/js/script.js"></script>
    <script src="assets/js/home-script.js"></script>
    
    
    <script>
        $("#darkButton").on("click", function () {
  if ($("body").hasClass("light")) {
    var href = $("#color-link").attr("href");
    var split = href.split("/").pop().split(".").shift();
    $("body").removeClass("light");
    $("body").addClass("dark");
    document
      .getElementById("color-link")
      .setAttribute("href", "assets/css/" + split + "_dark.css");
  } else {
    var href = $("#color-link").attr("href");
    var split = href.split("/").pop().split(".").shift().split("_").shift();
    $("body").removeClass("dark");
    $("body").addClass("light");
    document
      .getElementById("color-link")
      .setAttribute("href", "assets/css/" + split + ".css");
  }
});
    </script>
</body>

</html>