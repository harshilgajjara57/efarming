<?php
session_start();
if (isset($_POST['login'])) {
require "dbconnect.php";
$una=$_POST['un'];
		$pss=$_POST['ps'];
	$query="SELECT * FROM admin WHERE username='".$una."' AND password='".$pss."' AND status=1";
	$q=mysqli_query($conn,$query);
	if(mysqli_num_rows($q)>0)
	{
		$a=mysqli_fetch_assoc($q);
		// $q1="SELECT * FROM user_registration WHERE User_name='".$un." '";
		// $data=mysqli_query($conn,$q1);
		// $a=mysqli_fetch_assoc($data);
		
		
		if ($una==$a['username'] && $pss==$a['password']) {
		
		$_SESSION['id']=$a['admin_id'];
		$_SESSION['password']=$pss;
		$_SESSION['username']=$una;
		$_SESSION['role']='admin';
			header("location:../index.php");
		}
		else
		{
			header("location:../login.php?nml=adminloginrecreated");
			exit();
		}
	}
	else
		{
			header("location:../login.php?nml=adminloginrecreated");
			exit();
		}
}
?>