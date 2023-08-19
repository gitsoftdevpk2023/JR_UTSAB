<!DOCTYPE html>
<html lang="en">
<head>
<title>UTSAB Netherlands | Privacy Policy</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="" />
<?php include("common/head.php");?>
<?php
 $sql ="select * from content_master where status='ACTIVE' and `id` = 4";
 $sele= mysqli_query($dbhandle,$sql);
 while($res=mysqli_fetch_assoc($sele))
 {
	$str1=strip_tags($res['details']);
	$pic1=$res['pic'];
 }

 ?>
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
			<?php //include("common/banner1.php"); ?>
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
			<h3 class="heading-agileinfo" data-aos="zoom-in">UTSAB Privacy (GDPR) Policy<!--<span>Events Is A Professionally Managed Event</span>--></h3>
			<div class="w3ls_banner_bottom_grids">
				<div class="col-md-4 agileits_services_grid" data-aos="fade-right">
					<div class="w3_agile_services_grid1">
						<img src="images/g1.jpg" alt=" " class="img-responsive">
						<div class="w3_blur"></div>
					</div>
				</div>
				<div class="col-md-8 agileits_services_grid" data-aos="fade-up">
					<ol>
					  <li> UTSAB may need to collect some personal details like full name, address, email id, phone number, bank account number and copy of identity card of the people who would attend an event or purchase ticket for an event organized by UTSAB. </li>
					  <li>However, UTSAB is determined to keep this personal information in strict confidence and will never share these with any third party without the consent of the relevant person/s. </li>
					  <li>UTSAB will collect the above-mentioned personal information only for its own promotion before the event, collecting feedback after the event and sending out communications about UTSAB and its events. </li>
					  <li>UTSAB is committed to maintain privacy of all its members, participants and attendees at all times </li>
				  </ol>
			    <!--<br><br>-->
                    <!--<p style="color:#330066; font-family:Geneva, Arial, Helvetica, sans-serif;text-align:justify"><?php //echo $str5; ?></p>-->
			  </div>
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