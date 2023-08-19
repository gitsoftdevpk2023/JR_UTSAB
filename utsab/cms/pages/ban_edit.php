<?php
	$id=base64_decode($_REQUEST['id']);
	$sql="select * from banner_master where id='$id'";
	$res=mysqli_query($dbhandle,$sql);
	$row=mysqli_fetch_assoc($res);
	
	if(isset($_POST['Submit']))
	{
		$ban_name =$_POST['ban_name'];
		//$id =$_POST['id'];
		$ban_order =$_POST['ban_order'];
		
		$sql="UPDATE `banner_master` SET `ban_name` =  '$ban_name',`ban_order` =  '$ban_order' where id='$id'";
		mysqli_query($dbhandle,$sql);
		
		 $mname =$_FILES["model_pro_pic"]["name"];
		 if($mname <> ''){
			 $path = "ban_upload/".$_FILES["model_pro_pic"]["name"];
			 $upload = move_uploaded_file($_FILES["model_pro_pic"]["tmp_name"],$path) or die("Upload Error");
			 $sql="UPDATE `banner_master` SET `ban_pic` = '$mname' where id='$id'";
	 		mysqli_query($dbhandle,$sql);
		 }
		
	//	echo $sql;
		echo "<script>";
			echo "window.location='home.php?op=ban_view'";
		echo "</script>";
	}
?>
<form class="form-horizontal" name="edit_category_frm" enctype="multipart/form-data" action="#" method="post">
<table id="data_table" class="display" width="75%" border="0" align="center">
<thead>
  <tr>
    <td colspan="2"><strong>Edit Banner Info.</strong></td>
  </tr>
</thead>
<tbody>
    <tr>
    <td width="30%">Banner Name</td>
    <td width="70%"><input class="form-control" type="text" name="ban_name" value="<?php echo $row['ban_name'];?>"  /></td>
  	</tr>
   
   <tr>
     <td>Banner Order </td>
     <td><input name="ban_order" type="number" class="form-control" maxlength="2" value="<?php echo $row['ban_order'];?>" /></td>
   </tr>
	<tr>
    <td width="30%">Picture</td>
    <td colspan="2"><img src="ban_upload/<?php echo $row['ban_pic']; ?>" width="100px" height="100px">
    <input class="form-control" type="file" name="model_pro_pic" />    </td>  
  </tr>
   <tr>
    <td width="30%">&nbsp;</td>
    <td width="70%"><input class="form-control btn-success" type="submit" name="Submit" value="Update" /></td>
  </tr>
</tbody>
</table>
</form>