<?php
	$sql="select course_master.*,course_cat_name from course_master,course_cat where course_type=course_cat_id and `status`<> 'DELETE' order by sl";
	$res=mysqli_query($dbhandle,$sql);
	$cnt=mysqli_num_rows($res);
?><head>

<script language="JavaScript" src="js/validator.js"></script>
</head>



<form class="form-horizontal" name="chng_pass_frm" method="post" action="#" onsubmit="return v.exec()">
<table id="data_table" class="display" width="100%" align="center">
<thead>
  <tr>
		<td class="special" colspan="7" align="left">COURSE LIST</td>
  </tr>
  <tr id="welcome" class="post">
    <th align="left" valign="top" width="6%"><a href='#' >Sl</a></th>
	<th align="left" valign="top"><a href='#' >Course Name</a></th>
	<th align="left" valign="top"><a href='#' >Course Category</a></th>
	<th align="left" valign="top"><a href='#' >Course Description</a></th>
	<th align="left" valign="top"><a href='#' >Course Image</a></th>
	<th align="left" valign="top"><a href='#' >Downloads</a></th>	
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
		<td align="left" valign="top" width="19%"><?php echo $row['course_name'];?></td>
		<td align="left" valign="top" width="15%"><?php echo $row['course_cat_name'];?></td>
		<td align="left" valign="top" width="33%"><?php echo $row['course_desc'];?></td>
		<td align="left" valign="top"><img src="course_upload/<?php echo $row['course_pic']; ?>" height="50px" width="75px" /></td>
		<td align="left" valign="top"><a href="course_upload/<?php echo $row['course_broc']; ?>" target="_blank">Brochure</a>&nbsp;&nbsp;<a href="course_upload/<?php echo $row['course_doc']; ?>" target="_blank">Documents</a></td>
		<td align="left" valign="top" width="10%"><?php echo $row['status'];?></td>
		<td align="left" valign="top" width="10%"><a href="home.php?op=course_edit&id=<?php echo base64_encode($row['sl']);?>">Edit</a>&nbsp;&nbsp;<a href="home.php?op=course_delete&id=<?php echo $row['sl'];?>">Delete</a></td>
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
    &nbsp;<a href="home.php?op=course_entry">Add New</a>
</td>
</tr></tfoot>
</table>