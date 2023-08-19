<?php
	$id=$_REQUEST['id'];

	$sql="UPDATE `main_cat` SET `main_cat_status` =  'DELETE' WHERE `main_cat_id` ='$id';";
	mysqli_query($dbhandle,$sql);
	echo "<script>";
		echo "window.location='home.php?op=main_cat_view'";
	echo "</script>";
?>