<?php 
session_start();
require ('login_Action/dbconnect.php');
$a= $_POST['Category_type'];
$b= $_POST['txtProduct'];

$d= $_POST['status1'];
/*


	$query1="SELECT * FROM user_registration";
	$q1=mysqli_query($conn,$query1);
	$row=mysqli_fetch_assoc($q1);
	echo $row['User_password'];
		if ($pwd==$row['User_password']) {
		header("location:addcategory.php");
		exit();*/
		$query = "INSERT INTO `product_name` (`category_id`,`product_name`,`status`) VALUES ('$a','$b','$d');";
		echo "$query";

	$q=mysqli_query($conn,$query);
	header("location:addproduct.php?nml2=recreated2");
	exit();
	
	








/*$a= $_POST['txtCategory'];
$c= $_POST['status1'];
$b= $_POST['cimage'];
$n=$_FILES['cimage']['name'];
//$s=$_FILES['file']['size'];
//$t=$_FILES['file']['type'];
$t=$_FILES['cimage']['tmp_name'];
echo $n;
if(isset($n))
{
	if(!empty($n))
	{
		$l='images/category';
		if(move_uploaded_file($t,$l.$n))
		{
			echo "uploaded";
		}
		else
		{
			echo "error";
		}
	}
}
else
{
	echo "plz input file";
}

if (isset($_POST['update'])){
 $query = "INSERT INTO `category` (`Category_name`,`photo`,`status`) VALUES ('$a','$b','$c');";
	$q=mysqli_query($conn,$query);
	header("location:addcategory.php");
}
else
{
	header("location:profile.php");
}
*/
?>
