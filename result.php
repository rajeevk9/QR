<?php
	if (isset($_GET['ProductName'])) {
		$productName = rawurldecode($_GET['ProductName']);
	}
	if (isset($_GET['ProductNumber'])) {
		$productNumber = $_GET['ProductNumber'];
	}
	if (isset($_GET['ProductBatch'])) {
		$productBatch = $_GET['ProductBatch'];
	}
	if (isset($_GET['ProductMfgDate'])) {
		$productMfgDate = $_GET['ProductMfgDate'];
	}
	if (isset($_GET['ProductExpDate'])) {
		$productExpDate = $_GET['ProductExpDate'];
	}
	if (isset($_POST['uname'])) {
		$uname = $_POST['uname'];
	}
	if (isset($_POST['email'])) {
		$email = $_POST['email'];
		$pos = strpos($email, '@');
		$username = substr($email, 0, $pos);
	}
	if (isset($_POST['mob'])) {
		$mob = $_POST['mob'];
	}
	if (isset($_POST['prbtype'])) {
		$prbtype = $_POST['prbtype'];
	}
	if (isset($_POST['prbdetails'])) {
		$prbdetails = $_POST['prbdetails'];
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
	  color: #000;
	  margin-top: 20px;
	  background: #0ae52ffa;
	  height: 50px;
	  border-radius: 9px;
	  cursor: pointer;
	  font-weight: 900;
	  box-shadow: 6px 6px 6px #cbced1, -6px -6px 6px white;
	  transition: 0.5s;
	}

	.submitBtn:hover {
	  box-shadow: none;
	  background: #0ae52ffa;
	  border-color: #0ae52ffa;
	  color: #000;
	}
  </style>
	</head>
	<body onload="startTime()" style="font-size: 1.5rem !important;">
		<div class="container" style="padding: 24px;">
				<form method="post" action="thankyou.php?caseid=".<?php echo $username.$productNumber;?> >
				<div class="row">
				<div class="prefilled-prd-details" style="width: 100%; margin-top:-14px;">
				<img src="img/hlogo.png" style="width: 50%;margin-left: 25%;">
				<h2 style="padding: 15px;text-align: center;">FEEDBACK FORM</h2>
				</div>
				<div class="prefilled-prd-details" style="width: 100%;border: 2px solid #0ae52ffa;margin-top: -14px;">
				<h2 style="padding: 15px;background: #000;color: #fff;text-align: center;"><?php echo @$productName; ?></h2>
					<table style="width: 100%;margin-top: -7px;">
						<tbody>
							<tr>
								<td>
									<div class="form-group">
										<span><h4><u>Product Number:</u>&nbsp;&nbsp; <?php echo @$productNumber; ?></h4> </span>
									</div>
								</td>
								<td>
									<div class="form-group">
										<span><h4><u>Product Batch:</u>&nbsp;&nbsp; <?php echo @$productBatch; ?></h4> </span>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group">
										<span><h4><u>Mfg. Date:</u>&nbsp;&nbsp; <?php echo @$productMfgDate; ?></h4> </span>
									</div>
								</td>
								<td>
									<div class="form-group">
										<span><h4><u>Exp. Date:</u>&nbsp;&nbsp; <?php echo @$productExpDate; ?></h4> </span>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<h2 style="padding: 15px;">Please select appropriate option:</h2>
				<div class="prefilled-prd-details" style="background: #ecf0f3;width: 100%;border: 2px solid #0ae52ffa;">
				<div class="col-md-6">
					<div class="form-group">
						<label>Query Type</label>
						<select class="form-control" name="prbtype" style="width:24em;" value="<?php echo @$prbtype; ?>"  required placeholder="Enter Product Expiry Date">
						  <option value="prb1">Product information</option>
						  <option value="prb2">Feedback or product complaint</option>
						  <option value="prb3">Adverse reaction from product</option>
						</select>
					</div>
					<div class="form-group">
						<label>Your Name</label>
						<input type="text" class="form-control" name="uname" style="width:24em;" value="<?php echo @$uname; ?>" required placeholder="Enter Your Name">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label>Email</label>
						<input type="email" class="form-control" name="email" style="width:24em;" value="<?php echo @$email; ?>" required placeholder="Enter Your Email">
					</div>
					<div class="form-group">
						<label>Description</label>
						<textarea class="form-control" name="prbdetails" style="width:24em;height: 10em;" value="<?php echo @$prbdetails; ?>" required placeholder="Describe the problem - How did it arise? When did you first face it?"></textarea>
					</div>
					<div class="form-group">
						<input type="submit" name="submit" class="btn btn-primary submitBtn" style="font-size: 18px;width: 332px;"/>
					</div>
					</div>
				</div>
				</div>
			</div>		
			</form>			
		</div>
		
</body>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<footer>	
	</footer>
</html>