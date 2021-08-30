<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>RegistrationForm</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../vendor/rp/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		<link rel="stylesheet" href="../vendor/rp/css/style.css">
		<style type="text/css">
			.img_cont{
				background: url('../images/backgroundimage/1.jpg');
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
				left: 250px;
				width: 90%;
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
			.logo{
				padding-right: 165px;
			}
		</style>
	</head>

	<body>

		<div class="wrapper" style="position: relative;">
			<div class="img_cont"></div>
			<div class="inner" style="position: relative;color: white;" align="right">
				<div class="img_cont1"></div>
				<form action="registeraction.php" method="POST" enctype="multipart/form-data" >
					<div class="logo">
					<img src="../images/logo/logo.png" height="60px" height="60">
				</div>
					<h2 style="color:white; padding-right: 150px">E-Farming</h2>
					<h3 style="color: white"> Registration Form</h3>
					<div class="form-wrapper" align="left">
						<label for=""><b>User Name*</b></label>
						<input type="text" class="form-control" name="txtuname" required="true" minlength="2" >
					</div>
					<div class="form-group">
						<div class="form-wrapper">
							<label for=""><b>First Name*</b></label>
							<input type="text" class="form-control" name="txtfname" required="true" minlength="2">
						</div>
						<div class="form-wrapper">
							<label for=""><b>Last Name*</b></label>
							<input type="text" class="form-control" name="txtlname" required="true" minlength="2">
						</div>
					</div>
					<div class="form-wrapper">
						<label for=""><b>Email*</b></label>
						<input type="email" class="form-control" name="email"  pattern=".+@gmail.com" required="true">
					</div>
					<div class="form-wrapper">
						<label for=""><b>Password*</b></label>
						<input type="password" class="form-control" name="password" required="true"minlength="2" id="myInput">
						<span><input type="checkbox" onclick="myFunction()">Show</span>
					</div>
					<div class="form-wrapper">
						<label for=""><b>Contact no:*</b></label>
						<input type="text" name="contact" class="form-control" pattern="[789][0-9]{9}" required="true">
					</div>
					<div class="form-wrapper">
						<label for=""><b>Role*</b></label>
						<select name="role" class="form-control" required="true" style="color: red;">
							<option value=""><b>Select Role</b></option>
							<option value="farmer">Farmer</option>
							<option value="seller">Seller</option>
							<option value="buyer">Buyer</option>
						</select>
					</div>
					<div class="form-wrapper">
						<label for="" ><b>Gender*</b></label>
						<input type="radio" name="rdobutton" value="male">Male
						<input type="radio" name="rdobutton" value="female">Female
					</div>
					<div class="form-wrapper">
						<label for=""><b>Date Of birth*</b></label>
						<input type="date" id="start" name="bdate" class="form-control" 
       					 min="1930-01-01" max="2000-12-31" required="true">

					</div>
					<div class="form-wrapper" class="form-control">
						<label for="" ><b>Upload profile image*<b></label>
						<input type="file" name="uimage" required="true">
					</div>
						
							
					<BUTTON type="submit" name="submit" value="submit">Register now</BUTTON>
				</form><br>
				<a href="../login/login.php" style="color: white; font-size: 20px;text-decoration: none; padding-left:20px">login Account</a><br><br>
				<a href="../staticpages/Account.pdf" style="text-decoration: none;color: white;">How to create account?</a>
			</div>
		</div>
		<---------------------------------------------------------------------------------------------->
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