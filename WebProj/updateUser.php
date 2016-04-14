<?php
session_start();
	// login datebase 
	$hostname = "127.0.0.1";
	$username = "root";
	$password ="12345678";
	$connection = mysql_connect($hostname ,$username,$password) or die("Could not connect to database");	
	$method=$_SERVER["REQUEST_METHOD"];
switch ($method) {
	
	case PUT:
	    parse_str(file_get_contents("php://input"),$post_vars);
		//declaring variables
	    $usn = $post_vars['usn'];
	    $lpass=$_SESSION['loginPass'];
		$lemail=$_SESSION['loginEmail'];
	    mysql_select_db("webproj", $connection) or die("Could not select database");
		//updating username. Password and email is required to avoid updating duplicate entry
	    $result = mysql_query("UPDATE members SET userName='$usn' where userPassword='$lpass' and email='$lemail' ") or die("Could not issue MySQL query");
		$_SESSION['loginName']=$usn;
		//return msg
	echo "Username changed.";
	
	break;
}

?>