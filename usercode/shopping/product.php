<?php
require '../dbconnect.php';
session_start();
$uidd1=$_SESSION['id'];
if(!isset($uidd1))
{
	header("location:../login/LogOut.php");
}
$pwd=$_SESSION['password'];
$q1="SELECT * FROM user_registration WHERE User_password='".$pwd."'";
$r1=mysqli_query($conn,$q1);
if (mysqli_num_rows($r1)>0) {
	$row1=mysqli_fetch_assoc($r1);
	$user_id=$row1['User_id'];
	$_SESSION['User_id']=$user_id;
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Product</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="../vendor/shp/images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/shp/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/shp/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/shp/fonts/themify/themify-icons.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/shp/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/shp/fonts/elegant-font/html-css/style.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/shp/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/shp/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/shp/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/shp/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/shp/vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/shp/vendor/noui/nouislider.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/shp/css/util.css">
	<link rel="stylesheet" type="text/css" href="../vendor/shp/css/main.css">
<!--===============================================================================================-->


<style type="text/css">
.img_cont{
				background-image: url('../images/backgroundimage/f1.jpg');
				background-repeat: repeat-y;
				background-size: cover;
				position: absolute;
				width: 100%;
				height: auto;
				top: 365px;
				opacity: 0.3;
				left: 0px;
			}
	.header-cart-item-img::after {
    content: '\e870';
    font-family: Linearicons;
    font-size: 16px;
    display: none !important;
    display: none !important;
    display: none !important;
    display: none !important;
    display: flex;
    justify-content: center;
    align-items: center;
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    background-color: rgba(0,0,0,0.5);
    color: white;
    transition: all 0.3s;
    -webkit-transition: all 0.3s;
    -o-transition: all 0.3s;
    -moz-transition: all 0.3s;
    opacity: 0;
}
.btn{
	border-radius: 20px;
}
</style>
</head>
<body class="animsition">
		<div class="img_cont"></div>
	<!-- Header -->
	<header class="header1">
		<!-- Header desktop -->
		<div class="container-menu-header">
			
			<div class="wrap_header">

				<!-- Menu -->
				<div class="wrap_menu">
					<nav class="menu">
						<ul class="main_menu">
							<li>
								<img src="../images/logo/logo.png" height="60px" width="70px" style="padding-bottom: 13px">
								<a href="#"><b>E-Farming</b></a>
							</li>
						</ul>
					</nav>
				</div>

				<!-- Header Icon -->
				<div class="header-icons">
					<a href="../profile.php" class="header-wrapicon1 dis-block">
						<img src="../vendor/shp/images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
					</a>

					<span class="linedivide1"></span>

					<div class="header-wrapicon2">
						<a href="cart.php"></a>
						<img src="../vendor/shp/images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<span class="header-icons-noti"><?php 
						$id12=$_SESSION['id'];
						$q3="SELECT * FROM user_cart where User_id='$id12';";
									$r3=mysqli_query($conn,$q3);
									$numrow=mysqli_num_rows($r3);
									echo $numrow;?></span>

						<!-- Header cart noti -->
						<div class="header-cart header-dropdown">
							<ul class="header-cart-wrapitem">
								<?php

									$q2="SELECT * FROM user_cart WHERE User_id = $user_id";
									$r2=mysqli_query($conn,$q2);
									if (mysqli_num_rows($r2)>0) {
										while($row2=mysqli_fetch_assoc($r2)){?>
											<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="../images/productimage/<?php echo $row2['photo'] ?>" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											<?php echo $row2['product_name']; ?>
										</a>

										<span class="header-cart-item-info">
											₹ <?php echo $row2['product_amount']; ?>
										</span>
									</div>
								</li>
										
										
								<?php
										}

									}
						?>

							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="cart.php" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										View Cart
									</a>
								</div>

								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Header Mobile -->
		<div class="wrap_header_mobile">
			<!-- Logo moblie -->
			<a href="index.php" class="logo-mobile">
				<img src="../vendor/shp/images/icons/logo.png" alt="IMG-LOGO">
			</a>

			<!-- Button show menu -->
			<div class="btn-show-menu">
				<!-- Header Icon mobile -->
				<div class="header-icons-mobile">
					<a href="#" class="header-wrapicon1 dis-block">
						<img src="../vendor/shp/images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
					</a>

					<span class="linedivide2"></span>

					<div class="header-wrapicon2">
						<img src="../vendor/shp/images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<span class="header-icons-noti">0</span>

						<!-- Header cart noti -->
						<div class="header-cart header-dropdown">
							<ul class="header-cart-wrapitem">

								

							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="cart.php" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										View Cart
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
			</div>
		</div>

		<!-- Menu Mobile -->
	</header>

	<!-- Title Page -->

<div class="main">



	<section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background-image: url(../vendor/shp/images/heading-pages-02.jpg);">
		<h2 class="l-text2 t-center" style="color: red;">
			ALL PRODUCT
		</h2>
		<p class="m-text13 t-center" style="color:red;">
			
		</p>
	</section>

<div class="img_cont"></div>
	<!-- Content page -->
	<section class="bgwhite p-t-55 p-b-65">
		<div class="container">
			<div class="row">
				<div class="col-sm-2" style="margin-left: -20px !important;">
					<div class="leftbar p-r-0 p-r-0-sm">
						<!--  -->
						<h4 class="m-text14 p-b-7">
							Categories
						</h4>
 						<form mehod="post" action="productshow.php">
 							
						<ul class="p-b-54">
							
							<?php require("../dbconnect.php");
							$q = "SELECT * FROM category;";
              				$data = mysqli_query($conn,$q);
                			$i = 0;
                			?>
                			<select name="product" class="form-control ">
                				<option>ALL CATEGORY</option>
                				<?php
                			while($result = mysqli_fetch_assoc($data)){
                  			$i++;
                  			?>
							<li class="p-t-4">
							
							<option value="<?php echo $result['category_id']; ?>"><?php echo $result['Category_name'];?></option>
													
							
								
							</li>		
							<?php }	?>
						</Select>
						</ul>
						<input type="submit" name="submit" value="show products" class="btn">
					</form>

						<!--  -->
						
					</div>
				</div>
				<div class="col-sm-1" style="border-left: 3px solid white;"></div>
				<div class="col-sm-9">
				<?php
					$q="SELECT * FROM product";
					$query=mysqli_query($conn,$q);
					if (mysqli_num_rows($query)>0) {
						while ($row=mysqli_fetch_assoc($query)) {
							$id=$row['product_id'];
							?><div class="div" style="float: left;margin-left: 10px;">
								<table>
									<tr>
										<td><img src="../images/productimage/<?php echo $row['photo']; ?>" height="150" width="150"></td>
									</tr>

									<tr><td><?php echo $row['product_name']; ?></td></tr>
									<tr><td>Rs.&nbsp<?php echo $row['product_amount']; ?></td></tr>
									<tr style="color: red"><td>QTY&nbsp;<?php echo $row['Qyt']; ?>
										<?php echo $row['quty']; ?>
									</td></tr>
									<tr><td><a href="addtocart.php?msg=<?php echo $id; ?>">ADD TO CART</a></td></tr>
								</table>
							</div>
							
							<?php
						}
					}
				?>

				

					<!-- Pagination -->
					
				</div>
		</div>
	</section>

</div>
	

	<!-- Container Selection -->
	<div id="dropDownSelect1"></div>
	<div id="dropDownSelect2"></div>



<!--===============================================================================================-->
	<script type="text/javascript" src="../vendor/shp/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="../vendor/shp/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="../vendor/shp/vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="../vendor/shp/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="../vendor/shp/vendor/select2/select2.min.js"></script>
	<script type="text/javascript">
		Rs.(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: Rs.('#dropDownSelect1')
		});

		Rs.(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: Rs.('#dropDownSelect2')
		});
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="../vendor/shp/vendor/daterangepicker/moment.min.js"></script>
	<script type="text/javascript" src="../vendor/shp/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="../vendor/shp/vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="../vendor/shp/js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="../vendor/shp/vendor/sweetalert/sweetalert.min.js"></script>
	<script type="text/javascript">
		Rs.('.block2-btn-addcart').each(function(){
			var nameProduct = Rs.(this).parent().parent().parent().find('.block2-name').php();
			Rs.(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});

		Rs.('.block2-btn-addwishlist').each(function(){
			var nameProduct = Rs.(this).parent().parent().parent().find('.block2-name').php();
			Rs.(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");
			});
		});
	</script>

<!--===============================================================================================-->
	<script type="text/javascript" src="../vendor/shp/vendor/noui/nouislider.min.js"></script>
	<script type="text/javascript">
		/*[ No ui ]
	    ===========================================================*/
	    var filterBar = document.getElementById('filter-bar');

	    noUiSlider.create(filterBar, {
	        start: [ 50, 200 ],
	        connect: true,
	        range: {
	            'min': 50,
	            'max': 200
	        }
	    });

	    var skipValues = [
	    document.getElementById('value-lower'),
	    document.getElementById('value-upper')
	    ];

	    filterBar.noUiSlider.on('update', function( values, handle ) {
	        skipValues[handle].innerHTML = Math.round(values[handle]) ;
	    });
	</script>
<!--===============================================================================================-->
	<script src="../vendor/shp/js/main.js"></script>

</body>
</html>
