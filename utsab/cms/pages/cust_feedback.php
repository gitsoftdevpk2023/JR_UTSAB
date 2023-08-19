<?php
	$sql="select * from feedack_master where fdbk_status='ACTIVE' order by id desc";
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
		<td class="special" colspan="6" align="left">CLIENT FEEDBACK LIST</td>
  </tr>
  <tr id="welcome" class="post">
    <th align="left" valign="top" width="6%">Sl</th>
	<th align="left" valign="top"><div align="center">Date</div></th>
	<th align="left" valign="top"><div align="center">Name</div></th>
	<th align="left" valign="top"><div align="center">Email</div></th>
	<th align="left" valign="top"><div align="center">Contact</div></th>
	<th align="left" valign="top"><div align="center">Feedback Details</div></th>
<!--	<th align="left" valign="top" width="10%">Picture</th>-->
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
	    <td align="left" valign="top" width="6%"><div align="center"><?php echo $i;?></div></td>
		<td align="left" valign="top"><div align="center"><?php echo $row['fdbk_date'];?></div></td>
		<td align="left" valign="top"><div align="center"><?php echo $row['fdbk_name'];?></div></td>
		<td align="left" valign="top"><div align="center"><?php echo $row['fdbk_email'];?></div></td>
		<td align="left" valign="top"><div align="center"><?php echo $row['fdbk_contact'];?></div></td>
		<td align="left" valign="top"><div align="center"><?php echo $row['fdbk_matter'];?></div><div align="justify"></div></td>
		<!--<td align="left" valign="top" width="10%"><img src="testi_upload/<?php //echo $row['testi_pic']; ?>" height="50px" width="75px" /></td>-->
	  </tr>
<?php
	}
}else{
	echo '<tr><td colspan="6" align="left" valign="top">Data Not Found!</td></tr>';
}
?>
</tbody>

<!--<tfoot><tr><td colspan="12">
    &nbsp;<a href="home.php?op=testi_entry">Add New</a>
</td>
</tr></tfoot>-->
</table>
</div>