<?php
	if(isset($_POST['Submit']))
	{
		$course_name =$_POST['course_name'];
		$course_type =$_POST['mcourse_id'];
		$course_description =$_POST['course_description'];		
		 $mname1 =$_FILES["model_pro_pic"]["name"];
		 if($mname1 <> ''){
			 $path = "course_upload/".$_FILES["model_pro_pic"]["name"];
			 $upload = move_uploaded_file($_FILES["model_pro_pic"]["tmp_name"],$path) or die("Upload Error");
		 }	
		 $mname2 =$_FILES["model_pro_pic1"]["name"];
		 if($mname2 <> ''){
			 $path = "course_upload/".$_FILES["model_pro_pic1"]["name"];
			 $upload = move_uploaded_file($_FILES["model_pro_pic1"]["tmp_name"],$path) or die("Upload Error");
		 }		
		 $mname3 =$_FILES["model_pro_pic2"]["name"];
		 if($mname3 <> ''){
			 $path = "course_upload/".$_FILES["model_pro_pic2"]["name"];
			 $upload = move_uploaded_file($_FILES["model_pro_pic2"]["tmp_name"],$path) or die("Upload Error");
		 }		
		 	
		echo $sql="INSERT INTO   course_master(`course_name`,`course_type`,`course_desc`,`status`,`course_pic`,`course_broc`,`course_doc`)VALUES ('$course_name','$course_type','$course_description','ACTIVE','$mname1','$mname2','$mname3')";
			mysqli_query($dbhandle,$sql);
			echo "<script>";
				echo "window.location='home.php?op=course_view'";
			echo "</script>";
			
	}else{
?>
<form class="form-horizontal" enctype="multipart/form-data" name="add_course_frm" action="#" method="post" onSubmit="return v.exec()">
<table id="data_table" class="display" width="75%" border="0" align="center">
<thead>
  <tr>
    <td colspan="2"> Course  Entry</td>
  </tr>
</thead>
<tbody>
  <tr>
    <td width="18%"> Course Category </td>
    <td>
		<select class="form-control" name="mcourse_id" id="mcourse_id" >
        <option selected value="">----Choose one-----</option>
<?php
	 $sql="select DISTINCT * from `course_cat` where course_cat_status='ACTIVE'";
	 $res=mysqli_query($dbhandle,$sql);
	 $cnt=mysqli_num_rows($res);
	if($cnt>0)
	{
		  while($row=mysqli_fetch_assoc($res))
			{
			   
?>
             <option value="<?php echo $row['course_cat_id']?> "><?php echo $row['course_cat_name']?></option>
<?php }} ?>
          </select>	</td>
  </tr>
  <tr>
    <td width="30%">Course Name</td>
    <td width="70%">
		<div id="t_course_name"><input class="form-control" type="text" name="course_name" /></div></td>
  </tr>
<!--   <tr>
    <td width="30%">Course Type </td>
    <td width="70%"><div id="t_course_type"><input class="form-control" type="text" name="course_type" /></div></td>
  </tr>-->
  <tr>
    <td width="30%">Course Description</td>
    <td width="70%"><div id="t_course_description">
	<textarea class="form-control" name="course_description" rows="5" cols="20"></textarea></div>

	<!-- <input class="form-control" type="text" name="course_description" /></div></td>-->
  </tr>
   <tr>
    <td width="18%">Picture</td>
    <td><input class="form-control" type="file" name="model_pro_pic" />    </td>
   </tr>
   <tr>
    <td width="18%">Brochure</td>
    <td><input class="form-control" type="file" name="model_pro_pic1" />    </td>
   </tr>
   <tr>
    <td width="18%">Other Documents </td>
    <td><input class="form-control" type="file" name="model_pro_pic2" />    </td>
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
	'course_name'				: {'l':'CATEGORY NAME','r':true,'t':'t_course_name'},
	'course_type' 			    : {'l': 'CATEGORY TYPE','r': true,'t': 't_course_type'}
	'course_desc'				: {'1':'CATEGORY DESCRIPTION','r': true,'t':'t_course_description'}
}

var v = new validator('add_course_frm', a_fields);

</script>
<?php }?>