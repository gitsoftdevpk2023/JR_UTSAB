<?php
	include('../config/db.php'); 
	$id=$_POST['mid'];	

    $sql="select * from exi_photo_master where exph_status ='Active' and sl ='".$id."'";
    $qur=mysqli_query($dbhandle,$sql);
    $row=mysqli_fetch_array($qur);

   // print_r($row);die;
    if($row['exph_status']=="Active")  
    {
   		$sql="UPDATE exi_photo_master SET exph_status ='Inactive' WHERE sl  = $id";
       	$qur=mysqli_query($dbhandle,$sql);
    }

?>