<?php
session_start();
if (!isset($_SESSION['admin'])) {
	header('Location: adminlogin.php');
}

include_once 'con.php';

if(isset($_POST['register']))
{
	$pid = mysql_real_escape_string($_POST['pid']);
	$pname = mysql_real_escape_string($_POST['pname']);
	$ppass = mysql_real_escape_string($_POST['ppass']);
	$pdob = mysql_real_escape_string($_POST['pdob']);
	$pemail = mysql_real_escape_string($_POST['pemail']);
	$gen = mysql_real_escape_string($_POST['gen']);
	$padd = mysql_real_escape_string($_POST['padd']);
	$pcity = mysql_real_escape_string($_POST['pcity']);
	$pcode = mysql_real_escape_string($_POST['pcode']);
	$pmob = mysql_real_escape_string($_POST['pmob']);
	$pleague = mysql_real_escape_string($_POST['pleague']);
	$psal = mysql_real_escape_string($_POST['psal']);
	$prdate = mysql_real_escape_string($_POST['prdate']);
	$newpath='uploadedimages/'.$_FILES['pic']['name'];
	move_uploaded_file($_FILES['pic']['tmp_name'],$newpath);
	
	// email exist or no
	$query = "SELECT Email FROM Registration WHERE Email='$pemail'";
	$result = mysql_query($query);
	
	$count = mysql_num_rows($result); // if Email not found then register
	
	if($count == 0){
		
		if(mysql_query("INSERT INTO Registration(Player_ID,Full_Name,Password,Dob,Email,Gender,Address,city,pincode,mobile,Prev_Leauge,Salary,Register_Date,Image) VALUES('$pid','$pname','$ppass','$pdob','$pemail','$gen','$padd','$pcity','$pcode','$pmob','$pleague','$psal','$prdate','$newpath')"))
		{
			?>
			<script> alert("Successfull");</script>
			<?php
	         header('Refresh:1; url=adminpanel.php');
			
		}
		else
		{
			?>
			<script>alert('error while registering you...');</script>
			<?php
		}		
	}
	else{
			?>
			<script>alert('Sorry Email ID already taken ...');</script>
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
			<a href="adminpanel.php"><img src="images/icon.gif" alt="" height="85px"></a>
		</div>
		<div class="col-md-8" >
			<h1 class="lead" align="center" style="color: white;"><u><b>BOCA JUNIOR FOOTBALL CLUB</b></u></h1><p align="center" class="lead" style="color: white;">(Add New Player)</p>
		</div>
		<div class="col-md-2">
<a href="logout.php"><img src="images/logout.gif" height="45px" style="margin-top:25px; margin-left:60px"></a>
		</div>
	</div>

	<div class="row" style="margin-top: 150px; width: 20%">
		<div class="container well" align="center" style="margin-left: 120px">
			<form action="" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="" class="control-label">Player ID:</label>
					<input type="text" name="pid" class="form-control" style="width: 400px" required>
				</div>
				<div class="form-group">
					<label for="" class="control-label">Full Name:</label>
					<input type="text" name="pname" class="form-control" style="width: 400px" required>
				</div>
				<div class="form-group">
					<label for="" class="control-label">Password:</label>
					<input type="password" name="ppass" class="form-control" style="width: 400px" required>
				</div>
				<div class="form-group">
					<label for="" class="control-label">Date of Birth:</label>
					<input type="date" name="pdob" class="form-control" style="width: 400px" required>
				</div>
				<div class="form-group">
					<label for="" class="control-label">Email:</label>
					<input type="email" name="pemail" class="form-control" style="width: 400px" required>
				</div>
				<div class="form-group">
					<label class="control-label">Gender:    </label>
					<div class="radio-inline">
						<label><input type="radio" name="gen" checked>Male</label>
					</div>
					<div class="radio-inline">
						<label><input type="radio" name="gen">Female</label>
					</div>
				</div>
				<div class="form-group">
					<label for="" class="control-label">Address:</label>
					<textarea name="padd" id="" cols="5" rows="5" class="form-control" style="width: 400px" required></textarea>
				</div>
				<div class="form-group">
					<label for="" class="control-label">City:</label>
					<input type="text" name="pcity" class="form-control" style="width: 400px" required>
				</div>
				<div class="form-group">
					<label for="" class="control-label">Pin Code:</label>
					<input type="number" name="pcode" class="form-control" style="width: 400px" required>
				</div>
				
				<div class="form-group">
					<label for="" class="control-label">Mobile:</label>
					<input type="number" name="pmob" maxlength="10" class="form-control" style="width: 400px" required>
				</div>
				<div class="form-group">
					<label for="" class="control-label">Previous League:</label>
					<input type="text" name="pleague" class="form-control" style="width: 400px" required>
				</div>
				<div class="form-group">
					<label for="" class="control-label">Salary:</label>
					<input type="number" name="psal" class="form-control" style="width: 400px" min="0" required>
				</div>
				<div class="form-group">
					<label for="" class="control-label">Registration Date:</label>
					<input type="date"  name="prdate" class="form-control" style="width: 400px" required>
				</div>
				<div class="form-group">
					<label for="" class="control-label">Select User Pic:</label>
					<input type="file"  name="pic" class="form-control" style="width: 400px" required>
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-success" name="register">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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