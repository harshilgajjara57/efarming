<?php
	require("../dbconnect.php");
	extract($_POST);
	//require_once("session.php");

	if(isset($update)){
		//$hobby = implode(',',$_POST["in"]);
		/*$sql = "UPDATE product SET 
		product_name= '$pname';
		product_amount = product_id		product_details='$txtarea';
		Qty='$Qty';
		photo='$photo' WHERE product_id = '$product_id'";*/
		$sql="UPDATE `product` SET `product_name`='$pname',`product_amount`='$pamount',`product_details`='$txtarea',`Qyt`='$Qty',`photo`='$photo' WHERE product_id=$product_id";
		$q1 = mysqli_query($conn, $sql);
		if($q1>0){
			header("Location:productview_seller.php");
		}else
		{
			echo "Data is not Updated.";
		}
	}
	else
	{
		echo "error";
	}
?>