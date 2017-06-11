<?php

$title = "Sushi Runner";
include('partials/header.php')

?>

<section class="promo-video style3 wow fadeInDown">
                <div class="container">
                    <div class="row">
                       <div class="col-md-8 col-md-offset-2">
                        <div class="embed-responsive embed-responsive-16by9 img-rounded">
                        	<iframe width="100%" height="388" src="//www.youtube.com/embed/MxqvYfmKi6c?badge=0&amp;autoplay=0&amp;showinfo=0&amp;html5=1&amp;rel=0" frameborder="0" allowfullscreen="" class="embed-responsive-item"></iframe>
                       </div>
                       </div>
                    </div><!-- /row -->
                </div><!-- /container -->
            </section>

<section class="services style3 light-bg" id="our-catering">
	<div class="parallax-bg" data-stellar-background-ratio="0.7"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12 wow fadeInDown">
				<header class="section-title style3">
					<h1><a href="catering.php"><span>Some</span> Specials</a></h1>
					<section class="food-banner style3 light-bg"><!--special 1-->
						<div class="container">
							<div class="row">
								<div class="wow fadeInLeft">
									<div class="col-md-8 col-md-offset-2">
									<div class="banner features-right features-active">
										<div class="image-container">
											<img src="img/gallery/gallery49.jpg" alt="Marine Food Banner">
										</div>
										<div class="banner-features">
											<div class="banner-features-inner">
												<div class="food-price">
													<p>50<sup>%</sup><sup>off</sup></p>
												</div><!-- /food-price -->
												<ul>
													<li>
														<h6><?php echo __('promo-1-title',$lang) ?></h6>
														<p><?php echo __('promo-1-desc',$lang) ?></p>
													</li>
												</ul>
											</div><!-- /banner-features-inner -->
										</div><!-- /banner-features -->
									</div><!-- /banner -->
									</div><!-- /col-md-12 -->
								</div>
							</div><!-- /row -->
						</div><!-- /container -->
					</section><!--/special 1-->
					<section class="food-banner style3 dark-bg"><!--special 2-->
						<div class="container">
							<div class="row">
								<div class="wow fadeInLeft">
								<div class="col-md-8 col-md-offset-2">
									<div class="banner features-left features-active">
										<div class="image-container">
											<img src="img/gallery/gallery50.jpg" alt="Marine Food Banner">
										</div>
										<div class="banner-features">
											<div class="banner-features-inner">
												<div class="food-price">
													<p class="small">Months Special</p>
												</div><!-- /food-price -->
												<div class="food-price">
													<p><sup>$</sup>15</p>
												</div>
												<ul>
													<li>
														<h6><?php echo __('promo-2-title',$lang) ?></h6>
														<p><?php echo __('promo-2-desc',$lang) ?></p>
													</li>
												</ul>
											</div><!-- /banner-features-inner -->
										</div><!-- /banner-features -->
									</div><!-- /banner -->
								</div><!-- /col-md-5 -->
								</div>
							</div><!-- /row -->
						</div><!-- /container -->
					</section><!--/special 2-->
				</header>
			</div><!-- /col-md-8 -->
			
		</div><!-- /row -->
	</div><!-- /container -->
</section><!-- /services -->

<?php include('partials/footer.php') ?>