<?php

	$id=base64_decode($_REQUEST['id']);
	$eid=$_GET['eid'];

	$sql="select * from  event_fees_master where sl='$id'";
	$res=mysqli_query($dbhandle,$sql);
	$row=mysqli_fetch_assoc($res);

	if(isset($_POST['Submit']))
	{
		$cat_name =$_POST['cat_name'];
//		$cat_name2 =$_POST['cat_name2'];
		$cat_description =$_POST['cat_description'];		
		$cat_rate =$_POST['cat_rate'];
		$eid =$_POST['eid'];

		$sql="UPDATE `event_fees_master` SET `fees_rate` =  '$cat_rate',`fees_name` =  '$cat_name',`fees_desc` =  '$cat_description' where sl='$id'";
		mysqli_query($dbhandle,$sql);

		//echo $sql;
		echo "<script>";
			echo "window.location='home.php?op=pro_dtls_fees&eid=$eid'";
		echo "</script>";
	}

?>

<form class="form-horizontal" name="edit_category_frm" enctype="multipart/form-data" action="#" method="post">

<table id="data_table" class="display" width="75%" border="0" align="center">

<thead>

  <tr>

    <td colspan="2"><strong>Edit Event Fees Info.</strong></td>
  </tr>
</thead>

<tbody>

    <tr>

    <td width="30%">  Name</td>

    <td width="70%"><input class="form-control" type="text" name="cat_name" value="<?php echo $row['fees_name'];?>"  />
    <input name="eid" type="hidden" value="<?php echo $eid; ?>" /></td>
  	</tr>

    <tr>
      <td>Rate</td>
      <td><input class="form-control" type="number" name="cat_rate" value="<?php echo $row['fees_rate'];?>"  />
      </td>
    </tr>
    <tr>

   <td width="30%">Details</td>

   <td width="70%"><textarea name="cat_description" class="form-control" rows="5" cols="20"><?php echo $row['fees_desc'];?></textarea>   </tr>



<!--	<tr>

    <td width="30%">Picture</td>

    <td colspan="2"><img src="serv_upload/<?php //echo $row['serv_pic']; ?>" width="100px" height="100px">

    <input class="form-control" type="file" name="model_pro_pic" />    </td>  

  </tr>-->

   <tr>

    <td width="30%">&nbsp;</td>

    <td width="70%"><input class="form-control btn-success" type="submit" name="Submit" value="Update" /></td>
  </tr>
</tbody>
</table>

</form>