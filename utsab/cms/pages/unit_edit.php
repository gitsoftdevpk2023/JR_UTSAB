<?php
$id=$_REQUEST['id'];
  $sql="select * from  unit_master where unit_id='$id'";
  $res=mysqli_query($dbhandle,$sql);
  $row=mysqli_fetch_array($res);
  
  if(isset($_POST['Submit']))
  {
      $course_name =$_POST['course_name'];
    $course_duraction =$_POST['course_duraction'];
    $status =$_POST['status'];
    
    $sql="UPDATE `unit_master` SET `unit_name` =  '$course_name',`unit_sign` =  '$course_duraction',`unit_status` =  '$status' where unit_id='$id'";
    mysqli_query($dbhandle,$sql);
    //echo $sql;
    echo "<script>";
      echo "window.location='home.php?op=unit_view'";
    echo "</script>";
  }
?>
<div class="card">
                <div class="card-header">
                  <strong>Edit Unit Info.</strong>
                </div>
                <div class="card-body">
                  <form method="post" enctype="multipart/form-data" name="add_pro_dtls_frm" onSubmit="return validateForm()" class="form-horizontal">
                    
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label" for="text-input"> Unit Name <font color="red"> *</font></label>
                      <div class="col-md-9">
                        <input type="text" id="course_name" name="course_name" class="form-control" placeholder="Enter Name" value="<?php echo $row['unit_name'];?>">
                         <p> <span id="txtHint"> </span></p>
                      </div>     
                     </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label" for="textarea-input"> Unit Sign </label>
                      <div class="col-md-9">
                        <input type="text" id="course_duraction" name="course_duraction" class="form-control" placeholder="Enter Code" value="<?php echo $row['unit_sign'];?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label" for="textarea-input"> Status</label>
                      <div class="col-md-9">
                        <select name="status">
                          <?php if ($row['unit_status']=='ACTIVE')
                          { ?>
                            <option value="ACTIVE" selected="selected">ACTIVE</option>
                            <option value="INACTIVE">INACTIVE</option>
                          <?php }else{ ?>
                            <option value="ACTIVE">ACTIVE</option>
                            <option value="INACTIVE" selected="selected">INACTIVE</option>
                          <?php } ?>
                        </select>
                      </div>
                    </div>
                    <div class="card-footer">
                  <input class="form-control btn-success" type="submit" name = "Submit" value="Submit">
                </div>
                    </form>
                </div>
                
</div>   
<script>
function checkathrname(nm){
  $("#athr_name").load("pages/add_author_script.php?athrname="+encodeURI(nm));
}
</script>
<script>
  function validateForm() {
       var x = document.forms["edit_category_frm"]["bank_name"].value;
       if (x == null || x == "") {
       alert("Please Enter Bank Name");
       
       return false;
    }
    var x = document.forms["edit_category_frm"]["account_number"].value;
           if (x == null || x == "") {
           alert("Please Enter Account Number");
           
           return false;
    }
  
    }
</script>   
