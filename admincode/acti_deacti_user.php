<?php
	require("login_action/dbconnect.php");

     require("login_action/dbconnect.php");
     $id=$_GET["User_id"];
                $q = "SELECT * FROM user_registration where User_id='$id'";
                $data = mysqli_query($conn,$q);
                $result = mysqli_fetch_assoc($data);
    
    // echo "$id";
    if($result['status']==1)
    {
    $q = "update  user_registration set status=0 where User_id='$id' ";
    }
    else
    {
    $q="update  user_registration set status=1 where User_id='$id'";
    }
// echo "$q";
    $q1 = mysqli_query($conn,$q);
   header("Location:userdetails.php");
  
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