<?php 
session_start();
if (isset($_SESSION['admin'])) {
	header('Location: adminpanel.php');
}
if(isset($_POST['asubmit']))
{
//$id="admin@gmail.com"; $pass="12345";
	if ($_POST['aemail'] == "admin@gmail.com" && $_POST['apass']==12345)
	{
		?>
		<script>alert('Login Successfull !');</script>
		<?php
			$_SESSION['admin']="admin";
	         header('Refresh:1; url=adminpanel.php');	
	}
	else
	{
		?>
			<script> alert("Please enter correct details");</script>
			<?php
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin_Login</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<div class="row navbar navbar-fixed-top" style="background-color: blue; height: 90px; opacity: 0.7">
		<div class="col-md-1 col-md-offset-1 ">
			<img src="images/icon.gif" alt="" height="85px">
		</div>
		<div class="col-md-8" >
			<h1 class="lead" align="center" style="color: white;"><u><b>BOCA JUNIOR FOOTBALL CLUB</b></u></h1>
		</div>
		<div class="col-md-2">

		</div>
	</div>

	<div class="row" style="margin-top: 90px; width: 100%;">
		<div class="col-md-12" style="">
			<div class="image">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<img src="images/sunil.jpg" alt="Chania" style="height: 473px; width: 1500px; align-content: center;">
						</div>

						<div class="item">
							<img src="images/sunil1.jpg" alt="Chania" style="height: 473px; width: 1500px">
						</div>

						<div class="item">
							<img src="images/team.jpg" alt="Flower" style="height: 473px; width: 1500px">
						</div>
					</div>
				</div>
				<div id="abt" class="well">
					<ul class="nav nav-tabs">
						<li class="active" style="width: 175px"><a data-toggle="tab" href="#menu1">Admin Login</a></li>
						<li style="width: 175px"> <a data-toggle="tab" href="#menu2">Player Login</a></li>
					</ul>
					<div class="tab-content">
					<div id="menu1" class="tab-pane fade in active">
					<form method="post" target="">
						<div class="form-group">
							<label for="email">Email:</label>
							<input type="email" class="form-control" name="aemail">
						</div>
						<div class="form-group">
							<label for="email">Password:</label>
							<input type="password" class="form-control" name="apass">
						</div>
						<div class="form-group">
							<input type="submit" class="btn btn-success" value="Login" name="asubmit">
							<input type="reset" class="btn btn-warning" value="Clear" style="margin-left: 240px">
						</div>
					</form>
					</div>
<?php
include_once 'con.php';
if(isset($_POST['plogin']))
{
	$pemail = mysql_real_escape_string($_POST['pemail']);
	//echo $email;
	$ppass = mysql_real_escape_string($_POST['ppass']);
	
	$pemail = trim($pemail);
	$_SESSION['pemail'] = $pemail;
	$ppass = trim($ppass);
	
	$res=mysql_query("SELECT * FROM Registration WHERE Email='$pemail'");
	//$res=mysql_query("SELECT username, password FROM customer_details WHERE email='".$email."'");
	$row=mysql_fetch_array($res);
	//$count=0;
	$count = mysql_num_rows($res); // if uname/pass correct it returns must be 1 row
	
	if($count == 1 && $row['Password']== $ppass)
	{
		$_SESSION['user'] = $row['Email'];
		header("Location: userpanel.php");
	}
	else
	{
		?>
        <script>alert('Please enter correct details!');</script>
        <?php
        	
	}
	
}



?>

					<div id="menu2" class="tab-pane fade in">
					<form  method="post">
						<div class="form-group">
							<label for="email">Email:</label>
							<input type="email" class="form-control" name="pemail">
						</div>
						<div class="form-group">
							<label for="email">Password:</label>
							<input type="password" class="form-control" name="ppass">
						</div>
						<div class="form-group">
							<input type="submit" class="btn btn-success" value="Login" name="plogin">
							<input type="reset" class="btn btn-warning" value="Clear" style="margin-left: 240px">
						</div>
					</form>
					</div>
					</div>
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