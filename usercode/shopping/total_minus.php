<?php
	$total=$_POST['total'];
	$main_price=$_POST['main_price'];

	if ($total!=$main_price) {
		$final=$total-$main_price;
		echo "$final";
	}else{
		echo "$main_price";
	}
	
	
?>