<?php

$add=$_POST['address'];
$pin=$_POST['pincode'];
$city=$_POST['city'];
//$userid=$_SESSION['id'];
$id=$_POST['add'];
echo "$add";
echo "$city";
echo "$pin";
if (isset($_POST['submit'])) {

    require("../dbconnect.php");
    $query = "INSERT INTO `user_address` (`Address`, `Pincode`, `City`,`User_id`) VALUES ('$add', '$pin', '$city','$id');";
	$q=mysqli_query($conn,$query);
	header("location:../profile.php");
}
else
{
	header("location:../profile.php");
}

?>