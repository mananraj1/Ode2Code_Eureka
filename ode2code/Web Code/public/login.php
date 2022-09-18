<?php 

session_start();
include 'db-config/config.php';
$title = "Xiaomi Customer | Login";

if(isset($_POST['login']))
{
    if($_SESSION['vercode']==$_POST['captcha'])
    {
        $email=$_POST['email'];
        $password=md5($_POST['password']);
        
        $sql="SELECT * FROM `customers` WHERE (`email`='$email' or `username`='$email') AND `password`='$password'";
        $res = mysqli_query($conn,$sql);
        
        if(mysqli_num_rows($res)>0)
        {
            $row=mysqli_fetch_assoc($res);
            if($row['status']=='1')
            {
                $id=$row['id'];
                $_SESSION['id']=$id;
                $alert = '<div class="alert alert-success" style="background-color:green" role="alert">Authentication successful, logging you in!</div>';
                echo "<script>window.location.href='index.php'</script>";
            }
            else
            {
                $alert='<div class="alert alert-danger" style="background-color:#ff0000" role="alert">Your account is inactive, please contact Xiaomi Admin!</div>';
            }
        }
        else
        {
            $alert='<div class="alert alert-danger" style="background-color:#ff0000" role="alert">Wrong Email or Password, please try again !</div>';
        }
    }
    else
    {
        $alert='<div class="alert alert-danger" style="background-color:#ff0000" role="alert">Wrong captcha, please try again !</div>';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Xiaomi Stores">
<meta name="keywords" content="">
<meta name="author" content="pixelstrap">
<link rel="icon" href="<?php echo $url."icon.png";?>" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $url."icon.png";?>" type="image/x-icon">
<title><?php echo $title;?></title>
<!-- Google font-->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200&family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Linear Icon css -->
    <link rel="stylesheet" href="admin/assets/css/linearicon.css">

    <!-- fontawesome css -->
    <link rel="stylesheet" type="text/css" href="admin/assets/css/vendors/font-awesome.css">

    <!-- Themify icon css-->
    <link rel="stylesheet" type="text/css" href="admin/assets/css/vendors/themify.css">

    <!-- ratio css -->
    <link rel="stylesheet" type="text/css" href="admin/assets/css/ratio.css">

    <!-- Feather icon css-->
    <link rel="stylesheet" type="text/css" href="admin/assets/css/vendors/feather-icon.css">

    <!-- Plugins css -->
    <link rel="stylesheet" type="text/css" href="admin/assets/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="admin/assets/css/vendors/animate.css">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="admin/assets/css/vendors/bootstrap.css">

    <!-- vector map css -->
    <link rel="stylesheet" type="text/css" href="admin/assets/css/vector-map.css">

    <!-- slick slider css -->
    <link rel="stylesheet" type="text/css" href="admin/assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="admin/assets/css/slick-theme.css">

    <!-- App css -->
    <link rel="stylesheet" type="text/css" href="admin/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="admin/assets/css/main.css">

    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="admin/assets/css/responsive.css">
</head>
<?php include 'modals/sign_in.php';?>
<body>
    <!-- login page start-->
    <div class="container-fluid p-0">
        <div class="row m-0">
            <div class="col-12 p-0">
                <div class="login-section">
                    <div class="materialContainer">
                            <?php if(isset($alert)){echo $alert;}?>
                        <div class="box">
                            <div class="login-title">
                                <h2>Customer Login</h2>
                            </div>
                            <form method="post">
                                <div class="input">
                                    <label for="name">Email / Username</label>
                                    <input type="text" name="email" id="name" required>
                                    <span class="spin"></span>
                                </div>
    
                                <div class="input">
                                    <label for="pass">Password</label>
                                    <input type="password" name="password" id="pass" required>
                                    <span class="spin"></span>
                                </div>
                                
                                <div class="input">
                                    <label for="captcha">Captcha</label>
                                    <input type="password" name="captcha" id="captcha" required>
                                    <img src="captcha.php" style="margin-top: -25px;float: right;">
                                </div>
    
                                <?php // <a href="forgot-password.html" class="pass-forgot">Forgot your password?</a> ?>
    
                                <div class="button login">
                                    <button type="submit" name="login">
                                        <span>Log In</span>
                                        <i class="fa fa-check"></i>
                                    </button>
                                </div>
                            </form>
                            <p> <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#signUpModal" class="align-items-center btn btn-theme">Register here!</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- latest jquery-->
        <script src="admin/assets/js/jquery-3.6.0.min.js"></script>

        <!-- Bootstrap js-->
        <script src="admin/assets/js/bootstrap/bootstrap.bundle.min.js"></script>

        <!-- Theme js-->
        <script src="admin/assets/js/script.js"></script>
    </div>
</body>

</html>