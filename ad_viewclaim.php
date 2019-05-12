<?php
session_start();

include_once 'con.php';

$match_bonus = 2000;
$goal_bonus = 1000;
$corner_bonus = 1500;





//$plid = $Player_ID=$_SESSION['Player_ID'];
//echo $fl_name=$Full_Name=$_SESSION['Full_Name'];


//$sql5 = "select * from Payroll where Player_ID='$plid'";





//echo $m_b=$m_bonus=$_SESSION['m_bonus'];
//echo $g_b=$g_bonus=$_SESSION['g_bonus'];
//echo $c_b=$c_bonus=$_SESSION['c_bonus'];

//echo $total_bonus = $m_b + $g_b + $c_b; 
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
			<a href="adminpanel.php"><img src="images/icon.gif" alt="" height="85px"></a>
		</div>
		<div class="col-md-8" >
			<h1 class="lead" align="center" style="color: white;"><u><b>BOCA JUNIOR FOOTBALL CLUB</b></u></h1><p align="center" class="lead" style="color: white;">(View-Claim)</p>
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

   // $_SESSION['Match_NO'] = $Match_NO;
    //$_SESSION['Goal_No'] = $Goal_No;
    //$_SESSION['Corner_Goal'] = $Corner_Goal;
    //$_SESSION['Claim'] = $Claim;


$m_bonus = $Match_NO * $match_bonus;
$g_bonus = $Goal_No * $goal_bonus;
$c_bonus = $Corner_Goal * $corner_bonus;

$total_bonus = $m_bonus + $g_bonus + $c_bonus + $cl;
?>

<div class="col-md-4 well">
			<div class="alert alert-success">
				<h6 align="center"><u>About User</u></h6>
				<div class="form-group">
					<label class="control-label">Name:</label>
					<input type="text" class="form-control" name="name" value="<?php echo $Player_Name; ?>" >
				</div>
				<div class="form-group">
					<label class="control-label">Player ID:</label>
					<input type="text" class="form-control" name="pid" value="<?php echo $Player_ID; ?>" >
				</div>
				<div class="form-group">
					<label for="" class="control-label">Match Playing Bonus:</label>
					<input type="text" class="form-control" value="<?php echo $m_bonus; ?>" >
				</div>
				<div class="form-group">
					<label for="" class="control-label">Goal Bonus:</label>
					<input type="text" class="form-control" value="<?php echo $g_bonus; ?>" >
				</div>
				<div class="form-group">
					<label for="" class="control-label">Corner Goal Bonus:</label>
					<input type="text" class="form-control" value="<?php echo $c_bonus; ?>" >
				</div>
				<div class="form-group">
					<label for="" class="control-label">Claim Bonus:</label>
					<input type="text" class="form-control" value="<?php echo $Claim; ?>" >
				</div>
				<div class="form-group">
					<label for="" class="control-label">Total Bonus:</label>
					<input type="text" class="form-control" value="<?php echo $total_bonus; ?>" >
				</div>
			</div>
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

	<div class="row">
		<div class="col-md-12 navbar navbar-fixed-bottom" style="background-color: blue; height: 20px; opacity: 0.7">

		</div>
	</div>


	<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>
	<script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>