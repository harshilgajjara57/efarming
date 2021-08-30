<?php
	$l = "localhost";
	$r = "root";
	$p = "";
	$db = "budy";

	$con = mysqli_connect($l, $r, $p, $db);

	if(!$con == true) die("Unsuccessful");
	
?>