<?php
include '../config/db.php';
?>

<select name="cat_id"id="cat_id" class="form-control" >
  <option selected value="0">----Choose one-----</option>
<?php
	 $sql="select DISTINCT * from `product_category` where status='ACTIVE'";
	 $res=mysqli_query($dbhandle,$sql);
	 $cnt=mysqli_num_rows($res);
	if($cnt>0)
	{
		  while($row=mysqli_fetch_assoc($res))
			{
			   
?>
             <option value="<?php echo $row['sl']?> "><?php echo $row['category_name']?></option>
<?php }} ?>
</select>