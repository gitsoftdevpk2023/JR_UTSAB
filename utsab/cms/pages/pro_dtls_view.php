<?php
	$sql="select product_details.* from product_details where product_details.`status`<> 'DELETE' order by pro_id";
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
		<td class="special" colspan="13" align="left">EVENT LIST</td>
  </tr>
  <tr id="welcome" class="post">
    <th align="left" valign="top"><a href='#' >Sl</a></th>
	<th align="left" valign="top">Control</th>
	<th align="left" valign="top"><a href='#' > Name</a></th>
	<th align="left" valign="top"><a href='#' > Location</a></th>
	<!--<th align="left" valign="top"><a href='#' > Brief Desc.</a></th>-->
	<!--<th align="left" valign="top"><a href='#' > Reg. Fees</a></th>-->
	<th align="left" valign="top"><a href='#' > Schedule</a></th>
	<!--<th align="left" valign="top"><a href='#' > Category</a></th>-->
	<th align="left" valign="top"><a href='#' > Picture</a></th>
	<th align="left" valign="top"><a href='#' > Detail Doc</a></th>    
	<!--<th align="left" valign="top"><a href='#' > Brand</a></th>-->
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
		$product_category=$row['product_category'];
		$sql1="select category_name from product_category where sl='" . $product_category ."'";
		$res1=mysqli_query($dbhandle,$sql1);
		$row1=mysqli_fetch_assoc($res1);
?>
	  <tr>
	    <td align="left" valign="top"><?php echo $i;?></td>
		<td align="left" valign="top">
            <a href="home.php?op=pro_dtls_edit&id=<?php echo base64_encode($row['pro_id']);?>" class="btn btn-xs btn-info" title="Edit Event"><i class="fa fa-pencil" aria-hidden="true"></i></a>
            <a href="home.php?op=pro_dtls_hide&id=<?php echo $row['pro_id'];?>" class="btn btn-xs btn-warning" title="Hide Event"><i class="fa fa-times" aria-hidden="true"></i></a>
            <a href="home.php?op=pro_dtls_delete&id=<?php echo $row['pro_id'];?>" class="btn btn-xs btn-danger" title="Delete Event"><i class="fa fa-times" aria-hidden="true"></i></a>
            <!--<a href="home.php?op=pro_dtls_app&eid=<?php //echo $row['pro_id'];?>" class="btn btn-sm btn-warning">Applications</a>&nbsp;-->
            <!--<a href="home.php?op=pro_dtls_photo&eid=<?php //echo $row['pro_id'];?>" class="btn btn-xs btn-info" title="Upload Photos"><i class="fa fa-film" aria-hidden="true"></i></a>-->			<a href="home.php?op=pro_dtls_fees&eid=<?php echo $row['pro_id'];?>" class="btn btn-xs btn-success" title="Manage Fees"><i class="fa fa-money" aria-hidden="true"></i></a>        </td>
		<td align="left" valign="top"><span class="style11"><?php echo $row['product_name'];?></span></td>
		<td align="left" valign="top"><span class="style11"><?php echo $row['product_location'];?></span></td>
		<!--<td align="left" valign="top"><?php //echo $row['product_features'];?></td>-->
		<!--<td align="left" valign="top" width="15%"><span class="style11"><?php //echo $row['product_price'];?>/-(1 Entry)<br />
          <?php //echo $row['product_bulk_price'];?>/-(2 Entries)</span></td>-->
		<td align="left" valign="top"><span class="style11"><?php echo $row['exidate'];?> to <?php echo $row['exidate1'];?></span></td>
		<!--<td align="left" valign="top"><span class="style11"><?php //echo $row1['category_name'];?></span></td>-->
		<td align="left" valign="top"><img src="pic_upload/<?php echo $row['model_pro_pic']; ?>" width="75px" height="50px" /></td>
		<td align="left" valign="top"><div align="center" class="style11"><?php if($row['product_pdf']<>""){ ?>View Catelogue</a><?php } ?></div></td>
		<!--<td align="left" valign="top"><?php //echo $row['brand_name'];?></td>
		<td align="left" valign="top"><span class="style11"><?php //echo $row['exitype'];?></span></td>
		<td align="left" valign="top"><span class="style11"><?php //echo $row['exi_photo_type'];?></span></td>-->
	  </tr>
<?php
	}
}else{
	echo '<tr><td colspan="11" align="left" valign="top">Data Not Found!</td></tr>';
}
?>
</tbody>

<tfoot><tr><td colspan="12">
    &nbsp;<a href="home.php?op=pro_details_entry">Add New</a>
</td>
</tr></tfoot>
</table>
</div>