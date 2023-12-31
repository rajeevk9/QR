<?php  
$f = "visit.php";
if(!file_exists($f)){
	touch($f);
	$handle =  fopen($f, "w" ) ;
	fwrite($handle,0) ;
	fclose ($handle);
}
 
include('libs/phpqrcode/qrlib.php'); 

if(isset($_POST['submit']) ) {
	$tempDir = 'temp/'; 
	$pname = $_POST['pname'];
	$pnumber = $_POST['pnumber'];
	$pbatch = $_POST['pbatch'];
	$pmfgdate = $_POST['pmfgdate'];
	$pexpirydate = $_POST['pexpirydate'];
	$filename = $pname."_".$pnumber;
	
	QRcode::png("http://34.242.8.17/QR/result.php?ProductName=".rawurlencode($pname)."&ProductNumber=".$pnumber."&ProductBatch=".$pbatch."&ProductMfgDate=".$pmfgdate."&ProductExpDate=".$pexpirydate, $tempDir.'/'.$filename.'.png', QR_ECLEVEL_L, 5);
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
		
    </style>
	</head>
	<body onload="startTime()">
		<div class="container">
				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >
				
				<div class="row">
				  <div class="col-md-6">
					<div class="form-group">
						<label>Product Name</label>
						<input type="text" class="form-control" name="pname" style="width:20em;" placeholder="Enter Product Name" value="<?php echo @$pname; ?>" required />
					</div>
					<div class="form-group">
						<label>Product Number</label>
						<input type="text" class="form-control" name="pnumber" style="width:20em;" placeholder="Enter Product Number" value="<?php echo @$pnumber; ?>" required pattern="[a-zA-Z0-9 .]+" />
					</div>
					<div class="form-group">
						<label>Product Batch</label>
						<input type="text" class="form-control" name="pbatch" style="width:20em;" value="<?php echo @$pbatch; ?>" required pattern="[a-zA-Z0-9 .]+" placeholder="Enter Product Batch"></textarea>
					</div>
			  </div>
			  <div class="col-md-6">
				<div class="form-group">
						<label>MFG Date</label>
						<input type="date" class="form-control" name="pmfgdate" style="width:20em;" value="<?php echo @$pmfgdate; ?>" required placeholder="Enter Product MFG Date"></textarea>
					</div>
					<div class="form-group">
						<label>Expiry Date</label>
						<input type="date" class="form-control" name="pexpirydate" style="width:20em;" value="<?php echo @$pexpirydate; ?>" required placeholder="Enter Product Expiry Date"></textarea>
					</div>
					</div>
					</div>		
				<div class="form-group">
						<input type="submit" name="submit" class="btn btn-primary submitBtn" style="width:20em; margin:0;" />
				</div>
			</form>
			<?php
			if(!isset($filename)){
				$filename = "author";
			}
			?>
			<div class="q">
				<h2 style="text-align:center">QR Code Result: </h2>
				<center>
					<div class="qrframe" style="border:2px solid black; width:210px; height:210px;">
							<?php echo '<img src="temp/'. @$filename.'.png" style="width:200px; height:200px;"><br>'; ?>
					</div>
					<a class="btn btn-primary submitBtn" style="width:210px; margin:5px 0;" href="download.php?file=<?php echo $filename; ?>.png ">Download QR Code</a>
				</center>
			</div>
			
		</div>
</body>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<footer></footer>
</html>