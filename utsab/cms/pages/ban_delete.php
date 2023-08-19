<?php
	$id=$_REQUEST['id'];

	$sql="UPDATE `banner_master` SET `status` = 'DELETE' WHERE `id` ='$id';";
	mysqli_query($dbhandle,$sql);
	echo "<script>";
		echo "window.location='home.php?op=ban_view'";
	echo "</script>";
?>