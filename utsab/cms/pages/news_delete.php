<?php
	$id=$_REQUEST['id'];

	$sql="UPDATE `news_master` SET `status` =  'DELETE' WHERE `id` ='$id';";
	mysqli_query($dbhandle,$sql);
	echo "<script>";
		echo "window.location='home.php?op=news_view'";
	echo "</script>";
?>