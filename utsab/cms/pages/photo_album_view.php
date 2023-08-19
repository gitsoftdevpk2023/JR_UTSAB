<?php
	$sql="select * from  photo_cat  where `photo_cat_status`<> 'DELETE' order by photo_cat_id";
	$res=mysqli_query($dbhandle,$sql);
	$cnt=mysqli_num_rows($res);
?>

<script language="JavaScript" src="js/validator.js"></script>
<form class="form-horizontal"name="view_frm" method="post" action="#" onsubmit="return v.exec()">
<table id="data_table" class="display" width="100%" align="center">
<thead>
  <tr>
		<td class="special" colspan="6" align="left">PHOTO ALBUM LIST</td>
  </tr>
  <tr id="welcome" class="post">
    <th align="left" valign="top" width="6%"><a href='#' >Sl</a></th>
	<th align="left" valign="top"><a href='#' >Photo Album Name</a></th>
	<th align="left" valign="top"><a href='#' >Photo Album Year</a></th>
	<th align="left" valign="top"><a href='#' >Photo Album Image</a></th>
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
	    <td align="left" valign="top"><?php echo $i;?></td>
		<td align="left" valign="top"><?php echo $row['photo_cat_name'];?></td>
		<td align="left" valign="top" width="33%"><?php echo $row['photo_cat_details'];?></td>
		<td align="left" valign="top"><img src="photo_album_upload/<?php echo $row['photo_cat_pic']; ?>" height="50px" width="75px" /></td>
		<td align="left" valign="top"><?php echo $row['photo_cat_status'];?></td>
		<td align="left" valign="top"><a href="home.php?op=photo_album_edit&id=<?php echo base64_encode($row['photo_cat_id']);?>">Edit</a>&nbsp;&nbsp;<a href="home.php?op=photo_album_delete&id=<?php echo $row['photo_cat_id'];?>">Delete</a></td>
	  </tr>
<?php
	}
}else{
	echo '<tr><td colspan="6" align="left" valign="top">Data Not Found!</td></tr>';
}
?>
</tbody>
<tfoot><tr><td colspan="7">
    &nbsp;<a href="home.php?op=photo_album_entry">Add New</a>
</td>
</tr></tfoot>
</table>
