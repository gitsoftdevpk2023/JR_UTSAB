<?php
	if(isset($_POST['Submit']))
	{
		$cat_name =$_POST['cat_name'];
		$cat_description =$_POST['cat_description'];		
		 $mname1 =$_FILES["model_pro_pic"]["name"];
		 if($mname1 <> ''){
			 $path = "testi_upload/".$_FILES["model_pro_pic"]["name"];
			 $upload = move_uploaded_file($_FILES["model_pro_pic"]["tmp_name"],$path) or die("Upload Error");
		//	 $sql="UPDATE `testi_master` SET `testi_pic` = '$mname1' where id='$last_id'";
	 	//	mysqli_query($dbhandle,$sql);
		 }
		
		$sql="INSERT INTO  testi_master(`testi_name`,`testi_details`,`status`,`testi_pic`)VALUES ('$cat_name','$cat_description','ACTIVE','$mname1')";
			mysqli_query($dbhandle,$sql);
			$last_id = mysqli_insert_id();
			
			
			echo "<script>";
				echo "window.location='home.php?op=testi_view'";
			echo "</script>";
			
	}else{
?>
<form class="form-horizontal" name="add_cat_frm" action="#" method="post" enctype="multipart/form-data" onSubmit="return v.exec()">
<table id="data_table" class="display" width="75%" border="0" align="center">
<thead>
  <tr>
    <td colspan="2">Testimonial  Entry</td>
  </tr>
</thead>
<tbody>
  <tr>
    <td width="30%">Client Name</td>
    <td width="70%">
		<div id="t_cat_name"><input class="form-control" type="text" name="cat_name" /></div></td>
  </tr>
  <tr>
    <td width="30%">Description</td>
    <td width="70%"><div id="t_cat_description">
	<textarea name="cat_description" rows="5" cols="20" class="form-control"></textarea></div>  </tr>
   
   <tr>
    <td width="30%">Picture</td>
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