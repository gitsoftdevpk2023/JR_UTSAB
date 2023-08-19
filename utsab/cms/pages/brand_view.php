<?php
	$sql="select * from brand_master where `status`<> 'DELETE' order by id";
	$res=mysqli_query($dbhandle,$sql);
	$cnt=mysqli_num_rows($res);
?><head>

<script language="JavaScript" src="js/validator.js"></script>
</head>



<form class="form-horizontal" name="chng_pass_frm" method="post" action="#" onsubmit="return v.exec()">
<table id="data_table" class="display" width="100%" align="center">
<thead>
  <tr>
		<td class="special" colspan="7" align="left">SPONSOR LIST</td>
  </tr>
  <tr id="welcome" class="post">
    <th align="left" valign="top" width="6%"><a href='#' >Sl</a></th>
	<th align="left" valign="top" width="19%"><a href='#' >Sponsor Name</a></th>
	<th align="left" valign="top" width="20%"><a href='#' >Picture</a></th>
	<th align="left" valign="top" width="35%"><a href='#' >Details</a></th>
	<th align="left" valign="top" width="10%"><a href='#' >Status</a></th>	
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
		<td align="left" valign="top" width="19%"><?php echo $row['brand_name'];?></td>
		<td align="left" valign="top" width="20%"><img src="brand_upload/<?php echo $row['brand_pic']; ?>" height="50px" width="75px" /></td>
		<td align="left" valign="top" width="35%"><?php echo $row['brand_desc'];?></td>
		<td align="left" valign="top" width="10%"><?php echo $row['status'];?></td>
		<td align="left" valign="top" width="10%"><a href="home.php?op=brand_edit&id=<?php echo base64_encode($row['id']);?>">Edit</a>&nbsp;&nbsp;<a href="home.php?op=brand_delete&id=<?php echo $row['id'];?>">Delete</a></td>
	  </tr>
<?php
	}
}else{
	echo '<tr><td colspan="7" align="left" valign="top">Data Not Found!</td></tr>';
}
?>
</tbody>
<tfoot><tr>
<td colspan="7">
    &nbsp;<a href="home.php?op=brand_entry">Add New</a></td>
</tr></tfoot>
</table>
