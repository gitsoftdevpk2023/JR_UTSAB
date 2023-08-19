<?php
  if(isset($_POST['Submit']))
  {
    $page =$_POST['page'];
    $title =str_replace("'","",$_POST['title']);
    $details =str_replace("'","",$_POST['details']);
    $url =str_replace("'","",$_POST['url']); 

     $mname1 =$_FILES["pic"]["name"];
     if($mname1 <> '')
     {
		   $path = "content_upload/".$_FILES["pic"]["name"];
		   $image_file_type = strtolower(pathinfo($path,PATHINFO_EXTENSION));
		 if($image_file_type== "gif" || $image_file_type== "jpg" || $image_file_type == "jpeg" || $image_file_type == "png" || $image_file_type == "pdf") 
		 {
		   $upload = move_uploaded_file($_FILES["pic"]["tmp_name"],$path) or die("Upload Error");
		 }
		 else
		 {
		 $mname1 ="";
		 }
     }  
        
      
   $sql="INSERT INTO  content_master(`page`,`title`,`details`,`url`,`status`,`pic`)VALUES ('$page','$title','$details','$url','ACTIVE','$mname1')";
      mysqli_query($dbhandle,$sql);
      echo "<script>";
        echo "window.location='home.php?op=content_master'";
      echo "</script>";
      
  }else{
?>
<form class="form-horizontal" enctype="multipart/form-data" name="add_course_frm" action="#" method="post" onSubmit="return v.exec()">
<table id="data_table" class="display" width="75%" border="0" align="center">
<thead>
  <tr>
    <td colspan="2"> CONTENT ENTRY </td>
  </tr>
</thead>
<tbody>

	<tr>
    <td width="18%">Page</td>
    <td>
      <select class="form-control" name="page" id="page">
          <option value="About Us">About Us</option>
      </select>    
    </td>
   </tr>

  <tr>
    <td width="30%"> Title </td>
    <td width="70%">
      <div id="title">
        <input class="form-control" type="text" name="title" required />
      </div>
    </td>
  </tr>

  <tr>
    <td width="30%"> Details </td>
    <td width="70%"><div id="t_details">
      <textarea id="editor1" class="form-control" name="details" rows="10" cols="32"></textarea>
  </div>
  </tr>
   <tr>
    <td width="18%"> Pic </td>
    <td><input class="form-control" type="file" name="pic" />    </td>
   </tr>
   <tr>
    <td width="18%">Url</td>
    <td>
      <input class="form-control" type="text" name="url">    
    </td>
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
  'page'       : {'l':'CATEGORY NAME','r':true,'t':'t_page'},
  'title'           : {'l': 'CATEGORY TYPE','r': true,'t': 't_title'}
  'course_desc'       : {'1':'CATEGORY DESCRIPTION','r': true,'t':'t_details'}
}

var v = new validator('add_course_frm', a_fields);

</script>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script type="text/javascript" >
	// Replace the <textarea id="editor1"> with a CKEditor
	// instance, using default configuration.
	CKEDITOR.replace( 'editor1' );
</script>  
<?php }?>