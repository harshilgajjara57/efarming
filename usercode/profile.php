<?php 
//session_start();
require 'dbconnect.php';
require_once("login/CheckSession.php");
$q="SELECT * FROM user_registration WHERE User_password='".$_SESSION['password']."' AND User_name='".$_SESSION['username']."'";
$query = mysqli_query($conn,$q);
$row = mysqli_fetch_assoc($query);
$email=$row['Email'];
$contact = $row['Contact'];
$fname=$row['First_name'];
$lname=$row['Last_name'];
$file_name = $row['User_photo'];
$date=$row['DOB'];
$roleu=$row['Role'];
$uname=$row['User_name'];
?>
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-Farming</title>
    <meta name="description" content="Creative CV is a HTML resume template for professionals. Built with Bootstrap 4, Now UI Kit and FontAwesome, this modern and responsive design template is perfect to showcase your portfolio, skils and experience."/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="vendor/fp/css/aos.css" rel="stylesheet">
    <link href="vendor/fp/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/fp/styles/main.css" rel="stylesheet">
    <script type="text/javascript" src="vendor/fp/js/jquery.min.js"></script>
    <script type="text/javascript" src="vendor/fp/bootstrap/js/bootstrap.min.js"></script>


    <style type="text/css">
      .btn-primary {
    background-color: #378C3F;
    color: #FFFFFF;
      }
    </style>


<script type="text/javascript">
  $(document).ready(function(){
    $('.address').hide();
    $('#addAddress').on('click',function(){
      $('.address').toggle();
    });
    $('#submit').on('click',function(){
      $('.address').hide();
    });
  });
  
</script>
  </head>
  <body id="top">
    <header>
      <div class="profile-page sidebar-collapse">
        <nav class="navbar navbar-expand-lg fixed-top navbar-transparent bg-primary" color-on-scroll="400">
          <div class="container">
            <div class="navbar-translate"><a class="navbar-brand" href="#" rel="tooltip">E-Farming</a>
              <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-bar bar1"></span><span class="navbar-toggler-bar bar2"></span><span class="navbar-toggler-bar bar3"></span></button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation">
              <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link smooth-scroll" id="addAddress" href="#about">Add Address</a></li>
      
                <li class="nav-item"><a class="nav-link smooth-scroll" href="shopping/order_show.php">Your Order</a></li>
                <li class="nav-item"><a class="nav-link smooth-scroll" href="shopping/product.php">Shopping</a></li>
                 <li class="nav-item"><a class="nav-link smooth-scroll"  >hii,<font color="yellow" style="font-family: Berlin Sans FB Demi"><?php echo $uname;?></font></a></li>

                 <li class="nav-item"><a class="nav-link smooth-scroll" href="login/login.php" style="font-size: 12px; margin-left: 20px"><font color="yellow"><b>LogOut</b></font></a>
                
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <div class="page-content">
      <div>
<div class="profile-page">
  <div class="wrapper">
    <div class="page-header page-header-small" filter-color="green">
      <div class="page-header-image" data-parallax="true" style="background-image: url('images/backgroundimage/back.jpg');"></div>
      <div class="container">
        <div class="content-center">
          <div class="cc-profile-image"><a href="#"><img src="images/userimage/<?php echo "$file_name"; ?>"></a></div>
          <div class="h2 title"><?php echo $fname."  ".$lname; ?></div>
         <a class="btn btn-primary" href="#" data-aos="zoom-in" data-aos-anchor="data-aos-anchor">PROFILE</a>
        </div>
      </div>
      
    </div>
  </div>
