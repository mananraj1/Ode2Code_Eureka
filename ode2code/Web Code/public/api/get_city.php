<?php

header("Access-Control-Allow-Origin: * ");

include '../db-config/config.php';

$st = $_GET['district'];
$row = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM `district` WHERE name='$st'"));
$st_code = $row['id'];

$res = mysqli_query($conn,"SELECT * FROM city WHERE `districtid`='$st_code'");
$p='';
while($row=mysqli_fetch_assoc($res))
{
    $id= $row['id'];
    $dis = $row['name'];
    $p=$p.'<option value="'.$id.'">'.$dis.'</option>';
}

echo $p;
?>