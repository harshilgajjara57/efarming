<?php

	$v=$_POST['v'];

	?>
	<input type="submit"  value="Confirm Order" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4 confirm" <?php 
		if ($v==0) {
			echo "disabled";
		}
	 ?> >
