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
  
	@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;900&display=swap');

input {
  caret-color: red;
}

body {

  background: #ecf0f3;
}
.inputs {
  text-align: left;
  margin-top: 30px;
}

label, input {
  display: block;
  width: 100%;
  padding: 9px;
  border: none;
  outline: none;
  box-sizing: border-box;
}

label {
  margin-bottom: 4px;
  font-size: 2em;
}

label:nth-of-type(2) {
  margin-top: 12px;
}

select::placeholder, textarea::placeholder, input::placeholder {
  color: gray;
}

select, textarea, input {
  background: #ecf0f3;
  padding: 10px;
  padding-left: 20px;
  height: 50px;
  font-size: 14px;
  border-radius: 10px;
  box-shadow: inset 6px 6px 6px #cbced1, inset -6px -6px 6px white;
}

.submitBtn {
  color: white;
  margin-top: 20px;
  background: #1DA1F2;
  height: 40px;
  border-radius: 20px;
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
  <body>
	  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" style="padding: 39px;">
				<div class="row">
				
					
						<label>Product Name:</label>
						<?php echo @$productName; ?>
					
					
						<label>Product Number</label>
						<?php echo @$productNumber; ?>
					
					
						<label>Product Batch</label>
						<?php echo @$productBatch; ?>
					
					
						<label>Product Region</label>
						<?php echo @$productRegion; ?>
					
			  
					
						<label>MFG Date</label>
						<?php echo @$productMfgDate; ?>
					
					
						<label>Expiry Date</label>
						<?php echo @$productExpDate; ?>
						
						<label>Price</label>
						<?php echo @$productPrice; ?>
				
				
					<div class="form-group">
						<label>Name</label>
						<input type="text" name="uname" style="width:21.5em;" value="<?php echo @$uname; ?>" required placeholder="Enter Your Name">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" name="email" style="width:21.5em;" value="<?php echo @$email; ?>" required placeholder="Enter Your Email">
					</div>
				
					<div class="form-group">
						<label>Mobile</label>
						<input type="tel" name="mob" style="width:21.5em;" value="<?php echo @$mob; ?>" required placeholder="Enter Your Mobile Number">
					</div>
					
					<div class="form-group">
						<label>Problem Type</label>
						<select name="prbtype" style="width:21.5em;" value="<?php echo @$prbtype; ?>"  required placeholder="Enter Product Expiry Date">
						  <option value="prb1">Problem 1</option>
						  <option value="prb2">Problem 2</option>
						  <option value="prb3">problem 3</option>
						  <option value="prb4">Problem 4</option>
						</select>
					</div>
					<div class="form-group">
						<label>Explain your problem in details</label>
						<textarea name="prbdetails" style="width:21.5em;height: 11em;" value="<?php echo @$prbdetails; ?>" required placeholder="Enter Your Problems in Details"></textarea>
					</div>
					<div class="form-group">
						<input type="submit" name="submit" class="btn btn-primary submitBtn" style="width: 22.5em;margin-left: 4px;" />
					</div>
					
			</div>		
			</form>		
  </body>
</html>