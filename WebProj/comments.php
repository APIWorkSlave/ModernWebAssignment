<?php
session_start();
$hostname = "127.0.0.1";
$username = "root";
$password ="12345678";
$connection = mysql_connect($hostname, $username, $password) or die("Could not open connection to database");



$comment=$_POST["blabber"];
//if loginName is available
if($comment==""){
	die("Did I miss something? Oh no, YOU didn't type anything!");
}else if(isset($_SESSION['loginName'])){
$name=$_SESSION["loginName"];
mysql_select_db("webproj", $connection) or die("Could not select database");
$result = mysql_query("insert into blabber(userName, comment) values ('$name', '$comment')") or die("Could not issue MySQL query");


echo $result;
}else{
	die("You need to login before you can leave any message.");
}

?>