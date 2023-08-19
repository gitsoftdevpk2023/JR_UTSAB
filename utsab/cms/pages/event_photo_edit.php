<?php
	$id=base64_decode($_REQUEST['id']);
	$sql="select * from  event_photo_master where sl='$id'";
	$res=mysqli_query($dbhandle,$sql);
	$row=mysqli_fetch_assoc($res);
	
	if(isset($_POST['Submit']))
	{
	    $photo_name =$_POST['photo_name'];
		$photo_description =$_POST['photo_description'];
		
		$sql="UPDATE `event_photo_master` SET `photo_name` =  '$photo_name',`photo_desc` =  '$photo_description' where sl='$id'";
		mysqli_query($dbhandle,$sql);
		//echo $sql;
		 $mname =$_FILES["model_pro_pic"]["name"];
		 if($mname <> ''){
			 $path = "event_photo_upload/".date("dmYhs").$_FILES["model_pro_pic"]["name"];
			 $upload = move_uploaded_file($_FILES["model_pro_pic"]["tmp_name"],$path) or die("Upload Error");
			 $mname =date("dmYhs").$_FILES["model_pro_pic"]["name"];
			 $sql="UPDATE `event_photo_master` SET `photo_pic` = '$mname' where sl='$id'";
	 		mysqli_query($dbhandle,$sql);
		 }		
		
		echo "<script>";
			echo "window.location='home.php?op=event_photo_view'";
		echo "</script>";
	}
?>
<form class="form-horizontal" enctype="multipart/form-data" name="edit_category_frm" action="#" method="post">
<table id="data_table" class="display" width="75%" border="0" align="center">
<thead>
  <tr>
    <td colspan="2">Edit Photo Info.</td>
  </tr>
</thead>
<tbody>
    <tr>
    <td width="30%">Photo Name</td>
    <td width="70%"><input class="form-control" type="text" name="photo_name" value="<?php echo $row['photo_name'];?>"  /></td>
  </tr>
 <tr>
    <td width="30%">Exibition / Event</td>
    <td width="70%">
    <select name="photo_type" id="photo_type" class="form-control" >
      <option selected="selected" value="sl">----Choose one-----</option>
      <?php
	 $sql="select DISTINCT * from `event_master` where event_status='ACTIVE'";
	 $resx=mysqli_query($dbhandle,$sql);
	 $cnt=mysqli_num_rows($resx);
	if($cnt>0)
	{
		  while($rowx=mysqli_fetch_assoc($resx))
			{
			   
?>
      <option value="<?php echo $rowx['event_id']?> "  <?php if($rowx['event_id']==$row['photo_type']){ ?>selected="selected"<?php } ?>><?php echo $rowx['event_title']?></option>
      <?php }} ?>
    </select></td>
  </tr>
   <tr style="display:none">
   <td width="30%">Photo Description</td>
   <td width="70%"><textarea class="form-control" name="photo_description" rows="5" cols="20"><?php echo $row['photo_desc'];?></textarea>

  <!-- <input class="form-control" type="text" name="photo_description" value="<?php echo $row['photo_desc'];?>"  />--></td>

    <!-- <td width="30%">Photo Description</td>
    <td width="70%"><div id="t_photo_description">
	<input class="form-control" type="text" name="photo_description" /></div></td> -->
  </tr>
	<tr>
    <td width="30%">Picture</td>
    <td colspan="2"><img src="photo_upload/<?php echo $row['photo_pic']; ?>" width="100px" height="100px">
    <input class="form-control" type="file" name="model_pro_pic" />    </td>  
  </tr>
  <tr>
    <td width="30%">&nbsp;</td>
    <td colspan="2">&nbsp;</td>  
  </tr>
  <tr>
    <td width="30%">&nbsp;</td>
    <td colspan="2">&nbsp;</td>  
  </tr>

  <tr>
    <td width="30%">&nbsp;</td>
    <td width="70%"><input class="form-control btn-success" type="submit" name="Submit" value="Update" /></td>
  </tr>
</tbody>
</table>
</form>