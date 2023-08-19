<?php
	$id=$_REQUEST['id'];

	$sql="UPDATE `grp_cat` SET `grp_cat_status` =  'DELETE' WHERE `grp_cat_id` ='$id';";
	mysqli_query($dbhandle,$sql);
	echo "<script>";
		echo "window.location='home.php?op=grp_cat_view'";
	echo "</script>";
?>