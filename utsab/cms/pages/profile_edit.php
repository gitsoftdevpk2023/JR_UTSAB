<?php
	
	$sql="select * from  profile_master";
	$res=mysqli_query($dbhandle,$sql);
	$row=mysqli_fetch_assoc($res);
	
	if(isset($_POST['Submit']))
	{
	    $comp_name =$_POST['comp_name'];
		$comp_slogan =$_POST['comp_slogan'];
		$comp_video =$_POST['comp_video'];
		$comp_app_bgcolor=$_REQUEST['comp_app_bgcolor'];
//----------------------- counters
 	    $counter_1 =$_POST['counter_1'];
 	    $counter_2 =$_POST['counter_2'];
 	    $counter_3 =$_POST['counter_3'];
 	    $counter_4 =$_POST['counter_4'];
		
		$status =$_POST['status'];
		
		$sql="UPDATE `profile_master` SET `comp_name` =  '$comp_name',`comp_slogan` =  '$comp_slogan',`comp_app_bgcolor` =  '$comp_app_bgcolor',`comp_video` =  '$comp_video',`comp_counter1` = '$counter_1',`comp_counter2` = '$counter_2',`comp_counter3` = '$counter_3',`comp_counter4` = '$counter_4'";
		mysqli_query($dbhandle,$sql);
		
		 $mname =$_FILES["model_pro_pic"]["name"];
		 if($mname <> ''){
			 $path = "pro_upload/".$_FILES["model_pro_pic"]["name"];
			 $upload = move_uploaded_file($_FILES["model_pro_pic"]["tmp_name"],$path) or die("Upload Error1");
			 $sql="UPDATE `profile_master` SET `comp_logo` = '$mname'";
	 		mysqli_query($dbhandle,$sql);
		 }
		 $mname1 =$_FILES["model_pro_pic1"]["name"];
		 if($mname1 <> ''){
			 $path = "pro_upload/".$_FILES["model_pro_pic1"]["name"];
			 $upload = move_uploaded_file($_FILES["model_pro_pic1"]["tmp_name"],$path) or die("Upload Error2");
			 $sql="UPDATE `profile_master` SET `comp_favicon` = '$mname1'";
	 		mysqli_query($dbhandle,$sql);
		 }
		//echo $sql;
		echo "<script>";
			echo "window.location='home.php?op=profile_edit'";
		echo "</script>";
	}
?>
<style type="text/css">
<!--
.style3 {
	font-weight: bold;
	font-family: Calibri;
}
.style4 {font-weight: bold}
-->
</style>

<form class="form-horizontal"name="edit_category_frm" action="#" enctype="multipart/form-data" method="post" accept-charset="utf-8">

<table id="data_table" class="display" width="75%" border="0" align="center">
<thead>
  <tr style="background-color:#99CCFF">
    <td colspan="2"><span class="style3">Edit Profile Info.</span></td>
  </tr>
</thead>
<tbody>
    <tr>
    <td width="30%"><span class="style3"> Company Name </span></td>
    <td width="70%"><input name="comp_name" type="text" class="form-control  style4" value="<?php echo $row['comp_name'];?>"  /></td>
  </tr>
   <tr>
    <td width="30%"><span class="style3">Company Slogan </span></td>
    <td width="70%"><textarea name="comp_slogan" class="form-control style3"><?php echo htmlspecialchars($row['comp_slogan'], ENT_NOQUOTES, 'UTF-8');?></textarea></td>
  </tr>
   <tr>
    <td width="30%"><span class="style3">Logo</span></td>
    <td colspan="2"><span class="style3"><img src="pro_upload/<?php echo $row['comp_logo']; ?>" width="100px" height="100px">
          <input class="form-control" type="file" name="model_pro_pic" />    
        </span></td>  
  </tr>
  <tr>
    <td width="30%"><span class="style3">Favicon</span></td>
    <td colspan="2"><span class="style3"><img src="pro_upload/<?php echo $row['comp_favicon']; ?>" width="100px" height="100px">
          <input class="form-control" type="file" name="model_pro_pic1" />    
        </span></td>  
  </tr>
  <tr>
    <td><span class="style3">Company Video </span></td>
    <td><input name="comp_video" type="text" class="form-control style4" value="<?php echo $row['comp_video'];?>"  /></td>
  </tr>
  <tr>
   <td width="30%"><span class="style3">Mobile App BG Color </span></td>
   <td width="70%"><input name="comp_app_bgcolor" type="color" value="<?php echo $row['comp_app_bgcolor'];?>">     </td>
  </tr>
  <tr style="background-color:#99CCFF">
     <td colspan="2"><span class="style3">Stat Counter Details</span></td>
     </tr>
   <tr>
     <td><span class="style3">Over Organized Exhibitions</span></td>
     <td><input name="counter_1" type="number" class="form-control " value="<?php echo $row['comp_counter1'];?>"  /></td>
   </tr>
   <tr>
     <td><span class="style3">Unique Painting Around the World</span></td>
     <td><input name="counter_2" type="number" class="form-control " value="<?php echo $row['comp_counter2'];?>"  /></td>
   </tr>
   <tr>
     <td><span class="style3">Perticipating Members with a Painting</span></td>
     <td><input name="counter_3" type="number" class="form-control " value="<?php echo $row['comp_counter3'];?>"  /></td>
   </tr>
   <tr>
     <td><span class="style3">Unique Visits from Publics</span></td>
     <td><input name="counter_4" type="number" class="form-control " value="<?php echo $row['comp_counter4'];?>"  /></td>
   </tr>
  <tr>
    <td width="30%">&nbsp;</td>
    <td width="70%"><input class="form-control btn-success" type="submit" name="Submit" value="Update" /></td>
  </tr>
</tbody>
</table>
</form>