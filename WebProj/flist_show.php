<?php
session_start();
	// login datebase
	$hostname = "127.0.0.1";
	$username = "root";
	$password ="12345678";
	$connection = mysql_connect($hostname ,$username,$password) or die("Could not open connection to database");			
	$method=$_SERVER["REQUEST_METHOD"];
	$user = $_SESSION['loginName'];
	
	switch ($method) {
	
	case GET;
	
	mysql_select_db("webproj", $connection) or die ("Could not select database");
	
	
	$result= mysql_query("SELECT * FROM favlist where userid='$user'");
	
	$results = array();
while($rows = mysql_fetch_array($result)){
	$row = array("userid" => $rows[0],
				"link" => $rows[1],
				"cmid" => $rows[2]				
				);
	array_push($results, $row);
}

echo json_encode($results);
	
	break;
}
	

?>
