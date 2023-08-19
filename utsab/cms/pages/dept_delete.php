<?php
	$id=$_REQUEST['id'];

	$sql="UPDATE `dept_master` SET `dept_status` =  'DELETE' WHERE `dept_id` ='$id';";
	mysqli_query($dbhandle,$sql);
	echo "<script>";
		echo "window.location='home.php?op=dept_master_view'";
	echo "</script>";
?>