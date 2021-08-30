 <?php
	require("../dbconnect.php");

if(isset($_GET["del_id"]))
  {
    $id=$_GET["del_id"];

    $q = "DELETE FROM product where product_id = '$id'";

    $q1 = mysqli_query($conn,$q);
    if($q1 > 0){
      header("Location:productview_seller.php");
    }
  }
  else if(isset($_GET["active_id"]))
  {
    $id=$_GET["active_id"];   
    $q = "UPDATE product set status=!status where product_id = '$id'";

    $q1 = mysqli_query($con,$q);
    if($q1 > 0){
      header("Location:productview_seller.php");
    }        
  }
?>