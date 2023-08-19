<div class="banner">
				<div class="container">
					<div class="slider">
						
						<script src="js/responsiveslides.min.js"></script>
						<script>
								// You can also use "$(window).load(function() {"
								$(function () {
								// Slideshow 4
									$("#slider3").responsiveSlides({
										auto: true,
										pager: true,
										nav: true,
										speed: 500,
										namespace: "callbacks",
										before: function () {
											$('.events').append("<li>before event fired.</li>");
										},
										after: function () {
											$('.events').append("<li>after event fired.</li>");
										}
									 });				
								});
						</script>
						<div  id="top" class="callbacks_container-wrap">
							<ul class="rslides" id="slider3">
								<li>
									<div class="slider-info" data-aos="fade-left">
									<!--<h6>UTSAB Netherlands</h6>-->
										<h3 style="font-family:Monotype Corsiva;text-shadow: 2px 2px #534c4c;">UTSAB Netherlands</h3>
										<!--<p >Curabitur eget metus eget erat vehicula semper vitae sed leo</p>
										<div class="more-button">
											<a href="#" data-toggle="modal" data-target="#myModal">More Info</a>
										</div>-->
                                        
									</div>
								</li>
								<li>
									<div class="slider-info" data-aos="fade-left">
									<!--<h6>UTSAB Netherlands</h6>-->
										<h3 style="font-family:Monotype Corsiva;text-shadow: 2px 2px #534c4c;"> UTSAB Netherlands</h3>
										<!--<p>Quisque nisl risus, egestas in convallis vitae, fringilla cursus magna</p>
										<div class="more-button">
											<a href="#" data-toggle="modal" data-target="#myModal">More Info</a>
										</div>-->
                                        
									</div>
								</li>
								<li>
									<div class="slider-info" data-aos="fade-left">
									<!--<h6>UTSAB Netherlands</h6>-->
										<h3 style="font-family:Monotype Corsiva;text-shadow: 2px 2px #534c4c;"> UTSAB NETHERLANDS</h3>
										<!--<p> Suspendisse bibendum dictum metus, at finibus elit dignissim nec	</p>
										<div class="more-button">
											<a href="#" data-toggle="modal" data-target="#myModal">More Info</a>
										</div>-->
                                        
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>