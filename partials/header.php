<?php require('languages/function.php'); ?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js no-flash"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php
		
		if ($title == __('sushirunner',$lang)){
			
			echo $title;

		} else {
			
			echo $title . " | " . __('sushirunner',$lang);
		}
		
		?></title>
	<meta name="description" content="Food And Restaurant HTML Template">
	<meta name="viewport" content="width=device-width, initial-scale=1">        
	<meta name="theme-color" content="#23292c"> <!-- Android 5.0 Tab Color -->
	
	<link href="img/logo/favicon16.png" type="image/png" rel="icon" sizes="16x16"/>
	<link href="img/logo/favicon32.png" type="image/png" rel="icon" sizes="32x32"/>
	<link href="img/logo/favicon48.png" type="image/png" rel="icon" sizes="48x48"/>

	<!-- Web Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700,300,400' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
	<!-- Nuevas -->
	<link href="https://fonts.googleapis.com/css?family=Inknut+Antiqua" rel="stylesheet">

	<!-- Icon Fonts -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/fontello.css">

	<!-- Plugins CSS -->
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/rev-slider-settings.css">

	<!-- Template CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/main.css">

	<!-- Demo Purpose CSS -->
	<link rel="stylesheet" href="css/custom-bg.css">

	<!-- Head JS Libraries -->
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>
	<script src="http://maps.google.com/maps/api/js"></script>
	
	<!-- REQUIRED FOR GOOGLE MAP -->
