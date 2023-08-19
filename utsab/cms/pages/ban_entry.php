<?php
	if(isset($_POST['Submit']))
	{
		$ban_name =$_POST['ban_name'];
		$ban_order =$_POST['ban_order'];
		$ban_id =$_POST['ban_id'];
		 $mname1 =$_FILES["model_pro_pic"]["name"];
		 if($mname1 <> ''){
			 $path = "ban_upload/".$_FILES["model_pro_pic"]["name"];
			 $upload = move_uploaded_file($_FILES["model_pro_pic"]["tmp_name"],$path) or die("Upload Error");
		//	 $sql="UPDATE `banner_master` SET `ban_pic` = '$mname1' where id='$last_id'";
	 	//	mysqli_query($dbhandle,$sql);
		 }

		$sql="INSERT INTO  banner_master(`ban_name`,`ban_order`,`status`,`ban_pic`)VALUES ('$ban_name','$ban_order','ACTIVE','$mname1')";
			mysqli_query($dbhandle,$sql);
			$last_id = mysqli_insert_id();

			echo "<script>";
				echo "window.location='home.php?op=ban_view'";
			echo "</script>";

	}else{

?>

<form class="form-horizontal" name="add_ban_frm" action="#" method="post" enctype="multipart/form-data" onSubmit="return v.exec()">
<table id="data_table" class="display" width="75%" border="0" align="center">
<thead>
  <tr>
    <td colspan="2">Banner  Entry</td>
  </tr>
</thead>
<tbody>
  <tr>
    <td width="30%">Banner Name</td>
    <td width="70%">
		<div id="t_ban_name"><input class="form-control" type="text" name="ban_name" /></div></td>
  </tr>
  <tr>
     <td>Banner Order </td>
     <td><input name="ban_order" type="number" class="form-control" maxlength="2" /></td>
   </tr>
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
	'ban_name'				: {'l':'CATEGORY NAME','r':true,'t':'t_ban_name'},
	'ban_type' 			    : {'l': 'CATEGORY TYPE','r': true,'t': 't_ban_type'}
	'ban_desc'				: {'1':'CATEGORY DESCRIPTION','r': true,'t':'t_ban_description'}
}
var v = new validator('add_ban_frm', a_fields);
</script>
<?php }?>