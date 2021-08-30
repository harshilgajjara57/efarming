<?php

     require("login_action/dbconnect.php");
     $id=$_GET["Pname_id"];
                $q = "SELECT * FROM product_name where Pname_id='".$id."'";
                $data = mysqli_query($conn,$q);
                $result = mysqli_fetch_assoc($data);
    
    // echo "$id";
    if($result['status']==1)
    {
    $q1 = "UPDATE  product_name SET status=0 WHERE Pname_id='".$id."' ";
    }
    else
    {
    $q1="UPDATE  product_name SET status=1 WHERE Pname_id='".$id."'";
    }
echo "$q1";
    $r1 = mysqli_query($conn,$q1);
   header("Location:productdetails.php");
  
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