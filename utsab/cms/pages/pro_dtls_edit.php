<?php
	$id=base64_decode($_REQUEST['id']);
	$sql="select * from   product_details where pro_id='$id'";
	$res=mysqli_query($dbhandle,$sql);
	$row=mysqli_fetch_assoc($res);
	$product_category=$row['product_category'];
	$sql1="select category_name from product_category where sl='" . $product_category ."'";
	$res1=mysqli_query($dbhandle,$sql1);
	$row1=mysqli_fetch_assoc($res1);
	
	if(isset($_POST['Submit']))
	{
	    $product_name =$_POST['product_name'];
		//$product_bulk =$_POST['product_bulk'];	
		$product_bulk_price =$_POST['product_bulk_price'];
		//$product_size =$_POST['product_size'];
		$product_features =$_POST['product_features'];
		$pro_type =$_POST['pro_type'];
		$product_price =$_POST['product_price'];
		$product_details =$_POST['product_details'];
		$product_video =$_POST['product_video'];
		$product_location =$_POST['product_location'];
		$status =$_POST['status'];
		$product_new=$_POST['product_new'];
		$product_sell_off=$_POST['product_sell_off'];
		$product_best_seller=$_POST['product_best_seller'];
		$brand_id =0;//$_POST['brand_id'];
		$exitype =$_POST['exitype'];
		$exi_photo_type =$_POST['exi_photo_type'];
		$exidate =$_POST['exidate'];
		$exidate1 =$_POST['exidate1'];
		
		$sql="UPDATE `product_details` SET `product_name` =  '$product_name',`product_type` =  '$pro_type',`exi_photo_type`='$exi_photo_type',`product_price` =  '$product_price',`product_bulk_price` =  '$product_bulk_price', `product_features` =  '$product_features', `product_details` =  '$product_details', `product_video`='$product_video', `prod_brand`='$brand_id', `exitype`='$exitype',`exidate`='$exidate',`exidate1`='$exidate1', `product_location`='$product_location' where pro_id='$id'";//,`status` =  '$status',`new` =  '$product_new',`sell_off` =  '$product_sell_off',`best_seller` =  '$product_best_seller'
		mysqli_query($dbhandle,$sql);

		 $mname =$_FILES["model_pro_pic"]["name"];
		 if($mname <> ''){
			 $path = "pic_upload/".$_FILES["model_pro_pic"]["name"];
			 $upload = move_uploaded_file($_FILES["model_pro_pic"]["tmp_name"],$path) or die("Upload Error");
			 $sql="UPDATE `product_details` SET `model_pro_pic` = '$mname' where pro_id='$id'";
	 		mysqli_query($dbhandle,$sql);
		 }
		 $mname1 =$_FILES["model_pro_pic1"]["name"];
		 if($mname1 <> ''){
			 $path = "pic_upload/".$_FILES["model_pro_pic1"]["name"];
			 $upload = move_uploaded_file($_FILES["model_pro_pic1"]["tmp_name"],$path) or die("Upload Error");
			 $sql="UPDATE `product_details` SET `model_pro_pic1` = '$mname1' where pro_id='$id'";
	 		mysqli_query($dbhandle,$sql);
		 }
		 $mname2 =$_FILES["model_pro_pic2"]["name"];
		 if($mname2 <> ''){
			 $path = "pic_upload/".$_FILES["model_pro_pic2"]["name"];
			 $upload = move_uploaded_file($_FILES["model_pro_pic2"]["tmp_name"],$path) or die("Upload Error");
			 $sql="UPDATE `product_details` SET `model_pro_pic2` = '$mname2' where pro_id='$id'";
	 		mysqli_query($dbhandle,$sql);
		 }
		 $mname3 =$_FILES["model_pro_pic3"]["name"];
		 if($mname3 <> ''){
			 $path = "pic_upload/".$_FILES["model_pro_pic3"]["name"];
			 $upload = move_uploaded_file($_FILES["model_pro_pic3"]["tmp_name"],$path) or die("Upload Error");
			 $sql="UPDATE `product_details` SET `model_pro_pic3` = '$mname3' where pro_id='$id'";
	 		mysqli_query($dbhandle,$sql);
		 }
		 $mname4 =$_FILES["model_pro_pic4"]["name"];
		 if($mname4 <> ''){
			 $path = "pic_upload/".$_FILES["model_pro_pic4"]["name"];
			 $upload = move_uploaded_file($_FILES["model_pro_pic4"]["tmp_name"],$path) or die("Upload Error");
			 $sql="UPDATE `product_details` SET `model_pro_pic4` = '$mname4' where pro_id='$id'";
	 		mysqli_query($dbhandle,$sql);
		 }
		 $mnamep =$_FILES["model_pro_pdf"]["name"];
		 if($mnamep <> ''){
			 $path = "pic_upload/".$_FILES["model_pro_pdf"]["name"];
			 $upload = move_uploaded_file($_FILES["model_pro_pdf"]["tmp_name"],$path) or die("Upload Error");
			 $sql="UPDATE `product_details` SET `product_pdf` = '$mnamep' where pro_id='$id'";
	 		mysqli_query($dbhandle,$sql);
		 }
		 
		//echo $sql;
		echo "<script>";
			echo "window.location='home.php?op=pro_dtls_view'";
		echo "</script>";
	}
