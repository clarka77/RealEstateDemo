
<?php
/**
 * Footer
 *
 * Main footer file for the theme.
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
<!-- START FOOTER -->
<footer class="first-footer">
    <div class="top-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="netabout">
                        <a href="index.html" class="logo">
                            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/logo-footer.svg" alt="netcom">
                        </a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum incidunt architecto soluta laboriosam, perspiciatis, aspernatur officiis esse.</p>
                    </div>
                    <div class="contactus">
                        <ul>
                            <li>
                                <div class="info">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <p class="in-p">95 South Park Avenue, USA</p>
                                </div>
                            </li>
                            <li>
                                <div class="info">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <p class="in-p">+456 875 369 208</p>
                                </div>
                            </li>
                            <li>
                                <div class="info">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <p class="in-p ti">support@findhouses.com</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="navigation">
                        <h3>Navigation</h3>
                        <div class="nav-footer">
                            <ul>
                                <li><a href="<?php echo site_url(); ?>">Home</a></li>
                                <li><a href="<?php echo site_url(); ?>/properties">Properties List</a></li>
                                <li><a href="<?php echo site_url(); ?>/privacy">Privacy Policy</a></li>
                                <li><a href="<?php echo site_url(); ?>/terms">Terms of Service</a></li>
                                <li class="no-mgb"><a href="<?php echo site_url(); ?>/login">Login</a></li>
                            </ul>
                            <ul class="nav-right">
                                <li><a href="<?php echo site_url(); ?>/register">Register</a></li>
                                <li><a href="<?php echo site_url(); ?>/about">About Us</a></li>
                                <li><a href="<?php echo site_url(); ?>/blog">Blog</a></li>
                                <li><a href="<?php echo site_url(); ?>/faq">FAQ</a></li>
                                <li class="no-mgb"><a href="<?php echo site_url(); ?>/contact">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="widget">
                        <h3>Twitter Feeds</h3>
                        <div class="twitter-widget contuct">
                            <div class="twitter-area">
                                <div class="single-item">
                                    <div class="icon-holder">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </div>
                                    <div class="text">
                                        <h5><a href="#">@findhouses</a> all share them with me baby said inspet.</h5>
                                        <h4>about 5 days ago</h4>
                                    </div>
                                </div>
                                <div class="single-item">
                                    <div class="icon-holder">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </div>
                                    <div class="text">
                                        <h5><a href="#">@findhouses</a> all share them with me baby said inspet.</h5>
                                        <h4>about 5 days ago</h4>
                                    </div>
                                </div>
                                <div class="single-item">
                                    <div class="icon-holder">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </div>
                                    <div class="text">
                                        <h5><a href="#">@findhouses</a> all share them with me baby said inspet.</h5>
                                        <h4>about 5 days ago</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="newsletters">
                        <h3>Newsletters</h3>
                        <p>Sign Up for Our Newsletter to get Latest Updates and Offers. Subscribe to receive news in your inbox.</p>
                    </div>
                    <form class="bloq-email mailchimp form-inline" method="post">
                        <label for="subscribeEmail" class="error"></label>
                        <div class="email">
                            <input type="email" id="subscribeEmail" name="EMAIL" placeholder="Enter Your Email">
                            <input type="submit" value="Subscribe">
                            <p class="subscription-success"></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="second-footer">
        <div class="container">
            <p>2023 - <script>document.write(new Date().getFullYear())</script> © Copyright - All Rights Reserved.</p>
            <ul class="netsocials">
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>
</footer>

<a data-scroll href="#wrapper" class="go-up"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
<!-- END FOOTER -->

<!-- START PRELOADER -->
<div id="preloader">
    <div id="status">
        <div class="status-mes"></div>
    </div>
</div>
<!-- END PRELOADER -->

<?php wp_footer(); ?>

<?php if (is_page_template( 'page-templates/template-faq.php') ) { ?>
<script>
    $(".accordion li").click(function() {
        $(this).closest(".accordion").hasClass("one-open") ? ($(this).closest(".accordion").find("li").removeClass("active"), $(this).addClass("active")) : $(this).toggleClass("active"), "undefined" != typeof window.mr_parallax && setTimeout(mr_parallax.windowLoad, 500)
    });
</script>
<?php } // end of if page template faq ?>

<?php if (is_page_template( 'page-templates/template-about.php') ) { ?>
<script>
    $('.style1').owlCarousel({
        loop: true,
        margin: 10,
        autoplay: false,
        autoplayTimeout: 5000,
        responsive: {
            0: {
                items: 1
            },
            400: {
                items: 1,
                margin: 20
            },
            500: {
                items: 1,
                margin: 20
            },
            768: {
                items: 1,
                margin: 20
            },
            991: {
                items: 1,
                margin: 20
            },
            1000: {
                items: 1,
                margin: 20
            }
        }
    });
</script>
<script>
    $('.style2').owlCarousel({
        loop: true,
        margin: 0,
        dots: false,
        autoWidth: false,
        autoplay: true,
        autoplayTimeout: 5000,
        responsive: {
            0: {
                items: 2,
                margin: 20
            },
            400: {
                items: 2,
                margin: 20
            },
            500: {
                items: 3,
                margin: 20
            },
            768: {
                items: 4,
                margin: 20
            },
            992: {
                items: 5,
                margin: 20
            },
            1000: {
                items: 6,
                margin: 20
            }
        }
    });
</script>
<?php } // end of if page template about ?>

<?php if (is_front_page() ) { ?>
<script>
    $(window).on('scroll load', function() {
        $("#header.cloned #logo img").attr("src", $('#header #logo img').attr('data-sticky-logo'));
    });
</script>

<!-- Slider Revolution scripts -->
<script src="<?php echo get_theme_file_uri(); ?>/assets/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="<?php echo get_theme_file_uri(); ?>/assets/revolution/js/jquery.themepunch.revolution.min.js"></script>

<script>
    $('.slick-lancers').slick({
        infinite: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: true,
        arrows: false,
        adaptiveHeight: true,
        responsive: [{
            breakpoint: 1292,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                dots: true,
                arrows: false
            }
        }, {
            breakpoint: 993,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                dots: true,
                arrows: false
            }
        }, {
            breakpoint: 769,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true,
                arrows: false
            }
        }]
    });
</script>

<script>
    $('.style1').owlCarousel({
        loop: true,
        margin: 10,
        autoplay: false,
        autoplayTimeout: 5000,
        responsive: {
            0: {
                items: 1
            },
            400: {
                items: 1,
                margin: 20
            },
            500: {
                items: 1,
                margin: 20
            },
            768: {
                items: 1,
                margin: 20
            },
            991: {
                items: 1,
                margin: 20
            },
            1000: {
                items: 1,
                margin: 20
            }
        }
    });
</script>
<?php } // end of if front page ?>

<!-- MAIN JS -->
<script src="<?php echo get_theme_file_uri(); ?>/assets/js/script.js"></script>

</div><!-- Wrapper / End -->

</body>

</html>
