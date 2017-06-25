<?php
date_default_timezone_set('Asia/Kolkata');
$today=date('d/m/y');
$host = "localhost";
$database = "project";
$uname = "root";
$password = "";
$con = mysql_connect($host,$uname,$password) or die('Could not connect: ' . mysql_error());
mysql_select_db($database, $con);  
?>