</head>
<body data-spy="scroll" data-offset="58">
	<!--[if lt IE 7]>
		<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->

	<!-- Start page-frame -->
	<div class="page-frame">
		<div class="frame-top"></div>
		<div class="frame-right"></div>
		<div class="frame-bottom"></div>
		<div class="frame-left"></div>
	</div>
	<!-- End page-frame -->

	<!-- Start main-nav-trigger -->
	<div class="main-nav-trigger style2" style="position:fixed">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<a class="handle" href="#">
						<span class="bars">
							<span class="bar"></span>
							<span class="bar"></span>
							<span class="bar"></span>
						</span>
					</a>
				</div><!-- /col-md-12 -->
			</div><!-- /row -->
		</div><!-- /container -->
	</div>
	<!-- End main-nav-trigger -->

	<!-- Start main-nav -->
	<div class="main-nav-container style3">
		<div class="main-nav-inner">
			<div class="logo-container">
				<a href="/">
					<img src="img/logo/fish150.png" height="120">
				</a>
			</div><!-- /logo-container -->
			<nav class="main-nav">
			  <ul>
			  <?php 
				
				$menu = '';
				$tabs = ['menu','locations','specials','catering','franchise','contact'];
					
				for($i=0;$i < count($tabs); $i++){
					
					$menu .= '<li><a href="'. strtolower($tabs[$i]) .'.php"';
					
					if ($tabs[$i] == $title){
						
						$menu .= ' class="active"';
					}
					
					$menu .= '>'. __($tabs[$i],$lang).'</a></li>';
				}
				
				if($lang == 'en'){$langOp = 'es';}
				if($lang == 'es'){$langOp = 'en';}
				  
				$menu .= '<li><a href="?lang=' . $langOp . '">' . strtoupper($langOp) . '</a></li>';
				  
				echo $menu;
				  
			   ?>
				</ul>
			</nav>
		</div><!-- /main-nav-inner -->
	</div><!-- /main-nav-container -->
	<!-- End main-nav -->
	<!-- Start wrapper -->
	<div class="wrapper">

	<?php if($title == __('sushirunner',$lang)){ ?>
	<!-- Start main-header -->
	
	<header class="main-header slider-on" id="top">
	<div class="main-slider-container">
		<div class="main-slider" >
			<ul class="scrollme">
				<li data-transition="fade" data-slotamount="7" data-masterspeed="1500" data-title="Coffee Experience">
					<img class="rs-parallaxlevel-1" src="img/slider-images/slider-bg7.jpg" alt="Marine Slider BG"  data-bgfit="cover" data-bgposition="center bottom" data-bgrepeat="no-repeat">
					<div class="tp-caption customin customout"
						data-x="center"
						data-y="center"
						data-Voffset="-285"
						data-customin="x:0;y:-50;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:1200;transformOrigin:50% 50%;"
						data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-start="1000"
						data-speed="1800"
						data-easing="Expo.easeOut"
						data-elementdelay="0.5"
						data-endspeed="600"
						data-endeasing="Expo.easeInOut">
						<img src="img/logo/fish310.png" alt="Gourmet" class="animateme"
							data-when="exit"
							data-from="0"
							data-to="0.4"
							data-opacity="0"
							data-translatey="-60">
					</div>
					<div class="tp-caption customin customout"
						data-x="center"
						data-y="center"
						data-customin="x:-50;y:50;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:1200;transformOrigin:50% 50%;"
						data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-start="1300"
						data-speed="1800"
						data-easing="Expo.easeOut"
						data-elementdelay="0.5"
						data-endspeed="600"
						data-endeasing="Expo.easeInOut">
						<img src="img/logo/slider.png" alt="Organic" class="animateme"
							data-when="exit"
							data-from="0"
							data-to="0.4"
							data-opacity="0"
							data-translatey="-60">
					</div>
					<div class="tp-caption customin customout"
						data-x="center"
						data-y="center"
						data-Hoffset="40"
						data-Voffset="130"
						data-customin="x:30;y:-10;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:1200;transformOrigin:50% 50%;"
						data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-start="1700"
						data-speed="1000"
						data-easing="Expo.easeOut"
						data-elementdelay="0.5"
						data-endspeed="600"
						data-endeasing="Expo.easeInOut">
						<img src="img/slider-images/gastronomic-experience.png" alt="Organic" class="animateme"
							data-when="exit"
							data-from="0"
							data-to="0.4"
							data-opacity="0"
							data-translatey="-60">
					</div>
					<div class="tp-caption customin customout"
						data-x="center"
						data-y="center"
						data-voffset="280"
						data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.8;scaleY:0.8;skewX:0;skewY:0;opacity:0;transformPerspective:1200;transformOrigin:50% 50%;"
						data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:1;transformPerspective:600;transformOrigin:50% 50%;"
						data-start="2000"
						data-speed="800"
						data-easing="Power1.easeInOut">
						<a href="#our-catering" class="custom-button button-style8 animateme"
                                        data-when="exit"
                                        data-from="0"
                                        data-to="0.6"
                                        data-opacity="0"
                                        data-translatey="60"><i class="fa fa-chevron-down fa-fw" aria-hidden="true"></i></a>
					</div>
				</li>
				<li data-transition="fadetorightfadetoleft" data-slotamount="7" data-masterspeed="1500" data-title="Coffee Experience">
					<img class="rs-parallaxlevel-1" src="img/slider-images/slider-bg8.jpg" alt="Marine Slider BG"  data-bgfit="cover" data-bgposition="center bottom" data-bgrepeat="no-repeat">
					<div class="tp-caption customin customout"
						data-x="center"
						data-y="center"
						data-Voffset="-285"
						data-customin="x:0;y:-50;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:1200;transformOrigin:50% 50%;"
						data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-start="1000"
						data-speed="1800"
						data-easing="Expo.easeOut"
						data-elementdelay="0.5"
						data-endspeed="600"
						data-endeasing="Expo.easeInOut">
						<img src="img/logo/fish310.png" alt="Gourmet" class="animateme"
							data-when="exit"
							data-from="0"
							data-to="0.4"
							data-opacity="0"
							data-translatey="-60">
					</div>
					<div class="tp-caption customin customout"
						data-x="center"
						data-y="center"
						data-customin="x:-50;y:50;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:1200;transformOrigin:50% 50%;"
						data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-start="1300"
						data-speed="1800"
						data-easing="Expo.easeOut"
						data-elementdelay="0.5"
						data-endspeed="600"
						data-endeasing="Expo.easeInOut">
						<img src="img/logo/slider.png" alt="Organic" class="animateme"
							data-when="exit"
							data-from="0"
							data-to="0.4"
							data-opacity="0"
							data-translatey="-60">
					</div>
					<div class="tp-caption customin customout"
						data-x="center"
						data-y="center"
						data-Hoffset="40"
						data-Voffset="130"
						data-customin="x:30;y:-10;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:1200;transformOrigin:50% 50%;"
						data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-start="1700"
						data-speed="1000"
						data-easing="Expo.easeOut"
						data-elementdelay="0.5"
						data-endspeed="600"
						data-endeasing="Expo.easeInOut">
						<img src="img/slider-images/gastronomic-experience.png" alt="Organic" class="animateme"
							data-when="exit"
							data-from="0"
							data-to="0.4"
							data-opacity="0"
							data-translatey="-60">
					</div>
					<div class="tp-caption customin customout"
						data-x="center"
						data-y="center"
						data-voffset="280"
						data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.8;scaleY:0.8;skewX:0;skewY:0;opacity:0;transformPerspective:1200;transformOrigin:50% 50%;"
						data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:1;transformPerspective:600;transformOrigin:50% 50%;"
						data-start="2000"
						data-speed="800"
						data-easing="Power1.easeInOut">
						<a href="#our-catering" class="custom-button button-style8 animateme"
                                        data-when="exit"
                                        data-from="0"
                                        data-to="0.6"
                                        data-opacity="0"
                                        data-translatey="60"><i class="fa fa-chevron-down fa-fw" aria-hidden="true"></i></a>
					</div>
				</li>
				<li data-transition="parallaxtotop" data-slotamount="7" data-masterspeed="1500" data-title="Coffee Experience">
					<img class="rs-parallaxlevel-1" src="img/slider-images/slider-bg9.jpg" alt="Marine Slider BG"  data-bgfit="cover" data-bgposition="center bottom" data-bgrepeat="no-repeat">
					<div class="tp-caption customin customout"
						data-x="center"
						data-y="center"
						data-Voffset="-285"
						data-customin="x:0;y:-50;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:1200;transformOrigin:50% 50%;"
						data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-start="1000"
						data-speed="1800"
						data-easing="Expo.easeOut"
						data-elementdelay="0.5"
						data-endspeed="600"
						data-endeasing="Expo.easeInOut">
						<img src="img/logo/fish310.png" alt="Gourmet" class="animateme"
							data-when="exit"
							data-from="0"
							data-to="0.4"
							data-opacity="0"
							data-translatey="-60">
					</div>
					<div class="tp-caption customin customout"
						data-x="center"
						data-y="center"
						data-customin="x:-50;y:50;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:1200;transformOrigin:50% 50%;"
						data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-start="1300"
						data-speed="1800"
						data-easing="Expo.easeOut"
						data-elementdelay="0.5"
						data-endspeed="600"
						data-endeasing="Expo.easeInOut">
						<img src="img/logo/slider.png" alt="Organic" class="animateme"
							data-when="exit"
							data-from="0"
							data-to="0.4"
							data-opacity="0"
							data-translatey="-60">
					</div>
					<div class="tp-caption customin customout"
						data-x="center"
						data-y="center"
						data-Hoffset="40"
						data-Voffset="130"
						data-customin="x:30;y:-10;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:1200;transformOrigin:50% 50%;"
						data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-start="1700"
						data-speed="1000"
						data-easing="Expo.easeOut"
						data-elementdelay="0.5"
						data-endspeed="600"
						data-endeasing="Expo.easeInOut">
						<img src="img/slider-images/gastronomic-experience.png" alt="Organic" class="animateme"
							data-when="exit"
							data-from="0"
							data-to="0.4"
							data-opacity="0"
							data-translatey="-60">
					</div>
					<div class="tp-caption customin customout"
						data-x="center"
						data-y="center"
						data-voffset="280"
						data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.8;scaleY:0.8;skewX:0;skewY:0;opacity:0;transformPerspective:1200;transformOrigin:50% 50%;"
						data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:1;transformPerspective:600;transformOrigin:50% 50%;"
						data-start="2000"
						data-speed="800"
						data-easing="Power1.easeInOut">
						<a href="#our-catering" class="custom-button button-style8 animateme"
                                        data-when="exit"
                                        data-from="0"
                                        data-to="0.6"
                                        data-opacity="0"
                                        data-translatey="60"><i class="fa fa-chevron-down fa-fw" aria-hidden="true"></i></a>
					</div>
				</li>
			</ul>
		</div><!-- /main-slider -->
	</div><!-- /main-slider-container -->
	</header>
	<!-- End main-header -->
	<?php } ?>
	 
		 <div id="navigation" style="">
			 <nav class="navbar navbar-default">
			  <div class="container">
				<div id="navbar" class="navbar-collapse collapse">
				  <ul class="nav navbar-nav">
					<li><a href="/"><img src="img/logo/light.jpg" height="52"></a></li>
				  </ul>
				  <ul class="nav navbar-nav navbar-right">
					  <?php echo $menu; ?>
				  </ul>
				</div><!--/.nav-collapse -->
			  </div>
			</nav>
		  </div> 