<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
	<title>
<?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the site name.
	bloginfo( 'name' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
if ( $site_description && ( is_home() || is_front_page() ) ) {
	echo " | $site_description";
}

	// Add a page number if necessary:
if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {
	/* translators: %s: Page number. */
	echo esc_html( ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) ) );
}

?>
	</title>
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
	 
</head>


    <header class="header-wrapper">
        <!-- Header Nav Start -->
        <div class="header-nav bg-theme d-lg-block d-none">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-lg-5 col-xl-6 align-self-center justify-content-center">
                        <div class="follow d-flex">
                            <label>Follow Us:</label>
                            <ul class="link-follow">
                                <li><a class="facebook fa fa-facebook" title="Facebook" href="<?php echo get_field('facebook_link','option');?>" target="_blank"></a></li>
                                <li><a class="twitter fa fa-twitter" title="Twitter" href="<?php echo get_field('twitter_link','option');?>" target="_blank"></a></li>
                              
                                <li><a class="youtube fa fa-youtube" title="Youtube" href="<?php echo get_field('youtube_link','option');?>" target="_blank"></a></li>
                              
                                <li><a class="youtube fa fa-instagram" title="Instagram" href="<?php echo get_field('insta_link','option');?>" target="_blank"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-7 col-lg-7 col-xl-6 align-self-center text-end">
                        <div class="call-to-action">
                            <nav>
                                <ul>
                                    <li><a href="mailto:<?php echo get_field('header_email','option');?>"><i class="fa fa-envelope"
                                                aria-hidden="true"></i> Email: <?php echo get_field('header_email','option');?></a></li>
                                    <li><a href="tel:<?php echo get_field('header_phone','option');?>"><i class="fa fa-phone" aria-hidden="true"></i> Phone:
                                        <?php echo get_field('header_phone','option');?></a></li>

                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Nav End -->
        <div class="header-menu sticky-nav bg-white d-lg-block d-none ptb-10px">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 d-flex">
                        <div class="logo align-self-center">
                            <a href="<?php echo home_url(); ?>"><img class="img-responsive d-inline-block" src="<?php echo get_field('logo','option');?>"  alt="logo" /></a>
                        </div>
                    </div>
                    <div class="col-md-8  d-flex">
                        <div class="header-horizontal-menu align-self-center">

                                <ul class="menu-content">
                               	<?php
				  			if ( has_nav_menu( 'primary' ) ) {
				  				wp_nav_menu(
				  					array(
				  						'container'  => '',
				  						'items_wrap' => '%3$s',
				  						'theme_location' => 'primary',
				  					)
				  				);

				  			}
				  			?>
				  			 </ul>
                          </div>
                    </div>
                    <div class="col-md-1 align-self-center">
                        <div class="header-right-element d-flex justify-content-end">
                            <a class="btn btn-primary  btn-hover-dark" href="<?php echo get_page_link(23);?>">Donate</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Nav End -->
    </header>

 

