<?php
	$id=base64_decode($_REQUEST['id']);
	$sql="select * from main_cat where main_cat_id='$id'";
	$res=mysqli_query($dbhandle,$sql);
	$row=mysqli_fetch_assoc($res);
	
	if(isset($_POST['Submit']))
	{
	    $cat_name =$_POST['cat_name'];
		$cat_description =$_POST['cat_description'];
		$status =$_POST['status'];
		
		$sql="UPDATE `main_cat` SET `main_cat_name` =  '$cat_name',`main_cat_details` =  '$cat_description',`main_cat_status` =  '$status' where main_cat_id='$id'";
		mysqli_query($dbhandle,$sql);
		//echo $sql;
		 $mname =$_FILES["model_pro_pic"]["name"];
		 if($mname <> ''){
			 $path = "main_cat_upload/".$_FILES["model_pro_pic"]["name"];
			 $upload = move_uploaded_file($_FILES["model_pro_pic"]["tmp_name"],$path) or die("Upload Error");
			 $sql="UPDATE `main_cat` SET `main_cat_pic` = '$mname' where main_cat_id='$id'";
	 		mysqli_query($dbhandle,$sql);
		 }		
		
		echo "<script>";
			echo "window.location='home.php?op=main_cat_view'";
		echo "</script>";
	}
?>
<form class="form-horizontal"name="edit_category_frm" action="#" method="post">
<table id="data_table" class="display" width="75%" border="0" align="center">
<thead>
  <tr>
    <td colspan="2">Edit Main Category Info.</td>
  </tr>
</thead>
<tbody>
   
    <tr>
    <td width="30%">Main Category Name</td>
    <td width="70%"><input class="form-control" type="text" name="cat_name" value="<?php echo $row['main_cat_name'];?>"  /></td>
  </tr>
<!--   <tr>
    <td width="30%">Category Type</td>
    <td width="70%"><input class="form-control" type="text" name="cat_type" value="<?php //echo $row['category_type'];?>"  /></td>
  </tr>-->
   <tr>
   <td width="30%">Main Category Description</td>
   <td width="70%"><textarea class="form-control" name="cat_description" rows="5" cols="20"><?php echo $row['main_cat_details'];?></textarea>
  </tr>
	<tr>
    <td width="30%">Picture</td>
    <td colspan="2"><img src="main_cat_upload/<?php echo $row['main_cat_pic']; ?>" width="100px" height="100px">
    <input class="form-control" type="file" name="model_pro_pic" />    </td>  
  </tr>
   
  <tr>
    <td width="30%">&nbsp;</td>
    <td width="70%"><input class="form-control btn-success" type="submit" name="Submit" value="Update" /></td>
  </tr>
</tbody>
</table>
</form>