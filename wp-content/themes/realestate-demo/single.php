<?php
/**
 * The template for displaying all single posts
 * php version 8.1.11
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Real_Estate_Demo
 * @author     Clark Alford <clark@clarka.me>
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 * @since      1.0.0
 */
?>

<?php get_header(); ?>

<body class="inner-pages hd-white">
    <!-- START SECTION HEADINGS -->
    <!-- Wrapper -->
    <div id="wrapper">
        <!-- START SECTION HEADINGS -->
<?php get_template_part('template-parts/content', 'header'); ?>

        <div class="clearfix"></div>
        <!-- Header Container / End -->

        <section class="headings">
            <div class="text-heading text-center">
                <div class="container">
                    <h1>Blog Details</h1>
                    <h2><a href="<?php echo site_url(); ?>">Home </a> &nbsp;/&nbsp; Blog Details</h2>
                </div>
            </div>
        </section>
        <!-- END SECTION HEADINGS -->

        <!-- START SECTION BLOG -->
        <?php global $post;
            $commentscount = wp_count_comments($post->ID);
        ?>
        <section class="blog blog-section bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12 blog-pots">
                        <div class="row">
                            <div class="col-md-12 col-xs-12">
                                <div class="news-item details no-mb2">
                                    <a href="#0" class="news-img-link">
                                        <div class="news-item-img">
                                            <img class="img-responsive" src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id((int)$atts['id']), 'full', false)[0]?>" alt="<?php echo get_post_meta(get_post_thumbnail_id($post->ID), '_wp_attachment_image_alt', true); ?>">
                                        </div>
                                    </a>
                                    <div class="news-item-text details pb-0">
                                        <a href="#0"><h3><?php the_title(); ?></h3></a>
                                        <div class="dates">
                                            <span class="date"><?php echo get_the_date('M-d-Y'); ?> &nbsp;/</span>
                                            <ul class="action-list pl-0">
                                                <li class="action-item"><i class="fa fa-comment"></i> <span><?php echo $commentscount->approved; ?></span></li>
                                            </ul>
                                        </div>
                                        <div>
                                            <p><?php the_content(); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <?php comments_template(); ?>
                    </div>
                    <aside class="col-lg-3 col-md-12">
                        <div class="widget">
                            <h5 class="font-weight-bold mb-4">Search</h5>
                            <?php get_search_form(); ?>
                            <div class="recent-post py-5">
                                <h5 class="font-weight-bold">Category</h5>
                                <ul>
                                    <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>House</a></li>
                                    <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Garages</a></li>
                                    <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Real Estate</a></li>
                                    <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Real Home</a></li>
                                    <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Bath</a></li>
                                    <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Beds</a></li>
                                </ul>
                            </div>
                            <div class="recent-post">
                                <h5 class="font-weight-bold mb-4">Popular Tags</h5>
                                <div class="tags">
                                    <span><a href="#" class="btn btn-outline-primary">Houses</a></span>
                                    <span><a href="#" class="btn btn-outline-primary">Real Home</a></span>
                                </div>
                                <div class="tags">
                                    <span><a href="#" class="btn btn-outline-primary">Baths</a></span>
                                    <span><a href="#" class="btn btn-outline-primary">Beds</a></span>
                                </div>
                                <div class="tags">
                                    <span><a href="#" class="btn btn-outline-primary">Garages</a></span>
                                    <span><a href="#" class="btn btn-outline-primary">Family</a></span>
                                </div>
                                <div class="tags">
                                    <span><a href="#" class="btn btn-outline-primary">Real Estates</a></span>
                                    <span><a href="#" class="btn btn-outline-primary">Properties</a></span>
                                </div>
                                <div class="tags">
                                    <span><a href="#" class="btn btn-outline-primary">Location</a></span>
                                    <span><a href="#" class="btn btn-outline-primary">Price</a></span>
                                </div>
                            </div>
                            <div class="recent-post pt-5">
                                <h5 class="font-weight-bold mb-4">Recent Posts</h5>
                                <?php
                                  $the_query = new WP_Query( 'posts_per_page=3' );
                                  while ($the_query -> have_posts()) : $the_query -> the_post();
                                  //echo '<pre>' , var_dump($the_query) , '</pre>';
                                ?>
                                <div class="recent-main">
                                    <div class="recent-img">
                                        <a href="<?php the_permalink() ?>">
                                            <img src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id((int)$atts['id']), 'clarka-posts-image', false)[0]?>" alt="<?php echo get_post_meta(get_post_thumbnail_id($post->ID), '_wp_attachment_image_alt', true); ?>"></a>
                                    </div>
                                    <div class="info-img">
                                        <a href="<?php the_permalink() ?>"><h6><?php the_title(); ?></h6></a>
                                        <p><?php echo get_the_date( 'M-d-Y' ); ?></p>
                                    </div>
                                </div><br>
                                <?php // Repeat the process and reset once it hits the limit
                                  endwhile;
                                  wp_reset_postdata();
                                ?>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </section>
        <!-- END SECTION BLOG -->

<?php get_footer(); ?>
