<?php
require "../dbconnect.php";

$contact=$_POST['addcontact'];
$ab=$_POST['add'];
//$userid=$_SESSION['id'];
echo "$contact"."<br>";
if (isset($_POST['Csubmit']))
	{
	$q = "UPDATE `user_registration` SET Contact ='$contact' WHERE User_id='$ab'";
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