<?php

header("Access-Control-Allow-Origin: * ");

include '../db-config/config.php';

$st = $_GET['state'];
$row = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM `state` WHERE name='$st'"));
$st_code = $row['id'];

$res = mysqli_query($conn,"SELECT * FROM district WHERE `state_id`='$st_code'");
$p='';
while($row=mysqli_fetch_assoc($res))
{
    $dis = $row['name'];
    $p=$p.'<option value="'.$dis.'">'.$dis.'</option>';
}

echo $p;
?>