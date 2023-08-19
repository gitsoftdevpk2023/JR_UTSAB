<?php
	$id=$_REQUEST['id'];

	$sql="UPDATE `proj_master` SET `proj_status` =  'DELETE' WHERE `proj_id` ='$id';";
	mysqli_query($dbhandle,$sql);
	echo "<script>";
		echo "window.location='home.php?op=proj_view'";
	echo "</script>";
?>