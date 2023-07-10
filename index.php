<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once('/usr/local/lib/phpqrcode/qrlib.php');
// Test QR code generation
QRcode::png('Hello, World!');



