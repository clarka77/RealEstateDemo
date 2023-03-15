<?php
/**
 * Header
 *
 * Main header file for the theme.
 * php version 8.1.12
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Real_Estate_Demo
 * @author     Clark Alford <clark@clarka.me>
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @since      1.0.0
 */
?>
<!doctype html>
<!--

        "Let no one excel you in anything;
          love for your brother what you love
            for yourself."

                                  Master Fard Muhammad
                                  The Mahdi

        -->
<html <?php language_attributes(); ?>>

<head>
  <!-- Meta Elements -->
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <!-- Always force latest IE rendering engine -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- shrink-to-fit addresses problem with iOS Safari-->
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <?php if (is_page() ) { ?>
  <meta name="description" content="I'm a remote freelance Wordpress expert Developer God. Have a project in mind; contact me and let's discuss it.">
  <!-- 115 characters long -->
  <meta name="keywords" content="Clark Alford,ClarkA,Clark A,remote developer,web developer,freelance developer,wordpress developer,wordpress expert,wordpress god,remote freelance wordpress developer">
  <!-- kwds,comma,separated,no,spaces. Good for search other than google. Use on pages only -->
  <?php } ?>
  <meta name="robots" content="noindex, nofollow">
  <?php if (is_front_page() ) { ?>
  <meta name="abstract" content="I help designers, individuals, and small businesses bring their designs or ideas to digital life on the world wide web so they can increase customer engagement, generate repeat website traffic, and improve brand presence.">
  <!-- a very short description of your website; just need on index page -->
  <?php } ?>
  <?php if (is_single() ) { ?>
  <?php $current_url = get_permalink(get_the_ID()); ?>
  <meta name='syndication-source' content='<?php echo $current_url; ?>'>
  <meta name='original-source' content='<?php echo $current_url; ?>'>
  <!-- claim the posts as the original source -->
  <?php
    // Making an excerpt of the blog post content
    $excerpt = strip_tags($post->post_content);
    if (strlen($excerpt) > 100) {
        $excerpt = substr($excerpt, 0, 100);
        $excerpt = substr($excerpt, 0, strrpos($excerpt, ' '));
    }
    ?>
  <meta name="description" content="<?php echo $excerpt; ?>">
  <!-- excerpt from post max 100 characters long -->
  <?php } ?>
  <meta name="copyright" content="Clark Alford">
  <!-- name of owner -->
  <meta name="no-email-collection" content="https://www.projecthoneypot.org/law_of_harvesting.php">
  <!-- legal warning not to harvest emails from site -->
  <meta name="rating" content="general">
  <!-- general, mature, restricted, 14 years, safe for kids -->
  <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS2 Feed" href="<?php bloginfo('rss2_url'); ?>" />
  <!-- link to the RSS Feed of my website -->
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <!-- link for the Pingback URL of my site -->

  <!-- Bing Geo Meta Tags -->
  <meta name="geo.placename" content="Kansas City, KS, USA" />
  <meta name="geo.position" content="39.114053;-94.627464" />
  <meta name="geo.region" content="US-KS" />
  <meta name="ICBM" content="39.114053, -94.627464" />

  <!-- humans.txt we are people, not machines -->
  <link type="text/plain" rel="author" href="<?php echo get_theme_file_uri(); ?>/humans.txt" />

  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_theme_file_uri(); ?>/assets/images/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_theme_file_uri(); ?>/assets/images/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_theme_file_uri(); ?>/assets/images/favicon/favicon-16x16.png">
  <link rel="manifest" href="<?php echo get_theme_file_uri(); ?>/assets/images/favicon/site.webmanifest">
  <link rel="mask-icon" href="<?php echo get_theme_file_uri(); ?>/assets/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
  <link rel="shortcut icon" href="<?php echo get_theme_file_uri(); ?>/assets/images/favicon/favicon.ico">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="msapplication-config" content="<?php echo get_theme_file_uri(); ?>/assets/images/favicon/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">

  <!-- JS -->

  <!-- IE 9 or less -->
  <!--[if IE]>
    <script type="text/javascript">
      window.location = "http://browsehappy.com/";
    </script>
  <![endif]-->

<?php wp_head(); ?>
<?php if (is_404() || (is_page_template( 'page-templates/template-faq.php') ) || (is_page_template( 'page-templates/template-about.php') ) || (is_page_template( 'page-templates/template-login.php') ) || (is_page('register') ) || (is_page('blog') ) || (is_single() ) || (is_front_page() ) ) { ?>
<!-- CSS -->
<link rel="stylesheet" id="color" href="<?php echo get_theme_file_uri(); ?>/assets/css/default.css">
<?php } ?>
<?php if (is_page('contact') ) { ?>
<!-- CSS -->
<link rel="stylesheet" href="<?php echo get_theme_file_uri(); ?>/assets/css/leaflet.css">
<link rel="stylesheet" href="<?php echo get_theme_file_uri(); ?>/assets/css/leaflet-gesture-handling.min.css">
<link rel="stylesheet" href="<?php echo get_theme_file_uri(); ?>/assets/css/leaflet.markercluster.css">
<link rel="stylesheet" href="<?php echo get_theme_file_uri(); ?>/assets/css/leaflet.markercluster.default.css">
<link rel="stylesheet" id="color" href="<?php echo get_theme_file_uri(); ?>/assets/css/default.css">
<?php } ?>
</head>
