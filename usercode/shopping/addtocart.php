<?php 
 require '../dbconnect.php';
$id=$_GET['msg'];
session_start();

echo $id;
$q="SELECT * FROM product WHERE product_id=$id";
$r=mysqli_query($conn,$q);
if(mysqli_num_rows($r)>0){
	$row = mysqli_fetch_assoc($r);
	$category_id=$row['category_id'];
	$sel_id=$row['User_id'];
	$pro_id=$row['product_id'];
	$product_name=$row['product_name'];
	$product_amount=$row['product_amount'];
	$product_details=$row['product_details'];
	$Qyt=$row['Qyt'];
	$photo=$row['photo'];
	$User_id=$_SESSION['User_id'];



	$q1="INSERT INTO user_cart(category_id,product_id,product_name,product_amount,product_details,Qyt,photo,User_id,seller_id) VALUES('$category_id','$pro_id','$product_name','$product_amount','$product_details','$Qyt','$photo','$User_id','$sel_id')";
	$r1=mysqli_query($conn,$q1);
header("location:product.php");
exit();
}

?>