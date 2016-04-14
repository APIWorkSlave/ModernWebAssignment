<?php
session_start();
	// login datebase
	$hostname = "127.0.0.1";
	$username = "root";
	$password ="12345678";
	$connection = mysql_connect($hostname ,$username,$password) or die("Could not open connection to database");

		$sName=$_SESSION["loginName"];
		
		$sPage=$_POST['currentlink'];				
$method=$_SERVER["REQUEST_METHOD"];
	

//delete stuff from database

switch ($method) {
	
	
	case "DELETE":
 $obj = json_decode(file_get_contents('php://input'));
$link = $obj->link;
$user = $_SESSION['loginName'];
//echo $link;

mysql_select_db("webproj", $connection) or die("Could not select database");
$result = mysql_query("delete from favlist where link='$link' and userid='$user'") or die("Could not issue MySQL query");


//echo $result;
break;

}

?>
	
