<?php
	$id=$_REQUEST['id'];

	$sql="UPDATE `video_cat` SET `video_cat_status` =  'DELETE' WHERE `video_cat_id` ='$id';";
	mysqli_query($dbhandle,$sql);
	echo "<script>";
		echo "window.location='home.php?op=video_album_view'";
	echo "</script>";
?>