<!DOCTYPE html>
<html lang="en">
<head>
<title>UTSAB Netherlands | Contact Us</title>
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

<!-- /Portfolio section -->
	<!-- Clients -->
<!-- register -->
<br><br>
	<div class="portfolio-agileinfo" id="book">
		<div class="container">
          <div class="w3ls_banner_bottom_grids">
          
        	<div class="col-md-5 agileits_services_grid" data-aos="fade-up">
                <h3 class="heading-agileinfo" data-aos="zoom-in">Contact Us<!--<span class="thr">Events Is A Professionally Managed Event</span>--></h3>
                <div class="book-appointment" data-aos="zoom-in">
                    <ul class="con_inner_text" style="color:#330066; font-family:Geneva, Arial, Helvetica, sans-serif;">
							<li><span class="fa fa-map-marker" aria-hidden="true"></span><?php echo $address; ?></li>
							<li><span class="fa fa-phone" aria-hidden="true"></span> <a href="#"><?php echo $contact_no; ?></a></li>
							<li><span class="fa fa-phone" aria-hidden="true"></span> <a href="#"><?php echo $mobile_no; ?></a></li>
					</ul>
                </div>
                <h3 class="heading-agileinfo" data-aos="zoom-in">Enquery<!--<span class="thr">Events Is A Professionally Managed Event</span>--></h3>
                <div class="book-appointment" data-aos="zoom-in">
                    <form action="sendmail1.php" method="post">
                        <div class="gaps">
                            <p></p>
                            <input type="text" name="form_name" placeholder="Name" required="" style="background: rgba(235, 165, 67, 0.3);" />
                        </div>
                        <div class="gaps">
                            <p></p>
                            <input type="email" name="form_email" placeholder="Email" required="" style="background: rgba(235, 165, 67, 0.3);" />
                        </div>
                        <div class="gaps">
                            <p></p>
                            <input type="text" name="form_phone" placeholder="Phone Number" required="" style="background: rgba(235, 165, 67, 0.3);" />
                        </div>
                        
                        <div class="gaps">
                            <textarea name="form_message" placeholder="Message..." required="" class="txt" style="background: rgba(235, 165, 67, 0.3);"></textarea>
                        </div>
                        <input name="sbmt" type="submit" value="Submit">
                    </form>
                </div>
			</div>
        	<div class="col-md-7 agileits_services_grid" data-aos="fade-up">
                <h3 class="heading-agileinfo" data-aos="zoom-in">Send Feedback<!--<span class="thr">Events Is A Professionally Managed Event</span>--></h3>
                <div class="book-appointment" data-aos="zoom-in">
                    <form action="sendmail.php" method="post">
                        <div class="gaps">
                            <p></p>
                            <input type="text" name="form_name" placeholder="Name" required="" style="background: rgba(235, 165, 67, 0.3);" />
                        </div>
                        <div class="gaps">
                            <p></p>
                            <input type="email" name="form_email" placeholder="Email" required="" style="background: rgba(235, 165, 67, 0.3);" />
                        </div>
                        <div class="gaps">
                            <p></p>
                            <input type="text" name="form_phone" placeholder="Phone Number" required="" style="background: rgba(235, 165, 67, 0.3);" />
                        </div>
                        <div class="gaps">
                            <p></p>
                            <select name="ddlevent" style="background: rgba(235, 165, 67, 0.3);" class="form-control">
                              <option value="-- Select Event --">-- Select Event --</option>
                              <?php
									 $sql ="select * from product_details where `status`= 'ACTIVE' order by pro_id";
									 $sele= mysqli_query($dbhandle,$sql);
									 $ii=0;
									 while($res=mysqli_fetch_assoc($sele))
									 {
									 $ii++;
							  ?>
                              <option value="<?php echo $res['product_name']; ?>"><?php echo $res['product_name']; ?></option>
                            <?php
							}
							?>
                            </select>
                        </div>
                        <div class="gaps">
                            <p></p>
                            <select name="field1" style="background: rgba(235, 165, 67, 0.3);" class="form-control">
                              <option value="Hospitality">Rate US in : Hospitality</option>
                              <option value="Very Good">Very Good</option>
                              <option value="Good">Good</option>
                              <option value="Neutral">Neutral</option>
                              <option value="Bad">Bad</option>
                              <option value="Very Bad">Very Bad</option>                          
                            </select>
                        </div>
                        <div class="gaps">
                            <p></p>
                            <select name="field2" style="background: rgba(235, 165, 67, 0.3);" class="form-control">
                              <option value="Food">Rate US in : Food</option>
                              <option value="Very Good">Very Good</option>
                              <option value="Good">Good</option>
                              <option value="Neutral">Neutral</option>
                              <option value="Bad">Bad</option>
                              <option value="Very Bad">Very Bad</option>                          
                            </select>
                        </div>
                        <div class="gaps">
                            <p></p>
                            <select name="field3" style="background: rgba(235, 165, 67, 0.3);" class="form-control">
                              <option value="Event Arrangements">Rate US in : Event Arrangements</option>
                              <option value="Very Good">Very Good</option>
                              <option value="Good">Good</option>
                              <option value="Neutral">Neutral</option>
                              <option value="Bad">Bad</option>
                              <option value="Very Bad">Very Bad</option>                          
                            </select>
                        </div>
                        <div class="gaps">
                            <p></p>
                            <select name="field4" style="background: rgba(235, 165, 67, 0.3);" class="form-control">
                              <option value="Cleanliness">Rate US in : Cleanliness</option>
                              <option value="Very Good">Very Good</option>
                              <option value="Good">Good</option>
                              <option value="Neutral">Neutral</option>
                              <option value="Bad">Bad</option>
                              <option value="Very Bad">Very Bad</option>                          
                            </select>
                        </div>
                        <div class="gaps">
                            <p></p>
                            <select name="field5" style="background: rgba(235, 165, 67, 0.3);" class="form-control">
                              <option value="Cultural Programs">Rate US in : Cultural Programs</option>
                              <option value="Very Good">Very Good</option>
                              <option value="Good">Good</option>
                              <option value="Neutral">Neutral</option>
                              <option value="Bad">Bad</option>
                              <option value="Very Bad">Very Bad</option>                          
                            </select>
                        </div>
                        <div class="gaps">
                            <p></p>
                            <select name="field6" style="background: rgba(235, 165, 67, 0.3);" class="form-control">
                              <option value="Location">Rate US in : Location</option>
                              <option value="Very Good">Very Good</option>
                              <option value="Good">Good</option>
                              <option value="Neutral">Neutral</option>
                              <option value="Bad">Bad</option>
                              <option value="Very Bad">Very Bad</option>                          
                            </select>
                        </div>
                        
                        <div class="gaps">
                            <textarea name="form_message" placeholder="Message..." required="" class="txt" style="background: rgba(235, 165, 67, 0.3);"></textarea>
                        </div>
                        <input name="sbmt" type="submit" value="Submit">
                    </form>
                </div>
			</div>
            
          </div>
        </div>	
        <br><br>
	</div>
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