<?php
session_start();
	require("../dbconnect.php");
	//require_once("session.php");
	function GetImageExtension($imagetype)
     {
       if(empty($imagetype)) return false;
       switch($imagetype)
       {
           case 'image/bmp': return '.bmp';
           case 'image/gif': return '.gif';
           case 'image/jpeg': return '.jpg';
           case 'image/png': return '.png';
           default: return false;
       }
     }
	$product_id=$_POST['add'];
	$pamount=$_POST['pamount'];
	$textarea=$_POST['txtarea'];
	$Qty=$_POST['Qty'];
	$Qty1=$_POST['quty'];
	if (!empty($_FILES["ufile"]["name"])) {

    $file_name=$_FILES["ufile"]["name"];
    $temp_name=$_FILES["ufile"]["tmp_name"];
    $imgtype=$_FILES["ufile"]["type"];
    $ext= GetImageExtension($imgtype);
    $photo=date("d-m-Y")."-".time().$ext;
		move_uploaded_file($_FILES["ufile"]["tmp_name"],"../images/productimage/".$photo);
		//$hobby = implode(',',$_POST["in"]);
		/*$sql = "UPDATE product SET 
		product_name= '$pname';
		product_amount = product_id		product_details='$txtarea';
		Qty='$Qty';
		photo='$photo' WHERE product_id = '$product_id'";*/
		$sql="UPDATE `product` SET `product_amount`='$pamount',`product_details`='$textarea',`Qyt`='$Qty',`quty`='$Qty1',`photo`='$photo' WHERE product_id='$product_id'";
		$q1 = mysqli_query($conn, $sql);
		if($q1==true){
			header("location:productview.php");
			exit();
		}else
		{
			header("location:productview.php");
			exit();
		}
	}
?>