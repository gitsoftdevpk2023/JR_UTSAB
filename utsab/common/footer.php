	<div class="footer">
	<div class="container">
		<div class="f-bg-w3l">
		<div class="col-md-4 w3layouts_footer_grid" data-aos="fade-right">
					<h2>Contact Information</h2>
					    <ul class="con_inner_text">
							<li><span class="fa fa-map-marker" aria-hidden="true"></span><?php echo $address; ?></li>
							<li><span class="fa fa-phone" aria-hidden="true"></span> <a href="#"><?php echo $contact_no; ?></a></li>
							<li><span class="fa fa-phone" aria-hidden="true"></span> <a href="#"><?php echo $mobile_no; ?></a></li>
						</ul>

					<ul class="social_agileinfo">
						<li><a href="<?php echo $fb; ?>" class="w3_facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="<?php echo $tw; ?>" class="w3_twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="<?php echo $inst; ?>" class="w3_instagram"><i class="fa fa-instagram"></i></a></li>
						<li><a href="<?php echo $yt; ?>" class="w3_google"><i class="fa fa-youtube"></i></a></li>
					</ul>
				</div>
				<div class="col-md-4 w3layouts_footer_grid" data-aos="fade-down">
					<h2>Quick Links</h2>
					<!--<p>By subscribing to our mailing list you will always get latest news from us.</p>-->
					<!--<form action="#" method="post">
						<input type="email" name="Email" placeholder="Enter your email..." required="">
						<button class="btn1"><i class="fa fa-envelope-o" aria-hidden="true"></i></button>
						<div class="clearfix"> </div>
					</form>-->
                    <ul>
                    <li><a style="color:#FFFFFF" href="index.php">Home</a></li>
                    <li><a style="color:#FFFFFF" href="about.php">About Us</a></li>
                    <li><a style="color:#FFFFFF" href="gallery.php">Gallery</a></li>
                    <li><a style="color:#FFFFFF" href="sponcorship.php">Sponsorships</a></li>
                    <li><a style="color:#FFFFFF" href="contact.php">Contact Us</a></li>
                    <li><a style="color:#FFFFFF" href="testimony.php">Testimonials</a></li>
                    <li><a style="color:#FFFFFF" href="privacy.php">Privacy Policy</a></li>
                    <li><a style="color:#FFFFFF" href="terms.php">Terms & Conditions</a></li>
                    <li><a style="color:#FFFFFF" href="refund.php">Refund Policy</a></li>
                    </ul>
				</div>
				<div class="col-md-4 w3layouts_footer_grid" data-aos="fade-left">
					<h3>Recent Events</h3>
					  <!--<ul class="con_inner_text midimg">
						<li><a href="#"><img src="images/g2.jpg" alt="" class="img-responsive" /></a></li>
					    <li><a href="#"><img src="images/g3.jpg" alt="" class="img-responsive" /></a></li>
						<li><a href="#"><img src="images/g4.jpg" alt="" class="img-responsive" /></a></li>
						<li><a href="#"><img src="images/g5.jpg" alt="" class="img-responsive" /></a></li>
						<li><a href="#"><img src="images/g6.jpg" alt="" class="img-responsive" /></a></li>
					    <li><a href="#"><img src="images/g7.jpg" alt="" class="img-responsive" /></a></li>
						<li><a href="#"><img src="images/g8.jpg" alt="" class="img-responsive" /></a></li>
						<li><a href="#"><img src="images/g1.jpg" alt="" class="img-responsive" /></a></li>
				     </ul>-->
					<ul>
                    <?php
					 $sql ="select * from product_details where `status`= 'ACTIVE' order by pro_id";
					 $sele= mysqli_query($dbhandle,$sql);
					 $ii=0;
					 while($res=mysqli_fetch_assoc($sele))
					 {
					 $ii++;
					?>  
                    <li><a style="color:#FFFFFF" href="event.php?eid=<?php echo $res['pro_id']; ?>"><?php echo $res['product_name']; ?></a></li>
                    <!--<li><a style="color:#FFFFFF" href="#">Durga Pujor Nahobot (দুর্গা পুজোর নহবত)</a></li>-->
                    <?php
					}
					?>
                    </ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			</div>
			<p class="copyright1" style="color:#FFFFFF;text-align:center">© 2023 Utsab. All Rights Reserved | Design by <a style="color:#FFFFFF" href="https://tekmagus.com/" target="_blank">Tekmagus Infotech</a></p>
	</div>