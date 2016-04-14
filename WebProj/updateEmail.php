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
	    $email = $post_vars['email'];
	    $lpass=$_SESSION['loginPass'];
		$lusn=$_SESSION['loginName'];
	    mysql_select_db("webproj", $connection) or die("Could not select database");
		//updating user profile
	    $result = mysql_query("UPDATE members SET email='$email' where userPassword='$lpass' and userName='$lusn' ") or die("Could not issue MySQL query");
		$_SESSION['loginEmail']=$email;
		//return msg
	echo "Email changed.";
	
	break;
}

?>