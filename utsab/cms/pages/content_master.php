<?php
	$sql="select * from content_master where `status`<> 'DELETE' order by id";
	$res=mysqli_query($dbhandle,$sql);
	$cnt=mysqli_num_rows($res);
?><head>

<script language="JavaScript" src="js/validator.js"></script>
</head>



<form class="form-horizontal" name="chng_pass_frm" method="post" action="#" onsubmit="return v.exec()">
<table id="data_table" class="display" width="100%" align="center">
<thead>
  <tr>
		<td class="special" colspan="7" align="left">CONTENT LIST</td>
  </tr>
  <tr id="welcome" class="post">
    <th align="left" valign="top" width="6%"><a href='#' >Sl</a></th>
    <th align="left" valign="top"><a href='#' >Page</a></th>
	<th align="left" valign="top"><a href='#' >Title</a></th>
	<th align="left" valign="top"><a href='#' >Details</a></th>
	<th align="left" valign="top"><a href='#' >pic</a></th>
	<th align="left" valign="top"><a href='#' >Url</a></th>		
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
		<td align="left" valign="top" width="19%"><?php echo $row['page'];?></td>
		<td align="left" valign="top" width="15%"><?php echo $row['title'];?></td>
		<td align="left" valign="top" width="33%"><?php echo $row['details'];?></td>
		<td align="left" valign="top"><img src="content_upload/<?php echo $row['pic']; ?>" height="50px" width="75px" /></td>
		<td align="left" valign="top" width="33%"><?php echo $row['url'];?></td>

		<!--td align="left" valign="top"><a href="course_upload/<#?php echo $row['course_broc']; ?>" target="_blank">Brochure</a>&nbsp;&nbsp;<a href="course_upload/<#?php echo $row['course_doc']; ?>" target="_blank">Documents</a></td-->
		<!--td align="left" valign="top" width="10%"><#?php echo $row['status'];?></td-->
		<td align="left" valign="top" width="10%"><a href="home.php?op=content_edit&id=<?php echo $row['id'];?>">Edit</a>&nbsp;&nbsp;<a href="home.php?op=content_delete&id=<?php echo $row['id'];?>">Delete</a></td>
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
    &nbsp;<a href="home.php?op=content_entry">Add New</a>
</td>
</tr></tfoot>
</table>