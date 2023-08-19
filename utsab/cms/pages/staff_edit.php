<?php
  $id=$_REQUEST['id'];
  $sql="select * from staff_master where staff_id='$id'";
  $res=mysqli_query($dbhandle,$sql);
  $row=mysqli_fetch_array($res);

if(isset($_POST['Submit']))
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
    
    $sql="UPDATE `staff_master` SET `staff_name` =  '$staff_name',`staff_address` =  '$staff_address',`staff_contact` =  '$staff_contact',`staff_email` =  '$staff_email',`staff_desig` =  '$staff_desig',`staff_comp` =  '$staff_comp',`staff_cust` =  '$staff_cust',`staff_dob` =  '$staff_dob',`staff_doj` =  '$staff_doj',`staff_basic` =  '$staff_basic',`staff_fa` =  '$staff_fa' where staff_id=".$id;
    mysqli_query($dbhandle,$sql);

   $xx=str_replace(":","",str_replace("/","",date("dd/MM/yyyy h:i:sa")));
     $mname ="STAFF".$xx.$_FILES["model_pro_pic"]["name"];
     if($_FILES["model_pro_pic"]["name"] <> ''){
       $path = "pages/pic_upload/"."STAFF".$xx.$_FILES["model_pro_pic"]["name"];
       $upload = move_uploaded_file($_FILES["model_pro_pic"]["tmp_name"],$path) or die("Upload Error");
       $sql="UPDATE `staff_master` SET `staff_photo` = '$mname' where staff_id='$id'";
      mysqli_query($dbhandle,$sql);
     }
    //echo $sql;
    echo "<script>";
      echo "window.location='home.php?op=staff_view'";
    echo "</script>";
  }
?>
<div class="card">
                <div class="card-header">
                  <strong>Staff Details Edit</strong>
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
                       $res1=mysqli_query($dbhandle,$sql);
                       $cnt=mysqli_num_rows($res1);
                      if($cnt>0)
                      {
                          while($row1=mysqli_fetch_array($res1))
                          {      
                    ?>
                    <option value="<?php echo $row1['company_id']?>" <?php if($row['staff_comp']==$row1['company_id']){?>selected<?php }?>><?php echo $row1['company_name']?></option>
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
                       $res1=mysqli_query($dbhandle,$sql);
                       $cnt=mysqli_num_rows($res1);
                      if($cnt>0)
                      {
                          while($row1=mysqli_fetch_array($res1))
                          {      
                    ?>
                    <option value="<?php echo $row1['client_id']?>" <?php if($row['staff_cust']==$row1['client_id']){?>selected<?php }?>><?php echo $row1['client_name']?></option>
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
                       $res1=mysqli_query($dbhandle,$sql);
                       $cnt=mysqli_num_rows($res1);
                      if($cnt>0)
                      {
                          while($row1=mysqli_fetch_array($res1))
                          {      
                    ?>
                    <option value="<?php echo $row1['desig_id']?>" <?php if($row['staff_desig']==$row1['desig_id']){?>selected<?php }?>><?php echo $row1['desig_name']?></option>
                    <?php }} ?>
                  </select>
                         <p> <span id="txtHint"> </span></p>
                      </div>   
                     </div>                    
                     
			<div class="form-group row">
              <label class="col-md-3 col-form-label" for="text-input"> Staff Code <font color="red"> *</font></label>
              <div class="col-md-9">
                <input type="text" id="staff_code" name="staff_code" class="form-control" value="<?php echo $row['staff_code'];?>" readonly>
                 <p> <span id="txtHint"> </span></p>
              </div>		 
             </div>                     
                    
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label" for="text-input"> Staff Name <font color="red"> *</font></label>
                      <div class="col-md-9">
                        <input type="text" id="staff_name" name="staff_name" class="form-control" placeholder="Enter Name" value="<?php echo $row['staff_name'];?>" required>
                         <p> <span id="txtHint"> </span></p>
                      </div>		 
                     </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label" for="textarea-input"> Address</label>
                      <div class="col-md-9">
                        <input type="text" id="staff_address" name="staff_address" class="form-control" value="<?php echo $row['staff_address'];?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label" for="number-input"> Staff Photo </label>
                      <div class="col-md-9">
                        <img src="pages/pic_upload/<?php echo $row['staff_photo']; ?>" width="100px" height="100px">
                        <input type="file" name="model_pro_pic"  class="form-control">
                      </div>
                    </div>
					<div class="form-group row">
                      <label class="col-md-3 col-form-label" for="textarea-input"> Contact</label>
                      <div class="col-md-9">
                        <input type="text" id="staff_contact" name="staff_contact" class="form-control" value="<?php echo $row['staff_contact'];?>">
                      </div>
                    </div>
					<div class="form-group row">
                      <label class="col-md-3 col-form-label" for="textarea-input"> Staff Date of Birth</label>
                      <div class="col-md-9">
                        <input type="date" id="staff_dob" name="staff_dob" class="form-control" value="<?php echo $row['staff_dob'];?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label" for="textarea-input"> Staff Date of Joining</label>
                      <div class="col-md-9">
                        <input type="date" id="staff_doj" name="staff_doj" class="form-control" value="<?php echo $row['staff_doj'];?>">
                      </div>
                    </div>                    
					<div class="form-group row">
                      <label class="col-md-3 col-form-label" for="textarea-input"> Email</label>
                      <div class="col-md-9">
                        <input type="text" id="staff_email" name="staff_email" class="form-control"  value="<?php echo $row['staff_email'];?>">
                      </div>
                    </div>   
					<div class="form-group row">
                      <label class="col-md-3 col-form-label" for="textarea-input"> Staff Basic Salary</label>
                      <div class="col-md-9">
                        <input type="number" id="staff_basic" name="staff_basic" class="form-control" value="<?php echo $row['staff_basic'];?>" min="0">
                      </div>
                    </div>                
					<div class="form-group row">
                      <label class="col-md-3 col-form-label" for="textarea-input"> Staff Fixed Allowance</label>
                      <div class="col-md-9">
                        <input type="number" id="staff_fa" name="staff_fa" class="form-control" value="<?php echo $row['staff_fa'];?>" placeholder="Enter FA" min="0">
                      </div>
                    </div>                    
                <div class="card-footer">
                  <input type="submit" name = "Submit" value="Submit" class="btn btn-sm btn-primary">
                </div>
	</form>
                
</div>   
<script>
function checkathrname(nm){
  $("#athr_name").load("pages/add_author_script.php?athrname="+encodeURI(nm));
}
</script>
<script>
  function validateForm() {
       var x = document.forms["edit_category_frm"]["staff_name"].value;
       if (x == null || x == "") {
       alert("Please Enter Staff Name");
       
       return false;
    }
    var x = document.forms["edit_category_frm"]["staff_address"].value;
           if (x == null || x == "") {
           alert("Please Enter Address");
           
           return false;
    }
  
    }
</script>   
