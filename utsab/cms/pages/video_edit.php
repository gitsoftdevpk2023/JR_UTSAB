<?php
	$id=base64_decode($_REQUEST['id']);
	$sql="select * from  video_master where sl='$id'";
	$res=mysqli_query($dbhandle,$sql);
	$row=mysqli_fetch_assoc($res);
	
	if(isset($_POST['Submit']))
	{
	    $video_name =$_POST['video_name'];
		$video_type =$_POST['mvideo_id'];
		$video_description =$_POST['video_description'];
		$mname =$_POST['video_url'];
		
		$sql="UPDATE `video_master` SET `video_name` =  '$video_name',`video_type` =  '$video_type',`video_desc` =  '$video_description',`video_pic` =  '$mname' where sl='$id'";
		mysqli_query($dbhandle,$sql);
		//echo $sql;
		
		echo "<script>";
			echo "window.location='home.php?op=video_view'";
		echo "</script>";
	}
?>
<form class="form-horizontal" enctype="multipart/form-data" name="edit_category_frm" action="#" method="post">
<table id="data_table" class="display" width="75%" border="0" align="center">
<thead>
  <tr>
    <td colspan="2">Edit Video Info.</td>
  </tr>
</thead>
<tbody>
   <tr>
    <td width="30%">Video Categeory</td>
    <td width="70%">
    <select name="mvideo_id"id="mvideo_id" >
    <?php
         $sql="select DISTINCT * from `video_cat` where video_cat_status='ACTIVE'";
         $resx=mysqli_query($dbhandle,$sql);
         $cntx=mysqli_num_rows($resx);
        if($cntx>0)
        {
              while($rowx=mysqli_fetch_assoc($resx))
                {
    ?>
     <option <?php if($rowx['video_cat_id']==$row['video_type']){ ?>selected="selected"<?php } ?> value="<?php echo $rowx['video_cat_id']?> "><?php echo $rowx['video_cat_name']?></option>
	<?php }} ?>
    </select>    </td>
  </tr>
    <tr>
    <td width="30%">Video Name</td>
    <td width="70%"><input class="form-control" type="text" name="video_name" value="<?php echo $row['video_name'];?>"  /></td>
  </tr>
<!--   <tr>
    <td width="30%">Video Type</td>
    <td width="70%"><input class="form-control" type="text" name="video_type" value="<?php //echo $row['video_type'];?>"  /></td>
  </tr>-->
   <tr>
   <td width="30%">Video Description</td>
   <td width="70%"><textarea class="form-control" name="video_description" rows="5" cols="20"><?php echo $row['video_desc'];?></textarea>

  <!-- <input class="form-control" type="text" name="video_description" value="<?php echo $row['video_desc'];?>"  />--></td>

    <!-- <td width="30%">Video Description</td>
    <td width="70%"><div id="t_video_description">
	<input class="form-control" type="text" name="video_description" /></div></td> -->
  </tr>
	<tr>
    <td width="30%">Picture</td>
    <td colspan="2"><iframe src="<?php echo $row['video_pic']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" width="100px" height="80px" allowfullscreen></iframe>
      <input class="form-control" type="text" name="video_url" value="<?php echo $row['video_pic'];?>"></td>  
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