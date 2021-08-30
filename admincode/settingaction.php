<?php
require "login_action/dbconnect.php";

$pass=$_POST['password'];
if (isset($_POST['submit']))
	{
	$q = "UPDATE `admin` SET password ='$pass'";

    $data = mysqli_query($conn,$q);
      
        if($data == true)
        {
            header("location:index.php?nml3=recreated3");
          
        }
        else
        {
             
             print_r($errors);
        } 
    
}else{

    header("location:setting.php??nml3=recreated3");
  // exit("Error While uploading image on the server");
} 


?>