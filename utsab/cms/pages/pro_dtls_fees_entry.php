<?php
$eid=$_GET['eid'];

	if(isset($_POST['Submit']))
	{
		$cat_name =$_POST['cat_name'];
	//	$cat_name2 =$_POST['cat_name2'];
		$cat_description =$_POST['cat_description'];		
		$cat_rate =$_POST['cat_rate'];
		$eid =$_POST['eid'];

		$sql="INSERT INTO  event_fees_master(`fees_name`,`fees_desc`,`fees_event`,`fees_rate`)VALUES ('$cat_name','$cat_description','$eid','$cat_rate')";
		mysqli_query($dbhandle,$sql);
		//	$last_id = mysqli_insert_id();

			echo "<script>";
				echo "window.location='home.php?op=pro_dtls_fees&eid=$eid'";
			echo "</script>";
	}else{

?>

<form class="form-horizontal" name="add_cat_frm" action="#" method="post" enctype="multipart/form-data" onSubmit="return v.exec()">

<table id="data_table" class="display" width="75%" border="0" align="center">

<thead>
  <tr>
    <td colspan="2">Event Fees Entry</td>
  </tr>
</thead>

<tbody>

  <tr>
    <td width="30%">Name</td>
    <td width="70%">
		<div id="t_cat_name"><input class="form-control" type="text" name="cat_name" /></div>
        <input name="eid" type="hidden" value="<?php echo $eid; ?>" />
    </td>
  </tr>

  <tr>
    <td>Rate</td>
    <td><input class="form-control" type="number" name="cat_rate" />  
  </tr>
  <tr>
    <td width="30%">Details </td>
    <td width="70%"><div id="t_cat_description">
	<textarea name="cat_description" rows="5" cols="20" class="form-control"></textarea></div>  
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

<?php }?>