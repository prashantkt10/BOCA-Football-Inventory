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
	<title>Manage_Payroll</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<div class="row navbar navbar-fixed-top" style="background-color: blue; height: 100px; opacity: 0.7">
		<div class="col-md-1 col-md-offset-1 ">
			<a href="adminpanel.php"><img src="images/icon.gif" alt="" height="85px"></a>
		</div>
		<div class="col-md-8" >
			<h1 class="lead" align="center" style="color: white;"><u><b>BOCA JUNIOR FOOTBALL CLUB</b></u></h1><p align="center" class="lead" style="color: white;">(Manage Payroll)</p>
		</div>
		<div class="col-md-2">
<a href="logout.php"><img src="images/logout.gif" height="45px" style="margin-top:25px; margin-left:60px"></a>
		</div>
	</div>

	<div class="row" style="margin-top: 150px; width: 20%">
		<div class="container well" align="center" style="margin-left: 120px">

			<form action="" method="post">
				<div class="form-group">
					<label for="" class="control-label">Player ID:</label>
					<input type="text" class="form-control" style="width: 400px" name="id" value="<?php echo $id; ?>" required >
					<input type="submit" class="form-control btn btn-success" name="search" style="width: 400px" 
					value="Search">
				</div>
				</form>
<?php
if(isset($_POST['search']))
{
	$id = mysql_real_escape_string($_POST['id']);
	
	$id = trim($id);
	// email exist or no
	$query = "SELECT * FROM Payroll WHERE Player_ID='$id'";
	$result = mysql_query($query);

//echo"in";
if($row=mysql_fetch_array($result))
{
	$Player_ID=$row['Player_ID'];
    $Player_Name=$row['Player_Name'];
    $Match_NO=$row['Match_NO'];
    $Goal_No=$row['Goal_No'];
    $Corner_Goal=$row['Corner_Goal'];
    $Claim=$row['Claim'];
    $Salary=$row['Salary'];
    $Salary_Inc=$row['Salary_Inc'];

    


    //$m_bonus = $Match_NO * $match_bonus;
    //$g_bonus = $Goal_No * $goal_bonus;
    //$c_bonus = $Corner_Goal * $corner_bonus;

    $_SESSION['Match_NO'] = $Match_NO;
    $_SESSION['Goal_No'] = $Goal_No;
    $_SESSION['Corner_Goal'] = $Corner_Goal;
    $_SESSION['Claim'] = $Claim;
?>
<form action="red_pay.php" method="post">
<div class="form-group">
					<label for="" class="control-label">Player ID:</label>
					<input type="text" class="form-control" style="width: 400px" name="pid"  value="<?php echo $Player_ID; ?>" readonly> 
				</div>
				<div class="form-group">
					<label for="" class="control-label">Player Name:</label>
					<input type="text" class="form-control" name="pname" style="width: 400px" value="<?php echo $Player_Name; ?>" required>
				</div>
				<div class="form-group">
					<label for="" class="control-label">Match No:</label>
					<input type="number" min="0" class="form-control" name="match" style="width: 400px" value="<?php echo $Match_NO; ?>" required>
				</div>
				<div class="form-group">
					<label for="" class="control-label">Goal No:</label>
					<input type="number" min="0" class="form-control" name="goal" style="width: 400px" value="<?php echo $Goal_No;?>" required>
				</div>
				<div class="form-group">
					<label for="" class="control-label">Corner Goal No:</label>
					<input type="number" min="0" class="form-control" name="corner" style="width: 400px" value="<?php echo $Corner_Goal;?>" required>
				</div>
				<div class="form-group">
					<label class="control-label">Claim:    </label>
					<input type="text" class="form-control" name="claim" style="width: 400px" value="<?php echo $Claim;?>" required>
				</div>
				<div class="form-group">
					<label for="" class="control-label">Salary:</label>
					<input type="number" min="0" class="form-control" name="sal" style="width: 400px" value="<?php echo $Salary;?>" required>
				</div>
				<div class="form-group">
					<label for="" class="control-label">Salary Increment:</label>
					<input type="number" min="0" class="form-control" name="inc" style="width: 400px" value="<?php echo $Salary_Inc;?>" required>
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-success" value="Update" name="update">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="reset" class="btn btn-warning">
				</div>
			</form>
			<?php
}
else {
	?> 
	<script>alert("not found");</script>
	<?php
}
}
?>

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