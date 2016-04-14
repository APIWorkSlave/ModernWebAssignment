<?php
// login datebase
$hostname = "127.0.0.1";
$username = "root";
$password ="12345678";
$connection = mysql_connect($hostname, $username, $password) or die("Could not open connection to database");

$usn=$_POST['user'];
$pwd=$_POST['password'];
$email=$_POST['email'];
$method=$_SERVER["REQUEST_METHOD"];
//check for empty fields
		if($usn=="" || $pwd=="" ||$email==""){
		//echo "false";
		//return false;
		die("Field(s) is empty");
//execute rule of Message Board: real admins only have lowercase letters in their name
		}else if(strpos($usn,'admin')!==false){
		die("DO NOT PRETEND TO BE AN ADMIN TO OTHER USERS!");
		
//check email format
	}else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			die("Invalid email format");
	}else{
//check for duplicate userName
		mysql_select_db("webproj", $connection) or die("Could not select database");
		$result1=mysql_query("select * from members where userName='$usn'");
		$row=mysql_fetch_array($result1);
		//$row is an array containing the sql query results from the server
		if($row[0]==$usn){
			//echo ($row[2]);
			die("Username already exists.");
			
		}else{
			mysql_select_db("webproj", $connection) or die("Could not select database");
			$result1=mysql_query("select * from members where email='$email'");
			$row=mysql_fetch_array($result1);
			//$rowResult=$row[2];
			//die($rowResult);
//check for duplicate email
			if($row[2]==$email){
				die("Email already exists.");
			}else{
     	    mysql_select_db("webproj", $connection) or die("Could not select database");
			$result = mysql_query("INSERT INTO members(userName,userPassword, email) VALUES ('$usn','$pwd','$email')") or die("Could not issue MySQL query");
			echo "Account created.";
			}
		}	
	}
?>