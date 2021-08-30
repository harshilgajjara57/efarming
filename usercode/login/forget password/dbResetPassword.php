<?php
require("../../dbconnect.php");


	if(isset($_POST["btnReset"])) 
	{
		$pass=$_POST["Password"];
		$uname=$_POST["user"];

		$sql = "UPDATE admin SET password = '$pass' WHERE username = '$uname'";
		$result = mysqli_query($con,$sql);
		if ($result==true) 
		{
			header("location:../login.php?message1=Password is reset successfully.");
		}
		else
		{
			header("location:../ResetPassword.php?message=Error while reset password.");
		}
		
	}
?>