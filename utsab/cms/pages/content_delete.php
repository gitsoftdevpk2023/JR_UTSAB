<?php
	$id=$_REQUEST['id'];

	$sql="UPDATE `content_master` SET `status` =  'DELETE' WHERE `id` ='$id';";
	mysqli_query($dbhandle,$sql);
	echo "<script>";
		echo "window.location='home.php?op=content_master'";
	echo "</script>";
?>