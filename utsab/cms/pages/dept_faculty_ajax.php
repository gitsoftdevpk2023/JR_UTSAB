<?php
include '../config/db.php';
?>
<select class="form-control" name="faculty_id" onChange="load_cat(this.value)" required>
      <option value="0">---Select---</option>
      <?php
        $sql_br = "SELECT * FROM `faculty_master` WHERE `faculty_status` = 'ACTIVE' and faculty_dept='".$_REQUEST['dept_id']."' order by faculty_name";
		$res_br = mysqli_query($dbhandle,$sql_br);                
		while($row_br = mysqli_fetch_array($res_br))
		{
	  ?>
      <option value="<?php echo $row_br['faculty_id']; ?>"><?php echo $row_br['faculty_name']; ?></option>
      <?php
        }
      ?>
</select>
