<div class="card">
               
                <div class="card-body">
                  
                <div class="col-lg-12">
                    <h2>UNIT LIST</h2>
                    <div class="table-responsive">
                    <div id="printableArea">
                        <table id="data_table" class="display">
                            <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Unit Name</th>
                                    <th>Sign</th>
                                    <th>Status</th>
                                    <th>Control</th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php
                              
                               $sql="select * from  unit_master  where `unit_status`<> 'DELETE' order by unit_id";
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
                                  <td><?php echo $i; ?></td>
                                  <td><?php echo $row['unit_name']; ?></td>
                                  <td><?php echo $row['unit_sign']; ?></td>
                                  <td><?php echo $row['unit_status']; ?></td>
                                  <td align="left" valign="top" width="10%">
                                    <a class="btn btn-info btn-sm" href="home.php?op=unit_edit&id=<?php echo $row['unit_id'];?>">Edit</a>
                              &nbsp;<a class="btn btn-danger btn-sm" href="home.php?op=unit_delete&id=<?php echo $row['unit_id'];?>">Delete</a>
                                  </td>
                                                              
                                </tr>
                              <?php
                                  }
                                }else{
                                  echo '<tr><td colspan="7" align="left" valign="top">Data Not Found!</td></tr>';
                                }
                                ?>
                        </tbody>
                        </table>
                        <a class="btn btn-success btn-sm" href="home.php?op=unit_entry">Add New</a><!--&nbsp;<button type="button" class="btn btn-success btn-sm" onclick="printDiv('printableArea')" value="Print">Print</button>-->
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