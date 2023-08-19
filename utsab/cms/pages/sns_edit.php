<?php
	
	$sql="select * from  sns_master";
	$res=mysqli_query($dbhandle,$sql);
	$row=mysqli_fetch_assoc($res);
	
	if(isset($_POST['Submit']))
	{
	    $fb_link =$_POST['fb_link'];
		$twitter_link =$_POST['twitter_link'];
		$youtube_link=$_REQUEST['youtube_link'];
		$map_link=$_REQUEST['map_link'];
		$linkdin_link=$_REQUEST['linkdin_link'];
		$indiamart_link=$_REQUEST['indiamart_link'];
		$tradeindia_link=$_REQUEST['tradeindia_link'];
		$alibaba_link=$_REQUEST['alibaba_link'];
		$instagram_link=$_REQUEST['instagram_link'];
		$pinterest_link=$_REQUEST['pinterest_link'];
		
		
	//	$status =$_POST['status'];
		
		$sql="UPDATE `sns_master` SET `fb_link` =  '$fb_link',`twitter_link` =  '$twitter_link',`youtube_link` =  '$youtube_link',`map_link` =  '$map_link',`linkdin_link` =  '$linkdin_link',`indiamart_link` =  '$indiamart_link',`tradeindia_link` =  '$tradeindia_link',`alibaba_link` =  '$alibaba_link',`instagram_link` =  '$instagram_link',`pinterest_link` =  '$pinterest_link' ";
		mysqli_query($dbhandle,$sql);
		//echo $sql;
		echo "<script>";
			echo "window.location='home.php?op=sns_edit'";
		echo "</script>";
	}
?>
<style type="text/css">
<!--
.style3 {font-family: Calibri; font-weight: bold; }
-->
</style>

<form class="form-horizontal"name="edit_category_frm" action="#" method="post">

<table id="data_table" class="display" width="75%" border="0" align="center">
<thead>
  <tr>
    <td colspan="2">Edit Social Link Info.</td>
  </tr>
</thead>
<tbody>
    <tr>
    <td width="30%"><span class="style3"> Facebook</span></td>
    <td width="70%"><input class="form-control" type="text" name="fb_link" value="<?php echo $row['fb_link'];?>"  /></td>
  </tr>
   <tr>
    <td width="30%"><span class="style3">Twitter</span></td>
    <td width="70%"><input class="form-control" type="text" name="twitter_link" value="<?php echo $row['twitter_link'];?>"  /></td>
  </tr>
   <tr>
   <td width="30%"><span class="style3">Youtube</span></td>
   <td width="70%"><input class="form-control" type="text" name="youtube_link" value="<?php echo $row['youtube_link'];?>">    </td>
  </tr>
   <tr>
   <td width="30%"><span class="style3">Instagram</span></td>
   <td width="70%"><input class="form-control" type="text" name="instagram_link" value="<?php echo $row['instagram_link'];?>">    </td>
  </tr>
   <tr>
   <td width="30%"><span class="style3">Pinterest</span></td>
   <td width="70%"><input class="form-control" type="text" name="pinterest_link" value="<?php echo $row['pinterest_link'];?>">    </td>
  </tr>
  
  <tr>
   <td width="30%"><span class="style3">Google map</span></td>
   <td width="70%"><input class="form-control" type="text" name="map_link" value="<?php echo $row['map_link'];?>">     </td>
  </tr>
  <tr>
   <td width="30%"><span class="style3">Linkdin</span></td>
   <td width="70%"><input class="form-control" type="text" name="linkdin_link" value="<?php echo $row['linkdin_link'];?>">     </td>
  </tr>
  <tr>
   <td width="30%"><span class="style3">Indiamart</span></td>
   <td width="70%"><input class="form-control" type="text" name="indiamart_link" value="<?php echo $row['indiamart_link'];?>">     </td>
  </tr>
  <tr>
   <td width="30%"><span class="style3">Trade India</span></td>
   <td width="70%"><input class="form-control" type="text" name="tradeindia_link" value="<?php echo $row['tradeindia_link'];?>">     </td>
  </tr>
  <tr>
   <td width="30%"><span class="style3">Alibaba</span></td>
   <td width="70%"><input class="form-control" type="text" name="alibaba_link" value="<?php echo $row['alibaba_link'];?>">     </td>
  </tr>

   <tr style="display:none;">
    <td width="30%">Status</td>
    <td width="70%">
		<select name="status">
		<?php if ($row['status']=='ACTIVE')
		{ ?>
			<option value="ACTIVE" selected="selected">ACTIVE</option>
			<option value="INACTIVE">INACTIVE</option>
		<?php }else{ ?>
			<option value="ACTIVE">ACTIVE</option>
			<option value="INACTIVE" selected="selected">INACTIVE</option>
		<?php } ?>
		</select>	</td>
  </tr>
  <tr>
    <td width="30%">&nbsp;</td>
    <td width="70%"><input class="form-control btn-success" type="submit" name="Submit" value="Update" /></td>
  </tr>
</tbody>
</table>
</form>