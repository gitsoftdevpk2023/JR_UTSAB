<?php
	$id=base64_decode($_REQUEST['id']);
	$sql="select * from  brand_master where id='$id'";
	$res=mysqli_query($dbhandle,$sql);
	$row=mysqli_fetch_assoc($res);
	
	if(isset($_POST['Submit']))
	{
		$cat_name =$_POST['cat_name'];
		$cat_details =$_POST['cat_details'];
//		$cat_id =$_POST['cat_id'];
		
		$sql="UPDATE `brand_master` SET `brand_name` =  '$cat_name',`brand_desc`='$cat_details' where id='$id'";
		mysqli_query($dbhandle,$sql);
		
		 $mname =$_FILES["model_pro_pic"]["name"];
		 if($mname <> ''){
			 $path = "brand_upload/".$_FILES["model_pro_pic"]["name"];
			 $upload = move_uploaded_file($_FILES["model_pro_pic"]["tmp_name"],$path) or die("Upload Error");
			 $sql="UPDATE `brand_master` SET `brand_pic` = '$mname' where id='$id'";
	 		mysqli_query($dbhandle,$sql);
		 }
		
		//echo $sql;
		echo "<script>";
			echo "window.location='home.php?op=brand_view'";
		echo "</script>";
	}
?>
<form class="form-horizontal" name="edit_category_frm" enctype="multipart/form-data" action="#" method="post">
<table id="data_table" class="display" width="75%" border="0" align="center">
<thead>
  <tr>
    <td colspan="2"><strong>Edit Sponsor Info.</strong></td>
  </tr>
</thead>
<tbody>
    <tr>
    <td width="30%">Sponsor Name</td>
    <td width="70%"><input class="form-control" type="text" name="cat_name" value="<?php echo $row['brand_name'];?>"  /></td>
  	</tr>
   
	<tr>
	  <td>Details</td>
	  <td colspan="2"><textarea name="cat_details" class="form-control" value="<?php echo $row['brand_desc'];?>" ></textarea></td>
	  </tr>
	<tr>
    <td width="30%">Picture</td>
    <td colspan="2"><img src="brand_upload/<?php echo $row['brand_pic']; ?>" width="100px" height="100px">
    <input class="form-control" type="file" name="model_pro_pic" />    </td>  
  </tr>
   <tr>
    <td width="30%">&nbsp;</td>
    <td width="70%"><input class="form-control btn-success" type="submit" name="Submit" value="Update" /></td>
  </tr>
</tbody>
</table>
</form>