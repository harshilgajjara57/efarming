<?php

     require("login_action/dbconnect.php");
     $id=$_GET["category_id"];
                $q = "SELECT * FROM category where category_id='$id'";
                $data = mysqli_query($conn,$q);
                $result = mysqli_fetch_assoc($data);
    if($result['status']==1)
    {
    $q = "update  category set status=0 where category_id='$id' ";
    }
    else
    {
    $q="update  category set status=1 where category_id='$id'";
    }
    $q1 = mysqli_query($conn,$q);
   header("Location:categorydetails.php");
?>