<?php
	$id=base64_decode($_REQUEST['id']);
	$sql="select * from  product_category where sl='$id'";
	$res=mysqli_query($dbhandle,$sql);
	$row=mysqli_fetch_assoc($res);
	
	if(isset($_POST['Submit']))
	{
	    $cat_name =$_POST['cat_name'];
		$cat_type =$_POST['mcat_id'];
		$cat_description =$_POST['cat_description'];
		$status =$_POST['status'];
		
		$sql="UPDATE `product_category` SET `category_name` =  '$cat_name',`category_type` =  '$cat_type',`cat_desc` =  '$cat_description' where sl='$id'";
		mysqli_query($dbhandle,$sql);
		//echo $sql;
		 $mname =$_FILES["model_pro_pic"]["name"];
		 if($mname <> ''){
			 $path = "cat_upload/".$_FILES["model_pro_pic"]["name"];
			 $upload = move_uploaded_file($_FILES["model_pro_pic"]["tmp_name"],$path) or die("Upload Error");
			 $sql="UPDATE `product_category` SET `cat_pic` = '$mname' where sl='$id'";
	 		mysqli_query($dbhandle,$sql);
		 }		
		
		echo "<script>";
			echo "window.location='home.php?op=pro_cat_view'";
		echo "</script>";
	}
?>
<form class="form-horizontal"name="edit_category_frm" action="#" method="post" enctype="multipart/form-data">
<table id="data_table" class="display" width="75%" border="0" align="center">
<thead>
  <tr>
    <td colspan="2">Edit Event Category Info.</td>
  </tr>
</thead>
<tbody>
   <tr style="display:none;">
    <td width="30%">Event Categeory</td>
    <td width="70%">
    <select name="mcat_id"id="mcat_id" >
    <?php
         $sql="select DISTINCT * from `main_cat` where main_cat_status='ACTIVE'";
         $resx=mysqli_query($dbhandle,$sql);
         $cntx=mysqli_num_rows($resx);
        if($cntx>0)
        {
              while($rowx=mysqli_fetch_assoc($resx))
                {
    ?>
     <option <?php if($rowx['main_cat_id']==$row['category_type']){ ?>selected="selected"<?php } ?> value="<?php echo $rowx['main_cat_id']?> "><?php echo $rowx['main_cat_name']?></option>
	<?php }} ?>
    </select>    </td>
  </tr>
    <tr>
    <td width="30%">Category Name</td>
    <td width="70%"><input class="form-control" type="text" name="cat_name" value="<?php echo $row['category_name'];?>"  /></td>
  </tr>
<!--   <tr>
    <td width="30%">Category Type</td>
    <td width="70%"><input class="form-control" type="text" name="cat_type" value="<?php //echo $row['category_type'];?>"  /></td>
  </tr>-->
   <tr>
   <td width="30%">Category Description</td>
   <td width="70%"><textarea class="form-control" name="cat_description" rows="5" cols="20"><?php echo $row['cat_desc'];?></textarea>

  <!-- <input class="form-control" type="text" name="cat_description" value="<?php echo $row['cat_desc'];?>"  />--></td>

    <!-- <td width="30%">Category Description</td>
    <td width="70%"><div id="t_cat_description">
	<input class="form-control" type="text" name="cat_description" /></div></td> -->
  </tr>
	<tr>
    <td width="22%">Logo</td>
    <td colspan="2"><img src="cat_upload/<?php echo $row['cat_pic']; ?>" width="100px" height="100px">
    <input class="form-control" type="file" name="model_pro_pic" />
    </td>  
  </tr>
   <tr>
    <td width="30%">Status</td>
    <td width="70%">
		<select name="status">
		<?php if ($row['status']=='ACTIVE')
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