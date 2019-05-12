<?php
session_start();

include_once 'con.php';

if(isset($_POST['addmatch']))
{
	$mname = mysql_real_escape_string($_POST['mname']);
	$dom = mysql_real_escape_string($_POST['dom']);
	$venue = mysql_real_escape_string($_POST['venue']);
	$team1 = mysql_real_escape_string($_POST['team1']);
	$team2 = mysql_real_escape_string($_POST['team2']);
	
	
		
		if(mysql_query("INSERT INTO Matches(Match_Name,Match_Date,Match_Venue,Team1,Team2) VALUES('$mname','$dom','$venue','$team1','$team2')"))
		{
			?>
			<script> alert("Match Added Successfull");</script>
			<?php
	         header('Refresh:1; url=adminpanel.php');
			
		}
		else
		{
			?>
			<script>alert('error while adding match...');</script>
			<?php
		}		
	}
//
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>User_Registration</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<div class="row navbar navbar-fixed-top" style="background-color: blue; height: 100px; opacity: 0.7">
		<div class="col-md-1 col-md-offset-1 ">
			<img src="images/icon.gif" alt="" height="85px">
		</div>
		<div class="col-md-8" >
			<h1 class="lead" align="center" style="color: white;"><u><b>BOCA JUNIOR FOOTBALL CLUB</b></u></h1><p align="center" class="lead" style="color: white;">(Add New Match)</p>
		</div>
		<div class="col-md-2">

		</div>
	</div>

	<div class="row" style="margin-top: 150px; width: 20%">
		<div class="container well" align="center" style="margin-left: 120px">
			<form action="" method="post">
				<div class="form-group">
					<label for="" class="control-label">Match Name:</label>
					<input type="text" name="mname" class="form-control" style="width: 400px" required>
				</div>
				<div class="form-group">
					<label for="" class="control-label">Date of Match:</label>
					<input type="date" name="dom" class="form-control" style="width: 400px" required>
				</div>
				<div class="form-group">
					<label for="" class="control-label">Venue of Match:</label>
					<textarea name="venue" id="" cols="5" rows="5" class="form-control" style="width: 400px" required></textarea>
				</div>
				<div class="form-group">
					<label for="" class="control-label">Matches Between:</label>
					<input type="text" name="team1" class="form-control" style="width: 200px" required>
					<h4>vs.</h4>
					<input type="text" name="team2" class="form-control" style="width: 200px" required>
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-success" name="addmatch">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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