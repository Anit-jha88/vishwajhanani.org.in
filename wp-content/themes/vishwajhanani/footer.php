 <!-- Footer Area Start -->
    <div class="footer-area">
        <div class="footer-container">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <!-- Start single blog -->
                        <div class="col-md-6 col-lg-4 mb-md-30px mb-lm-30px" data-aos="fade-up" data-aos-delay="200">
                            <div class="single-wedge">
                              
                                  <div class="need_help">
                                    <h4 class="footer-herading"><?php echo get_field('contact_us','option');?></h4>
                                    <p class="add"><span class="address">Address :</span> <?php echo get_field('address_','option');?></p>
                                    <p class="phone"><span class="call">Phone : </span> <a class="contact-link"
                                            href="tel:<?php echo get_field('phone_','option');?>"> <?php echo get_field('phone_','option');?></a></p>
                                    <p class="phone"><span class="call">Email :</span> <a class="contact-link"
                                            href="mailto:<?php echo get_field('email_f','option');?>"><?php echo get_field('email_f','option');?></a></p>
                                  
                                </div>
                            </div>
                        </div>
                        <!-- End single blog -->
                     
                        <!-- Start single blog -->
                        <div class="col-md-6 col-lg-3 col-sm-6 mb-md-30px mb-lm-30px " data-aos="fade-up" data-aos-delay="600">
                            <div class="single-wedge">
                                <h4 class="footer-herading">QUCIK LINK</h4>
                                <div class="footer-links">
                                    <div class="footer-row">
                                       
                                             <?php
                                               wp_nav_menu( array(
                                                  'menu_class' => 'align-items-center',
                                                 'menu' => 'Footer menu', // Replace 'your-menu-slug' with the actual menu slug
                       
                                                ) );
                                               ?>
                                   
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End single blog -->
                        <!-- Start single blog -->
                        <div class="col-md-6 col-lg-5" data-aos="fade-up" data-aos-delay="800">
                            <div class="single-wedge">
                                <h4 class="footer-herading">Get A Direction</h4>
                                <div class="footer-links">
                                <?php echo get_field('map','option');?>
                                </div>
                            </div>
                        </div>
                        <!-- End single blog -->
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row flex-sm-row-reverse">
                        <div class="col-md-6 text-end">
                            <ul class="link-follow">
                                <li><a class="facebook fa fa-facebook" title="Facebook" href="<?php echo get_field('facebook_link','option');?>" target="_blank"></a></li>
                                <li><a class="twitter fa fa-twitter" title="Twitter" href="<?php echo get_field('twitter_link','option');?>" target="_blank"></a></li>
                              
                                <li><a class="youtube fa fa-youtube" title="Youtube" href="<?php echo get_field('youtube_link','option');?>" target="_blank"></a></li>
                              
                                <li><a class="youtube fa fa-instagram" title="Instagram" href="<?php echo get_field('insta_link','option');?>" target="_blank"></a></li>
                            </ul>
                        </div>
                        <div class="col-md-6 text-start">
                            <p class="copy-text">© <script type="text/javascript">document.write(new Date().getFullYear());</script> Vishwa Jhanani, All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   

    <a href="https://wa.me/919980519681" class="watsfloat" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>
    

   
<?php wp_footer(); ?>
</body>
</html>
