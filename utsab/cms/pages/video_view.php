<?php
	$sql="select video_master.*,video_cat_name from video_master,video_cat where video_type=video_cat_id and `status`<> 'DELETE' order by sl";
	$res=mysqli_query($dbhandle,$sql);
	$cnt=mysqli_num_rows($res);
?><head>

<script language="JavaScript" src="js/validator.js"></script>
</head>



<form class="form-horizontal" name="chng_pass_frm" method="post" action="#" onsubmit="return v.exec()">
<table id="data_table" class="display" width="100%" align="center">
<thead>
  <tr>
		<td class="special" colspan="6" align="left">VIDEO LIST</td>
  </tr>
  <tr id="welcome" class="post">
    <th align="left" valign="top" width="6%"><a href='#' >Sl</a></th>
	<th align="left" valign="top"><a href='#' >Video Name</a></th>
	<th align="left" valign="top"><a href='#' >Video Album</a></th>
	<th align="left" valign="top"><a href='#' >Video Description</a></th>
	<th align="left" valign="top"><a href='#' >Video Image</a></th>
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
		<td align="left" valign="top" width="19%"><?php echo $row['video_name'];?></td>
		<td align="left" valign="top" width="15%"><?php echo $row['video_cat_name'];?></td>
		<td align="left" valign="top" width="33%"><?php echo $row['video_desc'];?></td>
		<td align="left" valign="top"><iframe src="<?php echo $row['video_pic']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" width="100px" height="80px" allowfullscreen></iframe></td>
		<td align="left" valign="top" width="10%"><?php echo $row['status'];?></td>
		<td align="left" valign="top" width="10%"><a href="home.php?op=video_edit&id=<?php echo base64_encode($row['sl']);?>">Edit</a>&nbsp;&nbsp;<a href="home.php?op=video_delete&id=<?php echo $row['sl'];?>">Delete</a></td>
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
    &nbsp;<a href="home.php?op=video_entry">Add New</a></td>
</tr></tfoot>
</table>
