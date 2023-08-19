<?php
	$id=$_REQUEST['id'];
	$sql="select * from grp_cat where grp_cat_id='$id'";
	$res=mysqli_query($dbhandle,$sql);
	$row=mysqli_fetch_assoc($res);
	
	$sql1="select * from  main_cat where main_cat_id='" . $row['grp_main_cat_id'] . "'";
	$res1=mysqli_query($dbhandle,$sql1);
	$row1=mysqli_fetch_assoc($res1);
	
	if(isset($_POST['Submit']))
	{
	    $cat_name =$_POST['cat_name'];
		$status =$_POST['status'];
		
		$sql="UPDATE `grp_cat` SET `grp_cat_name` =  '$cat_name',`grp_cat_status` =  '$status' where grp_cat_id='$id'";
		mysqli_query($dbhandle,$sql);
		//echo $sql;
		echo "<script>";
			echo "window.location='home.php?op=grp_cat_view'";
		echo "</script>";
	}
?>
<form class="form-horizontal"name="edit_category_frm" action="#" method="post">
<table id="data_table" class="display" width="75%" border="0" align="center">
<thead>
  <tr>
    <td colspan="2">Edit Group Category Info.</td>
  </tr>
</thead>
<tbody>
  <tr>
    <td width="30%">Main Category Name</td>
    <td width="70%"><input class="form-control" type="text" name="main_cat_name" disabled="disabled" value="<?php echo $row1['main_cat_name'];?>"  /></td>
  </tr>
  <tr>
    <td width="30%">Category Name</td>
    <td width="70%"><input class="form-control" type="text" name="cat_name" value="<?php echo $row['grp_cat_name'];?>"  /></td>
  </tr>
  <tr>
    <td width="30%">Status</td>
    <td width="70%">
		<select name="status">
		<?php if ($row['grp_cat_status']=='ACTIVE')
		{ ?>
			<option value="ACTIVE" selected="selected">ACTIVE</option>
			<option value="INACTIVE">INACTIVE</option>
		<?php }else{ ?>
			<option value="ACTIVE">ACTIVE</option>
			<option value="INACTIVE" selected="selected">INACTIVE</option>
		<?php } ?>
		</select>	</td>
  </tr>
  <tr>
    <td width="30%">&nbsp;</td>
    <td width="70%"><input class="form-control btn-success" type="submit" name="Submit" value="Update" /></td>
  </tr>
</tbody>
</table>
</form>