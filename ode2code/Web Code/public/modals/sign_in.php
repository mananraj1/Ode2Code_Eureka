
<?php
if(isset($_POST['log_in']))
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

if(isset($_POST['register']))
{
        $email=$_POST['email'];
        $password=md5($_POST['password']);
        $name=$_POST['name'];
        $phone= $_POST['phone'];
        
        $sql="SELECT * FROM `customers` WHERE `email`='$email' or `phone`='$phone'";
        $res = mysqli_query($conn,$sql);
        
        if(mysqli_num_rows($res)==0)
        {
            $sql="INSERT INTO customers(`name`,`phone`,`email`,`password`,`status`) VALUES ('$name','$phone','$email','$password','1')";
            $res=mysqli_query($conn,$sql);
            if($res)
            {
                $res=mysqli_query($conn,"SELECT * FROM `customers` WHERE `email`='$email'");
                $row=mysqli_fetch_assoc($res);
                $id=$row['id'];
                $username="MIID0000".$id;
                mysqli_query($conn,"UPDATE `customers` set `username`='$username' WHERE `email`='$email'");
                $_SESSION['id']=$id;
                $alert = '<div class="alert alert-success" style="background-color:green" role="alert">Account created successful, logging you in!</div>';
                header( "refresh:2;url=index.php" );
            }
            else
            {
                $alert='<div class="alert alert-danger" style="background-color:#ff0000" role="alert">Your account is inactive, please contact Xiaomi Admin!</div>';
            }
        }
        else
        {
            $alert='<div class="alert alert-danger" style="background-color:#ff0000" role="alert">Email or Phone already registered !</div>';
        }
}
?>
 
 <!-- Modal Start -->
    <div class="modal fade" id="signInModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        
        <div class="modal-dialog  modal-dialog-centered">
            <div class="modal-content">
                <?php if($alert!='')
        echo $alert;?>
                <div class="modal-body">
                    <h5 class="modal-title" id="staticBackdropLabel">Sign In</h5>
                    <hr>
                    <form method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <input type="text" class="form-control" style="width:80% !important;margin-left:20px !important" name="email" placeholder="Email/Username Here">
                            <label style="margin-left:10px !important"><b>Email / Username</b></label>
                        </div>
                        
                        <div class="row">
                            <input type="text" class="form-control" style="width:80% !important;margin-left:20px !important" name="password" placeholder="Password Here">
                            <label style="margin-left:10px !important"><b>Password</b></label>
                        </div>
                        
                        
                        <br>
                        <hr>
                        <div class="row">
                            <center><button type="submit" class="btn btn-primary" name="log_in">Sign In</button> <button type="button" class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">Close</button></center>
                        </div>
                        
                    </form>
                    <br>
                </div>
            </div>
        </div>
    </div>
    
    
    
    <div class="modal fade" id="signUpModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered">
            <div class="modal-content">
                <?php if($alert!='')
        echo $alert;?>
                <div class="modal-body">
                    <h5 class="modal-title" id="staticBackdropLabel">Register</h5>
                    <hr>
                    <form method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <input type="text" class="form-control" style="width:80% !important;margin-left:20px !important" name="name" placeholder="Full Name Here">
                            <label style="margin-left:10px !important"><b>Name</b></label>
                        </div>
                        
                        <div class="row">
                            <input type="number" class="form-control" style="width:80% !important;margin-left:20px !important" name="phone" placeholder="Phone Number Here">
                            <label style="margin-left:10px !important"><b>Phone</b></label>
                        </div>
                        
                        <div class="row">
                            <input type="email" class="form-control" style="width:80% !important;margin-left:20px !important" name="email" placeholder="Email/Username Here">
                            <label style="margin-left:10px !important"><b>Email</b></label>
                        </div>
                        
                        <div class="row">
                            <input type="text" class="form-control" style="width:80% !important;margin-left:20px !important" name="password" placeholder="Password Here">
                            <label style="margin-left:10px !important"><b>Password</b></label>
                        </div>
                        
                        
                        <br>
                        <hr>
                        <div class="row">
                            <center><button type="submit" class="btn btn-primary" name="register">Register</button> <button type="button" class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">Close</button></center>
                        </div>
                        
                    </form>
                    <br>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal End -->