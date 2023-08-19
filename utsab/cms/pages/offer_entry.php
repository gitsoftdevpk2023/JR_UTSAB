<?php
	if(isset($_POST['Submit']))
	{
		$cat_name =$_POST['cat_name'];
		$cat_price =$_POST['cat_price'];
		$cat_price1 =$_POST['cat_price1'];
		$cat_description =$_POST['cat_description'];		

/*		 $mname1 =$_FILES["model_pro_pic"]["name"];
		 if($mname1 <> ''){
			 $path = "offer_upload/".$_FILES["model_pro_pic"]["name"];
			 $upload = move_uploaded_file($_FILES["model_pro_pic"]["tmp_name"],$path) or die("Upload Error");
		//	 $sql="UPDATE `offer_master` SET `offer_logo` = '$mname1' where id='$last_id'";
	 	//	mysqli_query($dbhandle,$sql);
		 }*/

		$sql="INSERT INTO  offer_master(`offer_name`, `offer_price`,`offer_price1`, `offer_details`,`offer_status`,`offer_pic`)VALUES ('$cat_name' ,'$cat_price' ,'$cat_price1', '$cat_description','ACTIVE','')";

			mysqli_query($dbhandle,$sql);
			$last_id = mysqli_insert_id();

			

			echo "<script>";

				echo "window.location='home.php?op=offer_view'";

			echo "</script>";

			

	}else{

?>

<form class="form-horizontal" name="add_cat_frm" action="#" method="post" enctype="multipart/form-data" onSubmit="return v.exec()">

<table id="data_table" class="display" width="75%" border="0" align="center">

<thead>

  <tr>

    <td colspan="2">Price Entry</td>
  </tr>
</thead>

<tbody>

  <tr>

    <td width="30%">Package Name</td>

    <td width="70%">

		<div id="t_cat_name"><input class="form-control" type="text" name="cat_name" /></div></td>
  </tr>

  <tr>
    <td> Price Range</td>
    <td><input class="form-control" type="number" name="cat_price" /> 
    to 
      <input class="form-control" type="number" name="cat_price1" /></td>
  </tr>
  <tr>
    <td width="30%">Details </td>
    <td width="70%">
    <div id="t_cat_description">
	<textarea name="cat_description" id="desc" rows="5" cols="20" class="form-control"></textarea></div>    </td>
  </tr>

   

<!--   <tr>

    <td width="30%">Picture</td>

    <td><input class="form-control" type="file" name="model_pro_pic" />    </td>

   </tr>-->

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

	'cat_name'				: {'l':'CATEGORY NAME','r':true,'t':'t_cat_name'},

	'cat_type' 			    : {'l': 'CATEGORY TYPE','r': true,'t': 't_cat_type'}

	'cat_desc'				: {'1':'CATEGORY DESCRIPTION','r': true,'t':'t_cat_description'}

}



var v = new validator('add_cat_frm', a_fields);



</script>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script type="text/javascript" >
	// Replace the <textarea id="editor1"> with a CKEditor
	// instance, using default configuration.
	CKEDITOR.replace( 'desc' );
</script>  

<?php }?>