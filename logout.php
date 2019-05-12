<?php
session_start();

echo "Logging out, please wait....";
session_destroy();
header('Refresh:1; url=adminlogin.php');

 ?>