<?php 

$dbServername = "localhost";
$dbUsername = "ode2code_db";
$dbPassword = "ode2code_db";
$dbName = "ode2code_db";

// create connection
$conn = new mysqli($dbServername,$dbUsername,$dbPassword,$dbName);
// check connection
if($conn -> connect_error) {
    die("connection failed:".$conn->connect_error);
}

// enter your website's url with '/' at end here
$url = 'https://ode2code.mananraj.co.in/';

?>
