<?php
	require("../dbconnect.php");
	session_start();
	$user_id=$_SESSION['id'];
	//<-------------------------------------------------------------->
	if (!isset($_SESSION['username'])) {
  header("location:../login/login.php");
  exit();
}

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
	<title>product View</title>
	<link href="../images/logo/logo.png" rel="shortcut icon"/>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	

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
		table,tr,td{
			border-collapse: collapse;
			text-align: center;
		}
	.img_cont{
				background: url('../images/backgroundimage/f1.jpg');
				background-size: cover;
				position: absolute;
				top: 0;
				width: 100%;
				height: 200%;
				z-index: -1;
				opacity: 0.8;
				left: 0px;
			}
		
			#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 70%;
  align-self: center;
}

#customers td, #customers th {
  
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
#menu
{
	color: white;
}
#ANS
{
	color: red;
	font-size: 20px;
}
	</style>

</head>
<body>
<nav class="main-navbar">
			<div class="container">
				<div class="img_cont"></div>
				<!-- menu -->
				<ul class="main-menu" style="text-align:center; ">
					<li><a href="../frontpage.php">Hii,<?php echo "$fname"; ?></a></li>
					</a></li>
					<li><a  href="../shopping/product.php">શોપિંગ</a>
					</li>
                   <li><a href="https://www.google.co.in/search?rlz=1C1CHBF_enIN807IN807&q=farmer+market+near+me&npsic=0&rflfq=1&rlha=0&rllag=23032405,72600794,6596&tbm=lcl&ved=2ahUKEwjHsJywv-fdAhWKPI8KHfIlDhwQtgN6BAgBEAU&tbs=lrf:!2m1!1e2!2m1!1e3!3sIAE,lf:1,lf_ui:10&rldoc=1#rlfi=hd:;si:;mv:!3m12!1m3!1d101026.92941161143!2d72.59003495!3d22.961028950000003!2m3!1f0!2f0!3f0!3m2!1i244!2i330!4f13.1;tbs:lrf:!2m1!1e2!2m1!1e3!3sIAE,lf:1,lf_ui:10">બજાર</a></li>
                   <li><a href="productinsert.php">ઉત્પાદન વેચો</a></li>
          
          
           
					<li><a href="#">ઇ-લર્નિંગ</a>
						<ul class="sub-menu">
							<ul>
              				<li><a class="drop" href="../staticpages/method1.php">પ્રમોદ ગૌતમ</a>
                			<ul>
                  			<li><a href="../staticpages/method2.php">સચિન કાલે</a></li>
                 		 	<li><a href="../staticpages/method3.php">હરીશ ધાંડેવ</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
		<br><br>
	<table id="customers" align="center">
			<thead id="menu">
				<tr>
					<td>નંબર</td>
					<td>ઉત્પાદન નામ</td>
					<td>ઉત્પાદન કુલ કિંમત</td>
					<td>ઉત્પાદન વિગતો</td>
					<td>ઉત્પાદન જથ્થો</td>
					<td>ફોટો</td>
					<td>ક્રિયા</td>
				</tr>
			</thead>
			<tbody id="ANS">
				<?php
					$q = "SELECT * FROM product WHERE User_id='".$user_id."'";
					$data = mysqli_query($conn,$q);
					$i = 0;
					while($result = mysqli_fetch_array($data)){
						$i++;
					// print_r($data);
					// exit();
				?>
				<tr>
					<td><?php echo $i;?></td>
					<td><?php echo $result['product_name'];?></td>
					<td><?php echo $result['product_amount'];?></td>
					<td><?php echo $result['product_details'];?></td>
					<td><?php echo $result['Qyt'].$result['quty'];?></td>
					<td><img src="../images/productimage/<?php echo $result['photo']; ?>" width="90" height="90" class="img-rounded"></td>
					<td><a href="productedit.php?id=<?php echo $result['product_id'];?>"><i class="fas fa-edit"></i></a>
					    <a href="productdelete.php?del_id=<?php echo $result['product_id'];?>" style="color: red"><i class="fas fa-trash"></i></a></td>
				</tr>
				<?php
			}
			?>
			</tbody>
	</table>
<br>
	<h4><a href="<?php if($_SESSION['role']=='farmer'){echo "../Frontpage.php";}elseif($_SESSION['role']=='seller'){echo "../seller.php";}?>" style="text-decoration: none;"><center>Back to Home</center></a></h4>
</body>
</html>