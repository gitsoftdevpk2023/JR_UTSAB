<?php
	$id=$_REQUEST['id'];

	$sql="UPDATE `product_details` SET `status` =  'INACTIVE' WHERE `pro_id` ='$id';";
	mysqli_query($dbhandle,$sql);
	echo "<script>";
		echo "window.location='home.php?op=pro_dtls_view'";
	echo "</script>";
?>