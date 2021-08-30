
<!DOCTYPE html>
<html>

<!-- Mirrored from demo.admireadmin.com/admire2/login1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Dec 2018 13:10:52 GMT -->
<head>
    <title>E-Farmin Forget Password</title>
    
</head>
<body>


<div class="container wow fadeInDown" data-wow-delay="0.5s" data-wow-duration="2s">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 login_top_bottom">
            <div class="row">
                <div class="col-lg-5  col-md-8  col-sm-12 mx-auto">
                    <div class="login_logo login_border_radius1">
                        <h3 class="text-center">
                            <span class="text-white"> &nbsp;<br>Forgot Passowrd<br></span>
                        </h3>
                        <?php
                if(isset($_GET["message1"]))
                {
                  ?>
                  <h3 class="box-title" style="color: green;">
                    <?php echo $_GET["message1"]; ?>
                  </h3>
                  <?php    
                }
                else if(isset($_GET["message"]))
                {
                  ?>
                  <h3 class="box-title" style="color: red;">
                    <?php echo $_GET["message"]; ?>
                  </h3>
                  <?php    
                }
              ?>
                    </div>
                    <div class="bg-white login_content login_border_radius">
                        <form action="dbForgotPassword.php" id="login_validator" method="POST" class="login_validator">
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <div class="input-group">
                                    <span class="input-group-addon"> <i class="fa fa-user text-primary"></i>
                                    </span>
                                        <input type="text" class="form-control" name="user-login-name" id="username" placeholder="Username">
                                    </div>
                                </div>
                            </div>
                            <!--</h3>-->
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon addon_password"> <i class="fa fa-lock text-primary"></i></span>
                                        <input type="email" class="form-control form-control-md" name="user-email" id="email" placeholder="email">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <input type="submit" value="Log In" name="forgot-password" class="btn btn-primary btn-block login_button">
                                    </div>
                                </div>
                            </div>

                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- global js -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/popper.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- end of global js-->
<!--Plugin js-->
<script type="text/javascript" src="vendors/bootstrapvalidator/js/bootstrapValidator.min.js"></script>
<script type="text/javascript" src="vendors/wow/js/wow.min.js"></script>
<!--End of plugin js-->
<script type="text/javascript" src="js/pages/login1.js"></script>
</body>


<!-- Mirrored from demo.admireadmin.com/admire2/login1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Dec 2018 13:10:53 GMT -->
</html>