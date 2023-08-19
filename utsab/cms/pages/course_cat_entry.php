<?php
	if(isset($_POST['Submit']))
	{
		$cat_name =$_POST['cat_name'];
		$cat_description =$_POST['cat_description'];		
		 			
		$sql="INSERT INTO course_cat(`course_cat_name`,`course_cat_status`,`course_cat_details`)VALUES ('$cat_name','ACTIVE','$cat_description')";
			mysqli_query($dbhandle,$sql);
			echo "<script>";
				echo "window.location='home.php?op=course_cat_view'";
			echo "</script>";
			
		
	}else{
?>
<form class="form-horizontal"name="add_cat_frm" action="#" method="post" onSubmit="return v.exec()">
<table id="data_table" class="display" width="75%" border="0" align="center">
<thead>
  <tr>
    <td colspan="2">Course Category  Entry</td>
  </tr>
</thead>
<tbody>
  <tr>
    <td width="30%">Course Category Name</td>
    <td width="70%">
		<div id="t_cat_name"><input class="form-control" type="text" name="cat_name" /></div>	</td>
  </tr>
  <tr>
    <td width="30%">Course Category Description</td>
    <td width="70%"><div id="t_cat_description">
	<textarea class="form-control" name="cat_description" rows="5" cols="20"></textarea></div>

	<!-- <input class="form-control" type="text" name="cat_description" /></div></td>-->  </tr>      
  <tr>
    <td width="30%">&nbsp;</td>
    <td width="70%">
		<input class="form-control btn-success" type="submit" name="Submit" value="Submit" />	</td>
  </tr>
</tbody>
</table>
</form>
<script>

var a_fields = {
	'cat_name'				: {'l':'CATEGORY NAME','r':true,'t':'t_cat_name'}
}

var v = new validator('add_cat_frm', a_fields);

</script>
<?php }?>