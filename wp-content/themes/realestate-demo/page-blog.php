<?php
/**
 * The template for displaying all page-blog
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 * php version 8.1.11
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Real_Estate_Demo
 * @author     Clark Alford <clark@clarka.me>
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://developer.wordpress.org/themes/basics/template-hierarchy/#single-page
 * @since      1.0.0
 */
get_header(); ?>

<body class="inner-pages hd-white">
    <!-- Wrapper -->
    <div id="wrapper">
        <!-- START SECTION HEADINGS -->
<?php get_template_part('template-parts/content', 'header'); ?>

        <div class="clearfix"></div>
        <!-- Header Container / End -->

        <section class="headings">
            <div class="text-heading text-center">
                <div class="container">
                    <h1>Blog</h1>
                    <h2><a href="<?php echo site_url(); ?>">Home </a> &nbsp;/&nbsp; Blog</h2>
                </div>
            </div>
        </section>
        <!-- END SECTION HEADINGS -->

        <!-- START SECTION BLOG -->
        <section class="blog-section">
            <div class="container">
                <div class="news-wrap">
                    <div class="row">
                        <?php
                            $the_query = new WP_Query('posts_per_page=6');
                            while ($the_query -> have_posts()) : $the_query -> the_post();
                            global $post;
                            $commentscount = wp_count_comments($post->ID);
                        ?>
                        <div class="col-lg-12 col-md-12 col-xs-12">
                            <div class="news-item news-item-sm">
                                <a href="<?php the_permalink() ?>" class="news-img-link">
                                    <div class="news-item-img">
                                        <img class="resp-img" src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id((int)$atts['id']), 'clarka-posts-image', false)[0]?>" alt="<?php echo get_post_meta(get_post_thumbnail_id($post->ID), '_wp_attachment_image_alt', true); ?>">
                                    </div>
                                </a>
                                <div class="news-item-text">
                                    <a href="<?php the_permalink() ?>"><h3><?php the_title(); ?></h3></a>
                                    <div class="dates">
                                        <span class="date"><?php echo get_the_date('M-d-Y'); ?> &nbsp;/</span>
                                        <ul class="action-list pl-0">
                                            <li class="action-item"><i class="fa fa-comment"></i> <span><?php echo $commentscount->approved; ?></span></li>
                                        </ul>
                                    </div>
                                    <div class="news-item-descr">
                                        <p><?php the_excerpt(); ?></p>
                                    </div>
                                    <div class="news-item-bottom">
                                        <a href="<?php the_permalink() ?>" class="news-link">Read more...</a>
                                        <div class="admin"><?php
                                            $fname = get_the_author_meta('first_name');
                                            $lname = get_the_author_meta('last_name');
                                            $full_name = '';
                                            if(empty($fname)) {
                                                $full_name = $lname;
                                            } elseif(empty($lname)) {
                                                $full_name = $fname;
                                            } else {
                                                //both first name and last name are present
                                                $full_name = "{$fname} {$lname}";
                                            }
                                            ?>
                                            <p>by, <?php echo $full_name; ?></p>
                                            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/testimonials/ts-1.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-xs-12 space"></div>
                        <?php // Repeat the process and reset once it hits the limit
                            endwhile;
                            wp_reset_postdata();
                            // Ajax Load More Plugin
                            echo do_shortcode("[ajax_load_more loading_style='red' post_type='post' posts_per_page='3' offset = '6' pause='true' scroll='false' button_done_label='No More Posts' layouts_cols='3']");
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION BLOG -->

<?php get_footer(); ?>