?>
<form class="form-horizontal"name="edit_category_frm" id="edit_category_frm" action="#" method="post" enctype="multipart/form-data">
<table id="data_table" class="display" width="75%" border="0" align="center">
<thead>
  <tr>
    <td colspan="3">Edit Event Details Info.</td>
  </tr>
</thead>
<tbody>
    <tr style="display:none;">
    <td width="30%">Category Name</td>
    <td colspan="2"><input class="form-control" type="text" name="cat_name" disabled="disabled" value="<?php echo $row1['category_name'];?>"  /></td>
  </tr>
  <tr style="display:none;">
    <td width="30%">Brand Name</td>
    <td>
		<select name="brand_id"id="brand_id"  >
        <option value="">----Select Brand-----</option>
<?php
	 $sql="select DISTINCT * from `brand_master` where status='ACTIVE'";
	 $resx=mysqli_query($dbhandle,$sql);
	 $cntx=mysqli_num_rows($resx);
	if($cntx>0)
	{
		  while($rowx=mysqli_fetch_assoc($resx))
			{
?>
  	<option value="<?php echo $rowx['id'];?>" <?php if($rowx['id']==$row['prod_brand']){ ?>selected="selected"<?php } ?>><?php echo $rowx['brand_name'];?></option>
<?php
			 }
	} 
?>
          </select>	</td>
  </tr>    
   <tr>
    <td width="30%">Event Name</td>
    <td colspan="2"><input class="form-control" type="text" name="product_name" value="<?php echo $row['product_name'];?>" required  /></td>
  </tr>
  <tr>
    <td width="30%">Event Code</td>
    <td colspan="2"><input class="form-control" type="text" name="pro_type" value="<?php echo $row['product_type'];?>"  /></td>
  </tr>
  <tr>
    <td>Location</td>
    <td colspan="2"><input class="form-control" type="text" name="product_location" value="<?php echo $row['product_location'];?>"  /></td>
  </tr>
  <tr>
    <td>Schedule </td>
    <td colspan="2"><input class="form-control" type="text" name="exidate" value="<?php echo $row['exidate'];?>" required /></td>
  </tr>
  <tr style="display:none">
    <td>Schedule to</td>
    <td colspan="2"><input name="exidate1" type="date" class="form-control" id="exidate1" value="<?php echo $row['exidate1'];?>"  /></td>
  </tr>
  <tr style="display:none;">
    <td width="30%">Event Fees for 1 Participation</td>
    <td colspan="2"><input class="form-control" type="number" name="product_price" value="<?php echo $row['product_price'];?>"   /></td>
  </tr>
	<tr style="display:none;">
    <td width="30%">Event Fees for 2 Participations </td>
    <td width="70%"><div id="t_product_prise1">
		<input class="form-control" type="text" name="product_bulk_price" size="20" value="<?php echo $row['product_bulk_price'];?>"  /></div></td>
  	</tr>
  	<!--<tr>
    <td width="30%">Event Bulk Quantity </td>
    <td width="70%"><div id="t_product_prise0">
		<input class="form-control" type="text" name="product_bulk" size="20" value="<?php echo $row['product_bulk_qty'];?>" /></div></td>
  	</tr>
	<tr>
    <td width="30%">Event Sizes </td>
    <td width="70%"><div id="t_product_prise2">
		<input class="form-control" type="text" name="product_size" size="20" value="<?php echo $row['product_size'];?>" /></div></td>
  	</tr>-->
	<tr>
    <td width="30%">Brief Description </td>
    <td width="70%"><textarea id="editor1" class="form-control" name="product_features" rows="10" cols="32"><?php echo $row['product_features'];?></textarea>
            <br />
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
		line break. </font>    </td>
	</tr>
  <tr>
    <td width="30%">Terms &amp; Conditions</td>
    <td><textarea id="editor2" name="product_details" class="form-control" rows="10" cols="32"><?php echo $row['product_details'];?></textarea>	<br />
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
		line break. </font>    </td>
  </tr>
   <tr style="display:none;">
   <td width="30%">Event Type</td>
   <td>
   <b>PAST&nbsp;</b><input name="exitype" type="radio" value="PAST" <?php if ($row['exitype']=='PAST') { ?>checked="checked"<?php }?> />&nbsp;
   <b>CURRENT&nbsp;</b><input name="exitype" type="radio" value="CURRENT" <?php if ($row['exitype']=='CURRENT') { ?>checked="checked"<?php }?> />&nbsp;
   <b>UPCOMING&nbsp;</b><input name="exitype" type="radio" value="UPCOMING" <?php if ($row['exitype']=='UPCOMING') { ?>checked="checked"<?php }?> />&nbsp;   </td>
   </tr>
   <tr style="display:none;">
   <td width="30%">Content Type</td>
   <td>
   <b>PHOTOGRAPH&nbsp;</b><input name="exi_photo_type" type="radio" value="PHOTOGRAPH" <?php if ($row['exi_photo_type']=='PHOTOGRAPH') { ?>checked="checked"<?php }?> />&nbsp;
   <b>PAINTING&nbsp;</b><input name="exi_photo_type" type="radio" value="PAINTING" <?php if ($row['exi_photo_type']=='PAINTING') { ?>checked="checked"<?php }?> />&nbsp;   </tr>
