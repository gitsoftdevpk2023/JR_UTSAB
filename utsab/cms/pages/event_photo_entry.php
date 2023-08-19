<?php
	if(isset($_POST['Submit']))
	{
		$photo_name =$_POST['photo_name'];
		$photo_description =$_POST['photo_description'];	
		$photo_type =$_POST['photo_type'];	
			
		 $mname1 =$_FILES["model_pro_pic"]["name"];
		 if($mname1 <> '')
		 {
			 $path = "event_photo_upload/".date("dmYhs").$_FILES["model_pro_pic"]["name"];
			 $upload = move_uploaded_file($_FILES["model_pro_pic"]["tmp_name"],$path) or die("Upload Error");
			 $mname1 =date("dmYhs").$_FILES["model_pro_pic"]["name"];
		 }	
		 	
		 $sql="INSERT INTO event_photo_master(`photo_name`,`photo_desc`,`photo_pic`,`photo_type`)VALUES ('$photo_name','$photo_description','$mname1','$photo_type')";
			mysqli_query($dbhandle,$sql);
			echo "<script>";
				echo "window.location='home.php?op=event_photo_view'";
			echo "</script>";
			
	}else{
?>
<form class="form-horizontal" enctype="multipart/form-data" name="add_photo_frm" action="#" method="post" onSubmit="return v.exec()">
<table id="data_table" class="display" width="75%" border="0" align="center">
<thead>
  <tr>
    <td colspan="2"> Photo  Entry</td>
  </tr>
</thead>
<tbody>
  <tr>
    <td width="30%">Photo Name</td>
    <td width="70%">
		<div id="t_photo_name"><input class="form-control" type="text" name="photo_name" /></div></td>
  </tr>
<tr>
    <td width="30%">Exibition / Event </td>
    <td width="70%">
		<select name="photo_type" id="photo_type" class="form-control" >
        <option selected value="sl">----Choose one-----</option>
<?php
	 $sql="select DISTINCT * from `product_details` where status='ACTIVE'";
	 $res=mysqli_query($dbhandle,$sql);
	 $cnt=mysqli_num_rows($res);
	if($cnt>0)
	{
		  while($row=mysqli_fetch_assoc($res))
			{
			   
?>
          <option value="<?php echo $row['pro_id']?> "><?php echo $row['exi_photo_type']?> : <?php echo $row['product_name']?></option>
<?php }} ?>
          </select>	
    </td>
  </tr>
  <tr style="display:none">
    <td width="30%">Photo Description</td>
    <td width="70%"><div id="t_photo_description">
	<textarea class="form-control" name="photo_description" rows="5" cols="20"></textarea></div>

	<!-- <input class="form-control" type="text" name="photo_description" /></div></td>-->  </tr>
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
	'photo_name'				: {'l':'CATEGORY NAME','r':true,'t':'t_photo_name'},
	'photo_type' 			    : {'l': 'CATEGORY TYPE','r': true,'t': 't_photo_type'}
	'photo_desc'				: {'1':'CATEGORY DESCRIPTION','r': true,'t':'t_photo_description'}
}

var v = new validator('add_photo_frm', a_fields);

</script>
<?php }?>