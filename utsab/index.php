<!DOCTYPE html>
<html lang="en">
<head>
<title>UTSAB Netherlands | Home</title>
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
</head>
<body>
	<!-- w3-banner -->
	<div class="w3-banner jarallax">
        <video autoplay muted loop id="myVideo">
          <source src="video 02_x264.mp4" type="video/mp4">
        </video>
		<div class="wthree-different-dot">
			<?php include("common/menu.php"); ?>
			<!-- banner -->
			<?php include("common/banner.php"); ?>
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
	<div class="banner-bottom" id="about">
		<div class="container">
			<h3 class="heading-agileinfo" data-aos="zoom-in">About UTSAB<!--<span>Events Is A Professionally Managed Event</span>--></h3>
			<div class="w3ls_banner_bottom_grids">
				<div class="col-md-4 agileits_services_grid" data-aos="fade-right">
					<div class="w3_agile_services_grid1">
						<img src="images/g1.jpg" alt=" " class="img-responsive">
						<div class="w3_blur"></div>
					</div>
					<!--<h3>SPECIAL PROGRAMS</h3>
					<p>Enjoy the event throughout the entire night and do not sleep till the morning easy.</p>
					
					<div class="w3layouts_more">
						<a href="#book" class="scroll">Book Now</a>
					</div>-->
				</div>
				<div class="col-md-8 agileits_services_grid" data-aos="fade-up">
					<!--<div class="w3_agile_services_grid1">
						<img src="images/g2.jpg" alt=" " class="img-responsive">
						<div class="w3_blur"></div>
					</div>
					<h3>TOP PROGRAMS</h3>-->
					<p style="color:#330066; font-family:Geneva, Arial, Helvetica, sans-serif"><?php echo $str1; ?></p>
					
					<!--<div class="w3layouts_more">
						<a href="#book" class="scroll">Book Now</a>
					</div>-->
				</div>
				<!--<div class="col-md-4 agileits_services_grid" data-aos="fade-left">
					<div class="w3_agile_services_grid1">
						<img src="images/g3.jpg" alt=" " class="img-responsive">
						<div class="w3_blur"></div>
					</div>
					<h3>NON-STOP PARTY</h3>
					<p>Enjoy the event throughout the entire night and do not sleep till the morning easy.</p>
					
					<div class="w3layouts_more">
						<a href="#book" class="scroll">Book Now</a>
					</div>
				</div>-->
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- services -->
<!-- //services -->
	
	<!-- Portfolio section -->
<!-- /Portfolio section -->
	<!-- Clients -->
<!-- register -->
	<!-- //register -->
<!-- Team section -->
<!-- //Team section -->
<!-- Stats -->
	<!-- //Stats -->

	 <!-- event schedule -->
                <div class="event-time " id="event">
                    <div class="container">
						<h3 class="heading-agileinfo" data-aos="zoom-in">Upcoming Events<span></span></h3>
                        <div class="testi-info">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#testi" aria-controls="testi" role="tab" data-toggle="tab">2023</a>
                                </li>
                                <!--<li role="presentation">
                                    <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">2017</a>
                                </li>
                                <li role="presentation">
                                    <a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">2018</a>
                                </li>-->
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="testi">
                                    <div class="eventmain-info">
                                        <div class="event-subinfo">
                                        <?php
										 $sql ="select * from product_details where `status`<> 'DELETE' order by pro_id";
										 $sele= mysqli_query($dbhandle,$sql);
										 $ii=0;
										 while($res=mysqli_fetch_assoc($sele))
										 {
										 $ii++;
										?>
                                            <div class="col-md-6  w3-latest-grid">
                                                <div class="col-md-6 col-xs-6 event-right eventtxt-right" data-aos="fade-down">
                                                   <img src="cms/pic_upload/<?php echo $res['model_pro_pic']; ?>" class="img-responsive" alt="">
                                                </div>
                                                <div class="col-md-6 col-xs-6 event-left" data-aos="fade-right">
                                                    <h5><?php echo $res['product_name']; ?></h5>
                                                    <p><?php echo $res['product_features']; ?></p>
                                                    <h6><span class="icon-event" aria-hidden="true">venue:</span><font color="#330066"><?php echo $res['product_location']; ?></font></h6>
                                                    <h6><span class="icon-event" aria-hidden="true">Date & Time:</span><font color="#330066"><?php echo $res['exidate']; ?></font></h6>
                                                    <a href="event.php?eid=<?php echo $res['pro_id']; ?>" >Book Now</a><!--data-toggle="modal" data-target="#myModal"-->
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
                                        <div class="clearfix"> </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
     
    <!-- //event schedule -->

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