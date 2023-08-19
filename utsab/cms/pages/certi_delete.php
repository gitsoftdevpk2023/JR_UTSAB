<?php
	$id=$_REQUEST['id'];

	$sql="UPDATE `cert_master` SET `status` =  'DELETE' WHERE `id` ='$id';";
	mysqli_query($dbhandle,$sql);
	echo "<script>";
		echo "window.location='home.php?op=certi_view'";
	echo "</script>";
?>