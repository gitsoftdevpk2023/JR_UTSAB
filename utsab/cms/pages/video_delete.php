<?php
	$id=$_REQUEST['id'];

	$sql="UPDATE `video_master` SET `status` =  'DELETE' WHERE `sl` ='$id';";
	mysqli_query($dbhandle,$sql);
	echo "<script>";
		echo "window.location='home.php?op=video_view'";
	echo "</script>";
?>