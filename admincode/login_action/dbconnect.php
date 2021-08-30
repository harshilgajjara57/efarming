<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname="efarming";

	 $conn=mysqli_connect($servername,$username,$password);
	 if (!$conn) {
	 	die("connection failed: ".mysqli_connect_error());
	 }
	 //echo "Connected successfully";
	 $db=mysqli_select_db($conn,$dbname);	
	 if ($db) {
	 	//echo "database selected";
	 }
	 else{
	 	//echo "database not selected";
	 }
?>