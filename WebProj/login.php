<?php
	session_start();
	// login datebase
	$hostname = "127.0.0.1";
	$username = "root";
	$password ="12345678";
	$connection = mysql_connect($hostname, $username, $password) or die("Could not open connection to database");
	
	$method=$_SERVER["REQUEST_METHOD"];
	//post data
	$usn=$_POST['lusername'];
	$pwd=$_POST['lpassword'];
	//check if field is empty
	if($usn=="" || $pwd==""){
		//echo "false";
		//return false;
		die("Field(s) is empty");
	}else{
	//selecting database
	mysql_select_db("webproj", $connection) or die("Could not select database");
	//pass 
	$result = mysql_query("select * from members where userName='$usn'") or die("name unavailable");
	$row = mysql_fetch_array($result);
	//check for existing username
	if($row[0]!=$usn){
			die("Username does not exists.");
	}
	if($row[1]==$pwd){               
               $_SESSION["loginName"] = $usn;
//if(isset($_SESSION['loginName'])){
	//Do sth
	//isset = arimasuka
//}			   
               echo "true";               
           }else{
				echo "false";
			  //echo "false";
			   //$num_row=mysql_num_rows($result);
			//echo $num_row;
         }  
	}
		   



?>