<?php

$title = 'Franchise';
include('partials/header.php');

?>
   
<section class="about light-bg">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<header class="section-title style3 wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
					<h1><span>Franchise</span></h1>
				</header>
			</div><!-- /col-md-6 -->
			
			<?php 
				$password = "1234564";
				if ($_POST['password'] != $password) { 
			?>
			<form name="form" method="post" action="">
			<div class="about-container">
				<div class="row">
					<div class="col-md-8">
						<h6 >Find out more about how you can enter this growing and rewarding industry by owning your own Sushi Runner Franchise.</h6>
						<div class="row">
							<div class="col-md-6">
								<input type="text" name="first-name" class="big-input white-bg" placeholder="First Name">
							</div>
							<div class="col-md-6">
								<input type="text" name="last-name" class="big-input white-bg" placeholder="Last Name">
							</div>
							<div class="col-md-12">
								<input type="text" name="adress" class="big-input white-bg" placeholder="Address area of interest">
							</div>
							<div class="col-md-6">
								<input type="text" name="state-country" class="big-input white-bg" placeholder="State or Country of interest">
							</div>
							<div class="col-md-6">
								<input type="text" name="postal-code" class="big-input white-bg" placeholder="Postal code">
							</div>
							<div class="col-md-6">
								<input type="tel" name="phone" class="big-input white-bg" placeholder="Direct phone">
							</div>
							<div class="col-md-6">
								<input type="email" name="email" class="big-input white-bg" placeholder="Email">
							</div>
							<div class="col-md-12">
                
								<input type="number" name="capital" class="big-input white-bg" placeholder="Liquid capital available">
							</div>
							<div class="col-md-12">
								<input type="text" name="how-did-hear" class="big-input white-bg" placeholder="How did you hear about us?">
							</div>
							<div class="row">
								<div class="col-md-6 col-md-offset-7 align-center">
									<button type="submit" class="custom-button button-style9 login-buttom"><i class=" fa-angle- right"></i> Submit</button>
								</div>
							</div>
						</div>
						
					</div>
					<div class="col-md-4">
						<div class="password">
							<h6>If you already have an account, please enter your password to log in.</h6>
							<input type="password" name="password" class="big-input white-bg" placeholder="Password">
							
							<?php if (isset($_POST['password'])) { ?>
							<div class="col-md-4 col-md-offset-7">
								<div class="alert-danger" role="alert">
									<i class="fa fa-exclamation-triangle"></i> Invalid password
								</div>
							</div>
						<?php } ?>
							<div class="row">
								<div class="col-md-6 col-md-offset-1 align-center">
									<button type="submit" class="custom-button button-style9 login-buttom"><i class="fa fa-lock"></i> Enter</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			</form><!-- /about-container -->

			<div class="col-md-8">
				<div class="service">
					<header class="section-title style2 wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
					<h2><span>Opportunity</span></h2>
					</header>
					<p>Owning a Sushi Runner provides you an opportunity to partner with an industry leader in a highly competitive industry whose sales grow more and more annually. Do not let the competitive nature of the industry stifle you. Our concept is unlike any other. We have geared our company to provide you with knowledge, support and training that will allow you to effectively meet and surpass any consumer expectations.</p> <br>
				</div>

				<div class="offerings">
					<header class="section-title style2 wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
					<h2><span>Offerings</span></h2>
					</header>
					<p>We offer two different types of franchise opportunities. You can choose to own a single unit franchise which allows you to operate your own Sushi Runner in a protected territory of your choice. We also offer area development Franchises for those looking to lock down a larger territory and slowly build a series of Sushi Runner locations/territories.<br></p>
				</div>

				<div class="info">
					<p>This website and the information contained herein does not constitute the offer or sale of a franchise. There are certain states that require the registration of a FDD before the franchisor can advertise or offer the franchise in that state. This franchise may not be registered in all registration states and may not offer franchises to residents of those states or to persons wishing to locate a franchise in those states until compliance guidelines are met. The offer and sale of a franchise can only be made through the delivery and receipt of a Franchise Disclosure Document (FDD).</p>
				</div>
			</div>
			<?php 
				}else{
				
				include('partials/franchise-content.php');
				
				} 
			?>
		</div><!-- /row -->
	</div>
</section>
       
<?php include('partials/footer.php') ?>