<!DOCTYPE html>
<html lang="en">
<head>
<title>UTSAB Netherlands | Gallery</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="" />
<?php include("common/head.php");?>
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

<!-- services -->
<!-- //services -->
	
	<!-- Portfolio section -->
	<section class="portfolio-agileinfo" id="gallery">
		<div class="container">
			<h3 class="heading-agileinfo" data-aos="zoom-in">Gallery<!--<span>Events Is A Professionally Managed Event</span>--></h3>
				<div class="gallery-grids">
					<div class="tab_img">
                    <?php
					 $sql ="select * from product_details where `status`<> 'DELETE' order by event_year DESC,pro_id DESC";
					 $sele= mysqli_query($dbhandle,$sql);
					 $ii=0;
					 while($res=mysqli_fetch_assoc($sele))
					 {
					 $ii++;
					?>
						<div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids" data-aos="zoom-in">
							<a href="photos.php?eid=<?php echo $res['pro_id']; ?>" class="" data-lb-group="1">
								<img src="cms/pic_upload/<?php echo $res['model_pro_pic']; ?>" class="img-responsive" alt="w3ls" />
								<div class="b-wrapper">
									<!--<i class="fa fa-search-plus" aria-hidden="true"></i>-->
									<h3 style="color:#FFFFFF"><?php echo $res['product_name']; ?></h3>
                                    <h4 style="color:#FFCC00"><?php echo $res['event_year']; ?></h4>
								</div>
							</a>
						</div>
					<?php
					 if($ii>=4)
					 {
					 $ii=0;
					 echo "<div class='clearfix'> </div>";
					 }
					}
					?>	
						<div class="clearfix"> </div>
					</div>
				
			</div>
		</div>
</section>
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