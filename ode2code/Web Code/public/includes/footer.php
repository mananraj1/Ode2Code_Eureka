<footer class="footer-sm-space">
        <div class="main-footer">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="footer-contact">
                            <div class="brand-logo">
                                <a href="https://ode2code.mananraj.co.in/">
                                    <img src="logo.png" class="img-fluid blur-up lazyloaded" style="height:60px;width:100px" alt="logo">
                                </a>
                            </div>
                            <ul class="contact-lists">
                                <li>
                                    <span>
                                        <b>phone:</b>
                                        <span class="font-light"> + 185659635</span>
                                    </span>

                                </li>
                                <li>
                                    <span>
                                        <b>Address:</b>
                                        <span class="font-light"> 1418 Riverwood Drive, Suite 3245
                                            Cottonwood, CA 96052, United States</span>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <b>Email:</b>
                                        <span class="font-light"> Voxo123@gmail.com</span>
                                    </span>

                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="footer-links">
                            <div class="footer-title">
                                <h3>About us</h3>
                            </div>
                            <div class="footer-content">
                                <ul>
                                    <li>
                                        <a href="index.php" class="font-dark">Home</a>
                                    </li>
                                    <li>
                                        <a href="shop.php" class="font-dark">Shop</a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="footer-links">
                            <div class="footer-title">
                                <h3>Navigation</h3>
                            </div>
                            <div class="footer-content">
                                <ul>
                                    <li>
                                        <a href="orders.php" class="font-dark">Your Orders</a>
                                    </li>
                                    <li>
                                        <a href="profile.php" class="font-dark">Your Account</a>
                                    </li>
                                    <li>
                                        <a href="cart.php" class="font-dark">Your Cart</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 d-none d-sm-block">
                        <div class="footer-newsletter">
                            
                            <div class="form-newsletter">
                                <div class="input-group mb-4">
                                    <a href="https://in.chat.kefu.mi.com/page/index/v2?tag=in&token=aW4jNTAwMCNpbi53ZWIubWkjd2Vic2l0ZSNnb29kc0RldGFpbA==&groupId=P0&locale=en&closedshow=1">
                                       <span class="input-group-text" id="basic-addon4">CHAT NOW<i
                                            class="fas fa-arrow-right"></i></span></a>
                                    
                                </div>
                                <p class="font-dark mb-0">Chat with our Virtual AI Bot - Now in हिन्दी/English
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sub-footer">
            <div class="container">
                <div class="row gy-3">
                    <div class="col-md-6">
                        <ul>
                            <li class="font-dark">We accept:</li>
                            <li>
                                <a href="javascript:void(0)">
                                    <img src="assets/images/payment-icon/1.jpg" class="img-fluid blur-up lazyload"
                                        alt="payment icon"></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <img src="assets/images/payment-icon/2.jpg" class="img-fluid blur-up lazyload"
                                        alt="payment icon"></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <img src="assets/images/payment-icon/3.jpg" class="img-fluid blur-up lazyload"
                                        alt="payment icon"></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <img src="assets/images/payment-icon/4.jpg" class="img-fluid blur-up lazyload"
                                        alt="payment icon"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <p class="mb-0">Copyright 2022 © Project by Team Eureka (<a href="https://mananraj.co.in">(i) Manan Raj</a><a href="https://saijalshankar.com">(ii) Saijal Shankar</a>)</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    
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