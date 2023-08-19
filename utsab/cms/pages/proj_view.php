<?php
	$sql="select * from proj_master where proj_master.proj_status='ACTIVE' order by proj_id";
	$res=mysqli_query($dbhandle,$sql);
	$cnt=mysqli_num_rows($res);
?><head>

<script language="JavaScript" src="js/validator.js"></script>
</head>



<form class="form-horizontal" name="chng_pass_frm" method="post" action="#" onsubmit="return v.exec()">
<div style="width:950px; overflow-x: scroll">
<table id="data_table" class="display" width="100%" align="center">
<thead>
  <tr>
		<td class="special" colspan="9" align="left">PROJECT LIST</td>
  </tr>
  <tr id="welcome" class="post">
    <th align="left" valign="top" width="6%">Sl</th>
	<th align="left" valign="top" width="19%">Project Name</th>
	<th align="left" valign="top" width="33%">Customer</th>
	<th align="left" valign="top" width="33%">Location</th>
	<th align="left" valign="top" width="33%">Description</th>
	<th align="left" valign="top" width="10%">Picture</th>
	<th align="left" valign="top" width="10%">Status</th>	
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
		<td align="left" valign="top" width="19%"><?php echo $row['proj_name'];?></td>
		<td align="left" valign="top" width="33%"><?php echo $row['proj_cust'];?></td>
		<td align="left" valign="top" width="33%"><?php echo $row['proj_location'];?></td>
		<td align="left" valign="top" width="33%"><?php echo $row['proj_details'];?></td>
		<td align="left" valign="top" width="10%"><img src="proj_upload/<?php echo $row['proj_pic']; ?>" height="50px" width="75px" /></td>
		<td align="left" valign="top" width="10%"><?php echo $row['proj_status'];?></td>
		<td align="left" valign="top" width="10%"><a href="home.php?op=proj_edit&id=<?php echo base64_encode($row['proj_id']);?>">Edit</a>&nbsp;&nbsp;<a href="home.php?op=proj_delete&id=<?php echo $row['proj_id'];?>">Delete</a></td>
	  </tr>
<?php
	}
}else{
	echo '<tr><td colspan="12" align="left" valign="top">Data Not Found!</td></tr>';
}
?>
</tbody>

<tfoot><tr><td colspan="14">
    &nbsp;<a href="home.php?op=proj_entry">Add New</a>
</td>
</tr></tfoot>
</table>
</div>