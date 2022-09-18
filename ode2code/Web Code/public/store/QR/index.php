<?php
use Phppot\Order;
$pid=$_GET['pid'];

    require_once __DIR__ . "/lib/PDFService.php";
    $pdfService = new PDFService();
    $pdfService->generatePDF();