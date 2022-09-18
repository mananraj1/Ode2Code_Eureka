<?php
session_start();
include 'db-config/config.php';

if(isset($_SESSION['id']))
{
    $cid=$_SESSION['id'];
    $row_cus=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM `customers` WHERE `id`=$cid"));
}
else
{
    echo "<script>window.location.href='login.php'</script>";
}

if(isset($_POST['pid']))
{
    $pid=$_POST['pid'];
    $res_pro=mysqli_query($conn,"SELECT * FROM `products` WHERE `id`='$pid'");
    
    $c= mysqli_num_rows($res_pro);
    if($c==0)
    {
        echo "<script>alert('Wrong QR');</script>";
        echo "<script>window.location.href='shop.php'</script>";
    }
    else
    {
        $row_pro=mysqli_fetch_assoc($res_pro);
        $sid=$row_pro['sid'];
        $_SESSION['store_id']=$sid;
        $count=count($_SESSION['cart']);
        $_SESSION['cart'][$count]=$_POST['pid'];
        echo "<script>window.location.href='shop.php'</script>";
    }
}
?>
<html>
<head>
    <title>Scan QR</title>
    </head>
    <body style="background-color:#000000">
    
    <div id="qr-reader" style="width: 100%;
    height: 100%;
    position: relative;
    padding: 0px;
    border: 1px solid silver;"></div>
    <div id="qr-reader-results"></div>
    
    <form method="post" id="form_add_to_cart">
        <input type="hidden" name="pid" id="pid">
    </form>
    <script src="https://unpkg.com/html5-qrcode"></script>

    <script>
       var resultContainer = document.getElementById('qr-reader-results');
        var lastResult, countResults = 0;
    
    function onScanSuccess(decodedText, decodedResult) 
    {
        if (decodedText !== lastResult) 
        {
            ++countResults;
            lastResult = decodedText;
            // Handle on success condition with the decoded message.
            document.getElementById("pid").value=lastResult;
            document.getElementById("form_add_to_cart").submit();
        }
    }
    
    var html5QrcodeScanner = new Html5QrcodeScanner(
        "qr-reader", { fps: 10, qrbox: 500 });
    html5QrcodeScanner.render(onScanSuccess);
    </script>


</body>

</html>