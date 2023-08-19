<div class="card"> 
    <div class="card-header">
      <strong>Exibition Application List</strong>
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
                <th> Member Details</th>
                <th> Date</th>
                <th> Exibition</th>
                <th> Status</th>
              </tr>
            </thead>
            <tbody>
              <?php
              
               $sql="select * from  exi_application,cust_master,product_details  where exap_exibition=pro_id and exap_exibition='".$_REQUEST['eid']."' and`exap_status`<> 'DELETE' and cust_id=exap_member order by exap_id desc";
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
                  if($row1['exap_status']=='Active')
                  {
                ?>     
                  <button type="button" id="blog_block" onclick="block(<?=$row1['exap_id'];?>)" class="btn btn-sm btn-danger" name="blog_block" style="position: relative; margin-top: 5px;">Block</button>
                <?php } ?>
                <?php 
                    if($row1['exap_status'] == 'Inactive' || $row1['exap_status'] == 'Pending')
                    {
                ?>
                  <button type="button" id="blog_unblock" onclick="unblock(<?=$row1['exap_id'];?>)" class="btn btn-sm btn-success" name="blog_unblock" style="position: relative; margin-top: 5px;">Unblock</button>
                <?php } ?>
                  <!--<a class="btn btn-info btn-sm" href="home.php?op=member_edit&id=<?php //echo $row1['blog_id'];?>">Edit</a>&nbsp; -->                
                  </td>
                <td><?php echo $i; ?></td>
                <td><?php echo $row1['cust_name']; ?><br /><?php echo $row1['cust_email']; ?></td>
                <td><?php echo $row1['exap_datetime']; ?></td>
                <td><?php echo $row1['product_name']; ?></td>
                <td><b><?php echo $row1['exap_status']; ?></b></td>
              </tr>
              <?php
                  }
                }else{
                  echo '<tr><td colspan="6" align="left" valign="top">Data Not Found!</td></tr>';
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
      url: "pages/pro_dtls_app_ajax_block.php",
      type: "POST",
      data: {'mid' : mid},
      success: function(data){
        alert('Application is blocked');
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
      url: "pages/pro_dtls_app_ajax_unblock.php",
      type: "POST",
      data: {'mid' : mid},
      success: function(data){
        // alert(data);
        alert('Application is unblocked');
        location.reload();
      }
    });
  }
  
</script>