<?php 
 require "../dbconnect.php";
 session_start();
$un = $_POST['username'];
$email =$_POST['email'];
$discription=$_POST['discription'];
if ($un==$_SESSION['username']) {	
	$query="INSERT INTO feedback(user_name,email,Description) values('".$un."','".$email."','".$discription."')";
	$q=mysqli_query($conn,$query);
	echo "YOUR FEEDBACK IS SUBMITTED";
	header("location:../Frontpage.php");
}
else{
	echo "PLEASE ENTER VALID USERNAME";
}
?>