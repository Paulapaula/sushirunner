<?php

$title = 'Menu';
include('partials/header.php');

?>
   
<section class="about light-bg">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<header class="section-title style3 wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
					<h1><span><?php echo __('menu',$lang) ?></span></h1>
				</header>
			</div><!-- /col-md-6 -->
			<div class="about-container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div id="locations" class="wow fadeInUp animated">
							<h1 class="select-location"><?php echo __('select-location',$lang) ?></h1>
							<a class="location" href="https://opendining.net/menu/586d63104f5ee997751e70bb?from_locations=1&appid=58f6cbb84f5ee9bf35fe5a0c">
							<h3>Sushi Runner - Miami Lakes</h3>
							<div>16010 NW 57th Ave<br/>
							Miami Lakes, FL 33014</div>
							<span class="fa fa-chevron-right arrow-icon fa-3x"></span></a>
				
							<a class="location" href="https://opendining.net/menu/5893ac824f5ee964687b23c7?from_locations=1&appid=58f6cbb84f5ee9bf35fe5a0c">
							<h3>Sushi Runner - Doral</h3>
							<div>4715 nw 79 avenue<br/>
							Doral, FL 33166</div>
							<span class="fa fa-chevron-right arrow-icon fa-3x"></span></a>
							
						</div>
							<style type="text/css">
	a, img {
		border: 0px;
	}


	.locations h1, .locations h2, .locations h3, .locations h4 {
		margin: 0;
		padding: 0;
	}

	h1.select-location {
		padding: 15px 20px;
		border-bottom: 1px solid #ddd;
		font-size: 32px;
		font-weight: 300;
		padding-left:21px !important;
		padding-bottom: 20px;
	}

	a.location {
		display: block;
		padding: 15px 20px;
		text-decoration: none;
		color: #969696 !important;
		position: relative;
		line-height: 110%;
	}

	.locations h2 {
		color: #0B0B0B;
		font-weight: 300;
		font-size: 28px;
		padding: 10px 15px 0;
	}

	.locations h3 {
		font-weight: 300;
		font-size: 24px;
	}
	.location div {
		padding-top: 10px;
	}
	.logo-top {
		padding: 10px 15px 0;
	}

	.arrow-icon {
		font-size: 28px;
		position: absolute;
		top: 38%;
		right: 5%;
	}

	@media (max-width: 380px) {
		h1 { font-size: 28px; }
		h2 { font-size: 24px; }
		h3 { font-size: 20px; }
	}
	.about .section-title {
		margin-bottom: 0px;
	}
</style>
					</div>
				</div><!-- /row -->

			</div><!-- /about-container -->
		</div><!-- /row -->
	</div>
</section>
       
<?php include('partials/footer.php') ?>