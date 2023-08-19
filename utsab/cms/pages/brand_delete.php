<?php
	$id=$_REQUEST['id'];

	$sql="UPDATE `brand_master` SET `status` =  'DELETE' WHERE `id` ='$id';";
	mysqli_query($dbhandle,$sql);
	echo "<script>";
		echo "window.location='home.php?op=brand_view'";
	echo "</script>";
?>