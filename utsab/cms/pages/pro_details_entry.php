<?php
 	if(isset($_POST['Submit']))
	{
	 $fname ='';
	 
	// $fname =$_FILES["pro_pic"]["name"];
//	 $path = "pic_upload/".$_FILES["pro_pic"]["name"];
	// $upload = move_uploaded_file($_FILES["pro_pic"]["tmp_name"],$path) or die("Upload Error");
	 
	 $mname =$_FILES["model_pro_pic"]["name"];
	 $path = "pic_upload/".$_FILES["model_pro_pic"]["name"];
	 $upload = move_uploaded_file($_FILES["model_pro_pic"]["tmp_name"],$path) or die("Upload Error");
      if($upload)
      {
		$product_prise =$_POST['product_prise'];
		//$product_bulk =$_POST['product_bulk'];	
		$product_bulk_prise =0;//$_POST['product_bulk_prise'];
		//$product_size =$_POST['product_size'];
		$product_features =addslashes($_POST['product_features']);
		$product_details =addslashes($_POST['product_details']);
		$product_video =$_POST['product_video'];
		$product_location =$_POST['product_location'];
		$pro_name =$_POST['pro_name'];
		$pro_type =$_POST['pro_type'];
		$cat_id =$_POST['cat_id'];
		$brand_id =$_POST['brand_id'];
//		$new =$_POST['new'];
//		$sell_off =$_POST['sell_off'];
//		$best_seller =$_POST['best_seller'];
		$exitype =$_POST['exitype'];
		$exi_photo_type =$_POST['exi_photo_type'];
		$exidate =$_POST['exidate'];
		$exidate1 =$_POST['exidate1'];
		
$sql="insert into product_details(`product_name`,`product_type`,`product_category`,`product_price`,`product_bulk_price`,`product_bulk_qty`,`product_size`,`product_details`,`product_features`,`pro_pic`,`model_pro_pic`,`status`,`product_video`,`prod_brand`,`exitype`,`exidate`,`exidate1`,`exi_photo_type`,`product_location`)VALUES ('$pro_name','$pro_type','$cat_id','$product_prise','$product_bulk_prise','0','0','$product_details','$product_features','$fname','$mname','ACTIVE','$product_video','$brand_id','$exitype','$exidate','$exidate1','$exi_photo_type','$product_location')";/*,`new`,`sell_off`,`best_seller`*//*,'$new','$sell_off','$best_seller'*/
			mysqli_query($dbhandle,$sql);
			$last_id = mysqli_insert_id();
			
		/* $mname1 =$_FILES["model_pro_pic1"]["name"];
		 if($mname1 <> ''){
			 $path = "pic_upload/".$_FILES["model_pro_pic1"]["name"];
			 $upload = move_uploaded_file($_FILES["model_pro_pic1"]["tmp_name"],$path) or die("Upload Error");
			 $sql="UPDATE `product_details` SET `model_pro_pic1` = '$mname1' where pro_id='$last_id'";
	 		mysqli_query($dbhandle,$sql);
		 }*/
		 /*$mname2 =$_FILES["model_pro_pic2"]["name"];
		 if($mname2 <> ''){
			 $path = "pic_upload/".$_FILES["model_pro_pic2"]["name"];
			 $upload = move_uploaded_file($_FILES["model_pro_pic2"]["tmp_name"],$path) or die("Upload Error");
			 $sql="UPDATE `product_details` SET `model_pro_pic2` = '$mname2' where pro_id='$last_id'";
	 		mysqli_query($dbhandle,$sql);
		 }
		 $mname3 =$_FILES["model_pro_pic3"]["name"];
		 if($mname3 <> ''){
			 $path = "pic_upload/".$_FILES["model_pro_pic3"]["name"];
			 $upload = move_uploaded_file($_FILES["model_pro_pic3"]["tmp_name"],$path) or die("Upload Error");
			 $sql="UPDATE `product_details` SET `model_pro_pic3` = '$mname3' where pro_id='$last_id'";
	 		mysqli_query($dbhandle,$sql);
		 }
		 $mname4 =$_FILES["model_pro_pic4"]["name"];
		 if($mname4 <> ''){
			 $path = "pic_upload/".$_FILES["model_pro_pic4"]["name"];
			 $upload = move_uploaded_file($_FILES["model_pro_pic4"]["tmp_name"],$path) or die("Upload Error");
			 $sql="UPDATE `product_details` SET `model_pro_pic4` = '$mname4' where pro_id='$last_id'";
	 		mysqli_query($dbhandle,$sql);
		 }*/
		 $mnamep =$_FILES["model_pro_pdf"]["name"];
		 if($mnamep <> '')
		 {
			 $path = "pic_upload/".$_FILES["model_pro_pdf"]["name"];
			 $upload = move_uploaded_file($_FILES["model_pro_pdf"]["tmp_name"],$path) or die("Upload Error");
			 $sql="UPDATE `product_details` SET `product_pdf` = '$mnamep' where pro_id='$last_id'";
	 		mysqli_query($dbhandle,$sql);
		 }
	//	echo $sql;
		echo "<script>window.location.href = 'home.php?op=pro_dtls_view&msg=success'</script>";
     }
    else
    {
   echo "<script>window.location.href = 'home.php?op=pro_dtls_view&msg=error'</script>";
     }
			
		
	}else{
?>
<!-- onSubmit="return v.exec()"-->
<form class="form-horizontal" action="#" method="post" enctype="multipart/form-data" name="add_pro_dtls_frm">
<table id="data_table" class="display" width="75%" border="0" align="center">
<thead>
  <tr>
    <td colspan="2">Event Details Entry</td>
  </tr>
</thead>
<tbody>
  <tr>
    <td width="30%">Event Name </td>
    <td><div id="t_pro_name">
		<input class="form-control" type="text" name="pro_name" required /></div>	</td>
  </tr>
  <tr>
    <td width="30%">Event Code </td>
    <td><div id="t_pro_type">
		<input class="form-control" type="text" name="pro_type" required  /></div>	</td>
  </tr>
  <tr style="display:none;">
    <td width="30%">Category Name</td>
    <td>
		<select name="cat_id"id="cat_id" class="form-control" >
        <!--<option selected value="sl">----Choose one-----</option>-->
<?php
	 $sql="select DISTINCT * from `product_category` where status='ACTIVE'";
	 $res=mysqli_query($dbhandle,$sql);
	 $cnt=mysqli_num_rows($res);
	if($cnt>0)
	{
		  while($row=mysqli_fetch_assoc($res))
			{
			   
?>
                        	<option value="<?php echo $row['sl']?> "><?php echo $row['category_name']?></option>
<?php }} ?>
          </select>          </td>
  </tr>
  <tr style="display:none;">
    <td width="30%">Brand Name</td>
    <td>
		<select name="brand_id"id="brand_id"  >
        <option selected value="0">----Select Brand-----</option>
<?php
	 $sql="select DISTINCT * from `brand_master` where status='ACTIVE'";
	 $res=mysqli_query($dbhandle,$sql);
	 $cnt=mysqli_num_rows($res);
	if($cnt>0)
	{
		  while($row=mysqli_fetch_assoc($res))
			{
?>
                        	<option value="<?php echo $row['id']?> "><?php echo $row['brand_name']?></option>
<?php }} ?>
          </select>	</td>
  </tr> 
  <tr>
    <td>Location</td>
    <td colspan="2"><input class="form-control" type="text" name="product_location" value=""  /></td>
  </tr> 
   <tr>
     <td>Schedule </td>
     <td><input class="form-control" type="text" name="exidate" /></td>
   </tr>
   <tr style="display:none">
     <td>Schedule to</td>
     <td><input class="form-control" type="date" name="exidate1" id="exidate1" /></td>
   </tr>
   <tr style="display:none;">
    <td width="30%">Event Fees for 1 Participation</td>
    <td><div id="t_product_prise"><input class="form-control" type="number" name="product_prise"  /></div></td>
  </tr>
<!-- <tr>
    <td width="30%">Event Bulk Quantity </td>
    <td width="70%"><div id="t_product_prise0">
		<input class="form-control" type="text" name="product_bulk" size="20" /></div></td>
  </tr>
	<tr>
    <td width="30%">Event Sizes </td>
    <td width="70%"><div id="t_product_prise2">
		<input class="form-control" type="text" name="product_size" size="20" /></div></td>
  </tr>-->
  	<tr style="display:none;">
    <td width="30%">Event Fees for 2 Participations </td>
    <td width="70%"><div id="t_product_prise1">
		<input class="form-control" type="number" name="product_bulk_prise"  /></div></td>
  </tr>
	<tr>
    <td width="30%">Brief Description </td>
    <td><textarea id="editor2" name="product_features" class="form-control" rows="10" cols="32"></textarea>      
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
		line break. </font>
    </td>
   </tr>
  <tr>
    <td width="30%">Terms &amp; Conditions</td>
    <td><textarea id="editor1" name="product_details" class="form-control" rows="10" cols="32"></textarea>      
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
		line break. </font>
   </td>
   </tr>
   <tr style="display:none;">
   <td width="30%">Event Type</td>
   <td>
   <!--<b>PAST&nbsp;</b><input name="exitype" type="radio" value="PAST" checked="checked" />&nbsp;
   <b>CURRENT&nbsp;</b><input name="exitype" type="radio" value="CURRENT" />&nbsp;-->
   <b>UPCOMING&nbsp;</b><input name="exitype" type="radio" value="UPCOMING" checked="checked" />&nbsp;   </td>
   </tr>
   <!--<tr>
    <td width="18%">Latest Event</td>
    <td>
      <select name="new">
	     <option value="yes">YES</option>
		 <option value="no">NO</option>
      </select>    </td>
   </tr>
   <tr>
    <td width="18%">Sold Out</td>
    <td>
      <select name="sell_off">
	     <option value="yes">YES</option>
		 <option value="no">NO</option>
      </select>    </td>
   </tr>
   <tr>
    <td width="18%">Featured Event</td>
    <td>
      <select name="best_seller">
	     <option value="yes">YES</option>
		 <option value="no">NO</option>
      </select>    </td>
   </tr>-->
   
<!--    <tr>
    <td width="30%">Event Pic</td>
    <td width="70%"><input class="form-control" type="file" name="pro_pic" />
    </td>
   </tr>
   -->
   <tr style="display:none;">
     <td>Content Type</td>
     <td><b>PHOTOGRAPH&nbsp;</b>
       <input name="exi_photo_type" type="radio" value="PHOTOGRAPH" checked="checked" />
       &nbsp; <b>PAINTING&nbsp;</b>
       <input name="exi_photo_type" type="radio" value="PAINTING" />
       &nbsp; </td>
   </tr>
   <tr style="display:none;">
    <td width="30%">Video Link</td>
    <td>
	<input class="form-control" type="text" name="product_video" value="" width="90%"  /></td>  
  </tr>
   <tr>
    <td width="30%">Event Picture</td>
    <td><input class="form-control" type="file" name="model_pro_pic" required />    </td>
   </tr>
   <tr style="display:none;">
    <td width="30%">Payment QR for 1 Participation</td>
    <td><input class="form-control" type="file" name="model_pro_pic1"  />    </td>
   </tr>
   <tr style="display:none;">
    <td width="30%">Payment QR for 2 Participations</td>
    <td><input class="form-control" type="file" name="model_pro_pic2"  />    </td>
   </tr>
   <tr style="display:none;">
    <td width="30%">Event Pic 4</td>
    <td><input class="form-control" type="file" name="model_pro_pic3" />    </td>
   </tr>
   <tr style="display:none;">
    <td width="30%">Event Pic 5</td>
    <td><input class="form-control" type="file" name="model_pro_pic4" />    </td>
   </tr>
    <tr>
    <td width="30%">Event PDF</td>
    <td><input class="form-control" type="file" name="model_pro_pdf" />    </td>
   </tr>
  
  <tr>
    <td width="30%">&nbsp;</td>
    <td>
		<input class="form-control btn-success" type="submit" name="Submit" value="Submit" />	</td>
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

<?php }?>