<!DOCTYPE html>
<html>
<?php 
require_once("../login/CheckSession.php");
?>
<head>
	<title>Your Order</title>
	 <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-Farming</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="../vendor/shp/css/aos.css" rel="stylesheet">
    <link href="../vendor/shp/css/bootstrap.min.css" rel="stylesheet">
    <link href="../vendor/shp/styles/main.css" rel="stylesheet">
    <script type="text/javascript" src="../vendor/shp/js/jquery.min.js"></script>
    <script type="text/javascript" src="../vendor/shp/bootstrap/js/bootstrap.min.js"></script>

    <style type="text/css">
    	.image{
    		width: 125px;
    		height: 125px;
    		margin-left: 135px;
    	}.name, .price, .quantity, .date{
    		margin-left: 135px; 
    	}
    </style>
</head>
<body>
	<div class="containter">
		<div class="row" style="margin-top: 15px;">
				<?php
				require '../dbconnect.php';
				//session_start();
				$ui=$_SESSION['id'];
				$q2="SELECT * FROM product_order WHERE cust_id = '$ui'";
				$r2=mysqli_query($conn,$q2);
				if (mysqli_num_rows($r2)>0) 
				{
					while($row2=mysqli_fetch_assoc($r2))
					{
						$image=$row2['photo'];
						$name=$row2['product_name'];
						$quantity=$row2['qty'];
						$price=$row2['total_amount'];
						$date=$row2['order_date'];

					?>
				<div class="col-lg-4 border">
					<img src="../images/productimage/<?php echo $image; ?>" class="image">
					<h5>product name:</h5><h3 class="name"><?php  echo $name; ?></h3>
					<h5>product quantity:</h5><h3 class="quantity"><?php  echo $quantity; ?></h3>
					<h5>order date:</h5><h3 class="date"><?php  echo $date; ?></h3>
					<h5>product price:</h5><h3 class="price"><?php  echo $price; ?></h3>
				</div>
				<?php
						}
					}
				?>
		</div>
	</div>
</body>
</html>