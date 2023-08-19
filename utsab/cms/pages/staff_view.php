<div class="card">              
  <div class="card-body">   
    <div class="col-lg-12">
      <h2>Staff List</h2>
      <div class="table-responsive">
      <div id="printableArea">
          <table id="data_table" class="display">
              <thead>
                  <tr>
                      <th>Control</th>
                      <th>Sl</th>
                      <th>Company</th>
                      <th>Code</th>
                      <th>Staff Name</th>
                      <th>Photo</th>
                      <th>Address</th>
                      <th>Contacts</th>
                      <th>DoB</th>
                      <th>DoJ</th>
                      <th>Email</th>
                      <th>Customer</th>
                      <th>Designation</th>
                      <th>Basic</th>
                      <th>Fixed Allw.</th>
                  </tr>
              </thead>
              <tbody>
                <?php
                $sql="select * from staff_master,client_master,company_master,desig_master where staff_master.`status`<> 'DELETE' and staff_desig=desig_id and staff_comp=company_id and staff_cust=client_id order by staff_id";
                $res=mysqli_query($dbhandle,$sql);
                $cnt=mysqli_num_rows($res);
                if($cnt>0)
                {
                  $i=0;
                  while($row=mysqli_fetch_array($res))
                  {
                    $i++;
                ?>
                  <tr>
                    <td align="left" valign="top" width="10%">
                      <a class="btn btn-info btn-sm" href="home.php?op=staff_edit&id=<?php echo $row['staff_id'];?>">Edit</a>
                      <!--&nbsp;<a class="btn btn-danger btn-sm" href="home.php?op=staff_delete&id=<?php //echo $row['staff_id'];?>">Delete</a>--></td>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row['company_name']; ?></td>
                    <td><?php echo $row['staff_code']; ?></td>
                    <td><?php echo $row['staff_name']; ?></td>
                    <td><img src="pages/pic_upload/<?php echo $row['staff_photo']; ?>" height="50px" width="75px" /></td>
                    <td><?php echo $row['staff_address']; ?></td>
                    <td><?php echo $row['staff_contact']; ?></td>
                    <td><?php echo $row['staff_dob']; ?></td>
                    <td><?php echo $row['staff_doj']; ?></td>
                    <td><?php echo $row['staff_email']; ?></td>
                    <td><?php echo $row['client_name']; ?></td>
                    <td><?php echo $row['desig_name']; ?></td>
                    <td><?php echo $row['staff_basic']; ?></td>
                    <td><?php echo $row['staff_fa']; ?></td>
                  </tr>
                <?php
                    }
                  }else{
                    echo '<tr><td colspan="12" align="left" valign="top">Data Not Found!</td></tr>';
                  }
                  ?>
          </tbody>
          </table>
        </div>
      </div>
      <a class="btn btn-primary btn-sm" href="home.php?op=staff_entry">Add New</a><!--&nbsp;<button type="button" class="btn btn-success btn-sm" onclick="printDiv('printableArea')" value="Print">Print</button>-->
  </div>
</div>             
