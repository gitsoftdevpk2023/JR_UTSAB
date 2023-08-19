<?php
	$id=base64_decode($_REQUEST['id']);
	$sql="select * from  team_master where team_id='$id'";
	$res=mysqli_query($dbhandle,$sql);
	$row=mysqli_fetch_assoc($res);
	
	if(isset($_POST['Submit']))
	{
		$cat_name =str_replace("'","",$_POST['cat_name']);
		$cat_name2 ="";//$_POST['cat_name2'];
		$ddl_type =$_POST['ddl_type'];
		$cat_description =str_replace("'","",$_POST['cat_description']);		
		
		//echo $ddl_type;
		
		$sql="UPDATE `team_master` SET `team_type` =  '$ddl_type',`team_name` =  '$cat_name',`team_desig` =  '$cat_name2',`team_details` =  '$cat_description' where team_id='$id'";
		mysqli_query($dbhandle,$sql);
		 $mname =$_FILES["model_pro_pic"]["name"];
		 if($mname <> '')
		 {
			 $path = "team_upload/".$_FILES["model_pro_pic"]["name"];
			 $upload = move_uploaded_file($_FILES["model_pro_pic"]["tmp_name"],$path) or die("Upload Error");
			 $sql="UPDATE `team_master` SET `team_pic` = '$mname' where team_id='$id'";
	 		mysqli_query($dbhandle,$sql);
		 }
		
	//	echo $sql;
		echo "<script>";
			echo "window.location='home.php?op=team_view'";
		echo "</script>";
	}
?>
<form class="form-horizontal" name="edit_category_frm" enctype="multipart/form-data" action="#" method="post">
<table id="data_table" class="display" width="75%" border="0" align="center">
<thead>
  <tr>
    <td colspan="2"><strong>Edit Team Member Info.</strong></td>
  </tr>
</thead>
<tbody>
<tr>
    <td><label>Type</label></td>
    <td>
      <select class="form-control" id="ddl_type" name="ddl_type">
        <option <?php if($row['team_type']=="1"){?> selected="selected"<?php } ?> value="1">Utsab Members</option>
        <option <?php if($row['team_type']=="2"){?> selected="selected"<?php } ?> value="2">Utsab Supporting Members</option>
        <option <?php if($row['team_type']=="3"){?> selected="selected"<?php } ?> value="3">Utsab Next-Gen Members</option>
      </select>
    </td>
  </tr>
    <tr>
    <td width="30%">Team Member Name</td>
    <td width="70%"><input class="form-control" type="text" name="cat_name" value="<?php echo $row['team_name'];?>"  /></td>
  	</tr>
   <tr>
   <td width="30%">Details</td>
   <td width="70%"><textarea name="cat_description" class="form-control" rows="5" cols="20"><?php echo $row['team_details'];?></textarea>   </tr>

<!--   <tr>
    <td width="30%">Designation</td>
    <td width="70%"><input class="form-control" type="text" name="cat_name2" value="<?php //echo $row['team_desig'];?>"></td>
  </tr>-->
	<tr>
    <td width="22%">Picture</td>
    <td colspan="2"><img src="team_upload/<?php echo $row['team_pic']; ?>" width="100px" height="100px">
    <input class="form-control" type="file" name="model_pro_pic" />
    </td>  
  </tr>
   <tr>
    <td width="30%">&nbsp;</td>
    <td width="70%"><input class="form-control btn-success" type="submit" name="Submit" value="Update" /></td>
  </tr>
</tbody>
</table>
</form>