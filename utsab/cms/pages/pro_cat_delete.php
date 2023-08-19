<?php
	$id=$_REQUEST['id'];

	$sql="UPDATE `product_category` SET `status` =  'DELETE' WHERE `sl` ='$id';";
	mysqli_query($dbhandle,$sql);
	echo "<script>";
		echo "window.location='home.php?op=pro_cat_view'";
	echo "</script>";
?>