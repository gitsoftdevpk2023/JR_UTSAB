<?php
	$id=base64_decode($_REQUEST['id']);
	$sql="select * from  proj_master where id='$id'";
	$res=mysqli_query($dbhandle,$sql);
	$row=mysqli_fetch_assoc($res);
	
	if(isset($_POST['Submit']))
	{
		$cat_name =$_POST['cat_name'];
		$cat_name2 =$_POST['cat_name2'];
		$cat_description =$_POST['cat_description'];		
		$cat_cust =$_POST['cat_cust'];
		$cat_location =$_POST['cat_location'];
		
		$sql="UPDATE `proj_master` SET `proj_name` =  '$cat_name',`proj_details` =  '$cat_description',`proj_cust` =  '$cat_cust',`proj_location` =  '$cat_location' where id='$id'";
		mysqli_query($dbhandle,$sql);
		
		 $mname =$_FILES["model_pro_pic"]["name"];
		 if($mname <> ''){
			 $path = "proj_upload/".$_FILES["model_pro_pic"]["name"];
			 $upload = move_uploaded_file($_FILES["model_pro_pic"]["tmp_name"],$path) or die("Upload Error");
			 $sql="UPDATE `proj_master` SET `proj_pic` = '$mname' where proj_id='$id'";
	 		mysqli_query($dbhandle,$sql);
		 }
		
		//echo $sql;
		echo "<script>";
			echo "window.location='home.php?op=proj_view'";
		echo "</script>";
	}
?>
<form class="form-horizontal" name="edit_category_frm" enctype="multipart/form-data" action="#" method="post">
<table id="data_table" class="display" width="75%" border="0" align="center">
<thead>
  <tr>
    <td colspan="2"><strong>Edit Project Info.</strong></td>
  </tr>
</thead>
<tbody>
    <tr>
    <td width="30%">Project Name</td>
    <td width="70%"><input class="form-control" type="text" name="cat_name" value="<?php echo $row['proj_name'];?>"  /></td>
  	</tr>
   <tr>
   <td width="30%">Details</td>
   <td width="70%"><textarea name="cat_description" class="form-control" rows="5" cols="20"><?php echo $row['proj_details'];?></textarea>   </tr>

	<tr>
	  <td>Customer</td>
	  <td colspan="2"><textarea name="textarea" class="form-control" rows="5" cols="20"><?php echo $row['proj_details'];?></textarea></td>
	  </tr>
	<tr>
	  <td>Location</td>
	  <td colspan="2"><textarea name="textarea2" class="form-control" rows="5" cols="20"><?php echo $row['proj_details'];?></textarea></td>
	  </tr>
	<tr>
    <td width="30%">Picture</td>
    <td colspan="2"><img src="proj_upload/<?php echo $row['proj_pic']; ?>" width="100px" height="100px">
    <input class="form-control" type="file" name="model_pro_pic" />    </td>  
  </tr>
   <tr>
    <td width="30%">&nbsp;</td>
    <td width="70%"><input class="form-control btn-success" type="submit" name="Submit" value="Update" /></td>
  </tr>
</tbody>
</table>
</form>