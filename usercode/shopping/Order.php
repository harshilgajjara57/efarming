<?php
require '../dbconnect.php';
session_start();
$uid=$_POST['ui'];
$_SESSION['uid']=$uid;
$q2="SELECT * FROM user_cart WHERE User_id = '$uid'";
$r2=mysqli_query($conn,$q2);
	if (mysqli_num_rows($r2)>0) 
	{
		while($row2=mysqli_fetch_assoc($r2))
		{
		$sel_id=$row2['seller_id'];
		$pro_id=$row2['product_id'];
		$qun=$row2['Qyt'];
		$proamo=$row2['product_amount'];
		$pronam=$row2['product_name'];
		$sta=0;
		$cartd=$row2['cart_id'];
		$pho=$row2['photo'];
		echo "$seller_id";
		//print_r($row2);
		//exit();
		//echo $uid,"   ",$sel_id,"   ",$pro_id,"   ",$qun,"   ",$proamo,"   ",$sta;

		$a1="INSERT INTO product_order(`seller_id`,`cust_id`,`product_id`,`qty`,`total_amount`,`Delivery_status`,`product_name`,`photo`) VALUES('$sel_id','$uid','$pro_id','$qun','$proamo','$sta','$pronam','$pho')";
			$d1=mysqli_query($conn,$a1);
			echo "$a1";

		$a2="delete from user_cart where cart_id='$cartd'";
			$d2=mysqli_query($conn,$a2);
		}
	}
		header("location:product.php");
?>
