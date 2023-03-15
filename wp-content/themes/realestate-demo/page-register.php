<?php
/**
 * The template for displaying page-register
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
                    <h1>Register</h1>
                    <h2><a href="<?php echo site_url(); ?>">Home </a> &nbsp;/&nbsp; Contact Us</h2>
                </div>
            </div>
        </section>
        <!-- END SECTION HEADINGS -->

        <!-- START SECTION 404 -->
        <div id="login">
            <div class="login">
                <?php echo do_shortcode( '[clarka_custom_registration]' ); ?>
            </div>
        </div>
        <!-- END SECTION 404 -->

<?php get_footer(); ?>
