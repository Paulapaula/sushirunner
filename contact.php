 <?php

$title = 'Contact';
include('partials/header.php');

?>
   
<section class="reservation style3">
                <div class="container">
                    <div class="row">
                       <div class="col-md-6 col-sm-6 wow fadeInLeft">
                            <header class="section-title style3">
                                <h2><span>Contact</span> Us</h2>
                            </header>
                            <form action="#" class="reservation-form">
                                <div class="row">
                                    <div class="input-container col-md-6">
                                        <input type="text" name="reservation-name" id="reservation-name" placeholder="Name*">
                                    </div><!-- /input-container -->
                                    <div class="input-container col-md-6">
                                        <input type="text" name="reservation-phone" id="reservation-phone" placeholder="Phone*">
                                    </div><!-- /input-container -->
                                    <div class="input-container col-md-12">
                                        <input type="text" name="reservation-email" id="reservation-email" placeholder="Email*">
                                    </div><!-- /input-container -->
                                    
                                    <div class="input-container col-md-12">
                                        <textarea name="reservation-comment" id="reservation-comment" placeholder="Message" rows="20"></textarea>
                                    </div><!-- /input-container -->
                                    <div class="submit-container col-md-12">
										<button type="submit" class="custom-button button-style9"><i class="fa fa-envelope"></i> Submit</button>
                                    </div><!-- /input-container -->
                               </div><!-- /row -->
                           </form>
                       </div><!-- /col-md-6 -->
                       <div class="col-md-6 col-sm-6 wow fadeInRigh">
                           <div class="reservation-by-phone">
                               <div class="contact-info">
                                <div class="section-title style3">
                                    <h3><span>Sushi Runner</span> Doral</h3>
                                </div>
                                   <figure><img src="img/template-assets/icon-phone.png" alt="Marine Food Calling Info"></figure>
                                    <div class="info-container">
                                       <h3 class="phone-number"><a href="tel:3055009071">(305) <span>500-9071</span></a></h3>
                                       <p class="call-time">between 10am-6pm, Monday to Friday.</p>
                                   </div><!-- /info-container -->
                               </div><!-- /call-info -->
                               <address class="contact-info">
                                   <figure><img src="img/template-assets/icon-map-pin.png" alt="Marine Food Calling Info"></figure>
                                   <div class="info-container">
                                       <p>4715 Nw 79 Avenue</p>
                                       <p>Doral, FL 33166</p>
                                   </div><!-- /info-container -->
                               </address>
                           </div><!-- /reservation-by-phone -->
                           <div class="separator"></div>
                           <div class="reservation-by-phone">
                                <div class="contact-info">
                                    <div class="section-title style3">
                                        <h3><span>Sushi Runner</span> Miami Lakes/Gardens</h3>
                                    </div>
                                   <figure><img src="img/template-assets/icon-phone.png" alt="Marine Food Calling Info"></figure>
                                    <div class="info-container">
										<h3 class="phone-number"><a href="tel:3058170977">(305) <span>817-0977</span></a></h3>
                                       <p class="call-time">between 10am-6pm, Monday to Friday.</p>
                                   </div><!-- /info-container -->
                               </div><!-- /call-info -->
                               <address class="contact-info">
                                   <figure><img src="img/template-assets/icon-map-pin.png" alt="Marine Food Calling Info"></figure>
                                   <div class="info-container">
                                       <p>16010 NW 57th Avenue</p>
                                       <p>Miami Lakes, Fl</p>
                                   </div><!-- /info-container -->
                               </address>
                           </div><!-- /reservation-by-phone -->
                       </div><!-- /col-md-6 -->
                   </div><!-- /row -->
               </div><!-- /container -->
           </section>
       
<?php include('partials/footer.php') ?>
           

