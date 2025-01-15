<?php
/**
 * Template Name: Contact
 
 */

get_header(); 
if( !empty(get_the_post_thumbnail_url( get_the_ID(),'full')) ):
	$bannerImage = get_the_post_thumbnail_url( get_the_ID(),'full');
else:
	$bannerImage = get_template_directory_uri().'/images/dealerBannerImg.png';
endif;

?>

<div class="mobile-header d-lg-none sticky-nav bg-white ptb-10px">
        <div class="container">
            <div class="row align-items-center">

                <!-- Header Logo Start -->
                <div class="col">
                    <div class="header-logo">
                        <a href="<?php echo home_url(); ?>"><img class="img-responsive d-inline-block" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png"
                                alt="logo.png" /></a>
                    </div>
                </div>
                <!-- Header Logo End -->

                <!-- Header Tools Start -->
                <div class="col-auto">
                    <div class="header-tools justify-content-end">
                        <div class="mobile-menu-toggle align-self-center">
                            <a href="#offcanvas-mobile-menu" class="offcanvas-toggle nav-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Header Tools End -->

            </div>
        </div>
</div>
    <!-- Mobile Header Section End -->

    <!-- OffCanvas Search Start -->
    <div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu">
        <div class="inner customScroll">
            <div class="head">
                <span class="title">&nbsp;</span>
                <button class="offcanvas-close">×</button>
            </div>
            <div class="top-header-mobile">
                <div class="contact-link">
                    <div class="data phone">
                       <a href="tel:<?php echo get_field('header_phone','option');?>"><i class="fa fa-phone" aria-hidden="true"></i> Phone:
                                        <?php echo get_field('header_phone','option');?></a>
                    </div>
                    <div class="data email">
                       <a href="mailto:<?php echo get_field('header_email','option');?>"><i class="fa fa-envelope" aria-hidden="true"></i> Email:
                           <?php echo get_field('header_email','option');?> </a>
                    </div>
                    <div class="donate-btn data">
                        <a class="btn btn-primary d-inline-block btn-hover-dark" href="<?php echo get_page_link(23);?>">Donate</a>
                    </div>
                </div>
            </div>
          
            <div class="menu-close">
                menu
            </div>
            <div class="offcanvas-menu">
                <ul>
                    <li><a href="<?php echo home_url(); ?>">Home</a></li>
               
                    <li><a href="#"><span class="menu-text">About Us</span></a>
                        <ul class="sub-menu">
                            <li><a href="<?php echo get_page_link(11);?>">About Vishwa Jhanani</a></li>
                            <li><a href="<?php echo get_page_link(13);?>">Our Team</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo get_page_link(15);?>">Our Services</a></li>
                    <li><a href="<?php echo get_page_link(17);?>">Projects</a></li>
                    <li><a href="<?php echo get_page_link(19);?>">Gallery</a></li>
                    <li><a href="<?php echo get_page_link(21);?>">Contact Us</a></li>
                </ul>
            </div>
            <!-- OffCanvas Menu End -->
            <div class="offcanvas-social mt-30px">
                <ul>
                    <li><a class="facebook" title="Facebook" href="<?php echo get_field('facebook_link','option');?>" target="_blank"><i class="fa fa-facebook"
                                aria-hidden="true"></i></a></li>
                    <li><a class="twitter fa fa-twitter" title="Twitter" href="<?php echo get_field('twitter_link','option');?>" target="_blank"></a></li>
                 
                    <li><a class="youtube fa fa-youtube" title="Youtube" href="<?php echo get_field('youtube_link','option');?>" target="_blank"></a></li>
                    <li><a class="youtube fa fa-instagram" title="Youtube" href="<?php echo get_field('insta_link','option');?>" target="_blank"></a></li>
                   
                </ul>
            </div>
        </div>
    </div>
  
    <div class="offcanvas-overlay"></div>
    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area d-flex" >
        <div class="container align-self-center">
            <div class="row">
                <div class="col-md-12 ">
                   <div class="breadcrumb-content text-center ">
                        <h2><?php the_title();?></h2>
                        <ul class="nav">
                            <li><a href="<?php echo home_url(); ?>">Home</a></li>
                            <li><?php the_title();?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End-->
    <!-- contact area start -->
    <div class="contact-area pb-100px pt-100px">
        <div class="container">
           
            <div class="custom-row-2 row mb-50">
                <div class="col-lg-5 col-md-5 mb-lm-60px col-sm-12 col-xs-12 w-sm-100">
                    <div class="contact-info-wrap">
                        <h2 class="title" data-aos="fade-up" data-aos-delay="200"><?php get_the_content();?></h2>
                        <div class="single-contact-info" data-aos="fade-up" data-aos-delay="200">
                            <div class="contact-info-inner">
                                <span class="sub-title">Address:</span>
                            </div>
                            <div class="contact-info-dec">
                                <p> <strong><?php echo get_field('contact_info_address');?></p>

                            </div>
                        </div>
                        <div class="single-contact-info" data-aos="fade-up" data-aos-delay="200">
                            <div class="contact-info-inner">
                                <span class="sub-title">Phone:</span>
                            </div>
                            <div class="contact-info-dec">
                                <p><a href="tel:<?php echo get_field('phone_address');?>"><?php echo get_field('phone_address');?></a></p>
                             </div>
                        </div>
                        <div class="single-contact-info" data-aos="fade-up" data-aos-delay="200">
                            <div class="contact-info-inner">
                                <span class="sub-title">Email:</span>
                            </div>
                            <div class="contact-info-dec">
                                <p><a href="mailto:<?php echo get_field('email_address');?>"> <?php echo get_field('email_address');?></a></p>
                              
                            </div>
                        </div>
                     
                        <div class="contact-social">
                            <h3 class="title" data-aos="fade-up" data-aos-delay="200">Follow Us</h3>
                            <div class="social-info" data-aos="fade-up" data-aos-delay="200">
                                <ul>
                                    <li><a class="facebook fa fa-facebook" title="Facebook" href="<?php echo get_field('facebook_link','option');?>" target="_blank"></a></li>
                                <li><a class="twitter fa fa-twitter" title="Twitter" href="<?php echo get_field('twitter_link','option');?>" target="_blank"></a></li>
                              
                                <li><a class="youtube fa fa-youtube" title="Youtube" href="<?php echo get_field('youtube_link','option');?>" target="_blank"></a></li>
                              
                                <li><a class="youtube fa fa-instagram" title="Instagram" href="<?php echo get_field('insta_link','option');?>" target="_blank"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                    <div class="contact-form">
                        <div class="contact-title mb-30">
                            <h2 class="title" data-aos="fade-up" data-aos-delay="200">Get In Touch</h2>
                        </div>
                      
                           <?php echo do_shortcode('[contact-form-7 id="de5b13a" title="Contact form 1" html_id="contact-form" html_class="contact-form-style"]');?>
                       
                       
                    </div>
                </div>
            </div>

            <div class="contact-map mb-10">
                <div id="mapid" data-aos="fade-up" data-aos-delay="200">
                    <div class="mapouter">
                        <div class="gmap_canvas">
                               <?php echo get_field('map_address');?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>