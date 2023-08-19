<?php

	$id=$_REQUEST['id'];



	$sql="UPDATE `offer_master` SET `offer_status` =  'DELETE' WHERE `offer_id` ='$id';";

	mysqli_query($dbhandle,$sql);

	echo "<script>";

		echo "window.location='home.php?op=offer_view'";

	echo "</script>";

?>