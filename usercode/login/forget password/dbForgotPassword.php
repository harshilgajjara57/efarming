<?php
require("../../dbconnect.php");

//extract($_POST);


	if(!empty($_POST["forgot-password"])){
		//$conn = mysqli_connect("localhost", "root", "", "blog_samples");
		
		$condition = "";
		if(!empty($_POST["user-login-name"])) 
			$condition = " User_name = '" . $_POST["user-login-name"] . "'";
		if(!empty($_POST["user-email"])) {
			if(!empty($condition)) {
				$condition = " and ";
			}
			$condition = " Email = '" . $_POST["user-email"] . "'";
		}
		
		if(!empty($condition)) {
			$condition = " where " . $condition;
		}

		$sql = "Select * from user_registration " . $condition;
		$result = mysqli_query($conn,$sql);
		$user = mysqli_fetch_assoc($result);
		
		if(!empty($user)) {
			require_once("forgot-password-recovery-mail.php");
		} else {
			$error_message = 'No User Found';
		}
	}
	
?>