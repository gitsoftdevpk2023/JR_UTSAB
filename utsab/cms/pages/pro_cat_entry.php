<?php
	if(isset($_POST['Submit']))
	{
		$cat_name =$_POST['cat_name'];
		$cat_type =1;//$_POST['mcat_id'];
		$cat_description =$_POST['cat_description'];		
		 $mname1 =$_FILES["model_pro_pic"]["name"];
		 if($mname1 <> ''){
			 $path = "cat_upload/".$_FILES["model_pro_pic"]["name"];
			 $upload = move_uploaded_file($_FILES["model_pro_pic"]["tmp_name"],$path) or die("Upload Error");
		 }		
		$sql="INSERT INTO   product_category(`category_name`,`category_type`,`cat_desc`,`status`,`cat_pic`)VALUES ('$cat_name','$cat_type','$cat_description','ACTIVE','$mname1')";
			mysqli_query($dbhandle,$sql);
			echo "<script>";
				echo "window.location='home.php?op=pro_cat_view'";
			echo "</script>";
			
	}else{
?>
<form class="form-horizontal"name="add_cat_frm" action="#" method="post" onSubmit="return v.exec()" enctype="multipart/form-data">
<table id="data_table" class="display" width="75%" border="0" align="center">
<thead>
  <tr>
    <td colspan="2">Event Category  Entry</td>
  </tr>
</thead>
<tbody>
  <tr style="display:none;">
    <td width="18%">Main Category Name</td>
    <td>
		<select class="form-control" name="mcat_id"id="mcat_id" >
        <option selected value="">----Choose one-----</option>
<?php
	 $sql="select DISTINCT * from `main_cat` where main_cat_status='ACTIVE'";
	 $res=mysqli_query($dbhandle,$sql);
	 $cnt=mysqli_num_rows($res);
	if($cnt>0)
	{
		  while($row=mysqli_fetch_assoc($res))
			{
			   
?>
             <option value="<?php echo $row['main_cat_id']?> "><?php echo $row['main_cat_name']?></option>
<?php }} ?>
          </select>	</td>
  </tr>
  <tr>
    <td width="30%">Category Name</td>
    <td width="70%">
		<div id="t_cat_name"><input class="form-control" type="text" name="cat_name" /></div></td>
  </tr>
<!--   <tr>
    <td width="30%">Category Type </td>
    <td width="70%"><div id="t_cat_type"><input class="form-control" type="text" name="cat_type" /></div></td>
  </tr>-->
  <tr>
    <td width="30%">Category Description</td>
    <td width="70%"><div id="t_cat_description">
	<textarea class="form-control" name="cat_description" rows="5" cols="20"></textarea></div>

	<!-- <input class="form-control" type="text" name="cat_description" /></div></td>-->
  </tr>
   <tr>
    <td width="18%">Picture</td>
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