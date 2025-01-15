<?php
/**
 * Template Name: Home
 
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

    <!-- Slider Start -->
    <div class="slider-area">
        <div class="hero-slider-wrapper slider-dots-style slider-nav-style">
            <!-- Single Slider  -->
            <?php
                                
                                
                                if( have_rows('slider') ):
                                while( have_rows('slider') ) : the_row();
                               
                                ?>
            <div class="single-slide slider-height-1 overly d-flex"
                data-bg-image="<?php echo get_sub_field('slider_image');?>">
                <div class="container align-self-center">
                    <div class="slider-content-1 slider-animated-1 text-start">
                        <h2 class="title"><?php echo get_sub_field('slider_title');?></h2>
                        <p class="title-disc"><?php echo get_sub_field('slider_description');?></p>
                        <a class="btn btn-primary btn-hover-light" href="https://vishwajhanani.org.in/about-vishwa-jhanani/">Read More</a>
                    </div>
                </div>
            </div>
             <?php endwhile; endif;?>
            <!-- Single Slider  -->
         
            <!-- Single Slider  -->
         
            <!-- Single Slider  -->
        </div>
    </div>
    <!-- Slider End -->

      <!-- About Us Area Start -->
      <div class="about-area  pt-100px">
        <div class="container">
            <div class="row flex-lg-row-reverse align-items-center">
                <div class="col-lg-6 banner-area" data-aos="fade-left">
                    <div class="about-left-image mb-md-30px mb-lm-30px banner-wrapper">
                        <img src="<?php echo get_field('about_us_images_h');?>  " alt="" class="img-responsive w-100" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-title section-title-left mb-20px " data-aos="fade-up">
                        <h2 class="title"><?php echo get_field('about_us_title');?>  </h2>
                    </div>
                    <div class="about-content">
                       <?php echo get_field('about_us_content_h');?>  

                        <a href="https://vishwajhanani.org.in/about-vishwa-jhanani/" class="btn btn-secondary btn-hover-dark" data-aos="fade-up">Read More</a>
                    </div>
                </div>
            </div>
          
         
        </div>
    </div>
    <!-- About Us Area End -->

      <!-- About Us Area Start -->
      <div class="about-area  pt-100px">
        <div class="container">
            <div class="row flex-lg-row-reverse align-items-center">
               
                <div class="col-lg-6">
                    <div class="section-title section-title-left mb-20px " data-aos="fade-up">
                        <h2 class="title"><?php echo get_field('what_we_do_title_home');?>  </h2>
                    </div>
                    <div class="about-content">
                        <?php echo get_field('What_We_Do_Content_home');?>  
                        <a href="https://vishwajhanani.org.in/about-vishwa-jhanani/" class="btn btn-secondary btn-hover-dark" data-aos="fade-up">Read More</a>
                    </div>
                </div>

                <div class="col-lg-6 banner-area" data-aos="fade-left">
                    <div class="about-left-image mb-md-30px mb-lm-30px banner-wrapper">
                        <img src="<?php echo get_field('what_we_do_images_home');?>" alt="" class="img-responsive w-100" />
                    </div>
                </div>
            </div>
         
          
        </div>
    </div>
    <!-- About Us Area End -->

    <!-- Causes Area Start -->
    <div class="causes-area pt-100px pb-100px">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <!-- start section title -->
                    <div class="section-title" data-aos="fade-up">
                        <h2 class="title">Our Projects</h2>
                    </div>
                    <!-- end section title -->
                </div>
            </div>
            <div class="row banner-area causes-wrapper-slider slider-nav-style-2" data-aos="fade-up" data-aos-delay="200">
                <!-- start single causes -->
                 <?php
                                
                                
                                if( have_rows('our_projects_home') ):
                                while( have_rows('our_projects_home') ) : the_row();
                               
                                ?>
                <div class="causes-wrapper-slider-item">
                    <div class="causes-wrapper">
                        <div class="inner-image banner-wrapper">
                            <a href="https://vishwajhanani.org.in/projects/"><img src="<?php echo get_sub_field('projects_image_home');?>" alt=""></a>
                        </div>
                        <div class="causes-content">
                            <h5 class="content-title"> <a class="causes-link" href="https://vishwajhanani.org.in/projects/"><?php echo get_sub_field('project_title_home');?> </a></h5>
                            <p class="causes-text"><?php echo get_sub_field('project_description');?>
                            </p>
                        
                                <a href="https://vishwajhanani.org.in/projects/" class="btn btn-secondary btn-hover-dark" data-aos="fade-up">Read More</a>

                        </div>
                    </div>
                </div>
                <?php endwhile; endif;?>
             
            </div>
        </div>
    </div>
    <!-- Causes Area End -->

     <!-- Strt finish project -->
     <div class="finish-project pb-100px pt-100px" >
        <div class="container">
            <div class="row">
                <!-- Start single project -->
                <div class="col-md-3 col-sm-6 mb-lm-30px" data-aos="fade-up" data-aos-delay="200">
                    <div class="single-project text-center">
                        <div><h2 class="counter"><?php echo get_field('finish_projects');?> </h2><span class="plusbtN">+</span></div>
                        <span class="counter-heading">Program Conducted</span>
                    </div>
                </div>
                <!-- End single project -->
                <!-- Start single project -->
                <div class="col-md-3 col-sm-6 mb-lm-30px" data-aos="fade-up" data-aos-delay="400">
                    <div class="single-project text-center">
                        <div><h2 class="counter"><?php echo get_field('creative_materials');?></h2><span class="plusbtN">+</span></div>
                        <span class="counter-heading">People Impacted</span>
                    </div>
                </div>
                <!-- End single project -->
                <!-- Start single project -->
                <div class="col-md-3 col-sm-6 mb-sm-30px" data-aos="fade-up" data-aos-delay="600">
                    <div class="single-project text-center">
                        <div><h2 class="counter"><?php echo get_field('experience_materials');?></h2><span class="plusbtN">+</span></div>
                        <span class="counter-heading">No. Years in Service</span>
                    </div>
                </div>
                <!-- End single project -->
                <!-- Start single project -->
                <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="800">
                    <div class="single-project text-center">
                        <div><h2 class="counter"><?php echo get_field('professinal_awards');?></h2><span class="plusbtN">+</span></div>
                        <span class="counter-heading">Corporate Associate</span>
                    </div>
                </div>
                <!-- End single project -->
            </div>
        </div>
    </div>
    <!-- End finish project -->
  
    <!-- Gallery Area Start -->
    <div class="gallery-area pt-100px ">
        <div class="container">
            <div class="row">
                <!-- Start section title -->
                <div class="col-md-12 text-center">
                    <div class="section-title" data-aos="fade-up">
                        <h2 class="title">Our Gallery</h2>
                     </div>
                </div>
                <!-- End section title -->
            </div>
            <!-- Start main gallery -->
            <div class="row banner-area m-0">
                <!-- Start single gallery -->
                 <?php 
            
            $images = get_field('gallery_home_sec');
            foreach( $images as $image ):
                
              
            
            ?>
                <div class="col-md-6 col-sm-6 col-lg-3 single-gallery p-0" data-aos="fade-up" data-aos-delay="200">
                    <div class="gallery-image-and-text banner-wrapper">
                        <img class="img-responsive w-100" src="<?php echo esc_url($image); ?>" alt="Gallery Image" />
                        <a class="venobox gallery-link" data-gall="myGallery" href="<?php echo esc_url($image); ?>">
                            <span class="menu-expand"></span>
                        </a>
                    </div>
                </div>
                 <?php endforeach; ?>
              
                <!-- End single gallery -->
            </div>
            <!-- End main gallery -->
        </div>
    </div>
    <!-- Galley Area End -->

 

    <!-- Volunteer Area Start -->
    <!-- <div class="volunteer-area pt-100px pb-100px">
        <div class="container">
            <div class="row">
              
                <div class="col-md-12 text-center">
                    <div class="section-title" data-aos="fade-up">
                        <h2 class="title"> Our <Span>Volunteers</Span></h2>
                    </div>
                </div>
              
            </div>
            <div class="row banner-area m-0">
                
             
                 <?php
            
            
            if( have_rows('volunteers') ):
            while( have_rows('volunteers') ) : the_row();
            
            ?>
                <div class="col-md-6 col-lg-4 p-0" data-aos="fade-up" data-aos-delay="200">
                    <div class="single-volunteer">
                        <div class="single-volunteer-inner banner-wrapper ">
                            <img class="w-100" src="<?php echo get_sub_field('volunteers_image');?>" alt="">
                            <div class="volunteer-social-link">
                                <div class="volunteer-name">
                                    <h6 class="name"<?php echo get_sub_field('volunteers_title');?> <span class="position"><?php echo get_sub_field('volunteers_deg');?></span></h6>
                                </div>
                              
                            </div>
                        </div>
                    </div>
                </div>
                 <?php endwhile; endif;?>
              
            </div>
        </div>
    </div> -->
    
    <!-- Volunteer Area End -->
    <!-- Testimonial Product Area Start -->
   <!-- <div class="testimonial-area pt-100px pb-100px" data-bg-image="<?php echo get_template_directory_uri(); ?>/assets/images/testimonial-image/testi-bg.png">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center section-title-white" data-aos="fade-up">
                        <h2 class="title">What People Says</h2>
                    </div>
                </div>
            </div>
            <div class="testimonial-slider-wrapper slider-nav-style-1" data-aos="fade-up" data-aos-delay="200">
                <?php
                
                
                if( have_rows('testimonial') ):
                while( have_rows('testimonial') ) : the_row();
                
                ?>
                <div class="testimonial-slider-item">
                    <div class="content_author">
                        <div class="img_author">
                            <img src="<?php echo get_sub_field('testimonial_image_h');?>" alt="Image Testimonial">
                        </div>
                        <div class="content_test">
                            <div class="des_testimonial">"<?php echo get_sub_field('testimonial_desc');?>"</div>
                            <div class="des_inner">
                                <p class="des_namepost"><span><?php echo get_sub_field('testimonial_title');?></span></p>
                                <p class="des_email"><?php echo get_sub_field('testimonial_deg');?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile; endif;?>
            </div>
        </div>
    </div> -->
    <!-- Testimonial Product Area End -->

     <!-- Feature Area Start -->
     <div class="feature-area position-relative overflow-hidden pt-100px pb-100px bg-white-2">
        <div class="container">
            <div class="row">
                <!-- Start section title -->
                <div class="col-md-12 text-center" data-aos="fade-up">
                    <div class="section-title" style="margin-bottom: 0px;">
                        <h2 class="title"><?php echo get_field('speak_to_us_title');?></h2>
                        <p><?php echo get_field('speak_to_us_content');?></p>
                        <p><a class="btn btn-primary btn-hover-dark" href="tel:<?php echo get_field('speak_to_us_contact_no');?>"><?php echo get_field('speak_to_us_contact_no');?></a></p>
                    </div>
                </div>
            </div>
         </div>
    </div>
    <!-- Feature Area End -->

  
   
            
<?php get_footer(); ?>