<?php
	$id=$_REQUEST['id'];
	$sql="select * from  cms_master where sl='$id'";
	$res=mysqli_query($dbhandle,$sql);
	$row=mysqli_fetch_assoc($res);
	
	if(isset($_POST['Submit']))
	{
	    $CMS_tag =$_POST['CMS_tag'];
		
		$CMS_details =$_POST['CMS_details'];
//		$status =$_POST['status'];
		
		$sql="UPDATE `cms_master` SET `cms_dtls` =  '". STR_REPLACE("'","",$CMS_details) . "' where sl='$id'";
		mysqli_query($dbhandle,$sql);
		//echo $sql;
		$mname =$_FILES["model_pro_pic"]["name"];
		 if($mname <> '')
		 {
			 $path = "cms_upload/".$_FILES["model_pro_pic"]["name"];
			 $upload = move_uploaded_file($_FILES["model_pro_pic"]["tmp_name"],$path) or die("Upload Error");
			 $sql="UPDATE `cms_master` SET `cms_pic` = '$mname' where sl='$id'";
	 		 mysqli_query($dbhandle,$sql);
		 }		
		echo "<script>";
			echo "window.location='home.php?op=CMS_view'";
		echo "</script>";
	}
?>
<form class="form-horizontal"name="edit_category_frm" action="#" method="post" enctype="multipart/form-data">
<table id="data_table" class="display" width="75%" border="0" align="center">
<thead>
  <tr>
    <td colspan="3">Edit CMS Info.</td>
  </tr>
</thead>
<tbody>
    <tr>
    <td width="18%">CMS Tag</td>
    <td width="81%"><input class="form-control" type="text" name="CMS_tag" value="<?php echo $row['cms_tag'];?>" readonly="readonly"/>
    </td>
    <!--<td width="43%"><u><b><font face="Trebuchet MS" size="2">CMS Helps:</font></b></u></td>-->
  </tr>
   
   <tr>
   <td width="18%">CMS Details</td>
   <td colspan="2"><textarea id="editor1" name="CMS_details" class="form-control" rows="10" cols="32"><?php echo $row['cms_dtls'];?></textarea><!--<div id="t_product_prise3">-->
            <!--</div>-->
	      <font face="Tahoma" style="font-size: 10pt">1. Put text part between &lt;b&gt; 
		.. &lt;/b&gt; to make it <b>bold</b>. Like &lt;b&gt;xyz&lt;/b&gt; will be shown as <b>xyz<br>
		<br>
		</b>2. Put text part between &lt;i&gt; 
		.. &lt;/i&gt; to make it <i>italic</i>. Like &lt;i&gt;xyz&lt;/i&gt; will be shown as <i>
		xyz<br>
		<br>
		</i>3. Put text part between 
		&lt;u&gt; .. &lt;/u&gt; to make it <u>underlined</u>. Like &lt;u&gt;xyz&lt;/u&gt; will be shown 
		as <u>xyz<br>
		<br>
		</u>4. Put &lt;br&gt; to insert a 
		line break. </font></td>
   </tr>
	<tr>
    <td width="30%">Picture</td>
    <td colspan="2"><img src="cms_upload/<?php echo $row['cms_pic']; ?>" width="100px" height="100px">
    <input class="form-control" type="file" name="model_pro_pic" />    </td>  
  </tr>
<!--   <tr>
    <td width="18%">Status</td>
    <td width="81%" colspan="2">
		<select name="status">
		<?php //if ($row['status']=='ACTIVE') 		{ ?>
			<option value="ACTIVE" selected="selected">ACTIVE</option>
			<option value="INACTIVE">INACTIVE</option>
		<?php //}else{ ?>
			<option value="ACTIVE">ACTIVE</option>
			<option value="INACTIVE" selected="selected">INACTIVE</option>
		<?php //} ?>
		</select>	</td>
  </tr>-->
  <tr>
    <td width="18%">&nbsp;</td>
    <td width="81%" colspan="2"><input class="form-control btn-success" type="submit" name="Submit" value="Update" /></td>
  </tr>
</tbody>
</table>
</form>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script type="text/javascript" >
	// Replace the <textarea id="editor1"> with a CKEditor
	// instance, using default configuration.
	CKEDITOR.replace( 'editor1' );
</script>  
