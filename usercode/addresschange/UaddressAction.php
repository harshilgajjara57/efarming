<?php
require "../dbconnect.php";

$add=$_POST['uadd'];
$pin=$_POST['upincode'];
$city=$_POST['ucity'];
$a=$_POST['add'];
//$userid=$_SESSION['id'];
$id=$_POST['add'];
echo "$add"."<br>";
echo "$city"."<br>";
echo "$pin"."<br>";
if (isset($_POST['usubmit']))
	{
	$q = "UPDATE `user_address` SET Address ='$add',Pincode ='$pin', City = '$city' WHERE User_id='$a'";
    //$q="INSERT into 'category' ('Category_name','images_path') VALUES ('".$Category_name."','".$target_path."')";
    $data = mysqli_query($conn,$q);
       //print_r($data);
      // exit();
        if($data == true)
        {
            header("location:../profile.php?message=Category Updated");
          
        }
        else
        {
             
             print_r($errors);
        } 
    
}else{

    header("location:../profile.php?error=Error While Updating Category on the server");
  // exit("Error While uploading image on the server");
} 


?>