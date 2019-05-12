<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>User_Panel</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<div class="row navbar navbar-fixed-top" style="background-color: blue; height: 100px; opacity: 0.7">
		<div class="col-md-1 col-md-offset-1 ">
			<a href="userpanel.php"><img src="images/icon.gif" alt="" height="85px"></a>
		</div>
		<div class="col-md-8" >
			<h1 class="lead" align="center" style="color: white;"><u><b>BOCA JUNIOR FOOTBALL CLUB</b></u></h1><p align="center" class="lead" style="color: white;">(Tutorial)</p>
		</div>
		<div class="col-md-2">
		<a href="logout.php"><img src="images/logout.gif" height="45px" style="margin-top:25px; margin-left:60px"></a>
		</div>
	</div>

	<div class="row" style="margin-top: 140px;">
		<div class="col-md-2">
			<div class="list-group">
				<a href="userprofile.php" class="list-group-item list-group-item-info">Profile</a>
				<a href="viewpayroll.php" class="list-group-item list-group-item-info">View Payroll</a>
				<a href="viewclaim.php" class="list-group-item list-group-item-info">View Claim</a>
				<a href="rules.php" class="list-group-item list-group-item-info">View Football Rules</a>

				<a href="tutorial.php" class="list-group-item list-group-item-info">View Football Tutorials</a>
			</div>
		</div>
		<div class="col-md-7 well">
      <h4 class="lead"><u><b>Motivational Video</b></u></h4>
      <video src="videos/india.mp4" width="100%" controls >
      </video>
      <br><br><br><br><br><br><br><br>
      <h4 class="lead"><u><b>Tutorial Video</b></u></h4>
      <video src="videos/tutorial.mp4" width="100%" controls>
      </video>
		</div>
		<div class="col-md-3 well">
			<div class="alert alert-info">
				<h6 align="center"><u>Notifications</u></h6>
				<marquee behavior="" direction="up">

				</marquee>
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
