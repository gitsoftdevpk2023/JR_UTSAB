<?php
	$sql="select * from exi_photo_master,cust_master where cust_id=exph_member and exph_exibition='".$_REQUEST['eid']."' and `exph_status`<> 'DELETE' order by exph_visit desc, sl";
	$res=mysqli_query($dbhandle,$sql);
	$cnt=mysqli_num_rows($res);
?><head>

<script language="JavaScript" src="js/validator.js"></script>
</head>



<form class="form-horizontal"name="chng_pass_frm" method="post" action="#" onsubmit="return v.exec()">
<div style="width:950px; overflow-x: scroll">
<table id="data_table" class="display" width="100%" align="center">
<thead>
  <tr>
		<td class="special" colspan="8" align="left">EXIBITION PHOTO LIST</td>
  </tr>
  <tr id="welcome" class="post">
    <th>Control</th>
    <th align="left" valign="top"><a href='#' >Sl</a></th>
	<th align="left" valign="top"><a href='#' >Member Name</a></th>
	<th align="left" valign="top"><a href='#' >Publish Date</a></th>
	<th align="left" valign="top"><a href='#' >Title</a></th>
	<th align="left" valign="top"><a href='#' >Description</a></th>
	<th align="left" valign="top"><a href='#' >Picture</a></th>
	<th align="left" valign="top"><a href='#' >Visits</a></th>	
	</tr>
</thead>

<tbody>

<?php
if($cnt>0)
{
	$i=0;
	while($row=mysqli_fetch_assoc($res))
	{
		$i++;
?>
	  <tr>
        <td>
		<?php
          if($row['exph_status']=='Active')
          {
        ?>     
          <button type="button" id="blog_block" onclick="block(<?=$row['sl'];?>)" class="btn btn-sm btn-danger" name="blog_block" style="position: relative; margin-top: 5px;">Block</button>
        <?php } ?>
        <?php 
            if($row['exph_status'] == 'Inactive' || $row['exph_status'] == 'Pending')
            {
        ?>
          <button type="button" id="blog_unblock" onclick="unblock(<?=$row['sl'];?>)" class="btn btn-sm btn-success" name="blog_unblock" style="position: relative; margin-top: 5px;">Unblock</button>
        <?php } ?>
        </td>
	    <td align="left" valign="top"><?php echo $i;?></td>
		<td align="left" valign="top"><?php echo $row['cust_name'];?></td>
		<td align="left" valign="top"><?php echo $row['exph_datetime'];?></td>
		<td align="left" valign="top"><?php echo $row['exph_name'];?></td>
		<td align="left" valign="top"><?php echo $row['exph_desc'];?></td>
		<td align="left" valign="top"><img src="exi_photo_upload/<?php echo $row['exph_pic']; ?>" height="50px" width="75px" /></td>
		<td align="left" valign="top"><?php echo $row['exph_visit'];?></td>
	  </tr>
<?php
	}
}else{
	echo '<tr><td colspan="7" align="left" valign="top">Data Not Found!</td></tr>';
}
?>
</tbody>

<tfoot><tr><td colspan="7">
   <!-- &nbsp;<a href="home.php?op=pro_details_entry">Add New</a>-->
</td>
</tr></tfoot>
</table>
</div>

<script>
  function block(id)
  {
    // alert(id);
    var mid = id;
    $.ajax({
      url: "pages/pro_dtls_photo_ajax_block.php",
      type: "POST",
      data: {'mid' : mid},
      success: function(data){
        alert('Photo is blocked');
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
      url: "pages/pro_dtls_photo_ajax_unblock.php",
      type: "POST",
      data: {'mid' : mid},
      success: function(data){
        // alert(data);
        alert('Photo is unblocked');
        location.reload();
      }
    });
  }
  
</script>