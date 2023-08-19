<?php
	include('../config/db.php'); 
	$id=$_POST['mid'];	

    $sql="select * from cust_master where cust_status ='Active' and cust_id ='".$id."'";
    $qur=mysqli_query($dbhandle,$sql);
    $row=mysqli_fetch_array($qur);

   // print_r($row);die;
    if($row['cust_status']=="Active")  
    {
   		$sql="UPDATE cust_master SET cust_status ='Inactive' WHERE cust_id  = $id";
       	$qur=mysqli_query($dbhandle,$sql);
    }

?>