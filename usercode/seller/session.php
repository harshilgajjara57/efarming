<?php
	session_start();

	if(!isset($_SESSION["product_id"]))
	{		
		header("location:productupdate.php");
	}

?>