<?php
	$id=base64_decode($_REQUEST['id']);
	$sql="select * from  client_master where id='$id'";
	$res=mysqli_query($dbhandle,$sql);
	$row=mysqli_fetch_assoc($res);
	
	if(isset($_POST['Submit']))
	{
		$cat_name =$_POST['cat_name'];
		$cat_id =$_POST['cat_id'];
		$cat_description =$_POST['cat_description'];		
		
		$sql="UPDATE `client_master` SET `client_name` =  '$cat_name',`client_prod` =  '$cat_id',`client_location` =  '$cat_description' where id='$id'";
		mysqli_query($dbhandle,$sql);
		
		 $mname =$_FILES["model_pro_pic"]["name"];
		 if($mname <> ''){
			 $path = "logo_upload/".$_FILES["model_pro_pic"]["name"];
			 $upload = move_uploaded_file($_FILES["model_pro_pic"]["tmp_name"],$path) or die("Upload Error");
			 $sql="UPDATE `client_master` SET `client_logo` = '$mname' where id='$id'";
	 		mysqli_query($dbhandle,$sql);
		 }
		
		//echo $sql;
		echo "<script>";
			echo "window.location='home.php?op=client_view'";
		echo "</script>";
	}
?>
<form class="form-horizontal" name="edit_category_frm" enctype="multipart/form-data" action="#" method="post">
<table id="data_table" class="display" width="75%" border="0" align="center">
<thead>
  <tr>
    <td colspan="2"><strong>Edit Client Info.</strong></td>
  </tr>
</thead>
<tbody>
    <tr>
    <td width="30%">Client Name</td>
    <td width="70%"><input class="form-control" type="text" name="cat_name" value="<?php echo $row['client_name'];?>"  /></td>
  	</tr>
   <tr>
   <td width="30%">Client Location</td>
   <td width="70%"><textarea name="cat_description" class="form-control" rows="5" cols="20"><?php echo $row['client_location'];?></textarea>   </tr>

   <tr>
    <td width="30%">Product Categeory</td>
    <td width="70%">
    <select name="cat_id"id="cat_id" >
    <?php
         $sql="select DISTINCT * from `product_category` where status='ACTIVE'";
         $resx=mysqli_query($dbhandle,$sql);
         $cntx=mysqli_num_rows($resx);
        if($cntx>0)
        {
              while($rowx=mysqli_fetch_assoc($resx))
                {
    ?>
     <option <?php if($rowx['sl']==$row['client_prod']){ ?>selected="selected"<?php } ?> value="<?php echo $rowx['sl']?> "><?php echo $rowx['category_name']?></option>
	<?php }} ?>
    </select>    </td>
  </tr>
	<tr>
    <td width="22%">Logo</td>
    <td colspan="2"><img src="logo_upload/<?php echo $row['client_logo']; ?>" width="100px" height="100px">
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