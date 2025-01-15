<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
 <div class="page-header-wrapper blogTitle">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="page-header-content d-flex">
                        <h1>Blog Details</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== End Page Header Area ==-->
    <!--== Start Page Content Wrapper ==-->
    <div class="page-wrapper">
        <div class="blog-details-content-wrapper ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <!-- Start Blog Post Details Content -->
                        <article class="single-post-details">
                            <header class="single-post-details__header">
								 <?php $image=wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'full'); ?>
                                <figure class="blog-post-thumb"><img src="<?php echo $image[0];?>"
                                        alt="Blog Details"></figure>
                                <div class="blog-post-head">
                                    <h2><?php the_title();?></h2>
                                    <div class="post-meta"><a href="#"><i class="fa fa-user-circle-o"></i> Admin</a> <a
                                            href="#"><i class="fa fa-clock-o"></i><?php echo get_the_date('d M Y');?></a></div>
                                </div>
                            </header>
                            <div class="single-post-details__body blogBoddy">
                             <?php the_content();?>
                            </div>
                         
                        </article><!-- Start Comment Area Wrapper -->
                    
                    </div>
                    <div class="col-lg-3">
                        <aside class="sidebar-area-wrapper mt-md-80 mt-sm-60">
                            <!-- Start Single Sidebar Wrap -->
                            <div class="single-sidebar-item-wrap">
                                <h3 class="sidebar-title">Categories</h3>
                                <div class="sidebar-body">
                                    <ul class="sidebar-list">
                                         <?php
                                // Get parent categories
                                $parent_categories = get_categories(array(
                                'parent' => 0 ,
                                'hide_empty' => false
                                ));
                                
                                // Loop through parent categories
                                foreach ($parent_categories as $parent_category) {
                                // Query to count posts in the current category
                                $category_post_count = new WP_Query(array(
                                'category__in' => array($parent_category->term_id),
                                'posts_per_page' => -1, // Get all posts
                                'post_status' => 'publish' // Only count published posts
                                ));
                                
                                // Output category name and post count
                                echo '<li><a href="' . esc_url(get_category_link($parent_category->term_id)) . '">' . $parent_category->name . ' </a></li>';
                                
                                // Reset post data
                                wp_reset_postdata();
                                }
                                ?>
                                    </ul>
                                </div>
                            </div><!-- End Single Sidebar Wrap -->
                       
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== End Page Content Wrapper ==-->

<?php get_footer(); ?>
