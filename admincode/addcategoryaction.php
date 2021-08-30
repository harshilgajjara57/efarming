<?php 
session_start();
require ('login_action/dbconnect.php');
$a= $_POST['txtCategory'];
$c= $_POST['status1'];
$b= $_POST['cimage'];
$e=$_POST['catepriv'];
//$n=$_FILES['cimage']['name'];
//$s=$_FILES['file']['size'];
//$t=$_FILES['file']['type'];
//$t=$_FILES['cimage']['tmp_name'];
echo $n;


if (isset($_POST['update'])){
 $query = "INSERT INTO `category` (`Category_name`,`status`,`cate_priv`) VALUES ('$a','$c','$e');";
	$q=mysqli_query($conn,$query);
	header("location:addcategory.php?nml1=recreated1");
}
else
{
	header("location:addcategory.php");
}

?>
