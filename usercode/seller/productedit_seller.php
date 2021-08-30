<?php
require("../dbconnect.php");
require_once("../login/CheckSession.php"); 
	extract($_GET);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$product_id=$_GET['id'];
	$sql = "SELECT * FROM product WHERE product_id = '$product_id'";
	$q1 = mysqli_query($conn, $sql);
	$data = mysqli_fetch_array($q1);
?>

	<form method="post" action="productupdate_seller.php">
		<input type="hidden" name="product_id" value="<?php echo $product_id; ?>"><br>

		<table align="center">
			<tr>
				<td><h4>Category:</h4></td>
				<td><select name="cid" id="cid" required>
					<option value="">Select</option>
					<?php
                $q = "SELECT * FROM category";
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
				<td><h4>Product name:</h4></td>
				<td><select name="pname" id="pname" required>
					<option value="">Select</option>
					
					
					
                   
				</select></td>
			</tr>
				<td>product amount:</td>
				<td><input type="number" name="pamount" value="<?php echo $result['product_amount'];?>"></td>
			</tr>
			<tr>
				<td>product details:</td>
				<td><textarea name="txtarea" placeholder="enter details here" value="<?php echo $result['product_details'];?>"></textarea></td>
			</tr>
			<tr>
				<td>Qty:</td>
				<td><input type="number" name="Qty" value="<?php echo $result['Qyt'];?>"></td>
			</tr>
			<tr>
				<td>photo:</td>
				<td><input type="file" name="productphoto" value="../images/productimage/<?php echo $result['photo'];?>"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="update" value="update"></td>
			</tr>
			
		</table>
	</form>
	<script type="text/javascript" src="../vendor/shp/shopping/vendor/jquery/jquery-3.2.1.min.js"></script>
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