<?php
	if(isset($_POST['Submit']))
	{
		$cat_name =$_POST['cat_name'];
		$cat_id =$_POST['cat_id'];
		$cat_description =$_POST['cat_description'];		
		 $mname1 =$_FILES["model_pro_pic"]["name"];
		 if($mname1 <> ''){
			 $path = "logo_upload/".$_FILES["model_pro_pic"]["name"];
			 $upload = move_uploaded_file($_FILES["model_pro_pic"]["tmp_name"],$path) or die("Upload Error");
		//	 $sql="UPDATE `client_master` SET `client_logo` = '$mname1' where id='$last_id'";
	 	//	mysqli_query($dbhandle,$sql);
		 }
		
		$sql="INSERT INTO  client_master(`client_name`,`client_prod`,`client_location`,`status`,`client_logo`)VALUES ('$cat_name','$cat_id','$cat_description','ACTIVE','$mname1')";
			mysqli_query($dbhandle,$sql);
			$last_id = mysqli_insert_id();
			
			
			echo "<script>";
				echo "window.location='home.php?op=client_view'";
			echo "</script>";
			
	}else{
?>
<form class="form-horizontal" name="add_cat_frm" action="#" method="post" enctype="multipart/form-data" onSubmit="return v.exec()">
<table id="data_table" class="display" width="75%" border="0" align="center">
<thead>
  <tr>
    <td colspan="2">Client  Entry</td>
  </tr>
</thead>
<tbody>
  <tr>
    <td width="30%">Client Name</td>
    <td width="70%">
		<div id="t_cat_name"><input class="form-control" type="text" name="cat_name" /></div></td>
  </tr>
  <tr>
    <td width="30%">Client Location</td>
    <td width="70%"><div id="t_cat_description">
	<textarea name="cat_description" rows="5" cols="20" class="form-control"></textarea></div>  </tr>
   <tr>
    <td width="30%">Product Categeory</td>
    <td width="70%">
    <select name="cat_id"id="cat_id" >
    <?php
         $sql="select DISTINCT * from `product_category` where status='ACTIVE'";
         $res=mysqli_query($dbhandle,$sql);
         $cnt=mysqli_num_rows($res);
        if($cnt>0)
        {
              while($row=mysqli_fetch_assoc($res))
                {
    ?>
     <option value="<?php echo $row['sl']?> "><?php echo $row['category_name']?></option>
	<?php }} ?>
    </select>    </td>
  </tr>
   <tr>
    <td width="18%">Logo</td>
    <td><input class="form-control" type="file" name="model_pro_pic" />    </td>
   </tr>
   <tr>
    <td width="30%">&nbsp;</td>
    <td width="70%">
		<input class="form-control btn-success" type="submit" name="Submit" value="Submit" /></td>
  </tr>
</tbody>
</table>
</form>
<script>

var a_fields = {
	'cat_name'				: {'l':'CATEGORY NAME','r':true,'t':'t_cat_name'},
	'cat_type' 			    : {'l': 'CATEGORY TYPE','r': true,'t': 't_cat_type'}
	'cat_desc'				: {'1':'CATEGORY DESCRIPTION','r': true,'t':'t_cat_description'}
}

var v = new validator('add_cat_frm', a_fields);

</script>
<?php }?>