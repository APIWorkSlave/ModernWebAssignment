<?php
	session_start();
	// login datebase 
	$hostname = "127.0.0.1";
	$username = "root";
	$password ="12345678";
	$connection = mysql_connect($hostname ,$username,$password) or die("Could not connect to database");
	$lmail=$_SESSION["loginEmail"];	
	echo $lmail;//return Email to display
?>