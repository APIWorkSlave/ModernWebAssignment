<?php
	session_start();
	// login datebase 
	$hostname = "127.0.0.1";
	$username = "root";
	$password ="12345678";
	$connection = mysql_connect($hostname ,$username,$password) or die("Could not connect to database");
	$lname=$_SESSION["loginName"];	
	//$lpass=$_SESSION["loginPass"];
	//$lemail=$_SESSION["loginEmail"];
	echo $lname;//return name to display
	//echo $lpass;
	//echo $lemail;
?>