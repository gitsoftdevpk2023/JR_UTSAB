<?php
	$sql="select * from  grp_cat  where `grp_cat_status`<> 'DELETE' order by grp_cat_id";
	$res=mysqli_query($dbhandle,$sql);
	$cnt=mysqli_num_rows($res);
?>

<script language="JavaScript" src="js/validator.js"></script>
<form class="form-horizontal"name="view_frm" method="post" action="#" onsubmit="return v.exec()">
<table id="data_table" class="display" width="100%" align="center">
<thead>
  <tr>
		<td class="special" colspan="7" align="left">MAIN CATEGORY LIST</td>
  </tr>
  <tr id="welcome" class="post">
    <th align="left" valign="top"><a href='#' >Sl</a></th>
	<th align="left" valign="top"><a href='#' >Main Category</a></th>
	<th align="left" valign="top"><a href='#' >Category Name</a></th>
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
		$sql1="select * from  main_cat  where main_cat_id='" . $row['grp_main_cat_id'] . "'";
	    $res1=mysqli_query($dbhandle,$sql1);
		$row1=mysqli_fetch_assoc($res1);
?>
	  <tr>
	    <td align="left" valign="top"><?php echo $i;?></td>
		<td align="left" valign="top"><?php echo $row1['main_cat_name'];?></td>
		<td align="left" valign="top"><?php echo $row['grp_cat_name'];?></td>
		<td align="left" valign="top"><?php echo $row['grp_cat_status'];?></td>
		<td align="left" valign="top"><a href="home.php?op=grp_cat_edit&id=<?php echo $row['grp_cat_id'];?>">Edit</a>&nbsp;&nbsp;<a href="home.php?op=grp_cat_delete&id=<?php echo $row['grp_cat_id'];?>">Delete</a></td>
	  </tr>
<?php
	}
}else{
	echo '<tr><td colspan="7" align="left" valign="top">Data Not Found!</td></tr>';
}
?>
</tbody>
<tfoot><tr><td colspan="7">
    &nbsp;<a href="home.php?op=grp_cat_entry">Add New</a>
</td>
</tr></tfoot>
</table>