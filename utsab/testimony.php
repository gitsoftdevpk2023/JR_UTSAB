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
	
	<!-- Portfolio section -->
<!-- /Portfolio section -->
	<!-- Clients -->
	<div class="clients-main1 jarallax" id="client">
    <br><br>
		<div class="container">
			<!-- Owl-Carousel -->
			<h3 class="heading-agileinfo" data-aos="zoom-in">TESTIMONIALS<!--<span class="thr">Events Is A Professionally Managed Event </span>--></h3>
			<div class="cli-ent" data-aos="fade-down">
				<section class="slider">
						<div class="flexslider">
							<ul class="slides">
<?php
	$sql="select * from testi_master where testi_master.status='ACTIVE' order by id";
	$res=mysqli_query($dbhandle,$sql);
	$cnt=mysqli_num_rows($res);
	if($cnt>0)
{
	$i=0;
	while($row=mysqli_fetch_assoc($res))
	{
		$i++;
?>
								<li>
									<div class="item g1">
										<div class="agile-dish-caption">
										<img class="lazyOwl" src="cms/testi_upload/<?php echo $row['testi_pic']; ?>" alt="" />
											<h4><?php echo $row['testi_name'];?></h4>
											<!--<span style="color:#000066">Lorem Ipsum</span>-->
										</div>
										<div class="clearfix"></div>
										<p class="para-w3-agile" style="color:#000066"><span class="fa fa-quote-left" aria-hidden="true"></span><?php echo $row['testi_details'];?></p>
									</div>
								</li>
<?php
	}
}
?>

							</ul>
						</div>
				</section>
			</div>
			<!--// Owl-Carousel -->
		</div>
        <br><br>
	</div>
	<!--// Clients -->
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