<?php
	
	include('../config/db.php'); 


	$id=$_POST['mid'];	
	$spinc=0;
	$sql="SELECT * FROM settings_master";
	$res=mysqli_query($dbhandle,$sql);
	while($row=mysqli_fetch_assoc($res))
	{ 
		$spinc=$row['settings_value7'];
		$returnAmt=$row['settings_value4'];
		$returnDays=$row['settings_value3'];
	}
	

    $sql="select * from cust_master where cust_payment ='NO' and cust_id ='".$id."'";
    $qur=mysqli_query($dbhandle,$sql);
    $row=mysqli_fetch_array($qur);

   // print_r($row);die;
    if($row['cust_payment']=="NO")  
    {
   		$sql="UPDATE cust_master SET cust_payment ='YES' WHERE cust_id  = $id";
       	$qur=mysqli_query($dbhandle,$sql);
		//-------------- sponcor income
		$spid=$row['cust_sponcor'];
		$memcode=$row['cust_code'];
		$dt=date('Y-m-d');
   		$sql="insert into sponcor_income_master (`spinc_date`,`spinc_member`,`spinc_child`,`spinc_amount`) VALUES ('$dt','$spid','$memcode','$spinc')";
       	$qur=mysqli_query($dbhandle,$sql);
		
		//-------------- level income
		$spidlv=$row['cust_sponcor'];
		for($ii=2;$ii<=7;$ii++)
		{
			$spidlvx="";
			$sql="select * from cust_master where cust_code ='".$spidlv."'";
			$resx=mysqli_query($dbhandle,$sql);
			while($rowx=mysqli_fetch_assoc($resx))
			{ 
				$spidlvx=$rowx['cust_sponcor'];
			}
			if($spidlvx<>"")
				$spidlv=$spidlvx;
			else
				break;
			$lvrate=0;
			$sql="select * from level_slab where lv_level ='".$ii."'";
			$resx=mysqli_query($dbhandle,$sql);
			while($rowx=mysqli_fetch_assoc($resx))
			{ 
				$lvrate=$rowx['lv_rate'];
			}
			$lv_amt=$lvrate*65/100;
			if($lv_amt>0)
			{
			$sql="insert into level_income_master (`spinc_date`,`spinc_member`,`spinc_child`,`spinc_amount`) VALUES ('$dt','$spidlv','$memcode','$lv_amt')";
			$qur=mysqli_query($dbhandle,$sql);
			}
		}
		//--------------- RoI generation
	$package_id =1;//$_POST['package_name'];// change it into package dropdown value
    $package_amount=65;//$_POST['package_amount'];// run select query from package_master fetch the package amount here
    $return_amount=$returnAmt;//$_POST['return_amount'];// run select query from package_master fetch the return amount here
//    $incentive_amount=$_POST['incentive_amount'];// run select query from package_master fetch the incentive amount here
    $psales_member_id=$id;
	
    $sql="INSERT INTO package_sales(`psales_package_id`, `psales_member_id`, `psales_date`) VALUES ('$package_id', '$psales_member_id', '$dt')"; 
    mysqli_query($dbhandle,$sql);
	$lastid=mysqli_insert_id($dbhandle);
	
	$sql="INSERT INTO main_wallet(`mwlt_member_id`,`mwlt_date`,`mwlt_amount`,`mwlt_type`, `mwlt_purpose`, `mwlt_source`,`mwlt_target`,`mwlt_reff_no`,`mwlt_remarks`) VALUES ('$psales_member_id','$dt','$package_amount','DEBIT','PURCHASE','$psales_member_id','$psales_member_id','$lastid','')"; 
      mysqli_query($dbhandle,$sql);

	  $y=0;
	  $unit=1;
	  $direct=0;
	  $d=1;
	  $deduction=0;
	  for($x=1;$x<=$returnDays;)
	  {
	  $y++;
	  $date=date_create($psales_date);
	  date_add($date,date_interval_create_from_date_string("$y days"));
	  $dates=date_format($date,"Y-m-d");
	  $date_name=date_format($date,"l");
	  $amount=$return_amount*$unit;//$package_amount*0.04;
	 /* if($date_name!="Saturday" && $date_name!="Sunday")
	  {*/
	  $x++;
	  $d++;
	  if($unit==6) $direct=1;
	  if($unit==9) $direct=2;
	  if($unit==12) $direct=3;
	  if($unit==15) $direct=5;
	  if($unit==18) $direct=7;
	  
	  if($d>8)
	  {
		$deduction=7*$amount;
	  	$d=1;
		$unit++;
	  }
	  else
	  {
	  	$deduction=0;
	  }
	  $sql="INSERT INTO package_return_master(`pret_member_id`, `pret_date`, `pret_day`, `pret_amount`, `pret_psales_id`,`pret_type`,`pret_deduction`,`pret_level`,`pret_direct`) VALUES ('$psales_member_id','$dates','$date_name','$amount','$lastid','DIRECT','$deduction','".($amount/5)."','$direct')"; 
      mysqli_query($dbhandle,$sql);
	  /*$sql="INSERT INTO package_return_master(`pret_member_id`, `pret_date`, `pret_amount`, `pret_psales_id`,`pret_type`) VALUES ('$psales_sponcor_id','$dates','$incentive_amount','$lastid','INDIRECT',0)"; 
      mysqli_query($dbhandle,$sql);*/
	  
	//  }
	  }	
    }
    

	 
?>