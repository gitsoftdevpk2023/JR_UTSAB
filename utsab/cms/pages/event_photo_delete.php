<?php
	$id=$_REQUEST['id'];

	$sql="UPDATE `event_photo_master` SET `status` =  'DELETE' WHERE `sl` ='$id';";
	mysqli_query($dbhandle,$sql);
	echo "<script>";
		echo "window.location='home.php?op=event_photo_view'";
	echo "</script>";
?>