<?php
	$id=$_REQUEST['id'];

	$sql="UPDATE `course_cat` SET `course_cat_status` =  'DELETE' WHERE `course_cat_id` ='$id';";
	mysqli_query($dbhandle,$sql);
	echo "<script>";
		echo "window.location='home.php?op=course_cat_view'";
	echo "</script>";
?>