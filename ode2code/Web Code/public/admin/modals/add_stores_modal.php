 <?php
    if(isset($_POST['add_store']))
    {
        $name=  $_POST['name'];
        $manager=  $_POST['mname'];
        $contact=  $_POST['contact'];
        $email=  $_POST['email'];
        $password=  md5($_POST['password']);
        $state=  $_POST['state'];
        $district=  $_POST['district'];
        $city=  $_POST['city'];
        $address=  $_POST['address'];
        
        $sql="SELECT * FROM `stores` WHERE `email`='$email'";
        $res = mysqli_query($conn,$sql);
        
        if(mysqli_num_rows($res)==0)
        {
            if(mysqli_query($conn,"INSERT INTO stores(`name`,`state`,`district`,`city`,`contact`,`address`,`manager`,`email`,`password`,`status`) VALUES ('$name','$state','$district','$city','$contact','$address','$manager','$email','$password','1')"))
            {
                $alert = '<div class="alert alert-success" style="background-color:green" role="alert">Store Added !</div>';
            }
            else
                $alert='<div class="alert alert-danger" style="background-color:#ff0000" role="alert">Something Went Wrong!</div>';
        }
        else
        {
            $alert='<div class="alert alert-danger" style="background-color:#ff0000" role="alert">Email ALready Registered!</div>';
        }
    }
 ?>
 
 <!-- Modal Start -->
    <div class="modal fade" id="addStoresModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <h5 class="modal-title" id="staticBackdropLabel">Add Products</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <hr>
                    <form method="POST" enctype="multipart/form-data">
                        <div class="row">
                                                    <div class="mb-4 row align-items-center">
                                                        <label class="form-label-title col-sm-4 mb-0">Store Name</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" name="name"  class="form-control" required  type="text" placeholder="Enter Your Store Name">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="mb-4 row align-items-center">
                                                        <label class="form-label-title col-sm-4 mb-0">Manager Name</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" name="mname"  class="form-control" required  type="text" placeholder="Enter Your Store's Manager Name">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="mb-4 row align-items-center">
                                                        <label class="form-label-title col-sm-4 mb-0">Store Phone Number</label>
                                                        <div class="col-sm-8">
                                                            <input type="number" name="contact" class="form-control" required  type="text" placeholder="Enter Your Store's Number">
                                                        </div>
                                                    </div>

                                                    <div class="mb-4 row align-items-center">
                                                        <label class="form-label-title col-sm-4 mb-0">Email Address</label>
                                                        <div class="col-sm-8">
                                                            <input class="form-control" required  name="email" type="email"  placeholder="Enter Email Address">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="mb-4 row align-items-center">
                                                        <label class="form-label-title col-sm-4 mb-0">Password</label>
                                                        <div class="col-sm-8">
                                                            <input class="form-control" required  name="password" type="password"  placeholder="Enter Password">
                                                        </div>
                                                    </div>
                                                    
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
                                                            <select class="form-control" required  name="city" id="city">
                                                                <option value="">Select City</option>
                                                            </select>
                                                        </div>
                                                    </div>


                                                    
                                                    

                                                    <div class="mb-4 row align-items-center">
                                                        <label
                                                            class="col-sm-4 col-form-label form-label-title">Address</label>
                                                        <div class="col-sm-8">
                                                            <textarea class="form-control" required  name="address"></textarea>
                                                        </div>
                                                    </div>

                                                    

                                                    <div class="mb-4 row align-items-center">
                                                        <center>
                                                        <div class="col-sm-8">
                                                            <button type="submit" name="add_store" class="btn btn-primary">Update Profile</button>
                                                        </div>
                                                        </center>
                                                        
                                                    </div>
                                                </div>
                    </form>
                    <br>
                </div>
            </div>
        </div>
    </div>
    
    
    <!-- Modal End -->