<?php
	if(isset($_POST['cahnge_pass']))
	{
		$next_admin_user=$_SESSION['next_admin_user'];
		$old_pass	=$_POST['old_pass'];
		$re_pass	=$_POST['re_pass'];
		
		$sql="select * from log where user_name='$next_admin_user' and password='$old_pass'";
		$res=mysqli_query($dbhandle,$sql);
		$cnt=mysqli_num_rows($res);
		
		if($cnt>0)
		{
			$sql="update log set password='$re_pass' where user_name='$next_admin_user'";
			mysqli_query($dbhandle,$sql);
			
			echo "<script>";
				echo "window.location='home.php'";
			echo "</script>";
		}
		else
		{
			$error="Old password dose not match.";
			
			echo "<script>";
				echo "window.location='home.php?op=change_pass&error=$error'";
			echo "</script>";
		}
	}
?>
<style>
	.tfvHighlight
		{font-weight: bold; color: red;}
	.tfvNormal
		{font-weight: normal;	color: black;}
</style>

<script language="JavaScript" src="js/validator.js"></script>
<form class="form-horizontal"name="chng_pass_frm" method="post" action="#" onsubmit="return v.exec()">
<table id="data_table" class="display" width="50%" border="0" align="center">
<thead>
	<tr>
		<td class="special" colspan="2" align="left"><b>CHANGE PASSWORD</b></td>
	</tr>
</thead>
<tbody>
	<?php
		if (isset($_REQUEST['error'])){
			$error=$_REQUEST['error'];
		}else{
			$error="";
		}
		if($error!="")
		{
			echo "<tr><td class='box' colspan='2' align='center'>$error</td></tr>";
		}
	?>
	<tr>
		<td class="box" id="t_old_pass">Old Password : </td>
		<td align="right" class="box"><input class="form-control" type="password" name="old_pass" id="old_pass" /></td>
	</tr>
	<tr>
		<td class="box" id="t_new_pass">New Password : </td>
		<td align="right" class="box"><input class="form-control" type="password" name="new_pass" id="new_pass" /></td>
	</tr>
	<tr>
		<td class="box" id="t_re_pass">Retype Password : </td>
		<td align="right" class="box"><input class="form-control" type="password" name="re_pass" id="re_pass" /></td>
	</tr>
</tbody>
<tfoot>
	<tr>
	  <td colspan="2" align="right" class="box"><input class="form-control btn-success" type="submit" name="cahnge_pass" value="CHANGE PASSWORD" /></td>
	</tr>
</tfoot>
</table>
</form>
<script>
		var a_fields = {
			'old_pass'  :{'l':'Old Password','r':true,'t':'t_old_pass'},		
			'new_pass' 	: {'l':'New Password','r':true,'t':'t_new_pass','m':'re_pass'},
			're_pass'   : {'l':'Retype Password','r':true,'t':'t_re_pass'}
		},
		o_config = {'to_disable' : ['btnSubmit'],'alert' : 1}
		var v = new validator('chng_pass_frm', a_fields, o_config);

</script>