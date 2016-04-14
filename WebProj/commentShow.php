<?php
$hostname = "127.0.0.1";
$username = "root";
$password ="12345678";
$connection = mysql_connect($hostname, $username, $password) or die("Could not open connection to database");



$cm=$_POST["blabber"];
$name=$_POST["name"];

mysql_select_db("webproj", $connection) or die("Could not select database");
$result = mysql_query("SELECT * FROM blabber") or die("Could not issue MySQL query");

$results = array();
//push array to show comments
while($rows = mysql_fetch_array($result)){
	$row = array("username" => $rows[0],
				"blabber" => $rows[1],
				"time" => $rows[2]
				);
	array_push($results, $row);
}

echo json_encode($results);

?>