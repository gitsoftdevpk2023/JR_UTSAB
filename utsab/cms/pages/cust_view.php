<style type="text/css">
<!--
.style3 {	font-weight: bold;
	font-family: Calibri;
}
-->
</style>
<div class="card"> 
    <div class="card-header">
      <strong>Member List</strong>
    </div>
  <div class="card-body">
                  
    <div class="col-lg-12">
      <div class="table-responsive">
        <div id="printableArea">
          <table id="data_table" class="display">
            <thead>
              <tr>
                <th>Control</th>
                <th>Sl</th>
                <th> Name</th>
                <th>Code</th>
                <th> Pwd</th>
                <th> Mobile</th>
                <th> Email</th>
                <th> Address</th>
                <th> Country</th>
                <th>Image</th>
                <th> Status</th>
              </tr>
            </thead>
            <tbody>
              <?php
              
               $sql="select * from  cust_master  where `cust_status`<> 'DELETE' order by cust_id";
                $res1=mysqli_query($dbhandle,$sql);
                $cnt=mysqli_num_rows($res1);

              if($cnt>0)
              {
                $i=0;
                while($row1=mysqli_fetch_array($res1))
                {
                  $i++;
              ?>
              <tr>
                <td>
                <?php
                  if($row1['cust_status']=='Active')
                  {
                ?>     
                  <button type="button" id="cust_block" onclick="block(<?=$row1['cust_id'];?>)" class="btn btn-sm btn-danger" name="cust_block" style="position: relative; margin-top: 5px;">Block</button>
                <?php } ?>
                <?php 
                    if($row1['cust_status'] == 'Inactive' || $row1['cust_status'] == 'Pending')
                    {
                ?>
                  <button type="button" id="cust_unblock" onclick="unblock(<?=$row1['cust_id'];?>)" class="btn btn-sm btn-success" name="cust_unblock" style="position: relative; margin-top: 5px;">Unblock</button>
                <?php } ?>
                  <!--<a class="btn btn-info btn-sm" href="home.php?op=member_edit&id=<?php echo $row1['cust_id'];?>">Edit</a>&nbsp;  -->                </td>
                <td><?php echo $i; ?></td>
                <td><?php echo $row1['cust_name']; ?></td>
                <td><?php echo $row1['cust_code']; ?></td>
                <td><?php echo $row1['cust_pass']; ?></td>
                <td><?php echo $row1['cust_phone']; ?></td>
                <td><?php echo $row1['cust_email']; ?></td>
                <td><?php echo $row1['cust_address']; ?></td>
                <td><?php echo $row1['cust_country']; ?></td>
                <td><div align="center"><span class="style3"><img src="member_upload/<?php echo $row1['cust_pic']; ?>" alt="" width="81" height="83" /></span></div></td>
                <td><b><?php echo $row1['cust_status']; ?></b></td>
              </tr>
              <?php
                  }
                }else{
                  echo '<tr><td colspan="10" align="left" valign="top">Data Not Found!</td></tr>';
                }
              ?>
            </tbody>
          </table>
          <!--<a class="btn btn-primary btn-sm" href="home.php?op=member_add">Add New</a>&nbsp;<button type="button" class="btn btn-success btn-sm" onclick="printDiv('printableArea')" value="Print">Print</button>--->
        </div>
      </div>
    </div>
  </div> 
</div> 

<script>
function printDiv(divName) {
   var printContents = document.getElementById(divName).innerHTML;
   var originalContents = document.body.innerHTML;

    document.body.innerHTML = printContents;
       window.print();
      document.body.innerHTML = originalContents;
    }
</script>

<script>
  function block(id)
  {
    // alert(id);
    var mid = id;
    $.ajax({
      url: "pages/cust_edit_ajax_block.php",
      type: "POST",
      data: {'mid' : mid},
      success: function(data){
        alert('Member is blocked');
        location.reload();
      }
    });
  }

  function unblock(id)
  {
     // alert(id);
    var mid = id;
    // alert(mid);
    $.ajax({
      url: "pages/cust_edit_ajax_unblock.php",
      type: "POST",
      data: {'mid' : mid},
      success: function(data){
        // alert(data);
        alert('Member is unblocked');
        location.reload();
      }
    });
  }
  
  function activate(id)
  {
     // alert(id);
    var mid = id;
    // alert(mid);
    $.ajax({
      url: "pages/cust_edit_ajax_activate.php",
      type: "POST",
      data: {'mid' : mid},
      success: function(data){
        // alert(data);
        alert('Member is Activated');
        location.reload();
      }
    });
  }

  
  function roi(id)
  {
     // alert(id);
    var mid = id;
    // alert(mid);
    $.ajax({
      url: "pages/cust_edit_ajax_roi.php",
      type: "POST",
      data: {'mid' : mid},
      success: function(data){
        // alert(data);
        alert('ROI is Generated');
        location.reload();
      }
    });
  }


</script>