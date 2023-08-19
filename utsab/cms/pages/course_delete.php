<?php
	$id=$_REQUEST['id'];

	$sql="UPDATE `course_master` SET `status` =  'DELETE' WHERE `sl` ='$id';";
	mysqli_query($dbhandle,$sql);
	echo "<script>";
		echo "window.location='home.php?op=course_view'";
	echo "</script>";
?>