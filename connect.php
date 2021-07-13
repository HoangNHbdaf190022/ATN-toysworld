<?php
	$server ="localhost";
	$user = "root";
	$pass = "";
	$database = "atn_toys_web";
	$con = mysqli_connect($server, $user, $pass, $database); 
	mysqli_set_charset($con, 'UTF8');
?>