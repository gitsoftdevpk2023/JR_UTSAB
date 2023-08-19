<?php
	$id=$_REQUEST['id'];

	$sql="UPDATE `unit_master` SET `unit_status` =  'DELETE' WHERE `unit_id` ='$id';";
	mysqli_query($dbhandle,$sql);
	echo "<script>";
		echo "window.location='home.php?op=unit_view'";
	echo "</script>";
?>