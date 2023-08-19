<?php
	$id=$_REQUEST['id'];

	$sql="UPDATE `photo_cat` SET `photo_cat_status` =  'DELETE' WHERE `photo_cat_id` ='$id';";
	mysqli_query($dbhandle,$sql);
	echo "<script>";
		echo "window.location='home.php?op=photo_album_view'";
	echo "</script>";
?>