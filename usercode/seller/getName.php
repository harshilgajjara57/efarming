<?php
require '../dbconnect.php';
	$cid=$_POST['cid'];
	$q2 = "SELECT * FROM product_name WHERE category_id='".$cid."' AND status=1";
	$r2=mysqli_query($conn,$q2);
	if (mysqli_num_rows($r2)>0) {
		while ($row=mysqli_fetch_assoc($r2)) {
			?>
<option value="<?php echo $row['product_name'] ?>"><?php echo $row['product_name']; ?></option>
			<?php
			
		}
	}
?>