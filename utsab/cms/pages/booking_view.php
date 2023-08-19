<?php
	$sql="select * from product_details,event_booking_master where evbk_event=pro_id and evbk_status<> 'DELETE' order by evbk_id desc";
	$res=mysqli_query($dbhandle,$sql);
	$cnt=mysqli_num_rows($res);
?><head>

<script language="JavaScript" src="js/validator.js"></script>
<style type="text/css">
<!--
.style11 {font-size: 12px; font-family: Calibri; font-weight: bold; }
-->
</style>
</head>



<form class="form-horizontal"name="chng_pass_frm" method="post" action="#" onsubmit="return v.exec()">
<div style="width:950px; overflow-x: scroll">
<table id="data_table" class="display" width="100%" align="center">
<thead>
  <tr>
		<td class="special" colspan="13" align="left">EVENT BOOKING LIST</td>
  </tr>
  <tr id="welcome" class="post">
    <th align="left" valign="top"><a href='#' >Sl</a></th>
	<th align="left" valign="top">Control</th>
	<th align="left" valign="top"><a href='#' > Name</a></th>
	<th align="left" valign="top"><a href='#' > Booking Name</a></th>
	<th align="left" valign="top"><a href='#' > Email</a></th>
	<!--<th align="left" valign="top"><a href='#' > Brief Desc.</a></th>-->
	<!--<th align="left" valign="top"><a href='#' > Reg. Fees</a></th>-->
	<th align="left" valign="top"><a href='#' > Booking Date</a></th>
	<!--<th align="left" valign="top"><a href='#' > Category</a></th>-->
	<th align="left" valign="top"><a href='#' > Total Amount</a></th>    
	<th align="left" valign="top"><a href='#' > Paid?</a></th>
	<!--<th align="left" valign="top"><a href='#' >Type</a></th>	
	<th align="left" valign="top"><a href='#' >Photo Type</a></th>-->
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
		<td align="left" valign="top">
            <a href="home.php?op=booking_dtls&id=<?php echo base64_encode($row['evbk_id']);?>" class="btn btn-xs btn-info" title="Edit Event"><i class="fa fa-eye" aria-hidden="true"></i></a>        </td>
		<td align="left" valign="top"><span class="style11"><?php echo $row['product_name'];?></span></td>
		<td align="left" valign="top"><span class="style11"><?php echo $row['evbk_name'];?></span></td>
		<td align="left" valign="top"><span class="style11"><?php echo $row['evbk_email'];?></span></td>
		<td align="left" valign="top"><span class="style11"><?php echo $row['evbk_date'];?> </span></td>
		<td align="left" valign="top"><span class="style11"><?php echo $row['evbk_gross'];?> </span></td>
		<td align="left" valign="top"><span class="style11"><?php echo $row['evbk_pay_status'];?> </span></td>
	  </tr>
<?php
	}
}else{
	echo '<tr><td colspan="11" align="left" valign="top">Data Not Found!</td></tr>';
}
?>
</tbody>

<tfoot><tr><td colspan="12">&nbsp;
    
</td>
</tr></tfoot>
</table>
</div>