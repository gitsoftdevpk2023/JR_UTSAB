<?php
	$id=$_REQUEST['id'];
	$sql="UPDATE `service_master` SET `serv_status` =  'DELETE' WHERE `serv_id` ='$id';";
	mysqli_query($dbhandle,$sql);
	echo "<script>";
		echo "window.location='home.php?op=serv_view'";
	echo "</script>";
?>