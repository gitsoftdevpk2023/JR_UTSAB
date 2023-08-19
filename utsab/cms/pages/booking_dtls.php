<?php
	$sql="select * from event_fees_master,event_booking_master,event_booking_details where evbk_dtls_fees_id=sl and evbk_status<> 'DELETE' and evbk_dtls_status<> 'DELETE' and evbk_dtls_mst_id=evbk_id and evbk_dtls_mst_id='".base64_decode($_GET['id'])."' order by evbk_dtls_id";
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
		<td class="special" colspan="10" align="left">EVENT BOOKING DETAILS</td>
  </tr>
  <tr id="welcome" class="post">
    <th align="left" valign="top"><a href='#' >Sl</a></th>
	<th align="left" valign="top"><a href='#' > Item</a></th>
	<th align="left" valign="top"><a href='#' > Rate</a></th>
	<!--<th align="left" valign="top"><a href='#' > Brief Desc.</a></th>-->
	<!--<th align="left" valign="top"><a href='#' > Reg. Fees</a></th>-->
	<th align="left" valign="top"><a href='#' >Qty</a></th>
	<!--<th align="left" valign="top"><a href='#' > Category</a></th>-->
	<th align="left" valign="top"><a href='#' > Amount</a></th>    
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
		<td align="left" valign="top"><span class="style11"><?php echo $row['fees_name'];?></span></td>
		<td align="left" valign="top"><span class="style11"><?php echo $row['evbk_dtls_rate'];?> </span></td>
		<td align="left" valign="top"><span class="style11"><?php echo $row['evbk_dtls_qty'];?></span></td>
		<td align="left" valign="top"><span class="style11"><?php echo $row['evbk_dtls_amt'];?> </span></td>
	  </tr>
<?php
	}
}else{
	echo '<tr><td colspan="11" align="left" valign="top">Data Not Found!</td></tr>';
}
?>
</tbody>

<tfoot><tr><td colspan="9">&nbsp;
    
</td>
</tr></tfoot>
</table>
</div>