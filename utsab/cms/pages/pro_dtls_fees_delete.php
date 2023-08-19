<?php
	$id=$_REQUEST['id'];
	$eid=$_GET['eid'];
	$sql="UPDATE `event_fees_master` SET `status` =  'DELETE' WHERE `sl` ='$id';";
	mysqli_query($dbhandle,$sql);
	echo "<script>";
		echo "window.location='home.php?op=pro_dtls_fees&eid=$eid'";
	echo "</script>";
?>