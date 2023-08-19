<?php
	$sql="select * from  course_cat  where `course_cat_status`<> 'DELETE' order by course_cat_id";
	$res=mysqli_query($dbhandle,$sql);
	$cnt=mysqli_num_rows($res);
?>

<script language="JavaScript" src="js/validator.js"></script>
<form class="form-horizontal"name="view_frm" method="post" action="#" onsubmit="return v.exec()">
<table id="data_table" class="display" width="100%" align="center">
<thead>
  <tr>
		<td class="special" colspan="5" align="left">COURSE CATEGORY LIST</td>
  </tr>
  <tr id="welcome" class="post">
    <th align="left" valign="top" width="6%"><a href='#' >Sl</a></th>
	<th align="left" valign="top"><a href='#' >Course  Category Name</a></th>
	<th align="left" valign="top"><a href='#' >Course Category Description</a></th>
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
		<td align="left" valign="top"><?php echo $row['course_cat_name'];?></td>
		<td align="left" valign="top" width="33%"><?php echo $row['course_cat_details'];?></td>
		<td align="left" valign="top"><?php echo $row['course_cat_status'];?></td>
		<td align="left" valign="top"><a href="home.php?op=course_cat_edit&id=<?php echo base64_encode($row['course_cat_id']);?>">Edit</a>&nbsp;&nbsp;<a href="home.php?op=course_cat_delete&id=<?php echo $row['course_cat_id'];?>">Delete</a></td>
	  </tr>
<?php
	}
}else{
	echo '<tr><td colspan="6" align="left" valign="top">Data Not Found!</td></tr>';
}
?>
</tbody>
<tfoot><tr><td colspan="6">
    &nbsp;<a href="home.php?op=course_cat_entry">Add New</a>
</td>
</tr></tfoot>
</table>
