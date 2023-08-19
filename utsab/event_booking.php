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
.style4 {color: #CC0000; font-weight: bold; font-family: Verdana, Arial, Helvetica, sans-serif; }
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
                                        <form action="booking.php" method="post">
                                        <input type="hidden" name="eid" value="<?php echo $_GET['eid'];?>">

                                        <?php
										 $sql ="select * from product_details where `status`= 'ACTIVE' and pro_id='".$_GET['eid']."'";
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
                                                        <td colspan="4" bgcolor="#FFFFFF"><div align="right" class="style4">
                                                          <div align="left">Name : <input type="text" name="txtName" id="txtName" class="form-control" required>
                                                          </div>
                                                        </div></td>
                                                      </tr>
                                                      <tr>
                                                        <td colspan="4" bgcolor="#FFFFFF"><div align="right" class="style4">
                                                          <div align="left">Email : <input type="text" name="txtEmail" id="txtEmail" class="form-control" required></div>
                                                        </div></td>
                                                      </tr>
                                                      <tr>
                                                        <td colspan="4" bgcolor="#FFFFFF"><div align="right" class="style4">
                                                          <div align="left">Contact No. : <input type="text" name="txtContact" id="txtContact" class="form-control" required></div>
                                                        </div></td>
                                                      </tr>
                                                      
                                                      <tr>
                                                        <td bgcolor="#CC0000"><div align="center" class="style3">Sl</div></td>
                                                        <td bgcolor="#CC0000"><div align="center" class="style3">Booking Items</div></td>
                                                        <td bgcolor="#CC0000"><div align="center" class="style3">Booking Rate</div></td>
                                                        <td bgcolor="#CC0000"><div align="center" class="style3">Quantity</div></td>
                                                      </tr>
                                                      <?php
													 $sql ="select * from event_fees_master where `status`= 'ACTIVE' and fees_event='".$_GET['eid']."'";
													 $sele1= mysqli_query($dbhandle,$sql);
													 $jj=0;
													 while($res1=mysqli_fetch_assoc($sele1))
													 {
													 $jj++;
													  ?>
                                                      <tr>
                                                        <td style="border-color:#990000;border-style:solid;border-width:1px;padding:1%;width:10%;"><div align="center"><?php echo $jj; ?><input type="hidden" name="fees_id[]" value="<?php echo $res1['sl'];?>"></div></td>
                                                        <td style="border-color:#990000;border-style:solid;border-width:1px;padding:1%;width:45%;"><div align="center"><?php echo $res1['fees_name']; ?></div></td>
                                                        <td style="border-color:#990000;border-style:solid;border-width:1px;padding:1%;width:20%;"><div align="center"><?php echo $res1['fees_rate']; ?><input type="hidden" name="fees_rate[]" value="<?php echo $res1['fees_rate'];?>"></div></td>
                                                        <td style="border-color:#990000;border-style:solid;border-width:1px;padding:1%;width:25%;">
                                                        <div align="center">
                                                        <input name="fees_qty[]" type="number" value="0" step="1" min="0" style="width:30%;">
                                                        </div>                                                        </td>
                                                      </tr>
                                                     <?php } ?>
                                                    </table>
                                                    <br>
                                                  <p><input name="submit" type="submit" value="Purchase" class="btn btn-danger"></p>
                                              </div>
                                                <div class="clearfix"> </div>
                                            </div>
<!--                                        <div class="col-md-6  w3-latest-grid">
                                                <div class="col-md-6 col-xs-6 event-right eventtxt-right" data-aos="fade-down">
                                                   <img src="images/g8.jpg" class="img-responsive" alt="">
                                                </div>
                                                <div class="col-md-6 col-xs-6 event-left" data-aos="fade-right">
                                                    <h5>Durga Pujor Nahobot (দুর্গা পুজোর নহবত)</h5>
                                                    <p>Celebration of Durgotsab 2023 with Utsab</p>
                                                    <h6><span class="icon-event" aria-hidden="true">venue:</span><font color="#330066">Melody Party Center, Galvanistraat 34, 3029AD, Rotterdam</font></h6>
                                                    <h6><span class="icon-event" aria-hidden="true">Date & Time:</span><font color="#330066">Friday, October 20, 2023 - Sunday, October 22, 2023</font></h6>
                                                    <a href="#" >Book Now</a><!--data-toggle="modal" data-target="#myModal"
                                                </div>
                                                <div class="clearfix"> </div>
                                            </div>
-->                                            
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