<!--  <tr>
    <td width="22%">Latest Event</td>
    <td colspan="2">
		<select name="product_new">
		<?php //if ($row['new']=='yes') { ?>
			<option value="yes" selected="selected">YES</option>
			<option value="no">NO</option>
		<?php //}else{ ?>
			<option value="yes">YES</option>
			<option value="no" selected="selected">NO</option>
		<?php //} ?>
		</select>	</td>
  </tr>
  <tr>
    <td width="22%">Sold Out</td>
    <td colspan="2">
		<select name="product_sell_off">
		<?php //if ($row['sell_off']=='yes')		{ ?>
			<option value="yes" selected="selected">YES</option>
			<option value="no">NO</option>
		<?php //}else{ ?>
			<option value="yes">YES</option>
			<option value="no" selected="selected">NO</option>
		<?php //} ?>
		</select>	</td>
  </tr>
   <tr>
    <td width="22%">Featured Event</td>
    <td colspan="2">
		<select name="product_best_seller">
		<?php //if ($row['best_seller']=='yes')		{ ?>
			<option value="yes" selected="selected">YES</option>
			<option value="no">NO</option>
		<?php //}else{ ?>
			<option value="yes">YES</option>
			<option value="no" selected="selected">NO</option>
		<?php //} ?>
		</select>	</td>
  </tr>-->
   <tr style="display:none;">
    <td width="30%">Status</td>
    <td colspan="2">
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
  <!--
  <tr>
    <td width="30%">Picture</td>
    <td width="70%"><img src="pic_upload/<?php echo $row['pro_pic']; ?>" width="100px" height="100px"><input class="form-control" type="file" name="pro_pic" /></td>  
  </tr>
  -->
  <tr style="display:none;">
    <td width="30%">Video Link</td>
    <td colspan="2">
	<input class="form-control" type="text" name="product_video" value="<?php echo $row['product_video'];?>" size="20"  /></td>  
  </tr>  
  <tr>
    <td width="30%">Event Picture</td>
    <td colspan="2"><img src="pic_upload/<?php echo $row['model_pro_pic']; ?>" width="100px" height="100px"><input class="form-control" type="file" name="model_pro_pic"  /></td>  
  </tr>  
  <tr style="display:none;">
    <td width="30%">Payment QR for 1 Participation</td>
    <td colspan="2"><img src="pic_upload/<?php echo $row['model_pro_pic1']; ?>" width="100px" height="100px"><input class="form-control" type="file" name="model_pro_pic1"  /></td>  
  </tr>  
  <tr style="display:none;">
    <td width="30%">Payment QR for 2 Participations</td>
    <td colspan="2"><img src="pic_upload/<?php echo $row['model_pro_pic2']; ?>" width="100px" height="100px"><input class="form-control" type="file" name="model_pro_pic2"  /></td>  
  </tr>  
  <tr style="display:none;">
    <td width="30%">Event Pic 4</td>
    <td colspan="2"><img src="pic_upload/<?php echo $row['model_pro_pic3']; ?>" width="100px" height="100px"><input class="form-control" type="file" name="model_pro_pic3" /></td>  
  </tr>  
  <tr style="display:none;">
    <td width="30%">Event Pic 5</td>
    <td colspan="2"><img src="pic_upload/<?php echo $row['model_pro_pic4']; ?>" width="100px" height="100px"><input class="form-control" type="file" name="model_pro_pic4" /></td>  
  </tr>  
  <tr>
    <td width="30%">Event PDF</td>
    <td colspan="2"><?php if($row['product_pdf']<>""){ ?><a target="_blank" href="pic_upload/<?php echo $row['product_pdf']; ?>" />View Catelogue</a><?php } ?>
    <input class="form-control" type="file" name="model_pro_pdf" /></td>  
  </tr>  
  
  <tr>
    <td width="30%">&nbsp;</td>
    <td colspan="2"><input class="form-control btn-success" type="submit" name="Submit" value="Update" /></td>
  </tr>
</tbody>
</table>
</form>
<script>

/*var a_fields = {
	'pro_name'				: {'l':'PRODUCT NAME','r':true,'t':'t_pro_name'},
	'pro_type' 			    : {'l': 'PRODUCT TYPE','r': true,'t': 't_pro_type'},
	'product_prise'		        : {'l': 'PRODUCT PRICE','r': true,'t': 't_product_prise'},
	'product_details'			    : {'l':'PRODUCT DETAILS','r':true,'t':'t_product_details'}
}

var v = new validator('add_pro_dtls_frm', a_fields);*/

</script>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script type="text/javascript" >
	// Replace the <textarea id="editor1"> with a CKEditor
	// instance, using default configuration.
	CKEDITOR.replace( 'editor1' );
	CKEDITOR.replace( 'editor2' );
</script>  
