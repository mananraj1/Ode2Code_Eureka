<?php
use Phppot\Order;
require_once __DIR__ . '/../Model/Order.php';
function getHTMLPurchaseDataToPDF($result, $orderItemResult, $orderedDate, $due_date)
{
    $pid=$_GET['pid'];
ob_start();
?>
<html>
<head>
</head>
<body>
<div style="position: relative;text-align: center;color: white;">
    <h3 style="color:#000000">Add Product QR</h3>
  <img src="https://chart.googleapis.com/chart?chs=500x500&cht=qr&chl=<?php echo $pid;?>&choe=UTF-8"  style="height:250px;width:250px%;">
  <h3 style="color:#000000">AR Video Marker</h3>
  <p style="color:#000000">(You can also place this marker over Add product QR to make it one)</p>
  <div style="position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);"><img src="https://upload.wikimedia.org/wikipedia/commons/4/48/Hiro_marker_ARjs.png" style="height:250px;width:250px%;"></div>
</div>
</body>
</html>

<?php
return ob_get_clean();
}
?>