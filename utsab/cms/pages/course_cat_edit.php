0<?php
	$id=base64_decode($_REQUEST['id']);
	$sql="select * from course_cat where course_cat_id='$id'";
	$res=mysqli_query($dbhandle,$sql);
	$row=mysqli_fetch_assoc($res);
	
	if(isset($_POST['Submit']))
	{
	    $cat_name =$_POST['cat_name'];
		$cat_description =$_POST['cat_description'];
		$status =$_POST['status'];
		
		$sql="UPDATE `course_cat` SET `course_cat_name` =  '$cat_name',`course_cat_details` =  '$cat_description',`course_cat_status` =  '$status' where course_cat_id='$id'";
		mysqli_query($dbhandle,$sql);
		//echo $sql;
		
		echo "<script>";
			echo "window.location='home.php?op=course_cat_view'";
		echo "</script>";
	}
?>
<form class="form-horizontal"name="edit_category_frm" action="#" method="post">
<table id="data_table" class="display" width="75%" border="0" align="center">
<thead>
  <tr>
    <td colspan="2">Edit Course Category Info.</td>
  </tr>
</thead>
<tbody>
   
    <tr>
    <td width="30%">Course Category Name</td>
    <td width="70%"><input class="form-control" type="text" name="cat_name" value="<?php echo $row['course_cat_name'];?>"  /></td>
  </tr>
<!--   <tr>
    <td width="30%">Category Type</td>
    <td width="70%"><input class="form-control" type="text" name="cat_type" value="<?php //echo $row['category_type'];?>"  /></td>
  </tr>-->
   <tr>
   <td width="30%">Course Category Description</td>
   <td width="70%"><textarea class="form-control" name="cat_description" rows="5" cols="20"><?php echo $row['course_cat_details'];?></textarea>  </tr>
	
	

  <tr>
    <td width="30%">&nbsp;</td>
    <td width="70%"><input class="form-control btn-success" type="submit" name="Submit" value="Update" /></td>
  </tr>
</tbody>
</table>
</form>