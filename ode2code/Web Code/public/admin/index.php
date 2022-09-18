<?php 

session_start();
include '../db-config/config.php';
$title = "Xiaomi Admin | Login";

if(isset($_POST['login']))
{
    if($_SESSION['vercode']==$_POST['captcha'])
    {
        $email=$_POST['email'];
        $password=md5($_POST['password']);
        
        $sql="SELECT * FROM `admin` WHERE `username`='$email' AND `password`='$password'";
        $res = mysqli_query($conn,$sql);
        
        if(mysqli_num_rows($res)>0)
        {
            $row=mysqli_fetch_assoc($res);
            $id=$row['id'];
            $_SESSION['id']=$id;
            $alert = '<div class="alert alert-success" style="background-color:green" role="alert">Authentication successful, logging you in!</div>';
            header( "refresh:2;url=dashboard.php" );
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
    <?php include 'includes/head.php';?>
</head>

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
                                <h2>Admin Login</h2>
                            </div>
                            <form method="post">
                                <div class="input">
                                    <label for="name">Username</label>
                                    <input type="test" name="email" id="name" required>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- latest jquery-->
        <script src="assets/js/jquery-3.6.0.min.js"></script>

        <!-- Bootstrap js-->
        <script src="assets/js/bootstrap/bootstrap.bundle.min.js"></script>

        <!-- Theme js-->
        <script src="assets/js/script.js"></script>
    </div>
</body>

</html>