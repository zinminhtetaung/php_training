<?php
// Include qrcode.php file.
include "qrcode.php";
// Create object
$qc = new QRCODE();
// Create Text Code
$qc->TEXT("Zin Min Htet Aung");
// Save QR Code
$qc->QRCODE(400,"Knowband_text.png");
?>