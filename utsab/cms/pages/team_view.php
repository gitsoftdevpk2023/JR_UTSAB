<?php
	$sql="select * from team_master where team_master.team_status='ACTIVE' order by team_type,team_id";
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
		<td class="special" colspan="9" align="left">Team Member List</td>
  </tr>
  <tr id="welcome" class="post">
    <th align="left" valign="top" width="4%">Sl</th>
	<th align="left" valign="top" width="12%">Type</th>
	<th align="left" valign="top" width="18%">Team Member Name</th>
	<!--<th align="left" valign="top" width="12%">Designation</th>-->
	<th align="left" valign="top" width="26%">Description</th>
	<th align="left" valign="top" width="8%">Picture</th>
	<th align="left" valign="top" width="8%">Status</th>	
	<th align="left" valign="top" width="12%">Control</th>
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
		if($row['team_type']==1) $type="Utsab Members";
		if($row['team_type']==2) $type="Utsab Supporting Members";
		if($row['team_type']==3) $type="Utsab Next-Gen Members";
?>
	  <tr>
	    <td align="left" valign="top" width="4%"><?php echo $i;?></td>
		<td align="left" valign="top" width="12%"><?php echo $type; ?></td>
		<td align="left" valign="top" width="18%"><?php echo $row['team_name'];?></td>
		<!--<td align="left" valign="top" width="12%"><?php echo $row['team_desig'];?></td>-->
		<td align="left" valign="top" width="26%"><?php echo $row['team_details'];?></td>
		<td align="left" valign="top" width="8%"><img src="team_upload/<?php echo $row['team_pic']; ?>" height="50px" width="75px" /></td>
		<td align="left" valign="top" width="8%"><?php echo $row['team_status'];?></td>
		<td align="left" valign="top" width="12%"><a href="home.php?op=team_edit&id=<?php echo base64_encode($row['team_id']);?>">Edit</a>&nbsp;&nbsp;<a href="home.php?op=team_delete&id=<?php echo $row['team_id'];?>">Delete</a></td>
	  </tr>
<?php
	}
}else{
	echo '<tr><td colspan="12" align="left" valign="top">Data Not Found!</td></tr>';
}
?>
</tbody>

<tfoot><tr><td colspan="14">
    &nbsp;<a href="home.php?op=team_entry">Add New</a>
</td>
</tr></tfoot>
</table>
</div>