<?php
$db_username = 'root';
$db_password = '';
$db_name = 'alumni';
$db_host = 'localhost';
$conn = new mysqli($db_host, $db_username, $db_password,$db_name);

if($conn->connect_error){
	die("connection failed ".$conn->connect_error);
}





?>