</div>
<div class="section" id="about">
  <div class="container">
    <div class="card" data-aos="fade-up" data-aos-offset="10">
      <div class="row">
        
        <div class="col-lg-6 col-md-12">
          <div class="card-body">
            <div class="h4 mt-0 title">Basic Information</div>
            <div class="row">
              <div class="col-sm-4"><strong class="text-uppercase">Date of Birth:</strong></div>
              <div class="col-sm-8"><?php echo $date; ?></div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Email:</strong></div>
              <div class="col-sm-8"><?php echo "$email"?></div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Phone:</strong></div>
              <div class="col-sm-8">+91<?php echo "$contact"; ?>&nbsp;<a href="contactchange/contect.php">New</a></div>

            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Address:</strong></div>
                 
              <div class="col-sm-8">
                <?php
                $id=$_SESSION['id'];
                $sql="SELECT * FROM User_address WHERE User_id='$id'";
                $d=mysqli_query($conn,$sql);
                $r=mysqli_fetch_assoc($d);
                echo "<br>".$r['Address'];
                echo "<br>".$r['Pincode']; 
                echo "<br>".$r['City']; 
                ?>&nbsp;<a href="addresschange/update.php"><font color="red">Update</font></a></div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Your User Role:</strong></div>
              <div class="col-sm-8"><?php echo $roleu; ?></div>
            </div>
          </div>
        </div>
        <div class="col-lg-1 col-md-12"></div>
        <div class="col-lg-4 col-md-12">
          <div class="address">
            <form action="addresschange/addaddress.php" method="post"> 
              <input type="hidden" name="add" class="form-control" value="<?php echo $_SESSION['id'] ?>">
              <textarea class="address form-control" cols="5" rows="3" placeholder="Ploatno,street,area" required="true" name="address"></textarea><br>
              <select name="pincode" min="111111" max="666666" class="pincode form-control" placeholder="Pincode" required="true">
                <option value="">PIN</option>
                <option value="380001">380001</option>
                <option value="380003">380003</option>
                <option value="380005">380005</option>
                <option value="380007">380007</option>
                <option value="380009">380009</option>
                <option value="380011">380011</option>
                <option value="380013">380013</option>
                <option value="380015">380015</option>
                <option value="390001">390001</option>
                <option value="390003">390003</option>
                <option value="390005">390005</option>
                <option value="390007">390007</option>
                <option value="390009">390009</option>
                <option value="390011">390011</option>
                <option value="390013">390013</option>
                <option value="390015">390015</option>
                <option value="350001">350001</option>
                <option value="350003">350003</option>
                <option value="350005">350005</option>
                <option value="350007">350007</option>
                <option value="350009">350009</option>
                <option value="350011">350011</option>
                <option value="350013">350013</option>
                <option value="350015">350015</option>
                <option value="350017">350017</option>
                <br>
              </select><br>
              <select name="city" class="city form-control" placeholder="Select" required="true">
                <option value="">CITY</option>
                <option value="Ahemdabad">Ahemdabad</option>
              <option value="Surat">Surat</option>
              <option value="Vadodara">Vadodara</option>
              <option value="Gandhinagar">Gandhinagar</option>
              <option value="Rajkot">Rajkot</option>
              <option value="Bhavnagar">Bhavnagar</option>
              <option value="Anand">Anand</option>
              <option value="Jamnagar">Jamnagar</option>
              <option value="Junagadh">Junagadh</option>
              <option value="Bhuj">Bhuj</option>
              <option value="Veraval">Veraval</option>
              <option value="Navsari">Navsari</option>
              <option value="Vapi">Vapi</option>
              <option value="Gandhidham">Gandhidham</option>
              <option value="Bharuch">Bharuch</option>
              <option value="Patan">Patan</option>
              <option value="Nadiad">Nadiad</option>
              <option value="Porbandar">Porbandar</option>
              <option value="Ankleshwar">Ankleshwar</option>
              <option value="Dwarka">Dwarka</option>
              <option value="Valsad">Valsad</option>
              <option value="Godhra">Godhra</option>
              <option value="Palanpur">Palanpur</option>
              <option value="Dahod">Dahod</option>
              <option value="Saputara">Saputara</option>
              <option value="Morbi">Morbi</option>
              <option value="Mehsana">Mehsana</option>
              <option value="Palitana">Palitana</option>
              <option value="Botad">Botad</option>
              <option value="Mandvi">Mandvi</option>
              <option value="Gondal">Gondal</option>

              </select><br>
              <input type="submit" id="submit" name="submit" value="submit" class="form-control btn btn-primary">
              <label><a href="profile.php"><i class="far fa-arrow-alt-circle-left"></i></a>
              </label>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>






</div>
    </div>
  
    <script src="vendor/fp/js/core/jquery.3.2.1.min.js"></script>
    <script src="vendor/fp/js/core/popper.min.js"></script>
    <script src="vendor/fp/js/core/bootstrap.min.js"></script>
    <script src="vendor/fp/js/now-ui-kit.js?v=1.1.0"></script>
    <script src="vendor/fp/js/aos.js"></script>
    <script src="vendor/fp/scripts/main.js"></script>
  </body>
</html>