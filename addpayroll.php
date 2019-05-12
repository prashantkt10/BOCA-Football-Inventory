<?php
session_start();

include_once 'con.php';

if(isset($_POST['add']))
{
	$pid = mysql_real_escape_string($_POST['pid']);
	$pname = mysql_real_escape_string($_POST['pname']);
	$match = mysql_real_escape_string($_POST['match']);
	$goal = mysql_real_escape_string($_POST['goal']);
	$corner = mysql_real_escape_string($_POST['corner']);
	$claim = mysql_real_escape_string($_POST['claim']);
	$sal = mysql_real_escape_string($_POST['sal']);
	$inc = mysql_real_escape_string($_POST['inc']);
	

	$pid = trim($pid);
	$pname = trim($pname); 
	$match = trim($match);
	$goal = trim($goal);
	$corner = trim($corner);
	$claim = trim($claim); 
	$sal = trim($sal);
	$inc = trim($inc);

	if(mysql_query("INSERT INTO Payroll(Player_ID,Player_Name,Match_NO,Goal_No,Corner_Goal,Claim,Salary,Salary_Inc) VALUES('$pid','$pname','$match','$goal','$corner','$claim','$sal','$inc')"))
		{
			?>
			<script> alert("Successfull");</script>
			<?php
	         header('Refresh:1; url=adminpanel.php');
			
		}
		else
		{
			?>
			<script>alert('error while adding payroll...');</script>
			<?php
		}		
	}




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
			<h1 class="lead" align="center" style="color: white;"><u><b>BOCA JUNIOR FOOTBALL CLUB</b></u></h1><p align="center" class="lead" style="color: white;">(Add Payroll)</p>
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
					<!--<input type="text" class="form-control" style="width: 400px" name="pid"  value="<?php //echo $Player_ID; ?>"> -->
					<?php
							include 'con.php';	   
							$sql="select Player_ID from Registration ";
							$result=mysql_query($sql);   
							echo '<select name="pid" class="form-control" style="width:400px">';		
							while($row=mysql_fetch_array($result))
							{
								echo "<option value='".$row['Player_ID']."'>".$row['Player_ID']."</option>";
							}
							echo '</select>';	
							//$_SESSION['source_station'] = $_POST['source_station'];	
							?>
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
					<input type="submit" class="btn btn-success" value="Update" name="add">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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