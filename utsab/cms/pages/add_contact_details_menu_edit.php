<?php
	
	$sql="select * from contact_master";
	$res=mysqli_query($dbhandle,$sql);
	$row=mysqli_fetch_assoc($res);
	
	if(isset($_POST['Submit']))
	{
	    $address =$_POST['address'];
		$contact_no =$_POST['contact_no'];
		$email=$_REQUEST['email'];
		$mobile_no =$_POST['mobile_no'];
		$skype =$_POST['skype'];
		
		$sql="UPDATE `contact_master` SET `skype` ='$skype',`address` ='$address',`contact_no` = '$contact_no',`mobile_no` = '$mobile_no',`email` = '$email'";
		mysqli_query($dbhandle,$sql);
		//echo $sql;
		
	//	echo "<script>";
	//		echo "window.location='home.php?op=add_contact_details_menu_edit'";
	/*//	echo "</script>";*/
	}
?>
<form class="form-horizontal" name="edit_category_frm" action="#" method="post">

<table id="data_table" class="display" width="75%" border="0" align="center">
<thead>
</thead>
<tbody>
    <tr>
    <td width="30%"> Address</td>
    <td width="70%"><input class="form-control" name="address" type="text" id="address" value="<?php echo $row['address'];?>"  /></td>
  </tr>
   <tr>
    <td width="30%">Phone No</td>
    <td width="70%"><input class="form-control" name="contact_no" type="text" id="contact_no" value="<?php echo $row['contact_no'];?>"  /></td>
   </tr>
   <tr>
     <td>Mobile No</td>
     <td><input class="form-control" name="mobile_no" type="text" id="mobile_no" value="<?php echo $row['mobile_no'];?>"  /></td>
   </tr>
   <tr>
   <td width="30%">Email</td>
   <td width="70%"><input class="form-control" name="email" type="text" id="email" value="<?php echo $row['email'];?>">    </td>
  </tr>
   <tr>
     <td>Skype</td>
     <td><input class="form-control" name="skype" type="text" id="skype" value="<?php echo $row['skype'];?>"  /></td>
   </tr>
   <tr>
    <td width="30%">&nbsp;</td>
    <td width="70%"><input class="form-control btn-success" type="submit" name="Submit" value="Update" /></td>
  </tr>
</tbody>
</table>
</form>