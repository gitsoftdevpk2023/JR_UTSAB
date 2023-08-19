<?php
	include('../config/db.php'); 
	$id=$_POST['mid'];	

    $sql="select * from exi_application where exap_status ='Active' and exap_id ='".$id."'";
    $qur=mysqli_query($dbhandle,$sql);
    $row=mysqli_fetch_array($qur);

   // print_r($row);die;
    if($row['exap_status']=="Active")  
    {
   		$sql="UPDATE exi_application SET exap_status ='Inactive' WHERE exap_id  = $id";
       	$qur=mysqli_query($dbhandle,$sql);
    }

?>