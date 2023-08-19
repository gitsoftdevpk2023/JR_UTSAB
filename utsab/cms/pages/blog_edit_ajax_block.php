<?php
	include('../config/db.php'); 
	$id=$_POST['mid'];	

    $sql="select * from blog_master where blog_status ='Active' and blog_id ='".$id."'";
    $qur=mysqli_query($dbhandle,$sql);
    $row=mysqli_fetch_array($qur);

   // print_r($row);die;
    if($row['blog_status']=="Active")  
    {
   		$sql="UPDATE blog_master SET blog_status ='Inactive' WHERE blog_id  = $id";
       	$qur=mysqli_query($dbhandle,$sql);
    }

?>