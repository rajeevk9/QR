<?php
	if (isset($_GET['ProductName'])) {
		$productName = rawurldecode($_GET['ProductName']);
	}else{
		$productName = $_POST['pname'];
	}
	if (isset($_GET['ProductName'])) {
		$productNumber = $_GET['ProductNumber'];
	}else{
		$productNumber = $_POST['pnumber'];
	}
	if (isset($_GET['ProductName'])) {
		$productBatch = $_GET['ProductBatch'];
	}else{
		$productBatch = $_POST['pbatch'];
	}
	if (isset($_GET['ProductName'])) {
		$productRegion = $_GET['ProductRegion'];
	}else{
		$productRegion = $_POST['pregion'];
	}
	if (isset($_GET['ProductName'])) {
		$productMfgDate = $_GET['ProductMfgDate'];
	}else{
		$productMfgDate = $_POST['pmfgdate'];
	}
	if (isset($_GET['ProductName'])) {
		$productExpDate = $_GET['ProductExpDate'];
	}else{
	$productExpDate = $_POST['pexpirydate'];
	}
	if (isset($_GET['ProductName'])) {
		$productPrice = $_GET['ProductPrice'];
	}else{
		$productPrice = $_POST['pprice'];
	}
	if (isset($_POST['uname'])) {
		$uname = $_POST['uname'];
	}
	if (isset($_POST['email'])) {
		$email = $_POST['email'];
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
    
    /* CSS for responsiveness */
    @media screen and (max-width: 600px) {
      table {
        width: 100%;
      }
      thead {
        display: none;
      }
      tbody tr {
        display: block;
        margin-bottom: 10px;
      }
      tbody td:before {
        content: attr(data-th);
        font-weight: bold;
        display: inline-block;
        width: 120px; /* Adjust as needed */
      }
    }
	label, input {
	  display: block;
	  width: 100%;
	  padding: 9px;
	  border: none;
	  outline: none;
	  box-sizing: border-box;
	}
	
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
		<div class="container" style="padding: 24px;">
				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >
				<div class="row">
				<div class="prefilled-prd-details" style=" width: 100%;border: 2px solid;border-radius: 12px;background-image: linear-gradient(to right bottom, #62a37347, #5998bb, #c2e1eb, #91a5a9, #5cd1d0);">
				<h2 style="margin-left: 15px;">Product Details</h2>
				  <div class="col-md-6">
					<div class="form-group">
						<span><h4><u>Product Name:</u>&nbsp;&nbsp;<?php echo @$productName; ?></h4> </span>
					</div>
					<div class="form-group">
						<span><h4><u>Product Number:</u>&nbsp;&nbsp; <?php echo @$productNumber; ?></h4> </span>
					</div>
					<div class="form-group">
						<span><h4><u>Product Batch:</u>&nbsp;&nbsp; <?php echo @$productBatch; ?></h4> </span>
					</div>
					<div class="form-group">
						<span><h4><u>Product Region:</u>&nbsp;&nbsp; <?php echo @$productRegion; ?></h4> </span>
					</div>
			  </div>
				<div class="col-md-6">
					<div class="form-group">
						<span><h4><u>MFG Date:</u>&nbsp;&nbsp; <?php echo @$productMfgDate; ?></h4> </span>
					</div>
					<div class="form-group">
						<span><h4><u>Expiry Date:</u>&nbsp;&nbsp; <?php echo @$productExpDate; ?></h4> </span>
					</div>
					<div class="form-group">
						<span><h4><u>Price:</u>&nbsp;&nbsp; <?php echo @$productPrice; ?></h4> </span>
					</div>
				  </div>
				</div>
				<div class="prefilled-prd-details" style="background: #ecf0f3; width: 100%;border: 2px solid;margin-top: 10px;border-radius: 12px;">
				<h2 style="margin-left: 15px;">Please provide further details</h2>
				<div class="col-md-6">
					<div class="form-group">
						<label>Name</label>
						<input type="text" class="form-control" name="uname" style="width:20em;" value="<?php echo @$uname; ?>" required placeholder="Enter Your Name">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" class="form-control" name="email" style="width:20em;" value="<?php echo @$email; ?>" required placeholder="Enter Your Email">
					</div>
				
					<div class="form-group">
						<label>Mobile</label>
						<input type="tel" class="form-control" name="mob" style="width:20em;" value="<?php echo @$mob; ?>" required placeholder="Enter Your Mobile Number">
					</div>
					</div>
				<div class="col-md-6">
					<div class="form-group">
						<label>Problem Type</label>
						<select class="form-control" name="prbtype" style="width:20em;" value="<?php echo @$prbtype; ?>"  required placeholder="Enter Product Expiry Date">
						  <option value="prb1">Problem 1</option>
						  <option value="prb2">Problem 2</option>
						  <option value="prb3">problem 3</option>
						  <option value="prb4">Problem 4</option>
						</select>
					</div>
					<div class="form-group">
						<label>Explain your problem in details</label>
						<textarea class="form-control" name="prbdetails" style="width:20em;" value="<?php echo @$prbdetails; ?>" required placeholder="Enter Your Problems in Details"></textarea>
					</div>
					<div class="form-group">
						<input type="submit" name="submit" class="btn btn-primary submitBtn" style="font-size: 18px;width: 278px;"/>
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
	<?php if (isset($_POST['uname'])) { ?>
	  <table>
    <thead>
      <tr>
        <th>Product Name</th>
        <th>Product Number</th>
        <th>Product Batch</th>
		<th>Product Region</th>
        <th>MFG Date</th>
        <th>EXP Date</th>
		<th>Price</th>
        <th>Name</th>
        <th>Email</th>
		<th>Mobile</th>
        <th>Problem Type</th>
        <th>Problem Details</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td data-th="Product Name"><?php echo $_POST['pname'];?></td>
        <td data-th="Product Number"><?php echo $_POST['pnumber'];?></td>
        <td data-th="Product Batch"><?php echo $_POST['pbatch'];?></td>
		<td data-th="Product Region"><?php echo $_POST['pregion'];?></td>
        <td data-th="MFG Date"><?php echo $_POST['pmfgdate'];?></td>
        <td data-th="EXP Date"><?php echo $_POST['pexpirydate'];?></td>
		<td data-th="Price"><?php echo $_POST['pprice'];?></td>
        <td data-th="Name"><?php echo $_POST['uname'];?></td>
        <td data-th="Email"><?php echo $_POST['email'];?></td>
		<td data-th="Mobile"><?php echo $_POST['mob'];?></td>
        <td data-th="Problem Type"><?php echo $_POST['prbtype'];?></td>
        <td data-th="Problem Details"><?php echo $_POST['prbdetails'];?></td>
      </tr>
      <!-- Add more rows as needed -->
    </tbody>
  </table>
	<?php } ?>
	</footer>
</html>