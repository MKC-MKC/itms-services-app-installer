<?php
/*
 * Detect current URL path
 * 1 - Check the protocol
 * 2 - Full website address
 */
$protocol = !isset($_SERVER['HTTPS']) || $_SERVER['HTTPS'] != 'on' ? 'http' : 'https'; // 1
define('URL', ''. $protocol . '://'. $_SERVER['HTTP_HOST'] . ''); // 2

/*
 * QR Encode
 */
if( isset($_GET['qr']) ) {
    include(__DIR__.'/qr/qrlib.php'); // Connect QR Library
    $param = $_GET['qr'];  // Filtering
    QRcode::png($param); // Return PNG image
}

/*
 * Link functions file
 */
require_once __DIR__.'/functions.php';