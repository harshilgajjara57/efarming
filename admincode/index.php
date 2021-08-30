<!doctype html>
<?php
session_start();
if (!isset($_SESSION['role'])) {
  header("location:login.php");
  exit();
}
require 'login_action/dbconnect.php';
$role=$_SESSION['role'];
$q="SELECT * FROM user_registration";
$query = mysqli_query($conn,$q);
$f=0;
  $s=0;
  $b=0;
  $i=0;
  $feedback=0;
  $totaluser=0;
  $product=0;
  $category=0;
if (mysqli_num_rows($query)>0) {
  while ($row = mysqli_fetch_assoc($query)) {
    if ($row['Role']=="farmer") {
       $f++;
     }elseif ($row['Role']=="seller") {
       $s++;
     }else{
      $b++;
     }
  }
}
$q1="SELECT * FROM product_order";
$query1 = mysqli_query($conn,$q1);
$i=mysqli_num_rows($query1);

$q2="SELECT * FROM feedback";
$query2 = mysqli_query($conn,$q2);
$feedback=mysqli_num_rows($query2);

$q3="SELECT * FROM user_registration";
$query3 = mysqli_query($conn,$q3);
$totaluser=mysqli_num_rows($query3);

$q4="SELECT * FROM product";
$query4 = mysqli_query($conn,$q4);
$product=mysqli_num_rows($query4);

$q5="SELECT * FROM category";
$query5 = mysqli_query($conn,$q5);
$category=mysqli_num_rows($query5);

date_default_timezone_set('Asia/Calcutta'); 



?>


<html lang="en">

<head>
  <title>E-Farming Admin Panel</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <link rel="shortcut icon" href="../usercode/images/logo/logo.png">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="vendors/ven/css/bootstrap.min.css">
  <!-- Material Kit CSS -->
<link rel="stylesheet" type="text/css" href="vendors/ven/vendors/css/all.css">
  <link href="vendors/ven/assets/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
  <style type="text/css">
    .a{
      height: 125px;
      background-color: white;
      float: left;
      margin: 30px;
      font-size: 50px;
      padding: 25px;
      padding-left: 55px !important;  
    }
    .b{
      height: 30px;
      float: left;
      margin: 30px;
      font-weight: bolder;
      font-size: 20px;
      line-height: 25px;
      text-align: center;
      color: white;
    }
    #main{
      margin-left: 75px;
    }
    #mfooter{
      margin-left: 75px;
      margin-top: -60px;i
    }
  </style>
</head>

<body <?php if(isset($_GET['nml3'])){echo 'onload="myfunc()"';} ?>>
	<?php require("leftpanel.php"); ?>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#"><h3><b><?php echo date("l jS \of F Y ").' '.date("H:i"); ?></b></h3></a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              
              <!-- your navbar here -->
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <!-- your content here -->
         <div class="row" id="main">
             <div class="col-lg-2 a" style="color: #F0433D"><i class="fa fa-user-circle-o"></i>
              <h4 style="padding-top: 15px;padding-left: 20px;font-weight: bold"><?php echo $f; ?></h4>
             </div>
             <div class="col-lg-2 a" style="color: #f0ad4e"><i class="fa fa-user-circle-o"></i>
              <h4 style="padding-top: 15px;padding-left: 20px;font-weight: bold"><?php echo $b; ?></h4>
             </div>
             <div class="col-lg-2 a" style="color: #5cb85c"><i class="fa fa-user-circle-o"></i>
              <h4 style="padding-top: 15px;padding-left: 20px;font-weight: bold"><?php echo $s; ?></h4>
             </div>
             <div class="col-lg-2 a" style="color: #4CB1CF"><i class="fa fa-users"></i>
              <h4 style="padding-top: 15px;padding-left: 20px;font-weight: bold"><?php echo $totaluser; ?></h4>
             </div>
         </div>
         <div class="row" id="mfooter">
             <div class="col-lg-2 b" style="background-color: #F0433D">FARMER</div>
             <div class="col-lg-2 b" style="background-color: #f0ad4e">BUYER</div>
             <div class="col-lg-2 b" style="background-color: #5cb85c">SELLER</div>
             <div class="col-lg-2 b" style="background-color: #4CB1CF;font-size: 16px">TOTAL USER</div>
         </div>


<div class="row" id="main">
             <div class="col-lg-2 a" style="color: #4CB1CF"><i class="fa fa-shopping-cart"></i>
              <h4 style="padding-top: 15px;padding-left: 20px;font-weight: bold"><?php echo $i; ?></h4>
             </div>
             <div class="col-lg-2 a" style="color: #5cb85c"><i class="fa fa-sitemap"></i>
              <h4 style="padding-top: 15px;padding-left: 20px;font-weight: bold"><?php echo $category; ?></h4>
             </div>
             <div class="col-lg-2 a" style="color: #f0ad4e"><i class="fa fa-shopping-bag"></i>
              <h4 style="padding-top: 15px;padding-left: 20px;font-weight: bold"><?php echo $product; ?></h4>
             </div>
             <div class="col-lg-2 a" style="color: #F0433D"><i class="fa fa-commenting"></i>
               <h4 style="padding-top: 15px;padding-left: 20px;font-weight: bold"><?php echo $feedback; ?></h4>
             </div>
         </div>
         <div class="row" id="mfooter">
             <div class="col-lg-2 b" style="background-color: #4CB1CF">ORDER</div>
             <div class="col-lg-2 b" style="background-color: #5cb85c">CATEGORY</div>
             <div class="col-lg-2 b" style="background-color: #f0ad4e;font-size: 16px">TOTAL PRODUCT</div>
             <div class="col-lg-2 b" style="background-color: #F0433D">Feedback</div>
         </div>        </div>
      </div>
      <?php require("copyright_footer.php"); ?>
    </div>
  </div>
  <script type="text/javascript">
function myfunc() {
  Swal.fire({
  type: 'success',
  title: 'Password Updated Successfully',
})
  }
</script>
</body>

</html>