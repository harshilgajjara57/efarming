<?php 
session_start();
require ('login_action/dbconnect.php');
$abc= $_POST['txtCategory'];
$xyz= $_POST['txtdescription'];
echo "$abc";
echo "$xyz";
if (isset($_POST['update'])){
 $query = "INSERT INTO `add_menu` (`menu_name`,`menu_Description`) VALUES ('$abc','$xyz');";
	$q=mysqli_query($conn,$query);
	header("location:addmenufacturer.php");
}
else
{
	header("location:addmenufacturer.php");
}

?>
