<?php
	$id=$_REQUEST['id'];

	$sql="UPDATE `testi_master` SET `status` =  'DELETE' WHERE `id` ='$id';";
	mysqli_query($dbhandle,$sql);
	echo "<script>";
		echo "window.location='home.php?op=testi_view'";
	echo "</script>";
?>