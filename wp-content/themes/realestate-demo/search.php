<?php
/**
 * The template for displaying search results pages
 * php version 8.1.11
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Real_Estate_Demo
 * @author     Clark Alford <clark@clarka.me>
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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
                    <h1><?php _e( 'Search results for:', 'nd_dosth' ); ?><br>
                    <?php echo get_search_query(); ?></h1>
                    <h2><a href="<?php echo site_url(); ?>">Home </a> &nbsp;/&nbsp; Search Details</h2>
                </div>
            </div>
        </section>
        <!-- END SECTION HEADINGS -->

<div class="content-container">
    <div class="container"><br><br>
        <div class="row">
            <div class="search-results-container col-md-8">
            <?php if ( have_posts() ): ?>
                <?php while( have_posts() ): ?>
                    <?php the_post(); ?>
                    <div class="search-result">
                        <h2><?php the_title(); ?></h2>
                        <?php the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>" class="read-more-link">
                            <?php _e( 'Read More', 'nd_dosth' );  ?>
                        </a>
                    </div><br>
                <?php endwhile; ?>
                <?php the_posts_pagination(); ?>
            <?php else: ?>
                <p><?php _e( 'No Search Results found', 'nd_dosth' ); ?></p><br>
            <?php endif; ?>
            </div>
            <div id="blog-sidebar" class="col-md-4">
                <?php //get_sidebar(); ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
