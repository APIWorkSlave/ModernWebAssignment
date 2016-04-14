<?php
	session_start();
	// login datebase 
	$hostname = "127.0.0.1";
	$username = "root";
	$password ="12345678";
	$connection = mysql_connect($hostname ,$username,$password) or die("Could not connect to database");
	$lpass=$_SESSION["loginPass"];	
	echo $lpass;//return password to display
?>