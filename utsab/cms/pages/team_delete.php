<?php
	$id=$_REQUEST['id'];

	$sql="UPDATE `team_master` SET `team_status` =  'DELETE' WHERE `team_id` ='$id';";
	mysqli_query($dbhandle,$sql);
	echo "<script>";
		echo "window.location='home.php?op=team_view'";
	echo "</script>";
?>