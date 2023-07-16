<?php
if (isset($_POST['email'])) {
	$email = $_POST['email'];
	$pos = strpos($email, '@');
	$username = strtoupper(substr($email, 0, $pos));
	}
?>



<!DOCTYPE html>
<html lang="en-US">
	<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>(QR) Code Generator</title>
	<link rel="stylesheet" href="libs/css/bootstrap.min.css">
	<link rel="stylesheet" href="libs/style.css">
	<script src="libs/navbarclock.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        @media (max-width: 767px) {
            .form-group {
                flex-direction: column;
            }
        }
    tr,td{border:5px solid;}
	label, input {
	  display: block;
	  width: 100%;
	  padding: 9px;
	  border: none;
	  outline: none;
	  box-sizing: border-box;
	}
	 .form-group{ padding: 4px;}
	.form-control {
	  background: #ecf0f3;
	  padding: 10px;
	  padding-left: 20px;
	  height: 50px;
	  font-size: 14px;
	  border-radius: 10px;
	  box-shadow: inset 6px 6px 6px #cbced1, inset -6px -6px 6px white;
	}
	select::placeholder, textarea::placeholder, input::placeholder {
	  color: gray;
	}
	.submitBtn {
	  color: white;
	  margin-top: 20px;
	  background: #1DA1F2;
	  height: 50px;
	  border-radius: 9px;
	  cursor: pointer;
	  font-weight: 900;
	  box-shadow: 6px 6px 6px #cbced1, -6px -6px 6px white;
	  transition: 0.5s;
	}

	.submitBtn:hover {
	  box-shadow: none;
	}
  </style>
	</head>
	<body onload="startTime()" style="font-size: 1.5rem !important;">
		<div class="container" style="padding: 24px;margin-top: 50%;">
				
				<div class="row">
				<div class="prefilled-prd-details" style="width: 100%;border-bottom: 5px solid #0ae52ffa;background: #000;">
					<h2 style="padding: 15px;background: #000;color: #fff;text-align: center;">
					We're sorry to hear about your problem. Please wait for an update as we resolve your concern. Your case id is <?php echo $username.time();?>.
					</h2>
				</div>
	</body>			
</html>