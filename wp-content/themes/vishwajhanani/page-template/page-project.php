<?php
/**
 * Template Name: Project
 
 */

get_header(); 
if( !empty(get_the_post_thumbnail_url( get_the_ID(),'full')) ):
	$bannerImage = get_the_post_thumbnail_url( get_the_ID(),'full');
else:
	$bannerImage = get_template_directory_uri().'/asset/images/welcome-to-animation-production.png';
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
    <div class="causes-page-area pb-100px pt-100px">
        <div class="container">
            <div class="row banner-area">
                <!-- start single causes -->
              
                <!-- End single causes -->
                <!-- start single causes -->
              
                <!-- End single causes -->
                <!-- start single causes -->
             
                <!-- End single causes -->
            
             
                <!-- start single causes -->
              
                <!-- End single causes -->
                   <!-- start single causes -->
              
                <!-- End single causes -->
                   <!-- start single causes -->
             
                <!-- End single causes -->

                  <!-- start single causes -->
            
                <!-- End single causes -->
                  <!-- start single causes -->
               
                <!-- End single causes -->
                  <!-- start single causes -->
                 
                <!-- End single causes -->
                   <!-- start single causes -->
                 
                <!-- End single causes -->
                   <!-- start single causes -->
                    <?php
            
            
            if( have_rows('project_s') ):
            while( have_rows('project_s') ) : the_row();
            
            ?>
                   <div class="col-md-6 col-lg-4 " data-aos="fade-up" data-aos-delay="200">
                    <div class="causes-wrapper prBox">
                        <div class="inner-image banner-wrapper">
                            <a href="#."><img class="img-responsive w-100"
                                    src="<?php echo get_sub_field('project__image');?>" alt=""></a>
                        </div>
                        <div class="causes-content">
                            <h5 class="content-title"> <a class="causes-link" href="#."> <?php echo get_sub_field('project__title');?> </a></h5>
                            <p class="causes-text"><?php echo get_sub_field('project_description');?>
                            </p>
                            <div class="causes-donation d-flex">
                              
                                <a href="#." class="d-block donate-btn"><i class="fa fa-heart-o"></i>
                                    Donate</a>
                            </div>
                            <div class="progress on-scroll" data-percent="35%" data-scroll-class="active">
                                <div class="progress-bar" style="width: 0%"></div>
                            </div>
                        </div>
                    </div>
                </div>
                  <?php endwhile; endif;?>
                <!-- End single causes -->

              
            </div>
          
        </div>
    </div>
<?php get_footer(); ?>