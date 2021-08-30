<?php
	$l = "localhost";
	$r = "root";
	$p = "";
	$db = "efarming";

	$con = mysqli_connect($l, $r, $p, $db);

	if(!$con == true) die("Unsuccessful")
	
?>