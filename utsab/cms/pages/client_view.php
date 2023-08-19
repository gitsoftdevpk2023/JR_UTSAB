<?php
	$sql="select * from client_master,product_category where client_master.status='ACTIVE' and client_prod=sl order by id";
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
		<td class="special" colspan="8" align="left">CLIENT LIST</td>
  </tr>
  <tr id="welcome" class="post">
    <th align="left" valign="top" width="6%">Sl</th>
	<th align="left" valign="top" width="19%">Client Name</th>
	<th align="left" valign="top" width="15%">Product</th>
	<th align="left" valign="top" width="33%">Client Description</th>
	<th align="left" valign="top" width="10%">Logo</th>
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
		<td align="left" valign="top" width="19%"><?php echo $row['client_name'];?></td>
		<td align="left" valign="top" width="15%"><?php echo $row['category_name'];?></td>
		<td align="left" valign="top" width="33%"><?php echo $row['client_location'];?></td>
		<td align="left" valign="top" width="10%"><img src="logo_upload/<?php echo $row['client_logo']; ?>" height="50px" width="75px" /></td>
		<td align="left" valign="top" width="10%"><?php echo $row['status'];?></td>
		<td align="left" valign="top" width="10%"><a href="home.php?op=client_edit&id=<?php echo base64_encode($row['id']);?>">Edit</a>&nbsp;&nbsp;<a href="home.php?op=client_delete&id=<?php echo $row['id'];?>">Delete</a></td>
	  </tr>
<?php
	}
}else{
	echo '<tr><td colspan="12" align="left" valign="top">Data Not Found!</td></tr>';
}
?>
</tbody>

<tfoot><tr><td colspan="13">
    &nbsp;<a href="home.php?op=client_entry">Add New</a>
</td>
</tr></tfoot>
</table>
</div>