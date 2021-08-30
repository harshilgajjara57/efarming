
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
				<center>
				<ul class="main-menu">
					<li><a href="../frontpage.php">Hii,<?php echo "$fname"; ?></a></li>
					</a></li>
					<li><a  href="../shopping/product.php">શોપિંગ</a>
					</li>
                   <li><a href="https://www.google.co.in/search?rlz=1C1CHBF_enIN807IN807&q=farmer+market+near+me&npsic=0&rflfq=1&rlha=0&rllag=23032405,72600794,6596&tbm=lcl&ved=2ahUKEwjHsJywv-fdAhWKPI8KHfIlDhwQtgN6BAgBEAU&tbs=lrf:!2m1!1e2!2m1!1e3!3sIAE,lf:1,lf_ui:10&rldoc=1#rlfi=hd:;si:;mv:!3m12!1m3!1d101026.92941161143!2d72.59003495!3d22.961028950000003!2m3!1f0!2f0!3f0!3m2!1i244!2i330!4f13.1;tbs:lrf:!2m1!1e2!2m1!1e3!3sIAE,lf:1,lf_ui:10">બજાર</a></li>
                   <li>
                   <a href="productview.php" style="text-decoration: none;">તમારું ઉત્પાદન જુઓ</a>
               </li>
          
          
           
					<li><a href="#">ઇ-લર્નિંગ</a>
						<ul class="sub-menu">
							<ul>
              				<li><a class="drop" href="../staticpages/method1.php">પ્રમોદ ગૌતમ</a>
                			<ul>
                  			<li><a href="../staticpages/method2.php">સચિન કાલે</a></li>
                 		 	<li><a href="../staticpages/method3.php">હરીશ ધાંડેવ</a></li>
						</ul>
					</li>
				</ul></ul>
			</div>
		</nav>
	<form method="post" action="Photoupload.php" enctype="multipart/form-data">
		<input type="hidden" name="add" class="form-control" value="<?php echo $_SESSION['id'] ?>">
		<div class="img_cont"></div>
		<center><h1><font color="red" style="font-size:30px"> ઉત્પાદન વેચો</font></h1></center>
		<table align="center">
			
			<tr>
				<td ><h6>શ્રેણી*</h6></td>
				<td><select name="cid" id="cid" class="form-control" required>
					<option value="">Select</option>
					<?php
                $q = "SELECT * FROM category WHERE status=1 AND cate_priv='farmer'";
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
				<td><h6>ઉત્પાદન નામ*</h6></td>
				<td><select name="pname" id="pname" class="form-control" required>
					<option value="">Select</option>
				</select></td>
			</tr>
			<tr>
				<td><h6>ઉત્પાદન કુલ કિંમત*</h6></td>
				<td><input type="number" name="pamount" min="1" class="form-control" required="true"></td>
			</tr>
			<tr>
				<td><h6>ઉત્પાદન વિગતો*</h6></td>
				<td><textarea name="txtarea" class="form-control" placeholder="enter details here" required></textarea></td>
			</tr>
			<tr>
				<td><h6>ઉત્પાદન જથ્થો*</h6></h6>
				<td><input type="Number" name="Qty" class="form-control" min="1" required></td>
			</td>
			<tr>
				<td><h6>ઉત્પાદન એકમ*</h6></td>
				<td><select name="quty" class="form-control">
					<option value="kg">કિલોગ્રામ</option>
					<option value="gram">ગ્રામ</option>
					<option value="piece">ટુકડો</option>
				</select>
			</td>
			</tr>
			<tr>
				<td><h6>ફોટો*</h6></td>
				<td><input type="file" class="form-control" name="uploadedimage"  required></td>
			</tr>
		</table><br>
		<center><td colspan="2"><b><input type="submit" name="submit" value="ઉત્પાદન ઉમેરો"></b></td></center><br>
		<center><label><a href="../Frontpage.php" style="text-decoration: none;"><b>પાછા જાઓ</b></a></label></center>
	</form>
<script type="text/javascript" src="../vendor/sp/jquery.min.js"></script>
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