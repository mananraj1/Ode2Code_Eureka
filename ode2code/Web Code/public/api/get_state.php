<?php

header("Access-Control-Allow-Origin: * ");

include '../db-config/config.php';

$res = mysqli_query($conn,"SELECT * FROM `state`");

$p='';
while($row=mysqli_fetch_assoc($res))
{
    $state = $row['name'];
    $p=$p.'<option value="'.$state.'">'.$state.'</option>';
}

echo $p;
?>