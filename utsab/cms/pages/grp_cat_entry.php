<?php
	if(isset($_POST['Submit']))
	{
		$cat_name =$_POST['cat_name'];
		$main_cat =$_POST['main_cat'];
				
		$sql="INSERT INTO grp_cat(`grp_cat_name`,`grp_main_cat_id`,`grp_cat_status`)VALUES ('$cat_name','$main_cat','ACTIVE')";
			mysqli_query($dbhandle,$sql);
			echo "<script>";
				echo "window.location='home.php?op='";
			echo "</script>";
			
		
	}else{
?>
<form class="form-horizontal"name="add_cat_frm" action="#" method="post" onSubmit="return v.exec()">
<table id="data_table" class="display" width="75%" border="0" align="center">
<thead>
  <tr>
    <td colspan="2">Product Category  Entry</td>
  </tr>
</thead>
<tbody>
  
  <tr>
    <td width="30%">Main Category</td>
    <td width="70%">
		<select name="main_cat"id="main_cat">
        <option selected value="sl">----Choose one-----</option>
<?php
	 $sql="select DISTINCT * from `main_cat` where main_cat_status='ACTIVE'";
	 $res=mysqli_query($dbhandle,$sql);
	 $cnt=mysqli_num_rows($res);
	if($cnt>0)
	{
		  while($row=mysqli_fetch_assoc($res))
			{
			   
?>
                        	<option value="<?php echo $row['main_cat_id']?> "><?php echo $row['main_cat_name']?></option>
<?php }} ?>
          </select>     </td>
  </tr>
  <tr>
    <td width="30%">Category Name</td>
    <td width="70%">
		<div id="t_cat_name"><input class="form-control" type="text" name="cat_name" /></div>	</td>
  </tr>
  <tr>
    <td width="30%">&nbsp;</td>
    <td width="70%">
		<input class="form-control btn-success" type="submit" name="Submit" value="Submit" />	</td>
  </tr>
</tbody>
</table>
</form>
<script>

var a_fields = {
	'cat_name'				: {'l':'CATEGORY NAME','r':true,'t':'t_cat_name'}
		
}

var v = new validator('add_cat_frm', a_fields);

</script>
<?php }?>