<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../vendor/rp/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		<link rel="stylesheet" href="../vendor/rp/css/style.css">
		<style type="text/css">
			.img_cont{
				background: url('../images/backgroundimage/2.jpg');
				background-size: cover;
				position: absolute;
				top: 0;
				width: 100%;
				height: 100%;
				z-index: -1;
				opacity: 0.8;
			}
			.img_cont1{
				background: black;
				background-size: cover;
				position: absolute;
				top: 0;
				width: 60%;
				left: 400px;
				height: 100%;
				z-index: -1;
				opacity: 0.4;
			}
			.form-wrapper{
				text-align: left;
			}
			input{
				color: white;
			}
			.logoi{
				padding-right: 165px;
		
			}
		</style>
	</head>

	<body>

		<div class="wrapper" style="position: relative;">
			<div class="img_cont"></div>
			<div class="inner" style="position: relative;color: white;" align="right">
				<div class="img_cont1"></div>
				<form action="loginaction.php" method="POST" enctype="multipart/form-data">
					<div class="logoi">
					<img src="../images/logo/logo.png" height="60px" width="60px">
					<h3 style="font-size: 35px;font-weight: bold;color: white;padding-left: 130px">Login</h3>
				</div>
					
					
					<div class="form-wrapper">
						<label for=""><b>User Name</b></label>
						<input type="text" class="form-control" name="txtuname" required="true">
						<?php if (isset($_GET['m'])) {
							?>
							<span class="name" style="color: red;margin-top: 20px;margin-left: 25px;">Invalid UserName</span>
							<?php
						} ?>
					</div>
					<div class="form-wrapper">
						<label><b>Password</b></label>
						<input type="password" class="form-control" name="password" required="true" size="25" id="myInput">
						<input type="checkbox" onclick="myFunction()">Show Password
					</div>
						<BUTTON type="submit" name="login">Login</BUTTON>
				</form><br>
					<a href="../registration/registration.php" style="color: white; font-size: 20px; padding-left:50px;text-decoration: none">Sign up</a>
					<a href="forget password/forgetpassword.php" style="color:white;font-size: 20px; padding-left: 50px;text-decoration: none;">Forget Password?</a>
			</div>
		</div>
		<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
		
	</body>
