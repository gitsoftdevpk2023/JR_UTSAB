<?php
	$id=base64_decode($_REQUEST['id']);
	$sql="select * from  cert_master where id='$id'";
	$res=mysqli_query($dbhandle,$sql);
	$row=mysqli_fetch_assoc($res);
	
	if(isset($_POST['Submit']))
	{
		$cat_name =$_POST['cat_name'];
		$cat_id =$_POST['cat_id'];
		
		$sql="UPDATE `cert_master` SET `cert_name` =  '$cat_name' where id='$id'";
		mysqli_query($dbhandle,$sql);
		
		 $mname =$_FILES["model_pro_pic"]["name"];
		 if($mname <> ''){
			 $path = "cert_upload/".$_FILES["model_pro_pic"]["name"];
			 $upload = move_uploaded_file($_FILES["model_pro_pic"]["tmp_name"],$path) or die("Upload Error");
			 $sql="UPDATE `cert_master` SET `cert_pic` = '$mname' where id='$id'";
	 		mysqli_query($dbhandle,$sql);
		 }
		
		//echo $sql;
		echo "<script>";
			echo "window.location='home.php?op=certi_view'";
		echo "</script>";
	}
?>
<form class="form-horizontal" name="edit_category_frm" enctype="multipart/form-data" action="#" method="post">
<table id="data_table" class="display" width="75%" border="0" align="center">
<thead>
  <tr>
    <td colspan="2"><strong>Edit Certificate Info.</strong></td>
  </tr>
</thead>
<tbody>
    <tr>
    <td width="30%">Certificate Name</td>
    <td width="70%"><input class="form-control" type="text" name="cat_name" value="<?php echo $row['cert_name'];?>"  /></td>
  	</tr>
   
	<tr>
    <td width="30%">Picture</td>
    <td colspan="2"><img src="cert_upload/<?php echo $row['cert_pic']; ?>" width="100px" height="100px">
    <input class="form-control" type="file" name="model_pro_pic" />    </td>  
  </tr>
   <tr>
    <td width="30%">&nbsp;</td>
    <td width="70%"><input class="form-control btn-success" type="submit" name="Submit" value="Update" /></td>
  </tr>
</tbody>
</table>
</form>