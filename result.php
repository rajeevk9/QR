<?php
if (isset($_GET['ProductName'])) {
	$productName = $_GET['ProductName'];
	$productNumber = $_GET['ProductNumber'];
	$productBatch = $_GET['ProductBatch'];
	$productRegion = $_GET['ProductRegion'];
	$productMfgDate = $_GET['ProductMfgDate'];
	$productExpDate = $_GET['ProductExpDate'];
	$productPrice = $_GET['ProductPrice'];
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
  </style>
	</head>
	<body onload="startTime()">
		<div class="container">
				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >
				<div class="row">
				<div class="prefilled-prd-details" style=" width: 75%; border: 2px solid;">
				<h2>Pre-Filled Product Details</h2>
				  <div class="col-md-6">
					<div class="form-group">
						<label>Product Name</label>
						<input type="text" class="form-control" name="pname" style="width:20em;" placeholder="Enter Product Name" value="<?php echo @$productName; ?>" readonly required />
					</div>
					<div class="form-group">
						<label>Product Number</label>
						<input type="text" class="form-control" name="pnumber" style="width:20em;" placeholder="Enter Product Number" value="<?php echo @$productNumber; ?>" readonly required pattern="[a-zA-Z0-9 .]+" />
					</div>
					<div class="form-group">
						<label>Product Batch</label>
						<input type="text" class="form-control" name="pbatch" style="width:20em;" value="<?php echo @$productBatch; ?>" required pattern="[a-zA-Z0-9 .]+" placeholder="Enter Product Batch" readonly></textarea>
					</div>
					<div class="form-group">
						<label>Product Region</label>
						<input type="text" class="form-control" name="pregion" style="width:20em;" value="<?php echo @$productRegion; ?>" readonly required placeholder="Enter Product Region"></textarea>
					</div>
			  </div>
				<div class="col-md-6">
					<div class="form-group">
						<label>MFG Date</label>
						<input type="date" class="form-control" name="pmfgdate" style="width:20em;" value="<?php echo @$productMfgDate; ?>" readonly required placeholder="Enter Product MFG Date"></textarea>
					</div>
					<div class="form-group">
						<label>Expiry Date</label>
						<input type="date" class="form-control" name="pexpirydate" style="width:20em;" value="<?php echo @$productExpDate; ?>" readonly required placeholder="Enter Product Expiry Date"></textarea>
					</div>
					<div class="form-group">
						<label>Price</label>
						<input type="number" class="form-control" name="pprice" style="width:20em;" value="<?php echo @$productPrice; ?>" readonly required placeholder="Enter Product Price"></textarea>
					</div>
				  </div>
				</div>
				<div class="prefilled-prd-details" style="width: 75%;border: 2px solid;margin-top: 10px;">
				<h2>Information provided by User</h2>
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
						<input type="submit" name="submit" class="btn btn-primary submitBtn" style="width:20em; margin:0;" />
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