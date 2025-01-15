<?php
/**
 * Template for displaying Category Archive pages
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>
<div class="page-header-wrapper blogTitle">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="page-header-content d-flex">
                        <h1><?php	printf( __( ' %s', 'twentyten' ), '<span>' . single_cat_title( '', false ) . '</span>' );
				?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="page-wrapper">
        <div class="blog-page-content-wrapper fix ">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="row mtm-44">
                           
                           <?php 
							if (have_posts()) :
							while ( have_posts() ) : the_post(); 
							$image=wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'full');
							?>
                            <div class="col-md-6 col-lg-4">
                                <div class="single-blog-post-wrap layout--2 layout-blog-page">
                                    <figure class="blog-thumbnail">
                                        <a href="<?php the_permalink();?>">
                                            <img src="<?php echo $image[0];?>" alt="Blog Thumb" >
                                        </a>
                                    </figure>
                                    <div class="blog-post-details">
                                        <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                                        <div class="post-meta">
                                            <a href="<?php the_permalink();?>"><i class="fa fa-user-circle-o"></i> Admin</a> 
                                            <a href="<?php the_permalink();?>"><i class="fa fa-clock-o"></i><?php echo get_the_date('d M Y');?></a>
                                        </div>
                                        
                                        <p><?php echo substr(get_the_content(),0,150);?>..</p><a href="<?php the_permalink();?>" class="btn-read-more">Read More
                                            <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>


                            
                            <?php   endwhile; ?>
                          
                        </div>
                    </div>
                    <div class="col-12">
                        <!--== Start Pagination Area ==-->
                        <div class="pagination-content boCol2 mt-80">
                            <?php
                            custom_pagination($custom_query); 
                            wp_reset_postdata();
                            else :
                            echo 'No posts found.';
                            endif;
                            ?>
                            <!--<ul class="nav">
                                <li class="btn-arrow btn-prev me-auto"><a href="#"><i class="fa fa-angle-left"></i></a>
                                </li>
                                <li><a href="#" class="active">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li class="btn-arrow btn-next ms-auto"><a href="#"><i class="fa fa-angle-right"></i></a>
                                </li>
                            </ul>-->
                        </div>
                        <!--== End Pagination Area ==-->
                    </div>
                </div>
            </div>
        </div>
    </div>
  

<?php get_footer(); ?>
