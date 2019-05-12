<?php 
session_start();
if (!isset($_SESSION['admin'])) {
	header('Location: adminlogin.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin_Panel</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body background="images/football.jpg">
	<div class="row navbar navbar-fixed-top" style="background-color: blue; height: 100px; opacity: 0.7">
		<div class="col-md-1 col-md-offset-1 ">
			<a href="adminpanel.php"><img src="images/icon.gif" alt="" height="85px"></a>
		</div>
		<div class="col-md-8" >
			<h1 class="lead" align="center" style="color: white;"><u><b>BOCA JUNIOR FOOTBALL CLUB</b></u></h1><p align="center" class="lead" style="color: white;">(Admin-Panel)</p>
		</div>
		<div class="col-md-2">
		<a href="logout.php"><img src="images/logout.gif" height="45px" style="margin-top:25px; margin-left:60px"></a>
		</div>
	</div>

	<div class="row" style="margin-top: 110px; opacity:0.9">
		<div class="container">
			<div class="col-md-8 well">
				<div class="row">
					<h2 align="center" class="alert alert-info">Menu</h2>
				</div>
				<div class="row">
					<div class="container-fluid">
						<div class="col-md-4" style="">
							<a href="userregistration.php"><span class="glyphicon glyphicon-user" style="font-size: 150px" title="Registration"></span></a>
						</div>
						<div class="col-md-4">
							<a href="manageapparels.php"><span class="glyphicon glyphicon-euro" style="font-size: 150px" title="Purchase Sports Apparels"></span></a>
						</div>
						<div class="col-md-4">
							<a href="managepayroll.php"><span class="glyphicon glyphicon-wrench" style="font-size: 150px" title="Manage Payroll"></span></a>
						</div>
					</div>
				</div><br>
				<div class="row">
					<div class="container-fluid">
						<div class="col-md-4">
							<a href="maintainence.php"><span class="glyphicon glyphicon-flash" style="font-size: 150px" title="Maintainence of Stadium"></span></a>
						</div>
						<div class="col-md-4">
							<a href=""><span class="glyphicon glyphicon-plus-sign" style="font-size: 150px" title="Add New Match"></span></a>
						</div>
						<div class="col-md-4">
							<a href="ad_viewclaim.php"><span class="glyphicon glyphicon glyphicon-eye-open" style="font-size: 150px" title="View Claim and Bonus"></span></a>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="container-fluid">
						<div class="col-md-4">
							<a href="issueapparels.php"><span class="glyphicon glyphicon-bullhorn" style="font-size: 150px" title="Issue Apparel"></span></a>
						</div>
						<div class="col-md-4">
							<a href="addpayroll.php"><span class="glyphicon glyphicon-bitcoin" style="font-size: 150px" title="Add Payroll"></span></a>
						</div>
						<div class="col-md-4">
							
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-3 col-md-offset-1 well">
				<div class="row">
					<h2 align="center" class="alert alert-info">Notifications</h2>

				</div>
			</div>
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