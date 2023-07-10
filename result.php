<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$pname = $_POST['pname'];
	$pnumber = $_POST['pnumber'];
	$pbatch = $_POST['pbatch'];
	$pregion = $_POST['pregion'];
	$pmfgdate = $_POST['pmfgdate'];
	$pexpirydate = $_POST['pexpirydate'];
	$pprice = $_POST['pprice'];
	$rurl = $_POST['rurl'];
	
	echo $pname;

  // Process the data or perform any desired actions with it
}
?>
