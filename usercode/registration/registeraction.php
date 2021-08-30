<?php

if (isset($_POST['submit'])) 
{
	
	
	require "../dbconnect.php";
	//require 'fileUploadProcess.php';
	session_start();

	function GetImageExtension($imagetype)
		 {
		   if(empty($imagetype)) return false;
		   switch($imagetype)
		   {
			   case 'image/bmp': return '.bmp';
			   case 'image/gif': return '.gif';
			   case 'image/jpeg': return '.jpg';
			   case 'image/png': return '.png';
			   default: return false;
		   }
		 }

		$un=$_POST['txtuname'];
		$fn=$_POST['txtfname'];
		$pwd=$_POST['password'];
		$ln=$_POST['txtlname'];
		$role=$_POST['role'];
		$dob=$_POST['bdate'];
		$email=$_POST['email'];
		$gen=$_POST['rdobutton'];
		$con=$_POST['contact'];
		if (!empty($_FILES["uimage"]["name"]))
		{
		$file_name=$_FILES["uimage"]["name"];
		$imgtype=$_FILES["uimage"]["type"];
		$ext= GetImageExtension($imgtype);
		$imagename=date("d-m-Y")."-".time().$ext;
			if (move_uploaded_file($_FILES['uimage']['tmp_name'], "../images/userimage/".$imagename)) {
				
			}



				$query1="SELECT * FROM user_registration";
				$q1=mysqli_query($conn,$query1);
				$row=mysqli_fetch_assoc($q1);
					if ($un==$row['User_name']) 
					{
					header("location:registration.php");
					exit();
					}
					else
					{
					$query = "INSERT INTO `user_registration` (`User_Name`, `User_password`, `Role`, `First_name`, `Last_name`, `DOB`, `Email`, `Gender`, `User_photo`, `Contact`,`status`) VALUES ('$un', '$pwd', '$role', '$fn', '$ln', '$dob', '$email', '$gen', '$imagename', '$con',1);";

				$q=mysqli_query($conn,$query);
				header("location:../login/login.php");
				exit();
				
				}
		}

	}

?>