<?php
	$id=$_REQUEST['id'];

	$sql="UPDATE `client_master` SET `status` =  'DELETE' WHERE `id` ='$id';";
	mysqli_query($dbhandle,$sql);
	echo "<script>";
		echo "window.location='home.php?op=client_view'";
	echo "</script>";
?>