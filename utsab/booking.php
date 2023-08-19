<?php include("common/head.php");?>
<?php
if(isset($_POST['submit']))
  {
  	$flag=1;
	echo "OK";
/*	foreach($_POST['fees_id'] as $key => $value)
    {
	   if($_POST['fees_qty'][$key]>0 )
	   {
	   $flag==1;
	   }
	}*/
  //if($flag>=0)
//  {
    $sql="INSERT INTO `event_booking_master`(`evbk_name`,`evbk_contact`, `evbk_email`,evbk_event,evbk_date)
  VALUES ('".$_POST['txtName']."','".$_POST['txtContact']."','".$_POST['txtEmail']."','".$_POST['eid']."','".date("d/m/y")."')";
	mysqli_query($dbhandle,$sql);
	$last_id=mysqli_insert_id($dbhandle);
	$code="UT".date("dmyhis").$last_id;
	$total=0;
	
	foreach($_POST['fees_id'] as $key => $value)
    {
	   if($_POST['fees_qty'][$key]>0 )
	   {
			  $sql="INSERT INTO `event_booking_details`(`evbk_dtls_mst_id`,`evbk_dtls_rate`, `evbk_dtls_qty`,`evbk_dtls_amt`,evbk_dtls_fees_id)
			  VALUES ('".$last_id."','".$_POST['fees_rate'][$key]."','".$_POST['fees_qty'][$key]."','".($_POST['fees_rate'][$key]*$_POST['fees_qty'][$key])."','".$_POST['fees_id'][$key]."')";
			mysqli_query($dbhandle,$sql);
			$total+=$_POST['fees_rate'][$key]*$_POST['fees_qty'][$key];
		}
     }
//	 echo $total;
	 $sql="UPDATE `event_booking_master` SET evbk_code='$code',evbk_gross='$total' where evbk_id='".$last_id."'";
	 mysqli_query($dbhandle,$sql);
	 //=======================
 $sql ="select * from product_details where `status`= 'ACTIVE' and pro_id='".$_POST['eid']."'";
 $sele= mysqli_query($dbhandle,$sql);
 $ii=0;
 while($res=mysqli_fetch_assoc($sele))
 {
 $ii++;
$msg="<table width='100%' border='0' cellspacing='0' cellpadding='0'>
  <tr>
	<td colspan='5' bgcolor='#FFFFFF'>
	<div align='right' class='style4'>
	<div align='left'>Name : ".$_POST['txtName']."</div>
	</div>
	</td>
  </tr>
  <tr>
	<td colspan='5' bgcolor='#FFFFFF'>
	<div align='right' class='style4'>
	  <div align='left'>Email : ". $_POST['txtEmail']."</div>
	</div>
	</td>
  </tr>
  <tr>
	<td colspan='5' bgcolor='#FFFFFF'>
	<div align='right' class='style4'>
	  <div align='left'>Contact No. : ". $_POST['txtContact']."</div>
	</div>
	</td>
  </tr>
  <tr>
	<td colspan='5' bgcolor='#FFFFFF'>
	<div align='right' class='style4'>
	  <div align='left'>Booking Number : ". $code."</div>
	</div>
	</td>
  </tr>
   <tr>
	<td colspan='5' bgcolor='#FFFFFF'>
	<div align='right' class='style4'>
	  <div align='left'>Event Name : ". $res['product_name']."</div>
	</div>
	</td>
  </tr>
 
  <tr>
	<td bgcolor='#CC0000'><div align='center' style='color: #FFFFFF;font-weight: bold;'>Sl</div></td>
	<td bgcolor='#CC0000'><div align='center' style='color: #FFFFFF;font-weight: bold;'>Booking Items</div></td>
	<td bgcolor='#CC0000'><div align='center' style='color: #FFFFFF;font-weight: bold;'>Booking Rate</div></td>
	<td bgcolor='#CC0000'><div align='center' style='color: #FFFFFF;font-weight: bold;'>Quantity</div></td>
	<td bgcolor='#CC0000'><div align='center' style='color: #FFFFFF;font-weight: bold;'>Amount</div></td>
  </tr>";
 
 $sql ="select * from event_fees_master,event_booking_details where `status`= 'ACTIVE' and evbk_dtls_fees_id=sl and evbk_dtls_mst_id='".$last_id."'";
 $sele1= mysqli_query($dbhandle,$sql);
 $jj=0;
 while($res1=mysqli_fetch_assoc($sele1))
 {
 $jj++;
 
 $msg.= "<tr>
	<td style='border-color:#990000;border-style:solid;border-width:1px;padding:1%;width:10%;'><div align='center'>". $jj."</div></td>
	<td style='border-color:#990000;border-style:solid;border-width:1px;padding:1%;width:35%;'><div align='center'>". $res1['fees_name']."</div></td>
	<td style='border-color:#990000;border-style:solid;border-width:1px;padding:1%;width:15%;'><div align='center'>". $res1['fees_rate']."</div></td>
	<td style='border-color:#990000;border-style:solid;border-width:1px;padding:1%;width:20%;'><div align='center'>". $res1['evbk_dtls_qty']."</div></td>
	<td style='border-color:#990000;border-style:solid;border-width:1px;padding:1%;width:20%;'><div align='center'>". number_format($res1['evbk_dtls_qty']*$res1['fees_rate'],2)."</div></td>
  </tr>";
  }
 $msg.=" 
 <tr>
   <td colspan='3' bgcolor='#cc0000' style='border-color:#990000;border-style:solid;border-width:1px;padding:1%;width:10%;'><div align='center' style='color: #FFCC00;
	font-family: Verdana, Arial, Helvetica, sans-serif;	font-size: 10px;font-weight: bold;'>PAYMENT IS DUE. PLEASE PAY ONLINE</div></td>
   <td bgcolor='#cc0000' style='border-color:#990000;border-style:solid;border-width:1px;padding:1%;width:20%;'><div align='center' style='color: #FFFFFF;font-weight: bold;'>Total</div></td>
	<td style='border-color:#990000;border-style:solid;border-width:1px;padding:1%;width:20%;'><div align='center'>". number_format($total,2)."</div></td>
  </tr>
</table>";
 }
		try
		{
			$to="mail@utsab.nl,utsab.netherlands@gmail.com,info@jayantaroy.com";
//			$from="info"."@".$_SERVER['HTTP_HOST'];
			$from=$_POST['txtEmail'];

			$subject="Online Event Booking Enquiry";//$_POST['form_subject'];
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			$headers .= 'From: <'.$from.'>' . "\r\n";
			$headers .= 'Bcc: '.$_POST['txtEmail'] . "\r\n";
		
			mail($to,$subject,$msg,$headers);	
		}
		catch (Exception $e) 
		{
			/*echo "<script>";
				echo "window.location='contact.php?succ=0'";
			echo "</script>";*/
		} 
		//============================== 
//  }
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
<title>UTSAB Netherlands | Events</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="" />
<?php include("common/head.php");?>
<?php
 $sql ="select * from cms_master where status='ACTIVE' and `cms_tag` = 'home'";
 $sele= mysqli_query($dbhandle,$sql);
 while($res=mysqli_fetch_assoc($sele))
 {
	$str1=$res['cms_dtls'];/*strip_tags()*/
	$pic1=$res['cms_pic'];
 }
 ?>
<style type="text/css">
<!--
.style3 {
	color: #FFFFFF;
	font-weight: bold;
}
.style4 {color: #000; font-weight: bold; font-family: Verdana, Arial, Helvetica, sans-serif; }
.style5 {
	color: #FFCC00;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
	font-weight: bold;
}
-->
</style>
</head>
<body>
	<!-- w3-banner -->
	<div class="w3-banner jarallax">
        <!--<video autoplay muted loop id="myVideo">
          <source src="video 02_x264.mp4" type="video/mp4">
        </video>-->
		<div class="wthree-different-dot">
			<?php include("common/menu1.php"); ?>
			<!-- banner -->
			<?php //include("common/banner.php"); ?>
			<!-- //banner -->
		</div>
	</div>
	<!-- //w3-banner -->
	<!-- modal -->
	<!--<div class="modal about-modal fade" id="myModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header"> 
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						<h4 class="modal-title">New Party</h4>
					</div> 
					<div class="modal-body">
					<div class="agileits-w3layouts-info">
						<img src="images/g1.jpg" alt="" />
						<p>Duis venenatis, turpis eu bibendum porttitor, sapien quam ultricies tellus, ac rhoncus risus odio eget nunc. Pellentesque ac fermentum diam. Integer eu facilisis nunc, a iaculis felis. Pellentesque pellentesque tempor enim, in dapibus turpis porttitor quis. Suspendisse ultrices hendrerit massa. Nam id metus id tellus ultrices ullamcorper.  Cras tempor massa luctus, varius lacus sit amet, blandit lorem. Duis auctor in tortor sed tristique. Proin sed finibus sem.</p>
					</div>
				</div>
			</div>
		</div>
	</div>-->
	<!-- //modal -->
<!-- services -->
<!-- //services -->
	
	<!-- Clients -->
	<!--// Clients -->
<!-- register -->
	<!-- //register -->
<!-- Team section -->
<!-- //Team section -->
<!-- Stats -->
	<!-- //Stats -->

	 <!-- event schedule -->
                <div class="event-time " id="event">
                    <div class="container">
						<h3 class="heading-agileinfo" data-aos="zoom-in">Event Booking<span></span></h3>
                        <div class="testi-info">
                            <!-- Nav tabs -->
                            <!--<ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#testi" aria-controls="testi" role="tab" data-toggle="tab">2023</a>
                                </li>
                                <li role="presentation">
                                    <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">2017</a>
                                </li>
                                <li role="presentation">
                                    <a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">2018</a>
                                </li>
                            </ul>-->
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="testi">
                                    <div class="eventmain-info">
                                        <div class="event-subinfo" style="text-align:center">
                                        <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                                        <input type="hidden" name="eid" value="<?php echo $_REQUEST['eid'];?>">

                                        <?php
										 $sql ="select * from product_details where `status`= 'ACTIVE' and pro_id='".$_POST['eid']."'";
										 $sele= mysqli_query($dbhandle,$sql);
										 $ii=0;
										 while($res=mysqli_fetch_assoc($sele))
										 {
										 $ii++;
										?>
                                            <div class="col-md-8 w3-latest-grid" style="text-align:center;margin-left:16%">
                                                <div class="col-md-12 col-xs-12 event-left" data-aos="fade-left" style="text-align:center">
                                                    <h5><?php echo $res['product_name']; ?></h5>
                                                   <!-- <p><?php echo $res['product_features']; ?></p>-->
                                                    <h6><span class="icon-event" aria-hidden="true">venue:</span><font color="#330066"><?php echo $res['product_location']; ?></font></h6>
                                                    <h6><span class="icon-event" aria-hidden="true">Date & Time:</span><font color="#330066"><?php echo $res['exidate']; ?></font></h6>
                                                    <p>                                                    </p>
                                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                      <tr>
                                                        <td colspan="5" bgcolor="#FFFFFF">
                                                        <div align="right" class="style4">
                                                        <div align="left">Name : <?php echo $_POST['txtName'];?></div>
                                                        </div>                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td colspan="5" bgcolor="#FFFFFF">
                                                        <div align="right" class="style4">
                                                          <div align="left">Email : <?php echo $_POST['txtEmail'];?></div>
                                                        </div>                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td colspan="5" bgcolor="#FFFFFF">
                                                        <div align="right" class="style4">
                                                          <div align="left">Contact No. : <?php echo $_POST['txtContact'];?></div>
                                                        </div>                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td colspan="5" bgcolor="#FFFFFF">
                                                        <div align="right" class="style4">
                                                          <div align="left">Booking Number : <?php echo $code;?></div>
                                                        </div>                                                        </td>
                                                      </tr>
                                                      
                                                      <tr>
                                                        <td bgcolor="#CC0000"><div align="center" class="style3">Sl</div></td>
                                                        <td bgcolor="#CC0000"><div align="center" class="style3">Booking Items</div></td>
                                                        <td bgcolor="#CC0000"><div align="center" class="style3">Booking Rate</div></td>
                                                        <td bgcolor="#CC0000"><div align="center" class="style3">Quantity</div></td>
                                                        <td bgcolor="#CC0000"><div align="center" class="style3">Amount</div></td>
                                                      </tr>
                                                      <?php
													 $sql ="select * from event_fees_master,event_booking_details where `status`= 'ACTIVE' and evbk_dtls_fees_id=sl and evbk_dtls_mst_id='".$last_id."'";
													 $sele1= mysqli_query($dbhandle,$sql);
													 $jj=0;
													 while($res1=mysqli_fetch_assoc($sele1))
													 {
													 $jj++;
													  ?>
                                                      <tr>
                                                        <td style="border-color:#990000;border-style:solid;border-width:1px;padding:1%;width:10%;"><div align="center"><?php echo $jj; ?><input type="hidden" name="fees_id[]" value="<?php echo $res1['sl'];?>"></div></td>
                                                        <td style="border-color:#990000;border-style:solid;border-width:1px;padding:1%;width:35%;"><div align="center"><?php echo $res1['fees_name']; ?></div></td>
                                                        <td style="border-color:#990000;border-style:solid;border-width:1px;padding:1%;width:15%;"><div align="center"><?php echo $res1['fees_rate']; ?></div></td>
                                                        <td style="border-color:#990000;border-style:solid;border-width:1px;padding:1%;width:20%;"><div align="center"><?php echo $res1['evbk_dtls_qty']; ?></div></td>
                                                        <td style="border-color:#990000;border-style:solid;border-width:1px;padding:1%;width:20%;"><div align="center"><?php echo number_format($res1['evbk_dtls_qty']*$res1['fees_rate'],2); ?></div></td>
                                                      </tr>
                                                     <?php } ?>
                                                     <tr>
                                                       <td colspan="3" bgcolor="#cc0000" style="border-color:#990000;border-style:solid;border-width:1px;padding:1%;width:10%;"><div align="center" class="style5">PAYMENT IS DUE. PLEASE PAY ONLINE</div></td>
                                                       <td bgcolor="#cc0000" style="border-color:#990000;border-style:solid;border-width:1px;padding:1%;width:20%;"><div align="center" class="style3">Total</div></td>
                                                        <td style="border-color:#990000;border-style:solid;border-width:1px;padding:1%;width:20%;"><div align="center"><?php echo number_format($total,2); ?><input type="hidden" name="txtGross" value="<?php echo $total;?>"></div></td>
                                                      </tr>
                                                  </table>
                                                    <br>
                                                  <p><input name="pay_now" id="pay_now" type="submit" value="Pay Online" class="btn btn-danger"></p>
                                              </div>
                                                <div class="clearfix"> </div>
                                            </div>
          		<input type='hidden' name='business' value='eminent.analyst@gmail.com'> 
                <input type='hidden' name='item_name' value='Utsab Event Booking : <?php echo $res['product_name']; ?>'> 
                <input type='hidden' name='item_number' value='<?php echo $code;?>'> 
                <input type='hidden' name='amount' value='<?php echo $total;?>'> 
                <input type='hidden' name='no_shipping' value='1'> 
                <input type='hidden' name='currency_code' value='EUR'> 
                <input type='hidden' name='notify_url' value='https://utsab.nl/notify.php'>
                <input type='hidden' name='cancel_return' value='https://utsab.nl/cancel.php'>
            	<input type='hidden' name='return' value='https://utsab.nl/return.php'>
         	    <input type="hidden" name="cmd" value="_xclick"> 


<!--<input type="hidden" name="no_note" value="1" />
<input type="hidden" name="lc" value="UK" />
<input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynow_LG.gif:NonHostedGuest" />
<input type="hidden" name="first_name" value="<?php echo $_POST['txtName'];?>" />
<input type="hidden" name="last_name" value="" />
<input type="hidden" name="payer_email" value="<?php echo $_POST['txtEmail'];?>" />
<input type="hidden" name="item_number" value="<?php echo $code;?>" / >-->
                                        <?php
										}
										?>
                                        </form>
                                        <div class="clearfix"> </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
     
    <!-- //event schedule -->
	<!-- Portfolio section -->

<!-- /Portfolio section -->

<!-- map -->
	<div class="frame">
		<iframe src="<?php echo $map; ?>"  frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
<!-- //map -->
	<!-- footer -->
<?php include("common/footer.php"); ?>
	<!-- //footer -->

<?php include("common/foot.php"); ?>
</body>	
</html>
<?php 
}
?>