<?php 
session_start();
$user_id=$_SESSION['User_id'];
require '../dbconnect.php';
$tot=0;
$uidd1=$_SESSION['id'];
if(!isset($uidd1))
{
	header("location:../login/LogOut.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Cart</title>
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
	<link rel="stylesheet" type="text/css" href="../vendor/shp/css/util.css">
	<link rel="stylesheet" type="text/css" href="../vendor/shp/css/main.css">
<!--===============================================================================================-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<script type="text/javascript">
	
</script>
</head>
<body class="animsition">
<form action="Order.php" method="post">
	<input type="hidden" value="<?php $ud=$_SESSION['id'];	echo $ud;?>" name="ui">
	<!-- Header -->
	<header class="header1">
		<!-- Header desktop -->
		<div class="container-menu-header">
			<div class="topbar">
				

				<span class="topbar-child1">
					
				</span>

				<div class="topbar-child2">
					<span class="topbar-email">
						
					</span>

					
				</div>
			</div>

			<div class="wrap_header">

				<!-- Menu -->
				<div class="wrap_menu">
					<nav class="menu">
						<ul class="main_menu">
							<li>
								<img src="../images/logo/logo.png" height="60px" width="70px" style="padding-bottom: 15px">
								<a href="#">E-Farming</a>
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
						

							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="cart.php" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										View Cart
									</a>
								</div>

							

				

					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<div class="topbar-child2-mobile">
							<span class="topbar-email">
								e-farmingshopping11@gmail.com
							</span>

							
						</div>
					</li>

					

					<li class="item-menu-mobile">
						<a href="home-03.php">Home</a>
						
						<i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
					</li>

					<li class="item-menu-mobile">
						<a href="product.php">Shop</a>
					</li>

					
				</ul>
			</nav>
		</div>
	</header>

	<!-- Title Page -->
	<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(../vendor/shp/images/heading-pages-01.jpg);">
		<h2 class="l-text2 t-center">
			Cart
		</h2>
	</section>

	<!-- Cart -->
	<section class="cart bgwhite p-t-70 p-b-100">
		<div class="container">
			<!-- Cart item -->
			<div class="container-table-cart pos-relative">
				<div class="wrap-table-shopping-cart bgwhite">
					<table class="table-shopping-cart">
						<tr class="table-head">
							<th class="column-1"></th>
							<th class="column-2">Product</th>
							<th class="column-2">Total Quantity</th>
							<th class="column-3">Total Price</th>
							<th class="column-3">Remove</th>
						</tr>
						<?php
							$q="SELECT * FROM user_cart WHERE User_id='".$user_id."'";
							$query = mysqli_query($conn,$q);
							if (mysqli_num_rows($query)>0) {
								while($row = mysqli_fetch_assoc($query)){
									$price = $row['product_amount'];
									$tot=$tot+$price;
									?>
									<input type="hidden" name="pr" id="main_price" value="<?php echo $price; ?>">
									<tr class="table-row">
							<td class="column-1">
								<div class="cart-img-product b-rad-4 o-f-hidden">
									<img src="../images/productimage/<?php echo $row['photo']; ?>" height="100" width="290" alt="IMG-PRODUCT">
									
								
								</div>
							</td>
							<td class="column-2"><?php echo $row['product_name']; ?>&nbsp;&nbsp;</td>
							<td class="column-2"><?php 
							$proid=$row['product_id'];
								$p="SELECT * FROM product WHERE product_id='".$proid."'";
							$query1 = mysqli_query($conn,$p);
							$row1 = mysqli_fetch_assoc($query1);
							echo $row['Qyt'].$row1['quty']; ?>&nbsp;&nbsp;</td>
							<td class="column-3" id="<?php echo $row['category_id']; ?>"><?php echo $row['product_amount']; ?></td>
								<td class="column-5">
								<a href="cartdelete.php?del_id=<?php echo $row['cart_id'];?>"><i class="fas fa-times" style="color:red;"></i></a>
							</td>

						</tr>

									<?php
							}
							}
							
							
						 ?>
						
						<tr class="table-row">
						</tr>
					</table>
				</div>
			</div>

			

			<!-- Total -->
			
			<div class="bo9 w-size18 p-l-40 p-r-40 p-t-30 p-b-38 m-t-30 m-r-0 m-l-auto p-lr-15-sm">
				<h5 class="m-text20 p-b-24">
					Cart Totals
				</h5>

				<!--  -->
				

				<!--  -->
				<div class="flex-w flex-sb bo10 p-t-15 p-b-20">
					<span class="s-text18 w-size19 w-full-sm">
						Shipping:
					</span>
					

					<div class="w-size20 w-full-sm">
						<p class="s-text8 p-b-23">
							<?php
								$id=$_SESSION['id'];
								$sql="SELECT * FROM User_address WHERE User_id='$id'";
								$d=mysqli_query($conn,$sql);
								$r=mysqli_fetch_assoc($d);
								echo "<br>".$r['Address'];
								echo "<br>".$r['Pincode']; 
								echo "<br>".$r['City']; 
								?>
						</p>

						
						</div>
				</div>

				<!--  -->
				<div class="flex-w flex-sb-m p-t-26 p-b-30">
					<span class="m-text22 w-size19 w-full-sm">
						Total:
					</span>

					<span class="m-text21 w-size20 w-full-sm">
						<label for=""><?php if($tot!=0){echo $tot;}else{echo "cart is empty";}?></label>
					</span>
				</div>
				<div class="flex-w flex-sb-m p-t-26 p-b-30">
					<span class="m-text22 w-size19 w-full-sm">
						<input type="checkbox" class="check" name="chkbox" value="1"><font color="blue">Cash&nbsp;on&nbsp;delivery</font>
					</span>

				</div>


				<div class="size15 trans-0-4">
					<!-- Button -->
					<div class="add">
						<input type="submit" value="Confirm Order" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4 confirm" disabled>
					</div>
				</div>
				
			</div>
			<div class="alert alert-success status" role="alert" style="margin-top: -275px; margin-left: 300px; width: 400px;text-align: center"><i class="fas fa-check-circle"></i>&nbsp;&nbsp;Your order is confirm go to User Profile</div>
		</div>
	</section>



	<!-- Footer -->
	



	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection -->
	<div id="dropDownSelect1"></div>
	<div id="dropDownSelect2"></div>

</form>

<!--===============================================================================================-->
	<script type="text/javascript" src="../vendor/shp/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="../vendor/shp/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="../vendor/shp/vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="../vendor/shp/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="../vendor/shp/vendor/select2/select2.min.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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



	<script type="text/javascript">
		$(document).ready(function(){
			$('.status').hide();
			$('.confirm').on('click',function(){
				$('.status').show();
			});

		$('.check').on('change',function(){
			if($('.check').prop("checked") == true){
               var v=1;
               swal("Payment Selected", "successfully");
            }
            else if($('.check').prop("checked") == false){
                var v=0;
                
                
            }
			$.post('button.php',{v:v},function(data){
				$('.add').empty();
				$('.add').append(data);

			});
		});

		$('.plus').click(function(){
			var i=$(this).data("id");
			var total=$('.total').val();
			var main_price=document.getElementById(i).innerHTML;
			
			$.post('total.php',{total:total,main_price:main_price},function(data){
				$('.total').val(data);
			});
		});
		$('.minus').click(function(){
			var qua=$('.qua').val();
			if (qua!=0) {
			var i=$(this).data("id");
			var total=$('.total').val();
			var main_price=document.getElementById(i).innerHTML;
			$.post('total_minus.php',{total:total,main_price:main_price},function(data){
			$('.total').val(data);
			});
			}
			
		});

		});


	</script>
<!--===============================================================================================-->
	<script src="../vendor/shp/js/main.js"></script>

</body>
</html>
