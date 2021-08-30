<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!--sweetalert2 cdn for javascript-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <!--set icon in tab-->
    <link rel="shortcut icon" href="../usercode/images/logo/logo.png">
    <!--set scale using so we can see it in another device with out lost website structure-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title Page-->
    <title>Admin Login</title>
    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendors/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendors/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendors/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <!-- Bootstrap CSS-->
    <link href="vendors/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
    <!-- Vendor CSS-->
    <link href="vendors/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendors/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendors/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendors/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendors/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <!-- Main CSS-->
    <link href="vendors/ven/css/theme.css" rel="stylesheet" media="all">
</head>
<body class="animsition" <?php if(isset($_GET['nml'])){echo 'onload="myFunction()"';} ?>>
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="">
                                <img src="vendors/ven/img/icon/logo.png" alt="EFARMING ADMIN" height="50" width="50"><hr><h3>EFARMING ADMIN LOGIN</h3><hr>
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="login_action/loginaction.php" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="au-input au-input--full form-control" type="text" name="un" placeholder="Enter Username Here" required="true">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full form-control" type="password" name="ps" id="myInput" placeholder="Enter Password Here" required="true">
									<input type="checkbox" onclick="myfunction()">Show Password
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <!--<a href="">Forgotten Password?</a>-->
                                    </label>
                                </div>
								<button class="au-btn au-btn--block au-btn--green m-b-20 form-control" type="submit" name="login">sign in</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>
		<script>
function myfunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
<script type="text/javascript">
function myFunction() {
  Swal.fire({
  type: 'error',
  title: 'Wrong Username or Password',
})
  }
</script>
</body>

</html>
<!-- end document-->