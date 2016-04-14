<?php
	session_start();
	// login datebase 
	$hostname = "127.0.0.1";
	$username = "root";
	$password ="12345678";
	$connection = mysql_connect($hostname ,$username,$password) or die("Could not connect to database");
	//check for existing session variable
	if(isset($_SESSION['loginName'])){
		$lname=$_SESSION['loginName'];
		//get user details from server
		mysql_select_db("webproj", $connection) or die("Could not select database");
		$result = mysql_query("SELECT * FROM members where userName='$lname'") or die("Could not issue MySQL query");
		$rows = mysql_fetch_array($result);
		//assigning query results to a local array
		$row = array("usn1" => $rows[0],
					 "pwd1" => $rows[1],
					 "email1" => $rows[2]);
		extract($row);//assigning array values into individual variables
	//setting user password and email in session
		$_SESSION["loginPass"]=$pwd1;
		$_SESSION["loginEmail"]=$email1;
		echo "Redirecting you to members area...";//loginName exists. echo msg to html
	}else{
		//do nothing
	}
	
?>