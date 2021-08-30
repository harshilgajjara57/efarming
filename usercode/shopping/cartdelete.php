 <?php
	require("../dbconnect.php");

if(isset($_GET["del_id"]))
  {
    $id=$_GET["del_id"];
    // echo "$id";

    $q = "DELETE  FROM user_cart WHERE cart_id = '".$id."'";
    
// echo "$q";
    $q1 = mysqli_query($conn,$q);
   header("Location:cart.php");
  }
  // else if(isset($_GET["active_id"]))
  // {
  //   $id=$_GET["active_id"];   
  //   $q = "UPDATE user_cart set status=!status where cart_id = '$id'";

  //   $q1 = mysqli_query($conn,$q);
  //   if($q1 > 0){
  //     header("Location:cart.php");
  //   }        
  // }
?>