<?php
	$id=$_REQUEST['id'];

	$sql="UPDATE `catalogue_master` SET `status` = 'DELETE' WHERE `id` ='$id';";
	mysqli_query($dbhandle,$sql);
	echo "<script>";
		echo "window.location='home.php?op=cata_view'";
	echo "</script>";
?>