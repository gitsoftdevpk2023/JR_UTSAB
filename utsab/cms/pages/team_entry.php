<?php
	if(isset($_POST['Submit']))
	{
		$cat_name =str_replace("'","",$_POST['cat_name']);
		$cat_name2 ="";//$_POST['cat_name2'];
		$ddl_type =$_POST['ddl_type'];
		$cat_description =str_replace("'","",$_POST['cat_description']);		
		 $mname1 =$_FILES["model_pro_pic"]["name"];
		 if($mname1 <> '')
		 {
			 $path = "team_upload/".$_FILES["model_pro_pic"]["name"];
			 $upload = move_uploaded_file($_FILES["model_pro_pic"]["tmp_name"],$path) or die("Upload Error");
		//	 $sql="UPDATE `team_master` SET `team_logo` = '$mname1' where id='$last_id'";
	 	//	mysqli_query($dbhandle,$sql);
		 }
		
		$sql="INSERT INTO  team_master(`team_name`,`team_desig`,`team_details`,`team_status`,`team_pic`,`team_type`)VALUES ('$cat_name','$cat_name2', '$cat_description','ACTIVE','$mname1', '$ddl_type')";
			mysqli_query($dbhandle,$sql);
		//	$last_id = mysqli_insert_id();
			
			echo "<script>";
				echo "window.location='home.php?op=team_view'";
			echo "</script>";
			
	}//else{
?>
<form class="form-horizontal" name="add_cat_frm" action="#" method="post" enctype="multipart/form-data" onSubmit="return v.exec()">
<table id="data_table" class="display" width="75%" border="0" align="center">
<thead>
  <tr>
    <td colspan="2">Team Member Entry</td>
  </tr>
</thead>
<tbody>
  <tr>
    <td>Type</td>
    <td><label>
      <select class="form-control" id="ddl_type" name="ddl_type">
        <option value="1">Utsab Members</option>
        <option value="2">Utsab Supporting Members</option>
        <option value="3">Utsab Next-Gen Members</option>
      </select>
    </label></td>
  </tr>
  <tr>
    <td width="30%">Team Member Name</td>
    <td width="70%">
		<div id="t_cat_name"><input class="form-control" type="text" name="cat_name" /></div></td>
  </tr>
  <tr>
    <td width="30%">Details </td>
    <td width="70%"><div id="t_cat_description">
	<textarea name="cat_description" rows="5" cols="20" class="form-control"></textarea></div>  </tr>
   <!--<tr>
    <td width="30%">Designation</td>
    <td width="70%"><input class="form-control" type="text" name="cat_name2" /></td>
  </tr>-->
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
<?php //}?>