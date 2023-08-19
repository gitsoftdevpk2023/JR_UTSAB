<?php
	$eid=$_GET['eid'];
	$sql="select * from event_fees_master,product_details where product_details.status='ACTIVE' and event_fees_master.status='ACTIVE' and fees_event=pro_id and fees_event='$eid' order by sl";
	$res=mysqli_query($dbhandle,$sql);
	$cnt=mysqli_num_rows($res);
?>
<head>
<script language="JavaScript" src="js/validator.js"></script>
</head>

<form class="form-horizontal" name="chng_pass_frm" method="post" action="#" onsubmit="return v.exec()">
<div style="width:950px; overflow-x: scroll">
<table id="data_table" class="display" width="100%" align="center">
<thead>
  <tr>
		<td class="special" colspan="7" align="left">EVENT FEES LIST</td>
  </tr>
  <tr id="welcome" class="post">

    <th align="left" valign="top" width="6%">Sl</th>
	<th align="left" valign="top" width="19%">Name</th>
	<th align="left" valign="top" width="33%">Description</th>
	<!--<th align="left" valign="top" width="10%">Picture</th>-->
	<th align="left" valign="top" width="10%">Rate</th>	
	<th align="left" valign="top" width="10%">Control</th>

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

	    <td align="left" valign="top" width="6%"><?php echo $i;?></td>
		<td align="left" valign="top" width="19%"><?php echo $row['fees_name'];?></td>
		<td align="left" valign="top" width="33%"><?php echo $row['fees_desc'];?></td>
<!--		<td align="left" valign="top" width="10%"><img src="serv_upload/<?php echo $row['serv_pic']; ?>" height="50px" width="75px" /></td>-->
		<td align="left" valign="top" width="10%"><?php echo $row['fees_rate'];?></td>
		<td align="left" valign="top" width="10%"><a href="home.php?op=pro_dtls_fees_edit&id=<?php echo base64_encode($row['sl']);?>&eid=<?php echo $row['fees_event'];?>">Edit</a>&nbsp;&nbsp;<a href="home.php?op=pro_dtls_fees_delete&id=<?php echo $row['sl'];?>&eid=<?php echo $row['fees_event'];?>">Delete</a></td>

	  </tr>

<?php

	}

}else{

	echo '<tr><td colspan="12" align="left" valign="top">Data Not Found!</td></tr>';

}

?>

</tbody>



<tfoot><tr><td colspan="12">

    &nbsp;<a href="home.php?op=pro_dtls_fees_entry&eid=<?php echo $eid;?>">Add New</a>

</td>

</tr></tfoot>

</table>

</div>