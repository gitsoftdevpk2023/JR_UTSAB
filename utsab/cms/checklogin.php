<?php
include 'config/db.php';
//include 'config/config.php';
session_start();

$user_id	=   $_POST['usertext'];
$password	=   $_POST['password'];

$sql = "SELECT `log`.id,`log`.user_name,`log`.password,`log`.type FROM `log` WHERE `log`.`user_name` = '".$user_id."' and `log`.`password` = '".$password."'"; 
$res = mysqli_query($dbhandle,$sql);
$row = mysqli_fetch_assoc($res);
$cnt = mysqli_num_rows($res);

if($cnt > 0){
	$_SESSION['login_flag'] = 'TRUE';
	$_SESSION['login_type'] = 'admin';
	$_SESSION['user_dtls'] = $row;
	$_SESSION['sess_id']=session_id();

	
	echo "<script>";
		echo "window.location='home.php'";
	echo "</script>";
}else{
	echo "<script>";
		echo "window.location='index.php'";
	echo "</script>";
}
?>

