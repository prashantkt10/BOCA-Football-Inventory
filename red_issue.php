<?php
session_start();

include_once 'con.php';

echo $q=$Quantity=$_SESSION['Quantity'];
echo $a=$Apparel_ID=$_SESSION['Apparel_ID'];
	echo $p=$Product=$_SESSION['Product'];
	echo $d=$Entry_Date=$_SESSION['Entry_Date'];
	echo $pr=$Price=$_SESSION['Price'];


if(isset($_POST['issue']))
{
		$id = mysql_real_escape_string($_POST['id']);
		//echo $id;
		//$_SESSION['pla_id'] = $_POST['source_station'];
	//echo $Quantity;
	$pro = mysql_real_escape_string($_POST['pro']);
	//echo $pro;
	$quan = mysql_real_escape_string($_POST['quan']);
//echo $quan;

$quanti=$q - $quan;
echo $quanti;

	if(mysql_query("INSERT INTO Orders(Player_ID,Product,Quantity) VALUES('$id','$pro','$quan')"))
		{
			?>
			<script> alert("Successfull");</script>
			<?php
	         //header('Refresh:1; url=adminpanel.php');
			
		}
		else
		{
			?>
			<script>alert('error while registering you...');</script>
			<?php
		}
$sqli="UPDATE Apparels SET Apparel_ID='$a',Product='$p',Entry_Date='$d',Price='$pr' where Quantity='$quanti';";
if (mysql_query($sqli)) {
    ?>
            <script> alert("Successfull");</script>
            <?php
             //header('Refresh:1; url=adminpanel.php');
} 
else {
    ?>
            <script> alert("Error while updating");</script>
            <?php
             
}


	}
?>