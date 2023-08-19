<?php
	include('../config/db.php'); 

	$id=$_POST['mid'];	
    $sql="select * from blog_master where blog_status IN ('Inactive','Pending') and blog_id ='".$id."'";
    $qur=mysqli_query($dbhandle,$sql);
    $row=mysqli_fetch_array($qur);
   // print_r($row);die;
    if($row['blog_status']=="Inactive" || $row['blog_status']=="Pending")  
    {
   		$sql="UPDATE blog_master SET blog_status ='Active' WHERE blog_id  = $id";
       	$qur=mysqli_query($dbhandle,$sql);
    }
?>