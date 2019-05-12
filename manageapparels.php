<?php
session_start();
if (!isset($_SESSION['admin'])) {
	header('Location: adminlogin.php');
}

include_once 'con.php';

if(isset($_POST['apparel']))
{
	$aid = mysql_real_escape_string($_POST['aid']);
	$pro = mysql_real_escape_string($_POST['pro']);
	$quant = mysql_real_escape_string($_POST['quant']);
	$entry = mysql_real_escape_string($_POST['entry']);
	$price = mysql_real_escape_string($_POST['price']);
	
	

	$aid = trim($aid);
	$pro = trim($pro); 
	$quant = trim($quant);
	$entry = trim($entry);
	$price = trim($price);

	if(mysql_query("INSERT INTO Apparels(Apparel_ID,Product,Quantity,Entry_Date,Price) VALUES('$aid','$pro','$quant','$entry','$price')"))
	{
		?>
			<script> alert("Successfull added the apparel");</script>
			<?php
	         header('Refresh:1; url=admin_home.php');
			
	}
	else
		{
			?>
			<script>alert('error while adding apparels...');</script>
			<?php
		}		
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Manage_Apparels</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<div class="row navbar navbar-fixed-top" style="background-color: blue; height: 100px; opacity: 0.7">
		<div class="col-md-1 col-md-offset-1 ">
			<a href="adminpanel.php"><img src="images/icon.gif" alt="" height="85px"></a>
		</div>
		<div class="col-md-8" >
			<h1 class="lead" align="center" style="color: white;"><u><b>BOCA JUNIOR FOOTBALL CLUB</b></u></h1><p align="center" class="lead" style="color: white;">(Manage Apparels)</p>
		</div>
		<div class="col-md-2">
<a href="logout.php"><img src="images/logout.gif" height="45px" style="margin-top:25px; margin-left:60px"></a>
		</div>
	</div>

	<div class="row" style="margin-top: 150px; width: 20%">
		<div class="container well" align="center" style="margin-left: 120px">
			<form method="post">
				<div class="form-group">
					<label for="" class="control-label">Apparel ID:</label>
					<input type="text" class="form-control" name="aid" style="width: 400px" required>
				</div>
				<div class="form-group">
					<label for="" class="control-label">Product:</label>
					<input type="text" class="form-control" name="pro" style="width: 400px" required>
				</div>
				<div class="form-group">
					<label for="" class="control-label">Quantity:</label>
					<input type="number" min="0" class="form-control" name="quant" style="width: 400px" required>
				</div>
				<div class="form-group">
					<label for="" class="control-label">Entry Date:</label>
					<input type="date" class="form-control" name="entry" style="width: 400px" required>
				</div>
				<div class="form-group">
					<label for="" class="control-label">Price:</label>
					<input type="number" min="0" class="form-control" name="price" style="width: 400px" required>
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-success" name="apparel">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="reset" class="btn btn-warning">
				</div>
			</form>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12 navbar navbar-fixed-bottom" style="background-color: blue; height: 20px; opacity: 0.7">

		</div>
	</div>


	<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>
	<script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>