<?php
	$id=base64_decode($_REQUEST['id']);
	$sql="select * from  course_master where sl='$id'";
	$res=mysqli_query($dbhandle,$sql);
	$row=mysqli_fetch_assoc($res);
	
	if(isset($_POST['Submit']))
	{
	    $course_name =$_POST['course_name'];
		$course_type =$_POST['mcourse_id'];
		$course_description =$_POST['course_description'];
		
		$sql="UPDATE `course_master` SET `course_name` =  '$course_name',`course_type` =  '$course_type',`course_desc` =  '$course_description' where sl='$id'";
		mysqli_query($dbhandle,$sql);
		//echo $sql;
		 $mname =$_FILES["model_pro_pic"]["name"];
		 if($mname <> ''){
			 $path = "course_upload/".$_FILES["model_pro_pic"]["name"];
			 $upload = move_uploaded_file($_FILES["model_pro_pic"]["tmp_name"],$path) or die("Upload Error");
			 $sql="UPDATE `course_master` SET `course_pic` = '$mname' where sl='$id'";
	 		mysqli_query($dbhandle,$sql);
		 }		
		 $mname1 =$_FILES["model_pro_pic1"]["name"];
		 if($mname1 <> ''){
			 $path = "course_upload/".$_FILES["model_pro_pic1"]["name"];
			 $upload = move_uploaded_file($_FILES["model_pro_pic1"]["tmp_name"],$path) or die("Upload Error");
			 $sql="UPDATE `course_master` SET `course_broc` = '$mname1' where sl='$id'";
	 		mysqli_query($dbhandle,$sql);
		 }		
		 $mname2 =$_FILES["model_pro_pic2"]["name"];
		 if($mname2 <> ''){
			 $path = "course_upload/".$_FILES["model_pro_pic2"]["name"];
			 $upload = move_uploaded_file($_FILES["model_pro_pic2"]["tmp_name"],$path) or die("Upload Error");
			 $sql="UPDATE `course_master` SET `course_doc` = '$mname2' where sl='$id'";
	 		mysqli_query($dbhandle,$sql);
		 }		
		
		echo "<script>";
			echo "window.location='home.php?op=course_view'";
		echo "</script>";
	}
?>
<form class="form-horizontal" enctype="multipart/form-data" name="edit_category_frm" action="#" method="post">
<table id="data_table" class="display" width="75%" border="0" align="center">
<thead>
  <tr>
    <td colspan="2">Edit Course Info.</td>
  </tr>
</thead>
<tbody>
   <tr>
    <td width="30%">Course Categeory</td>
    <td width="70%">
    <select name="mcourse_id"id="mcourse_id" >
    <?php
         $sql="select DISTINCT * from `course_cat` where course_cat_status='ACTIVE'";
         $resx=mysqli_query($dbhandle,$sql);
         $cntx=mysqli_num_rows($resx);
        if($cntx>0)
        {
              while($rowx=mysqli_fetch_assoc($resx))
                {
    ?>
     <option <?php if($rowx['course_cat_id']==$row['course_type']){ ?>selected="selected"<?php } ?> value="<?php echo $rowx['course_cat_id']?> "><?php echo $rowx['course_cat_name']?></option>
	<?php }} ?>
    </select>    </td>
  </tr>
    <tr>
    <td width="30%">Course Name</td>
    <td width="70%"><input class="form-control" type="text" name="course_name" value="<?php echo $row['course_name'];?>"  /></td>
  </tr>
<!--   <tr>
    <td width="30%">Course Type</td>
    <td width="70%"><input class="form-control" type="text" name="course_type" value="<?php //echo $row['course_type'];?>"  /></td>
  </tr>-->
   <tr>
   <td width="30%">Course Description</td>
   <td width="70%"><textarea class="form-control" name="course_description" rows="5" cols="20"><?php echo $row['course_desc'];?></textarea>

  <!-- <input class="form-control" type="text" name="course_description" value="<?php echo $row['course_desc'];?>"  />--></td>

    <!-- <td width="30%">Course Description</td>
    <td width="70%"><div id="t_course_description">
	<input class="form-control" type="text" name="course_description" /></div></td> -->
  </tr>
	<tr>
    <td width="30%">Picture</td>
    <td colspan="2"><img src="course_upload/<?php echo $row['course_pic']; ?>" width="100px" height="100px">
    <input class="form-control" type="file" name="model_pro_pic" />    </td>  
  </tr>
  <tr>
    <td width="30%">Brochure</td>
    <td colspan="2"><!--<img src="main_course_upload/<?php //echo $row['main_course_pic']; ?>" width="100px" height="100px">-->
    <input class="form-control" type="file" name="model_pro_pic1" />    </td>  
  </tr>
  <tr>
    <td width="30%">Other Documents </td>
    <td colspan="2"><!--<img src="main_course_upload/<?php //echo $row['main_course_pic']; ?>" width="100px" height="100px">-->
    <input class="form-control" type="file" name="model_pro_pic2" />    </td>  
  </tr>

  <tr>
    <td width="30%">&nbsp;</td>
    <td width="70%"><input class="form-control btn-success" type="submit" name="Submit" value="Update" /></td>
  </tr>
</tbody>
</table>
</form>