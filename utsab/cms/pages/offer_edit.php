<?php
	$id=base64_decode($_REQUEST['id']);
	$sql="select * from  offer_master where offer_id='$id'";
	$res=mysqli_query($dbhandle,$sql);
	$row=mysqli_fetch_assoc($res);
	

	if(isset($_POST['Submit']))
	{
		$cat_name =$_POST['cat_name'];
		$cat_price =$_POST['cat_price'];
		$cat_price1 =$_POST['cat_price1'];
		$cat_description =$_POST['cat_description'];		

		$sql="UPDATE `offer_master` SET `offer_name` =  '$cat_name',`offer_price` =  '$cat_price',`offer_price1` =  '$cat_price1',`offer_details` =  '$cat_description' where offer_id='$id'";
		mysqli_query($dbhandle,$sql);

		

/*		 $mname =$_FILES["model_pro_pic"]["name"];
		 if($mname <> ''){
			 $path = "offer_upload/".$_FILES["model_pro_pic"]["name"];
			 $upload = move_uploaded_file($_FILES["model_pro_pic"]["tmp_name"],$path) or die("Upload Error");
			 $sql="UPDATE `offer_master` SET `offer_pic` = '$mname' where offer_id='$id'";
	 		mysqli_query($dbhandle,$sql);
		 }*/

		

		//echo $sql;

		echo "<script>";

			echo "window.location='home.php?op=offer_view'";

		echo "</script>";

	}

?>

<form class="form-horizontal" name="edit_category_frm" enctype="multipart/form-data" action="#" method="post">

<table id="data_table" class="display" width="75%" border="0" align="center">

<thead>

  <tr>

    <td colspan="2"><strong>Edit Price Info.</strong></td>
  </tr>
</thead>

<tbody>

    <tr>

    <td width="30%">Package Name</td>

    <td width="70%"><input class="form-control" type="text" name="cat_name" value="<?php echo $row['offer_name'];?>"  /></td>
  	</tr>

    <tr>
      <td>Price</td>
      <td>
      <input class="form-control" type="number" name="cat_price" value="<?php echo $row['offer_price'];?>"  />&nbsp;to&nbsp;
      <input class="form-control" type="number" name="cat_price1" value="<?php echo $row['offer_price1'];?>"  />
      </td>
    </tr>
    <tr>
   <td width="30%">Details</td>
   <td width="70%"><textarea name="cat_description" id="desc" class="form-control" rows="5" cols="20"><?php echo $row['offer_details'];?></textarea></td>
   </tr>



<!--	<tr>

    <td width="30%">Picture</td>

    <td colspan="2"><img src="offer_upload/<?php //echo $row['offer_pic']; ?>" width="100px" height="100px">

    <input class="form-control" type="file" name="model_pro_pic" />    </td>  

  </tr>-->

   <tr>

    <td width="30%">&nbsp;</td>

    <td width="70%"><input class="form-control btn-success" type="submit" name="Submit" value="Update" /></td>
  </tr>
</tbody>
</table>

</form>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script type="text/javascript" >
	// Replace the <textarea id="editor1"> with a CKEditor
	// instance, using default configuration.
	CKEDITOR.replace( 'desc' );
</script>  
