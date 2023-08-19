<!DOCTYPE html>
<html lang="en">
<head>
<title>UTSAB Netherlands | About</title>
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
 $sql ="select * from content_master where status='ACTIVE' and `id` = 5";
 $sele= mysqli_query($dbhandle,$sql);
 while($res=mysqli_fetch_assoc($sele))
 {
	$str2=$res['details'];//strip_tags
	$pic2=$res['pic'];
 }
 $sql ="select * from content_master where status='ACTIVE' and `id` = 6";
 $sele= mysqli_query($dbhandle,$sql);
 while($res=mysqli_fetch_assoc($sele))
 {
	$str3=$res['details'];//strip_tags
	$pic3=$res['pic'];
 }
 $sql ="select * from content_master where status='ACTIVE' and `id` = 7";
 $sele= mysqli_query($dbhandle,$sql);
 while($res=mysqli_fetch_assoc($sele))
 {
	$str4=$res['details'];//strip_tags
	$pic4=$res['pic'];
 }
 $sql ="select * from content_master where status='ACTIVE' and `id` = 8";
 $sele= mysqli_query($dbhandle,$sql);
 while($res=mysqli_fetch_assoc($sele))
 {
	$str5=strip_tags($res['details']);
	$pic5=$res['pic'];
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
			<h3 class="heading-agileinfo" data-aos="zoom-in">About UTSAB<!--<span>Events Is A Professionally Managed Event</span>--></h3>
			<div class="w3ls_banner_bottom_grids">
				<div class="col-md-4 agileits_services_grid" data-aos="fade-right">
					<div class="w3_agile_services_grid1">
						<img src="images/g1.jpg" alt=" " class="img-responsive">
						<div class="w3_blur"></div>
					</div>
				</div>
				<div class="col-md-8 agileits_services_grid" data-aos="fade-up">
					<p style="color:#330066; font-family:Geneva, Arial, Helvetica, sans-serif;text-align:justify"><?php echo $str1; ?></p>
					<!--<br><br>-->
                    <p style="color:#330066; font-family:Geneva, Arial, Helvetica, sans-serif;text-align:justify"><?php echo $str5; ?></p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
    
	<div class="banner-bottom" id="about">
		<div class="container">
			<!--<h3 class="heading-agileinfo" data-aos="zoom-in">Our Mission<!--<span>Events Is A Professionally Managed Event</span></h3>-->
			<div class="w3ls_banner_bottom_grids">
				<!--<div class="col-md-4 agileits_services_grid" data-aos="fade-right">
					<div class="w3_agile_services_grid1">
						<img src="images/g1.jpg" alt=" " class="img-responsive">
						<div class="w3_blur"></div>
					</div>
				</div>-->
				<div class="col-md-6 agileits_services_grid" data-aos="fade-up">
                    <h3 class="heading-agileinfo" data-aos="zoom-in">Our Mission</h3>
					<p style="color:#330066; font-family:Geneva, Arial, Helvetica, sans-serif;text-align:justify"><?php echo $str2; ?></p>
				</div>
				<div class="col-md-6 agileits_services_grid" data-aos="fade-up">
                    <h3 class="heading-agileinfo" data-aos="zoom-in">Our Vision</h3>
					<p style="color:#330066; font-family:Geneva, Arial, Helvetica, sans-serif;text-align:justify"><?php echo $str3; ?></p>
				</div>
				<div class="clearfix"> </div>
				<div class="col-md-12 agileits_services_grid" data-aos="fade-up">
                    <h3 class="heading-agileinfo" data-aos="zoom-in">Message from President</h3>
					<!--<h3 style="color:#330066; font-family:Geneva, Arial, Helvetica, sans-serif;text-align:justify"><em><strong>Pranesh Chatterjee</strong></em></h3>-->
					<p style="color:#330066; font-family:Geneva, Arial, Helvetica, sans-serif;"><ol><?php echo $str4; ?></ol></p>
			  </div>
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
<section class="team" id="team">
	<div class="container">
		<h3 class="heading-agileinfo" data-aos="zoom-in">Utsab Members<!--<span>Events Is A Professionally Managed Event</span>--></h3>
		<div class="team-grid-top">
			<?php
                $sql="select * from team_master where team_master.team_status='ACTIVE' and team_type=1 order by team_id";
                $res=mysqli_query($dbhandle,$sql);
                $i=0;
                $j=0;
                while($row=mysqli_fetch_assoc($res))
                {
                    $i++;	
                    $j++;
            ?>        
                    
                        <div class="col-md-4 team1" data-aos="fade-right">
                            <div class="inner-team1" style="background-color:#FFFFFF;color:#000066">
                            <img src="cms/team_upload/<?php echo $row['team_pic']; ?>" alt="" />
                            <h3 style="color:#000099"><?php echo $row['team_name'];?></h3>
                            <!--<h4>Lorem</h4>-->
                            <p style="font-size:90%;text-align:justify; padding:2%;color:#330066;background-color:#FFFFFF"><?php echo $row['team_details'];?></p>
                                <!--<div class="team-social">
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                    <a href="#"><i class="fa fa-pinterest-p"></i></a>
                                </div>-->
                            </div>
                        </div>
            <?php
            if($j>=3)
            {
            ?>
            <div class="clearfix"></div>
            <?php
            $j=0;
            }
                }            
            ?>            
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>

		<h3 class="heading-agileinfo" data-aos="zoom-in">Utsab Supporting Members<!--<span>Events Is A Professionally Managed Event</span>--></h3>
		<div class="team-grid-top">
			<?php
                $sql="select * from team_master where team_master.team_status='ACTIVE' and team_type=2 order by team_id";
                $res=mysqli_query($dbhandle,$sql);
                $i=0;
                $j=0;
                while($row=mysqli_fetch_assoc($res))
                {
                    $i++;	
                    $j++;
            ?>        
                    
                        <div class="col-md-2 team1" data-aos="fade-right">
                            <div class="inner-team1" style="background-color:#FFFFFF;color:#000066">
                            <img src="cms/team_upload/<?php echo $row['team_pic']; ?>" alt="" />
                            <h3 style="color:#000099"><?php echo $row['team_name'];?></h3>
                            <!--<h4>Lorem</h4>-->
                            <p style="font-size:90%;text-align:justify; padding:2%;color:#330066;background-color:#FFFFFF"><?php echo $row['team_details'];?></p>
                                <!--<div class="team-social">
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                    <a href="#"><i class="fa fa-pinterest-p"></i></a>
                                </div>-->
                            </div>
                        </div>
            <?php
            if($j>=6)
            {
            ?>
            <div class="clearfix"></div>
            <?php
            $j=0;
            }
                }            
            ?>            
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>

		<h3 class="heading-agileinfo" data-aos="zoom-in">Utsab Next-Gen Members<!--<span>Events Is A Professionally Managed Event</span>--></h3>
		<div class="team-grid-top">
			<?php
                $sql="select * from team_master where team_master.team_status='ACTIVE' and team_type=3 order by team_id";
                $res=mysqli_query($dbhandle,$sql);
                $i=0;
                $j=0;
                while($row=mysqli_fetch_assoc($res))
                {
                    $i++;	
                    $j++;
            ?>        
                    
                        <div class="col-md-2 team1" data-aos="fade-right">
                            <div class="inner-team1" style="background-color:#FFFFFF;color:#000066">
                            <img src="cms/team_upload/<?php echo $row['team_pic']; ?>" alt="" />
                            <h3 style="color:#000099"><?php echo $row['team_name'];?></h3>
                            <!--<h4>Lorem</h4>-->
                            <p style="font-size:90%;text-align:justify; padding:2%;color:#330066;background-color:#FFFFFF"><?php echo $row['team_details'];?></p>
                                <!--<div class="team-social">
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                    <a href="#"><i class="fa fa-pinterest-p"></i></a>
                                </div>-->
                            </div>
                        </div>
            <?php
            if($j>=6)
            {
            ?>
            <div class="clearfix"></div>
            <?php
            $j=0;
            }
                }            
            ?>            
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
		
	</div>
</section>
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