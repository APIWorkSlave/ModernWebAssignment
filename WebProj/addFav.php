<?php
	session_start();
	// login datebase
	$hostname = "127.0.0.1";
	$username = "root";
	$password ="12345678";
	$connection = mysql_connect($hostname, $username, $password) or die("Could not open connection to database");
	
	$method=$_SERVER["REQUEST_METHOD"];
	$lname=$_SESSION['loginName'];
	$bookMark=$_POST['Field'];
	if(isset($_SESSION['loginName'])){
	//select the database
	mysql_select_db("webproj", $connection) or die("Could not select database");
	//check for existing item
	$result = mysql_query("select * FROM favlist WHERE userid = '$lname' and link = '$bookMark'");
	
	if(mysql_num_rows($result)<1){
		$result = mysql_query("INSERT INTO favlist(userid, link) VALUES ('$lname','$bookMark')") or die("Could not issue MySQL query");
		//echo $result;
		echo "Added to bookmark!";
	}else{
		echo "Item already exists.";//item already exists
	}
	}else{
		echo "Please login first.";//please login first
	}
?>