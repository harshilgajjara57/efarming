
<?php
require '../dbconnect.php';

session_start();
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
<html>
<head>
	<title></title>
		<link href="../images/logo/logo.png" rel="shortcut icon"/>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">


	<!-- Stylesheets -->
	<link rel="stylesheet" href="../vendor/sp/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="../vendor/sp/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="../vendor/sp/css/flaticon.css"/>
	<link rel="stylesheet" href="../vendor/sp/css/slicknav.min.css"/>
	<link rel="stylesheet" href="../vendor/sp/css/jquery-ui.min.css"/>
	<link rel="stylesheet" href="../vendor/sp/css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="../vendor/sp/css/animate.css"/>
	<link rel="stylesheet" href="../vendor/sp/css/style.css"/>
	<style type="text/css">
	.img_cont{
				background: url('../images/backgroundimage/f1.jpg');
				background-size: cover;
				position: absolute;
				top: 0;
				width: 100%;
				height: 100%;
				z-index: -1;
				opacity: 0.6;
			}
			.img_cont1{
				background: lightgreen;
				background-size: cover;
				position: absolute;
				top: 3;
				width:40%;
				left: 400px;
				height: 80%;
				z-index: -2;
				opacity: 0.4;
			}
			.table{
				text-align: bottom;
			}
		</style>
</head>
<body>
	<nav class="main-navbar">
			<div class="container">
				<!-- menu -->
				<ul class="main-menu">
					<li><a href="../seller.php">Hii,<?php echo "$fname"; ?></a></li>
					</a></li>
					</li>
                   <li><a href="productview_seller.php">VIEW PRODUCT</a></li>
				</ul>
			</div>
		</nav>
	<form method="post" action="Photoupload_seller.php" enctype="multipart/form-data">
		<input type="hidden" name="add" class="form-control" value="<?php echo $_SESSION['id'] ?>">
		<div class="img_cont"></div>
		<div class="img_cont1"></div>
		<center><h1><font color="red" style="font-size:30px"> Sell Your Product</font></h1></center>
		<table align="center">
			
			<tr>
				<td ><h6>Category*</h6></td>
				<td><select name="cid" id="cid" required>
					<option value="">Select</option>
					<?php
                $q = "SELECT * FROM category WHERE status=1 and cate_priv='seller'";
                $data = mysqli_query($conn,$q);
                $i = 0;
                while($result = mysqli_fetch_array($data)){
                  $i++;
                // print_r($data);
                // exit();
              ?>
					<option value="<?php echo $result['category_id'];?>"><?php echo $result['Category_name'];?></option>
				<?php } ?>
                    </select></td>
			</tr>
			<tr>
				<td><h6>Product name*</h6></td>
				<td><select name="pname" id="pname" required>
					<option value="">Select</option>
				</select></td>
			</tr>
			<tr>
				<td><h6>Product total amount*</h6></td>
				<td><input type="number" name="pamount"  required="true"></td>
			</tr>
			<tr>
				<td><h6>Product details*</h6></td>
				<td><textarea name="txtarea" placeholder="enter details here" required></textarea></td>
			</tr>
			<tr>
				<td><h6>Total Qty*</h6></td>
				<td><input type="Number" name="Qty" min="1" required>
				<select name="quty">
					<option value="unit">unit</option>
					<option value="kg">kg</option>
					<option value="gram">gram</option>
					<option value="piece">Piece</option>
				</select>
			</td>
			</tr>
			<tr>
				<td><h6>Photo*</h6></td>
				<td><input type="file" name="uploadedimage" required></td>
			</tr>
		</table><br>
		<center><td colspan="2"><b><input type="submit" name="submit" value="ADD PRODUCT"></b></td></center><br>
		<center><label><a href="../seller.php" style="text-decoration: none;">Back</a></label></center>
	</form>
<script type="text/javascript" src="../vendor/shp/vendor/jquery/jquery-3.2.1.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$(document).on('change','#cid',function(){
			var cid=$('#cid').val();
			$.post('getName.php',{cid:cid},function(data){
				$('#pname').empty();
				$('#pname').append(data);
			});
		});
	});
</script>	

</body>
</html>