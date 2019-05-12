<?php
session_start();

include_once 'con.php';

if(isset($_POST['update']))
{
    $pid = mysql_real_escape_string($_POST['pid']);
     //echo $pid;
    $pname = mysql_real_escape_string($_POST['pname']);
    //echo $pname;
    $match = mysql_real_escape_string($_POST['match']);
    //echo $match;
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

$query1 ="UPDATE Payroll SET Player_Name='$pname',Match_NO='$match',Goal_No='$goal',Corner_Goal='$corner',Claim='$claim',Salary='$sal',Salary_Inc='$inc' WHERE Player_ID='$pid';";

if (mysql_query($query1)) {
    ?>
            <script> alert("Successfull");</script>
            <?php
             header('Refresh:1; url=adminpanel.php');
} 
else {
    ?>
            <script> alert("Error while updating");</script>
            <?php
             
}


}
?>