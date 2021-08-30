<?php
require_once("../login/CheckSession.php");
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>UPDATE ADDRESS</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link rel="icon" type="image/png" href="../images/logo/logo.png"/>
		<link rel="stylesheet" type="text/css" href="../vendor/fp/bootstrap/css/bootstrap.min.css">

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-5">
				<form action="UaddressAction.php" method="POST">
						<input type="hidden" name="add" class="form-control" value="<?php echo $_SESSION['id'] ?>">
					<table align="center" class="table table-hover">
					<tr>
						<td><Label>Area</Label></td>
						<td><input type="Text" name="uadd" required="true" class="form-control" placeholder="ploat no, House name, Near area"></td>
					</tr><br><br><br>
					<tr>
						<td><label>Pincode</label></td>
						<td>
							<select name="upincode" min="111111" max="666666" class="pincode form-control" placeholder="Pincode" required="true">
							<option value="">PIN</option>
							<option value="364002">364002</option>
							<option value="364002">380006</option>
							<option value="364002">370006</option>
						</select>
						</td>
					</tr><br><br><br>
					<tr>
						<td><b>City</b></td>
						<td><select name="ucity" placeholder="City" required="true"  class="form-control">
							<option value="">Select</option>
							<option value="Bhavnagar">Bhavnagar</option>
							<option value="Ahemdabad">Ahemdabad</option>
							<option value="Surat">Surat</option></select></td>
						</tr>
					</table>
					<center><input type="submit" name="usubmit" value="submit" class="form-control btn btn-success">
					</center>
					<label><a href="../profile.php"><i class="far fa-arrow-alt-circle-left"></i></a>
					</form>
			</div>
		</div>
	</div>
</body>
</html>