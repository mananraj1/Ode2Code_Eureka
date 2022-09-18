<?php

header("Access-Control-Allow-Origin: * ");

include '../db-config/config.php';

$st = $_GET['city'];
$res = mysqli_query($conn,"SELECT * FROM `stores` WHERE city='$st'");
$p='<div class="mb-4 row align-items-center">
                            <label class="form-label-title col-sm-4 mb-0">store</label>
                            <div class="col-sm-8">
                                <select class="form-control" required  name="store_id">';

                                 
                                
while($row=mysqli_fetch_assoc($res))
{
    $id= $row['id'];
    $dis = $row['name'];
    $p=$p.'<option value="'.$id.'">'.$dis.'</option>';
}

$p=$p.'</select></div>';

$p=$p.'<br><br><hr>
                        <div class="row">
                            <center><button type="submit" class="btn btn-primary" name="select_store">Select Store</button> 
                        </div>';
                        
$res = mysqli_query($conn,"SELECT * FROM `stores` WHERE city='$st'");
$num=mysqli_num_rows($res);
if($num==0)
{
    $p='<div class="alert alert-danger" style="background-color:#ff0000" role="alert">No stores available !</div>';
}
echo $p;
?>