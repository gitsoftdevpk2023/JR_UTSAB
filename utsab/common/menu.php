<div class="head">
				<div class="container">
					<div class="navbar-top">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
							  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							  </button>
								 <div class="navbar-brand logo ">
									<h1><a href="index.php"><img src="images/utsab_logo.png" class="img-responsive" style="width:3em"></a></h1>
								</div>
							</div>

							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							 <ul class="nav navbar-nav link-effect-4">
								<li class="active first-list"><a href="index.php">Home</a></li>
								<li><a href="about.php">About Us</a></li>
								<li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span data-letters="Pages">Events</span><span class="caret"></span></a>
									<ul class="dropdown-menu"> 
                                    <?php
									 $sql ="select * from product_details where `status`= 'ACTIVE' order by pro_id";
									 $sele= mysqli_query($dbhandle,$sql);
									 $ii=0;
									 while($res=mysqli_fetch_assoc($sele))
									 {
									 $ii++;
									?>  
										<li><span style="color: #3300CC"><a href="event.php?eid=<?php echo $res['pro_id']; ?>"><?php echo $res['product_name']; ?></a></span></li>
										<!--<li><a href="#">Durga Pujor Nahobot (&#2470;&#2497;&#2480;&#2509;&#2455;&#2494; &#2474;&#2497;&#2460;&#2507;&#2480; &#2472;&#2489;&#2476;&#2468;)</a><a href="#"></a></li>-->
									<?php
									}
									?>
                                    </ul>
								</li>   
								<li><a href="gallery.php">Gallery</a></li>
								<li><a href="sponcorship.php">Sponsorships</a></li>
								<li><a href="contact.php">Contact Us</a></li>
								<li><a href="testimony.php">Testimonials</a></li>
							  </ul>
							</div>
                            <!-- /.navbar-collapse -->
					</div>
				</div>
			</div>