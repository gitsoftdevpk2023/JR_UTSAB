<?php
	if(isset($_POST['Submit']))
	{
		$video_name =$_POST['video_name'];
		$video_type =$_POST['mvideo_id'];
		$video_description =$_POST['video_description'];		
		$mname1 =$_POST['video_url'];
		 	
		echo $sql="INSERT INTO   video_master(`video_name`,`video_type`,`video_desc`,`status`,`video_pic`)VALUES ('$video_name','$video_type','$video_description','ACTIVE','$mname1')";
			mysqli_query($dbhandle,$sql);
			echo "<script>";
				echo "window.location='home.php?op=video_view'";
			echo "</script>";
			
	}else{
?>
<form class="form-horizontal" enctype="multipart/form-data" name="add_video_frm" action="#" method="post" onSubmit="return v.exec()">
<table id="data_table" class="display" width="75%" border="0" align="center">
<thead>
  <tr>
    <td colspan="2"> Video  Entry</td>
  </tr>
</thead>
<tbody>
  <tr>
    <td width="30%"> Video Album </td>
    <td>
		<select class="form-control" name="mvideo_id" id="mvideo_id" >
        <option selected value="">----Choose one-----</option>
<?php
	 $sql="select DISTINCT * from `video_cat` where video_cat_status='ACTIVE'";
	 $res=mysqli_query($dbhandle,$sql);
	 $cnt=mysqli_num_rows($res);
	if($cnt>0)
	{
		  while($row=mysqli_fetch_assoc($res))
			{
			   
?>
             <option value="<?php echo $row['video_cat_id']?> "><?php echo $row['video_cat_name']?></option>
<?php }} ?>
          </select>	</td>
  </tr>
  <tr>
    <td width="30%">Video Name</td>
    <td width="70%">
		<div id="t_video_name"><input class="form-control" type="text" name="video_name" /></div></td>
  </tr>
<!--   <tr>
    <td width="30%">Video Type </td>
    <td width="70%"><div id="t_video_type"><input class="form-control" type="text" name="video_type" /></div></td>
  </tr>-->
  <tr>
    <td width="30%">Video Description</td>
    <td width="70%"><div id="t_video_description">
	<textarea class="form-control" name="video_description" rows="5" cols="20"></textarea></div>

	<!-- <input class="form-control" type="text" name="video_description" /></div></td>-->  </tr>
   <tr>
    <td width="30%">Picture</td>
    <td><input class="form-control" type="text" name="video_url" /></td>
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
	'video_name'				: {'l':'CATEGORY NAME','r':true,'t':'t_video_name'},
	'video_type' 			    : {'l': 'CATEGORY TYPE','r': true,'t': 't_video_type'}
	'video_desc'				: {'1':'CATEGORY DESCRIPTION','r': true,'t':'t_video_description'}
}

var v = new validator('add_video_frm', a_fields);

</script>
<?php }?>