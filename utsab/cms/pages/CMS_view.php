<?php

	$sql="select * from cms_master where `status`<> 'INACTIVE' order by sl";

	$res=mysqli_query($dbhandle,$sql);

	$cnt=mysqli_num_rows($res);

?><head>



<script language="JavaScript" src="js/validator.js"></script>

</head>







<form class="form-horizontal"name="chng_pass_frm" method="post" action="#" onsubmit="return v.exec()">
<div style="width:90%;overflow:scroll">
<table id="data_table" class="display" width="100%" align="center">

<thead>

  <tr>

		<td class="special" colspan="7" align="left">CMS LIST</td>

  </tr>

  <tr id="welcome" class="post">

    <th align="left" valign="top" width="6%"><a href='#' >Sl</a></th>

	<th align="left" valign="top" width="19%"><a href='#' >CMS tag</a></th>

	<!--<th align="left" valign="top" width="15%"><a href='#' >CMS Details Type</a></th>-->

	<th align="left" valign="top" width="33%"><a href='#' >CMS Details </a></th>

	<th align="left" valign="top"><a href='#' > Image</a></th>	

	<th align="left" valign="top" width="10%">Control</th>

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

		<td align="left" valign="top" width="19%"><?php echo $row['cms_tag'];?></td>

		<!--<td align="left" valign="top" width="15%"><?php echo $row['category_type'];?></td>-->

		<td align="left" valign="top" width="33%"><?php echo $row['cms_dtls'];?></td>

		<td align="left" valign="top"><img src="cms_upload/<?php echo $row['cms_pic']; ?>" height="50px" width="75px" /></td>

		<td align="left" valign="top" width="10%"><a href="home.php?op=CMS_edit&id=<?php echo $row['sl'];?>">&nbsp;Edit</a></td>

	  </tr>

<?php

	}

}else{

	echo '<tr><td colspan="7" align="left" valign="top">Data Not Found!</td></tr>';

}

?>

</tbody>

<tfoot><tr><td colspan="7">



</td>

</tr></tfoot>

</table>
</div>
</form>