<?php
	$sql="select * from photo_master,product_details where photo_master.`status`<> 'DELETE' and photo_type=pro_id order by sl";
	$res=mysqli_query($dbhandle,$sql);
	$cnt=mysqli_num_rows($res);
?><head>

<script language="JavaScript" src="js/validator.js"></script>
</head>



<form class="form-horizontal" name="chng_pass_frm" method="post" action="#" onsubmit="return v.exec()">
<table id="data_table" class="display" width="100%" align="center">
<thead>
  <tr>
		<td class="special" colspan="6" align="left">PHOTO LIST</td>
  </tr>
  <tr id="welcome" class="post">
    <th align="left" valign="top" width="6%"><a href='#' >Sl</a></th>
	<th align="left" valign="top"><a href='#' >Album</a></th>
	<th align="left" valign="top"><a href='#' >Photo Name</a></th>
	<th align="left" valign="top"><a href='#' >Photo Description</a></th>
	<th align="left" valign="top"><a href='#' >Photo Image</a></th>
	<th align="left" valign="top"><a href='#' >Status</a></th>	
	<th align="left" valign="top">Control</th>
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
		<td align="left" valign="top" width="19%"><?php echo $row['product_name'];?></td>
		<td align="left" valign="top" width="19%"><?php echo $row['photo_name'];?></td>
		<td align="left" valign="top" width="33%"><?php echo $row['photo_desc'];?></td>
		<td align="left" valign="top"><img src="photo_upload/<?php echo $row['photo_pic']; ?>" height="50px" width="75px" /></td>
		<td align="left" valign="top" width="10%"><?php echo $row['status'];?></td>
		<td align="left" valign="top" width="10%"><a href="home.php?op=photo_edit&id=<?php echo base64_encode($row['sl']);?>">Edit</a>&nbsp;&nbsp;<a href="home.php?op=photo_delete&id=<?php echo $row['sl'];?>">Delete</a></td>
	  </tr>
<?php
	}
}else{
	echo '<tr><td colspan="7" align="left" valign="top">Data Not Found!</td></tr>';
}
?>
</tbody>
<tfoot><tr>
<td colspan="6">
    &nbsp;<a href="home.php?op=photo_entry">Add New</a></td>
</tr></tfoot>
</table>
