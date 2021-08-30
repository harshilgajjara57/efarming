 <?php
  require("login_action/dbconnect.php");
$id=$_GET['category_id'];
echo "$id";
if(isset($_GET["category_id"]))
{
  $id=$_GET["category_id"];
     echo "$id";

   $q = "DELETE FROM category WHERE category_id = '".$id."'";
    
echo "$q";
$q1 = mysqli_query($conn,$q);
header("Location:categorydetails.php");
  }
   else if(isset($_GET["active_id"]))
   {
     $id=$_GET["active_id"];   
   $q = "UPDATE user_cart set status=!status where cart_id = '$id'";

     $q1 = mysqli_query($conn,$q);
   if($q1 > 0){
       header("Location:categorydetails.php");
    }        
   }
?>