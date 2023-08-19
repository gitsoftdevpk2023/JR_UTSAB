<?php
  $id=$_REQUEST['id'];
  $sql="select * from  content_master where id='$id'";
  $res=mysqli_query($dbhandle,$sql);
  $row=mysqli_fetch_assoc($res);
  
  if(isset($_POST['Submit']))
  {
    $page =$_POST['page'];
    $title =str_replace("'","",$_POST['title']);
    $details =str_replace("'","",$_POST['details']);
    $url =str_replace("'","",$_POST['url']); 

    $mname =$_FILES["pic"]["name"];
//	echo $mname;
     if($mname <> '')
     {
   //      echo "-2";
		 $path = "content_upload/".$_FILES["pic"]["name"];
	     $image_file_type = strtolower(pathinfo($path,PATHINFO_EXTENSION));
		 if($image_file_type== "gif" || $image_file_type== "jpg" || $image_file_type == "jpeg" || $image_file_type == "png" || $image_file_type == "pdf") 
		 {
	//	   echo "-3";
		   $upload = move_uploaded_file($_FILES["pic"]["tmp_name"],$path) or die("Upload Error");
		   $sql="UPDATE `content_master` SET `pic` = '$mname' where id='$id'";
		  mysqli_query($dbhandle,$sql);
		  }
		 else
		 {
		 $mname ="";
		 }
     }
  // echo "-4"; 
    echo $sql="UPDATE `content_master` SET `page` =  '$page',`title` =  '$title',`details` =  '$details', `url`= '$url' where id='$id'";
    mysqli_query($dbhandle,$sql);
    
    echo "<script>";
      echo "window.location='home.php?op=content_master'";
    echo "</script>";
  }
?>
<form class="form-horizontal" enctype="multipart/form-data" name="edit_category_frm" action="#" method="post">
<table id="data_table" class="display" width="75%" border="0" align="center">
<thead>
  <tr>
    <td colspan="2">Edit Content Info.</td>
  </tr>
</thead>
<tbody>

  <tr>
    <td width="18%">Type</td>
    <td>
      <select class="form-control" name="page" id="page">
          <option value="About Us" <?php if($row['page']=="About Us"){?>selected="selected"<?php } ?>>About Us</option>
      </select>    
    </td>
   </tr>

<tr>
    <td width="30%">Title</td>
    <td width="70%"><input class="form-control" type="text" name="title" value="<?php echo $row['title'];?>" required  /></td>
  </tr>


<tr>
    <td width="30%">Details</td>
    <td width="70%"><!--<input class="form-control" type="text" name="details" value="<?php //echo $row['details'];?>"  />-->
	<textarea id="editor1" name="details" class="form-control" rows="10" cols="32"><?php echo $row['details'];?></textarea></td>
  </tr>


  <tr>
    <td width="30%">Pic</td>
    <td colspan="2"><img src="recruitment_upload/<?php echo $row['pic']; ?>" width="100px" height="100px">
    <input class="form-control" type="file" name="pic" />    </td>  
  </tr>

<tr>
    <td width="30%">Url</td>
    <td colspan="2">
    <input class="form-control" type="text" name="url" value="<?php echo $row['url'];?>" />    </td>  
  </tr>
  

  <tr>
    <td width="30%">&nbsp;</td>
    <td colspan="2">&nbsp;</td>  
  </tr>
  <tr>
    <td width="30%">&nbsp;</td>
    <td colspan="2">&nbsp;</td>  
  </tr>

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
	CKEDITOR.replace( 'editor1' );
</script>  