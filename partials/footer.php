            <footer class="main-footer style3">
                
                <div class="bottom-bar">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 align-left">
                                <p class="links">
									<a href="about-us.php"><?php echo __('about-us',$lang) ?></a> | 
									<a href="privacy-policy.php"><?php echo __('privacy-policy',$lang) ?></a> | 
									<a href="general-terms.php"><?php echo __('general-terms',$lang) ?></a><br>
									<a href="employements.php"><?php echo __('employements',$lang) ?></a> | 
									<a href="#"><?php echo __('marketing-materials',$lang) ?></a></p>
                                <p class="copyright">© 2017 <?php echo __('sushirunner',$lang) . '. ' . __('rights-reserved',$lang) ?>
                                </p>
                            </div><!-- /col-md-4 -->
                            <div class="col-md-4 align-center">
                                <figure class="logo-container">
                                    <a href="/"><img src="img/logo/dark.png" alt="Sushi Runner"></a>
                                </figure>
                            </div>
                            <div class="col-md-4 align-right">
                                <div class="socials-container">
                                    <ul>
                                        <li><a href="https://www.facebook.com/sushirunnerdoral" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="https://twitter.com/SushiRunner" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="https://plus.google.com/110698510629131272464" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="https://www.instagram.com/sushirunnermiami/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="http://www.pinterest.com/rburgos1984/" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                                    </ul>
                                </div><!-- /socials-container -->
                            </div><!-- /col-md-4 -->
                        </div><!-- /row -->
                    </div><!-- /container -->
                </div><!-- /bottom-bar -->
            </footer>

        </div><!-- /wrapper -->
        <!-- End wrapper -->

        <script src="js/vendor/jquery-2.1.3.min.js"></script>
   		<script src="js/jquery.easing.js"></script>	
        <script src="js/jquery.sticky.js"></script>
        <script src="js/jquery.themepunch.tools.min.js"></script>
        <script src="js/jquery.themepunch.revolution.min.js"></script>
<!--        <script src="js/cd-google-map-green.js"></script>-->
        <script src="js/jquery.scrollme.min.js"></script>
        <script src="js/jquery.mixitup.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function() {
               jQuery('.main-slider').revolution(
                {
                    delay:9000,
                    startwidth:1170,
                    startheight: 960,
                    hideThumbs:10,
                    fullScreen: 'on',
                    hideTimerBar: 'on',
                    navigationStyle: 'preview1'
                });
            });
        </script>

    </body>
</html>
