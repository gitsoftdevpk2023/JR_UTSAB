<?php
	include('../config/db.php'); 

	$id=$_POST['mid'];	
    $sql="select * from blog_comment_master where bcm_status IN ('Inactive','Pending') and bcm_id ='".$id."'";
    $qur=mysqli_query($dbhandle,$sql);
    $row=mysqli_fetch_array($qur);
   // print_r($row);die;
    if($row['bcm_status']=="Inactive" || $row['bcm_status']=="Pending")  
    {
   		$sql="UPDATE blog_comment_master SET bcm_status ='Active' WHERE bcm_id  = $id";
       	$qur=mysqli_query($dbhandle,$sql);
    }
?>