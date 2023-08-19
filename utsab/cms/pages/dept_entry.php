<?php
if(isset($_POST['Submit']))
  {
    $course_name =$_POST['course_name'];
    $course_duraction =$_POST['course_duraction'];
        
    $sql="INSERT INTO dept_master(`dept_name`,`dept_code`,`dept_status`)VALUES ('$course_name','$course_duraction','ACTIVE')";
      mysqli_query($dbhandle,$sql);
      //echo $sql;
      echo "<script>window.location.href = 'home.php?op=dept_master_view&msg=success'</script>";
    
  }else{
?>
<div class="card">
                <div class="card-header">
                  <strong> Department Entry</strong>                </div>
<div class="card-body">
                  <form "method="post" enctype="multipart/form-data" name="add_pro_dtls_frm" onSubmit="return validateForm()" class="form-horizontal">
                    
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label" for="text-input"> Dept. Name <font color="red"> *</font></label>
                      <div class="col-md-9">
                        <input class="form-control" type="text" id="course_name" name="course_name" placeholder="Enter Name">
                         <p> <span id="txtHint"> </span></p>
                      </div>		 
                     </div>
                    <div class="form-group row">
                    <label class="col-md-3 col-form-label" for="text-input"> Dept. Code <font color="red"> *</font></label>
                      <div class="col-md-9">
                        <input class="form-control" type="text" id="course_duraction" name="course_duraction" placeholder="Enter Code">
                      </div>
                    </div>
                    <div class="card-footer">
                  <input type="submit" name = "Submit" value="Submit" class="btn btn-sm btn-primary">
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
               var x = document.forms["add_sub_frm"]["download_name"].value;
               if (x == null || x == "") {
               alert("Please Enter Download Name");
         
               return false;
        }
        var x = document.forms["add_sub_frm"]["download_file"].value;
               if (x == null || x == "") {
               alert("Please Enter Download Name");
               
               return false;
        }
        
      }
    </script>       
<?php } ?>