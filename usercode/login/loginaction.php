<?php
session_start();
if (isset($_POST['login'])) {
require "../dbconnect.php";

	$un=$_POST['txtuname'];
	$pwd=$_POST['password'];
	$_SESSION['password']=$pwd;
	$_SESSION['username']=$un;

	$query="SELECT * FROM user_registration WHERE User_name='".$un."' AND User_password='".$pwd."' AND status=1";
	$q=mysqli_query($conn,$query);
	if(mysqli_num_rows($q)>0)
	{
		$a=mysqli_fetch_assoc($q);
		$_SESSION['role']=$a['Role'];
		// $q1="SELECT * FROM user_registration WHERE User_name='".$un." '";
		// $data=mysqli_query($conn,$q1);
		// $a=mysqli_fetch_assoc($data);
		$_SESSION['id']=$a['User_id'];
		
		if ($a['Role']=='buyer') {
			$_SESSION['fname']=$a['First_name'];
		$_SESSION['lname']=$a['Last_name'];
			header("location:../buyer.php");
			exit();	
		}elseif ($a['Role']=='seller') {
			$_SESSION['fname']=$a['First_name'];
		$_SESSION['lname']=$a['Last_name'];
			header("location:../seller.php");
			exit();	
		}else {
			$_SESSION['fname']=$a['First_name'];
		$_SESSION['lname']=$a['Last_name'];
			header("location:../frontpage.php");
			exit();	
		}
	
	}else
    {
    	header("location:login.php?m=m");
		exit();
    }

	}

?>