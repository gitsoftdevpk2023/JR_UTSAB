
<?php
if(isset($_POST['Submit']))
  {
   $fname ='';
   
   $xx=str_replace(":","",str_replace("/","",date("dd/MM/yyyyh:i:sa")));
   $mname ="STAFF".$xx.$_FILES["model_pro_pic"]["name"];
   $path = "pages/pic_upload/"."STAFF".$xx.$_FILES["model_pro_pic"]["name"];
   $upload = move_uploaded_file($_FILES["model_pro_pic"]["tmp_name"],$path) or die("Upload Error");
      if($upload)
      {
    $staff_name =$_POST['staff_name'];
    $staff_address =$_POST['staff_address'];  
    $staff_contact =$_POST['staff_contact'];  
    $staff_email =$_POST['staff_email'];  
    $staff_desig =$_POST['designation'];  
    $staff_comp =$_POST['company'];  
    $staff_cust =$_POST['customer'];  
    $staff_dob =$_POST['staff_dob'];  
    $staff_doj =$_POST['staff_doj'];  
    $staff_basic =$_POST['staff_basic'];  
    $staff_fa =$_POST['staff_fa'];  
	
    $staff_code ="";  
	
	$sql="SELECT company_code FROM `company_master` where company_id='$staff_comp'";
    $res=mysqli_query($dbhandle,$sql);
    $row=mysqli_fetch_assoc($res);
    $c1=$row['company_code'];

	$sql="SELECT client_code FROM `client_master` where client_id='$staff_cust'";
    $res=mysqli_query($dbhandle,$sql);
    $row=mysqli_fetch_assoc($res);
    $c2=$row['client_code'];

	$sql="SELECT MAX(staff_id) AS 'staff_id' FROM `staff_master` where staff_comp='$staff_comp'";
    $res=mysqli_query($dbhandle,$sql);
    $row=mysqli_fetch_assoc($res);
    $a=$row['staff_id']+1;
    $staff_code=$c1.'/'.$c2.'/'.str_pad($a,5,'0',STR_PAD_LEFT);
    
    $sqli="insert into staff_master(`staff_name`,`staff_address`,`staff_photo`,`status`,`staff_contact`,`staff_email`,`staff_desig`,`staff_comp`,`staff_cust`,`staff_code`,`staff_dob`,`staff_doj`,`staff_basic`,`staff_fa`)VALUES ('$staff_name','$staff_address','$mname','ACTIVE','$staff_contact','$staff_email','$staff_desig','$staff_comp','$staff_cust','$staff_code','$staff_dob','$staff_doj','$staff_basic','$staff_fa')";
      mysqli_query($dbhandle,$sqli);
      //echo $sqli;
      echo "<script>window.location.href = 'home.php?op=staff_view&msg=success'</script>";
    }
   else
     {
  echo "<script>window.location.href = 'home.php?op=staff_view&msg=error'</script>";
     }
      
    
  }else{
?>
<div class="card">
                <div class="card-header">
                  <strong>Staff Details Entry</strong>
                </div>
                <div class="card-body">
                  <form class="form-horizontal"method="post" enctype="multipart/form-data" name="add_pro_dtls_frm" onSubmit="return validateForm()" class="form-horizontal">
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label" for="text-input"> Company <font color="red"> *</font></label>
                      <div class="col-md-9">
                        <select name="company" id="company" class="form-control">
                        <!--<option selected value="0">--Select Company--</option>-->
                    <?php
                       $sql="select * from `company_master` where status='ACTIVE'";
                       $res=mysqli_query($dbhandle,$sql);
                       $cnt=mysqli_num_rows($res);
                      if($cnt>0)
                      {
                          while($row=mysqli_fetch_array($res))
                          {      
                    ?>
                    <option value="<?php echo $row['company_id']?>"><?php echo $row['company_name']?></option>
                    <?php }} ?>
                  </select>
                         <p> <span id="txtHint"> </span></p>
                      </div>   
                     </div>                    
                     
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label" for="text-input"> Customer / Site <font color="red"> *</font></label>
                      <div class="col-md-9">
                        <select name="customer" id="customer" class="form-control">
                        <!--<option selected value="0">--Select Customer--</option>-->
                    <?php
                       $sql="select * from `client_master` where status='ACTIVE'";
                       $res=mysqli_query($dbhandle,$sql);
                       $cnt=mysqli_num_rows($res);
                      if($cnt>0)
                      {
                          while($row=mysqli_fetch_array($res))
                          {      
                    ?>
                    <option value="<?php echo $row['client_id']?>"><?php echo $row['client_name']?></option>
                    <?php }} ?>
                  </select>
                         <p> <span id="txtHint"> </span></p>
                      </div>   
                     </div>                    
                     
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label" for="text-input"> Designation / Post <font color="red"> *</font></label>
                      <div class="col-md-9">
                        <select name="designation" id="designation" class="form-control">
                        <!--<option selected value="0">--Select Designation--</option>-->
                    <?php
                       $sql="select * from `desig_master` where status='ACTIVE'";
                       $res=mysqli_query($dbhandle,$sql);
                       $cnt=mysqli_num_rows($res);
                      if($cnt>0)
                      {
                          while($row=mysqli_fetch_array($res))
                          {      
                    ?>
                    <option value="<?php echo $row['desig_id']?>"><?php echo $row['desig_name']?></option>
                    <?php }} ?>
                  </select>
                         <p> <span id="txtHint"> </span></p>
                      </div>   
                     </div>                    
                     
			<!--<div class="form-group row">
              <label class="col-md-3 col-form-label" for="text-input"> Staff Code <font color="red"> *</font></label>
              <div class="col-md-9">
                <?php
                  /*$sql="SELECT MAX(staff_id) AS 'staff_id' FROM `staff_master`";
                  $res=mysqli_query($dbhandle,$sql);
                  $row=mysqli_fetch_assoc($res);
                  $a=$row['staff_id']+1;
                  $id='UMS/'.str_pad($a,5,'0',STR_PAD_LEFT);*/
                ?>
                <input class="form-control" type="text" id="staff_code" name="staff_code" class="form-control" value="<?php //echo $id;?>" readonly>
                 <p> <span id="txtHint"> </span></p>
              </div>		 
             </div>-->              
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label" for="text-input"> Staff Name <font color="red"> *</font></label>
                      <div class="col-md-9">
                        <input type="text" id="staff_name" name="staff_name" class="form-control" placeholder="Enter Name" required>
                         <p> <span id="txtHint"> </span></p>
                      </div>		 
                     </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label" for="textarea-input"> Staff Address</label>
                      <div class="col-md-9">
                        <input type="text" id="staff_address" name="staff_address" class="form-control" placeholder="Enter Staff Address">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label" for="textarea-input"> Staff Contacts</label>
                      <div class="col-md-9">
                        <input type="text" id="staff_contact" name="staff_contact" class="form-control" placeholder="Enter Contacts">
                      </div>
                    </div>
					<div class="form-group row">
                      <label class="col-md-3 col-form-label" for="textarea-input"> Staff Date of Birth</label>
                      <div class="col-md-9">
                        <input type="date" id="staff_dob" name="staff_dob" class="form-control" placeholder="Enter DoB">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label" for="textarea-input"> Staff Date of Joining</label>
                      <div class="col-md-9">
                        <input type="date" id="staff_doj" name="staff_doj" class="form-control" placeholder="Enter DoJ">
                      </div>
                    </div>                    
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label" for="textarea-input"> Staff Email</label>
                      <div class="col-md-9">
                        <input type="text" id="staff_email" name="staff_email" class="form-control" placeholder="Enter Email">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label" for="number-input"> Staff Photo </label>
                      <div class="col-md-9">
                        <input type="file" name="model_pro_pic"  class="form-control" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label" for="textarea-input"> Staff Basic Salary</label>
                      <div class="col-md-9">
                        <input type="number" id="staff_basic" name="staff_basic" class="form-control" placeholder="Enter Basic" min="0">
                      </div>
                    </div>
					<div class="form-group row">
                      <label class="col-md-3 col-form-label" for="textarea-input"> Staff Fixed Allowance</label>
                      <div class="col-md-9">
                        <input type="number" id="staff_fa" name="staff_fa" class="form-control" placeholder="Enter FA" min="0">
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