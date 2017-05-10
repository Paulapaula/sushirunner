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
					<div class="col-md-4 col-md-offset-4">
						<input type="password" name="password" class="big-input white-bg" placeholder="Password">
					</div>
					<?php if (isset($_POST['password'])) { ?>
					<div class="col-md-4 col-md-offset-4">
						<div class="alert-danger" role="alert">
							<i class="fa fa-exclamation-triangle"></i> Invalid password
						</div>
					</div>
					<?php } ?>
				</div>
				<div class="row">
				<div class="col-md-4 col-md-offset-4 align-center">
					<button type="submit" class="custom-button button-style9 login-buttom"><i class="fa fa-lock"></i> Enter</button>
				</div>
				</div>
			</div>
			</form><!-- /about-container -->
			<?php 
				}else{
				
				include('partials/franchise-content.php');
				
				} 
			?>
		</div><!-- /row -->
	</div>
</section>
       
<?php include('partials/footer.php') ?>