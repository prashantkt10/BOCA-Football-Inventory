<?php
session_start();
if (!isset($_SESSION['user'])) {
	header('Location:adminlogin.php');
}
include_once 'con.php';
$e=$pemail=$_SESSION['pemail'] ;

$sql4 = "select * from Registration where Email='".$e."' ";
$result4=mysql_query($sql4);
//echo"in";
while($row4=mysql_fetch_array($result4))
{

$Player_ID=$row4['Player_ID'];
$Full_Name=$row4['Full_Name'];
$Password=$row4['Password'];
$Dob=$row4['Dob'];
$Gender=$row4['Gender'];
$Salary=$row4['Salary'];
$Address=$row4['Address'];
$city=$row4['city'];
$pincode=$row4['pincode'];
$mobile=$row4['mobile'];
$Prev_Leauge=$row4['Prev_Leauge'];
$Register_Date=$row4['Register_Date'];
	


$_SESSION['Player_ID'] = $Player_ID;
$_SESSION['Full_Name'] = $Full_Name;
$_SESSION['Password'] = $Password;
$_SESSION['Dob'] = $Dob;
$_SESSION['Gender'] = $Gender;
$_SESSION['Salary'] = $Salary;
$_SESSION['Address'] = $Address;
$_SESSION['city'] = $city;
$_SESSION['pincode'] = $pincode;
$_SESSION['mobile'] = $mobile;
$_SESSION['Prev_Leauge'] = $Prev_Leauge;
$_SESSION['Register_Date'] = $Register_Date;

}


//echo $e;
?>

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
			<h1 class="lead" align="center" style="color: white;"><u><b>BOCA JUNIOR FOOTBALL CLUB</b></u></h1><p align="center" class="lead" style="color: white;">(User-Panel)</p>
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
		<div class="col-md-3 well">
			<div class="alert alert-success">
				<h6 align="center"><u>Profile Photo</u></h6>
				<?php
				$email=$_SESSION['user'];
				$query="SELECT Image FROM Registration WHERE Email='$email'";
				$result=mysql_query($query);
				while ($row=mysql_fetch_array($result)) {
					$location=$row['Image'];
				}
				?>
				<img src="<?php echo $location; ?>" alt="" align="center" height="200px" width="270px">
			</div>
		</div>
		<div class="col-md-4 well">
			<div class="alert alert-success">
				<h6 align="center"><u>About User</u></h6>
				<div class="form-group">
					<label class="control-label">Name:</label>
					<input type="text" class="form-control" name="name" value="<?php echo $Full_Name; ?>" disabled>
				</div>
				<div class="form-group">
					<label class="control-label">Player ID:</label>
					<input type="text" class="form-control" name="pid" value="<?php echo $Player_ID; ?>" disabled>
				</div>
				<div class="form-group">
					<label for="" class="control-label">Date of Birth:</label>
					<input type="text" class="form-control" value="<?php echo $Dob; ?>" disabled>
				</div>
				<div class="form-group">
					<label for="" class="control-label">Salary:</label>
					<input type="text" class="form-control" value="<?php echo $Salary; ?>" disabled>
				</div>
			</div>

		</div>
		<div class="col-md-3 well">
			<div class="alert alert-success">
				<h6 align="center"><u>Notifications</u></h6>
				
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