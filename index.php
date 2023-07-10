<?php

require_once('/usr/local/lib/phpqrcode/qrlib.php');
// Test QR code generation
QRcode::png('Hello, World!');
