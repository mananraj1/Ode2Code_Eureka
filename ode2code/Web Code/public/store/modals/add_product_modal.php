 <?php
    if(isset($_POST['add_product']))
    {
        $pname=  $_POST['pname'];
        $pcat=  $_POST['pcat'];
        $qty=  $_POST['qty'];
        $price=  $_POST['price'];
        $dprice=  $_POST['dprice'];
        
        
        $image = $_FILES['image']['name'];
        $tempname = $_FILES['image']['tmp_name'];
        if($image!='')
        {
            $image = md5(time().$uid).'_'.$image;
            $image = "uploads/products/image/".$image;
            move_uploaded_file($tempname,$image);
            $image=$url."store/".$image;
        }
        
        
        $video = $_FILES['video']['name'];
        $tempname = $_FILES['video']['tmp_name'];
        if($video!='')
        {
            $video = md5(time().$uid).'_'.$video;
            $video = "uploads/products/video/".$video;
            move_uploaded_file($tempname,$video);
            $video=$url."store/".$video;
        }
        
        if(mysqli_query($conn,"INSERT INTO products(`sid`,`pname`,`pcat`,`price`,`dprice`,`qty`,`image`,`video`,`status`) VALUES ('$uid','$pname','$pcat','$price','$dprice','$qty','$image','$video','1')"))
        {
            
        }
    }
 ?>
 
 <!-- Modal Start -->
    <div class="modal fade" id="addProductModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <h5 class="modal-title" id="staticBackdropLabel">Add Products</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <hr>
                    <form method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <input type="text" class="form-control" style="width:80% !important;margin-left:20px !important" name="pname" placeholder="Product Name">
                            <label style="margin-left:10px !important"><b>Product Name</b></label>
                        </div>
                        
                        <div class="row">
                            
                            <select class="form-control" style="width:80% !important;margin-left:20px !important" name="pcat" placeholder="Category">
                                <option value="Xiaomi Phones">Xiaomi Phones</option>
                                <option value="Redmi Phones">Redmi Phones</option>
                                <option value="TV">TV</option>
                                <option value="Laptops & Tablets">Laptops & Tablets</option>
                                <option value="Audio">Audio</option>
                            </select>
                            <label style="margin-left:10px !important"><b>Category</b></label>
                            
                        </div>
                        
                        <div class="row">
                            <input type="number" class="form-control" style="width:80% !important;margin-left:20px !important" name="qty" placeholder="Quantity Available">
                            <label style="margin-left:10px !important"><b>Quantity Available</b></label>
                        </div>
                        
                        <div class="row">
                            <input type="number" step="0.01" class="form-control" style="width:80% !important;margin-left:20px !important" name="price" placeholder="Price">
                            <label style="margin-left:10px !important"><b>Price</b></label>
                        </div>
                        
                        <div class="row">
                            <input type="number" step="0.01" class="form-control" style="width:80% !important;margin-left:20px !important" name="dprice" placeholder="Discounted Price">
                            <label style="margin-left:10px !important"><b>Discounted Price</b></label>
                        </div>
                        
                        <div class="row">
                            <input type="file" class="form-control" style="width:80% !important;margin-left:20px !important" name="image" placeholder="Image">
                            <label style="margin-left:10px !important"><b>Image</b></label>
                        </div>
                        
                        <div class="row">
                            <input type="file" class="form-control" style="width:80% !important;margin-left:20px !important" name="video" placeholder="Image">
                            <label style="margin-left:10px !important"><b>AR Video</b></label>
                        </div>
                        <br>
                        <div class="row">
                            <center><button class="btn btn-primary" name="add_product">Add Products</button></center>
                        </div>
                    </form>
                    <br>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal End -->