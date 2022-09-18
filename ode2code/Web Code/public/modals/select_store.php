
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
 <?php if($_SESSION['store_id']=='')
 {?>
    <div class="modal fade show" id="signInModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-modal="true" role="dialog" style="display: block;">
        
        <div class="modal-dialog  modal-dialog-centered">
            <div class="modal-content">
                <div class="alert alert-danger" style="background-color:#ff0000" role="alert">Note to TESTERS : We have created just one store Karnataka> Tumakuru> Tumkur ! Either create a new store with different locations or use this store only to test Shop !</div>
                <div class="modal-body">
                    <h5 class="modal-title" id="staticBackdropLabel">Select Store</h5>
                    <hr>
                    <form method="POST">
                        <div class="mb-4 row align-items-center">
                            <label class="form-label-title col-sm-4 mb-0">State</label>
                            <div class="col-sm-8">
                                <select class="form-control" required  name="state" id="state" onchange="change_dist()">
                                    <?php
                                    $res = mysqli_query($conn,"SELECT * FROM `state`");
                                    while($row=mysqli_fetch_assoc($res))
                                    {
                                        $state = $row['name'];
                                        ?>
                                        <option value="<?php echo $state;?>" ><?php echo $state;?></option>
                                    
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        
                        <div class="mb-4 row align-items-center">
                            <label class="form-label-title col-sm-4 mb-0">District</label>
                            <div class="col-sm-8">
                                <select class="form-control" required  name="district" id="district" onchange="change_city()">
                                    <option value="">Select District</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="mb-4 row align-items-center">
                            <label class="form-label-title col-sm-4 mb-0">City</label>
                            <div class="col-sm-8">
                                <select class="form-control" required  name="city" onchange="change_store()" id="city">
                                    <option value="">Select City</option>
                                </select>
                            </div>
                        </div>
                        
                        <div id="store">
                            
                            <div class="mb-4 row align-items-center">
                            <label class="form-label-title col-sm-4 mb-0">store</label>
                            <div class="col-sm-8">
                                <select class="form-control" required  name="store_id" id="store">
                                    <option value="">Select Store</option>
                                </select>
                            </div>
                            
                            </div>
                            
                            
                        </div>
                        
                        
                        
                        
                    </form>
                    <script>
	                                    	    
	                                    	    function change_store()
	                                    	    {
	                                    	        var msg="msg";
	                                    	        var dist = document.getElementById("city").value;
	                                    	         $.ajax({
                                                                type: "POST",
                                                                url: "<?php echo $url;?>api/get_store?city="+dist,
                                                                data: JSON.stringify({ "msg": msg}),
                                                                contentType: "application/json",
                                                                success: function (result) 
                                                                {
                                                                    document.getElementById("store").innerHTML=result;
                                                                    
                                                                    //console.log(result);
                                                                },
                                                                error: function (result, status) 
                                                                {
                                                                  //console.log(result);
                                                                }
                                                            });
	                                    	        
	                                    	    }
	                                    	    
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
                                                                    change_store()
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
	                                    	    change_dist();
	                                    	    
	                                    	</script>
                    <br>
                </div>
            </div>
        </div>
    </div>
 <?php
 }?>