<?php
session_start();
$role=$_SESSION['role'];
if ($role!="seller") {
  header('location:login/login.php');
  exit();
}
require 'dbconnect.php';
$pwd=$_SESSION['password'];
$q="SELECT * FROM user_registration WHERE User_password='".$pwd."' AND User_name='".$_SESSION['username']."'";
$query = mysqli_query($conn,$q);
$row = mysqli_fetch_assoc($query);
$email=$row['Email'];
$contact = $row['Contact'];
$fname=$row['First_name'];
$lname=$row['Last_name'];
?>

<!DOCTYPE html>
<html >
<head>
<title>E-farming HomePage</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="vendor/rp/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<div class="bgded overlay" style="background-image:url('images/backgroundimage/f1.jpg');"> 
  <div class="wrapper row0">
    <div id="topbar" class="hoc clear"> 
      <div class="fl_left"> 
        <ul class="nospace">
          <li><i class="fas fa-phone"></i> +91<?php echo "$contact"; ?></li>
          <li><a href="#"></i>Welcome-<?php echo $fname."  ".$lname; ?></a></li>
        </ul>
      </div>
      <div class="fl_right"> 
        <ul class="nospace">
          
          <li><i class="fas fa-envelope"></i>&nbsp;<?php echo "$email"; ?></li></a></li>
          <li><a href="login/login.php" title="Login">Sign out</i></a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <div id="logo" class="fl_left">
        <h1>E-Farming</h1>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li class="active"></li>
          <li>
          <a  href="seller/productinser_seller.php">Sell Product</a>
          </li>
              
      </nav>
    </header>
  </div>
  <div id="pageintro" class="hoc clear"> 
    <article class="center">
      <h3 class="heading underline"></h3>
      
      <footer></footer>
    </article>
  </div>
</div>
<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
    <hr class="btmspace-50">
    <!-- ################################################################################################ -->
    <div class="group">
      <div class="one_quarter first">
        <h6 class="heading">About us:</h6>
        <ul class="nospace btmspace-30 linklist contact">
          <li><i class="fas fa-map-marker-alt"></i>
            <a href="https://www.google.co.in/maps/place/L.J.+Polytechnic,+Ahmedabad/@22.9903558,72.4865109,15z/data=!4m5!3m4!1s0x0:0xec0bcf70a6918be9!8m2!3d22.9903558!4d72.4865109">
            Sarkhej &amp;20, SG Highway, Ahmedabad, 380006</a>
           
          </li>
          <li><i class="fas fa-phone"></i> +(91) 9081737548</li>
          <li><i class="far fa-envelope"></i> e-farming123@gmail.com</li>
        </ul>
        <ul class="faico clear">
          <li><a class="faicon-facebook" href="https://www.facebook.com/vivekghori19/?modal=admin_todo_tour"><i class="fab fa-facebook"></i></a></li>
          <li><a class="faicon-google-plus" href="#"><i class="fab fa-google-plus-g"></i></a></li>
        </ul>
      </div>
      <div class="one_quarter">
        <h6 class="heading">Feedback</h6>
        <p class="nospace btmspace-15"></p>
        <form method="POST" action="feedback/Feedback.php">
          <fieldset>
            <legend>ન્યૂઝલેટર:</legend>
            <input class="btmspace-15" type="text" name="username" value="" placeholder="Name">
            <input class="btmspace-15" type="email" value="" name="email" placeholder="E-mail">
            <input class="btmspace-15" type="text" name="discription" placeholder="Description"></textarea>
            <button type="submit" value="submit">Submit</button>
          </fieldset>
        </form>
      </div>
    </div>
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="#">WWW.E-farming.com</a></p>
  </div>
</div>
<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<script src="vendor/rp/layout/scripts/jquery.min.js"></script>
<script src="vendor/rp/layout/scripts/jquery.backtotop.js"></script>
<script src="vendor/rp/layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>