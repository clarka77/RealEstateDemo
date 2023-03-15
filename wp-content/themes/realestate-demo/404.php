<?php
/**
 * 404
 *
 * The custom template for displaying 404 pages (not found)
 * based on 404 Page by Kasper De Bruyne
 * php version 8.1.12
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Real_Estate_Demo
 * @author     Clark Alford <clark@clarka.me>
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://developer.wordpress.org/themes/basics/template-hierarchy/#404-not-found
 * @since      1.0.0
 */
?>

<?php get_header(); ?>

<body class="inner-pages hd-white">
    <!-- Wrapper -->
    <div id="wrapper">
        <!-- START SECTION HEADINGS -->
<?php get_template_part('template-parts/content', 'header'); ?>

        <!-- START SECTION 404 -->
        <section class="notfound pt-0">
            <div class="container">
                <div class="top-headings text-center">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/bg/error-404.jpg" alt="Page 404">
                    <h3 class="text-center">Page Not Found!</h3>
                    <p class="text-center">Oops! Looks Like Something Going Wrong We can’t seem to find the page you’re looking for make sure that you have typed the currect URL</p>
                </div>
                <div class="port-info">
                    <a href="<?php echo site_url(); ?>" class="btn btn-primary btn-lg">Go To Home</a>
                </div>
            </div>
        </section>
        <!-- END SECTION 404 -->

<?php get_footer(); ?>
