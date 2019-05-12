<?php
session_start();
if (!isset($_SESSION['admin'])) {
	header('Location: adminlogin.php');
}

include_once 'con.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Maintainence</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<div class="row navbar navbar-fixed-top" style="background-color: blue; height: 100px; opacity: 0.7">
		<div class="col-md-1 col-md-offset-1 ">
			<a href="adminpanel.php"><img src="images/icon.gif" alt="" height="85px"></a>
		</div>
		<div class="col-md-8" >
			<h1 class="lead" align="center" style="color: white;"><u><b>BOCA JUNIOR FOOTBALL CLUB</b></u></h1><p align="center" class="lead" style="color: white;">(Maintainence)</p>
		</div>
		<div class="col-md-2">
			<a href="logout.php"><img src="images/logout.gif" height="45px" style="margin-top:25px; margin-left:60px"></a>
		</div>
	</div>
	<?php
	if(isset($_POST['maintain']))
	{
		$water = mysql_real_escape_string($_POST['water']);
		$garden = mysql_real_escape_string($_POST['garden']);
		$power = mysql_real_escape_string($_POST['power']);
		$security = mysql_real_escape_string($_POST['security']);
		$seat = mysql_real_escape_string($_POST['seat']);
		$dates = mysql_real_escape_string($_POST['dates']);
		$contract = mysql_real_escape_string($_POST['contract']);


		$water = trim($water);
		$garden = trim($garden); 
		$power = trim($power);
		$security = trim($security);
		$seat = trim($seat);
		$dates = trim($dates);
		$contract = trim($contract);

		if(mysql_query("INSERT INTO Maintenance(Watering,Grassing,Power,Security,Seats,Maintain_Date,Contracter) VALUES('$water','$garden','$power','$security','$seat','$dates','$contract')"))
		{
			?>
			<script> alert("Maintenance record updated successfully");</script>
			<?php
			header('Refresh:1; url=adminpanel.php');
			
		}
		else
		{
			?>
			<script>alert('error while adding Maintenance record...');</script>
			<?php
		}	




	}
	?>
	<div class="row" style="margin-top: 150px; width: 20%">
		<div class="container well" align="center" style="margin-left: 120px">
			<form method="post">
				<div class="form-group">
					<label for="" class="control-label">Watering:</label>
					<input type="number" min="0" class="form-control" name="water" style="width: 400px" required>
				</div>
				<div class="form-group">
					<label for="" class="control-label">Gardening:</label>
					<input type="number" min="0" class="form-control" name="garden" style="width: 400px" required>
				</div>
				<div class="form-group">
					<label for="" class="control-label">Light & Power:</label>
					<input type="number" min="0" class="form-control" name="power" style="width: 400px" required>
				</div>
				<div class="form-group">
					<label for="" class="control-label">Secuirty:</label>
					<input type="number" min="0" class="form-control" name="security" style="width: 400px" required>
				</div>
				<div class="form-group">
					<label for="" class="control-label">Seats Maintenance:</label>
					<input type="number" min="0" class="form-control" name="seat" style="width: 400px" required>
				</div>
				<div class="form-group">
					<label for="" class="control-label">Maintainence-Date:</label>
					<input type="date" min="0" class="form-control" name="dates" style="width: 400px" required>
				</div>
				<div class="form-group">
					<label for="" class="control-label">Contractor:</label>
					<input type="text" class="form-control" name="contract" style="width:400px" required>
				</div>
				
				<div class="form-group">
					<input type="submit" class="btn btn-success" name="maintain">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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