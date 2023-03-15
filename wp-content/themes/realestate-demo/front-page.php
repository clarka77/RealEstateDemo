<?php
/**
 * Front Page
 *
 * Front Page file for the theme.
 * php version 8.1.12
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Real_Estate_Demo
 * @author     Clark Alford <clark@clarka.me>
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://developer.wordpress.org/themes/basics/template-files/
 * @since      1.0.0
 */
?>

<?php get_header(); ?>

<body class="th-8 homepage-4 hp-6 hd-white">
    <!-- Wrapper -->
    <div id="wrapper">
        <!-- START SECTION HEADINGS -->
<?php get_template_part('template-parts/content', 'header'); ?>

        <!-- STAR HEADER IMAGE -->
        <section class="header-image parallax-search8 th-8 d-flex align-items-center" id="slider">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-3" data-aos="fade-right">
                    </div>
                    <div class="col-lg-4 d-none d-lg-none d-xl-flex" data-aos="fade-right">
                    </div>
                    <div class="col-lg-5 col-sm-12" data-aos="fade-left">
                        <!-- Search Form -->
                        <div class="trip-search contact-us">
                            <h4 class="text-center mb-4">Arrange a meeting with Sam Smith to buy, sell or rent your home.</h4>
                            <?php echo do_shortcode( '[wpforms id="86" title="false"]' ); ?>
                        </div>
                        <!--/ End Search Form -->
                    </div>
                </div>
            </div>
        </section>
        <!-- END HEADER IMAGE -->

        <!-- START SECTION WHY CHOOSE US -->
        <section class="how-it-works bg-white-1 home18">
            <div class="container">
                <div class="sec-title">
                    <h2><span>Why </span>Choose Us</h2>
                    <p>We provide full service at every step.</p>
                </div>
                <div class="row service-1">
                    <article class="col-lg-4 col-md-6 col-xs-12 serv" data-aos="fade-up" data-aos-delay="150">
                        <div class="serv-flex">
                            <div class="art-1 img-13">
                                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/icons/icon-4.svg" alt="">
                                <h3>Wide Range Of Properties</h3>
                            </div>
                            <div class="service-text-p">
                                <p class="text-center">lorem ipsum dolor sit amet, consectetur pro adipisici consectetur debits adipisicing lacus consectetur Business Directory.</p>
                            </div>
                        </div>
                    </article>
                    <article class="col-lg-4 col-md-6 col-xs-12 serv" data-aos="fade-up" data-aos-delay="250">
                        <div class="serv-flex">
                            <div class="art-1 img-14">
                                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/icons/icon-5.svg" alt="">
                                <h3>Trusted by thousands</h3>
                            </div>
                            <div class="service-text-p">
                                <p class="text-center">lorem ipsum dolor sit amet, consectetur pro adipisici consectetur debits adipisicing lacus consectetur Business Directory.</p>
                            </div>
                        </div>
                    </article>
                    <article class="col-lg-4 col-md-6 col-xs-12 serv mb-0 pt" data-aos="fade-up" data-aos-delay="350">
                        <div class="serv-flex arrow">
                            <div class="art-1 img-15">
                                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/icons/icon-6.svg" alt="">
                                <h3>Financing made easy</h3>
                            </div>
                            <div class="service-text-p">
                                <p class="text-center">lorem ipsum dolor sit amet, consectetur pro adipisici consectetur debits adipisicing lacus consectetur Business Directory.</p>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>
        <!-- END SECTION WHY CHOOSE US -->

        <!-- START SECTION PROPERTIES FOR SALE -->
        <section class="recently portfolio bg-white home18">
            <div class="container">
                <div class="sec-title">
                    <h2><span>Properties </span>For Sale</h2>
                    <p>Find your dream home from our Sale added properties.</p>
                </div>
                <div class="portfolio col-xl-12">
                    <div class="slick-lancers">
                        <?php $args = array(
                            'post_type' => 'showings',
                        );
                        $the_query = new WP_Query( $args ); ?>
                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <div class="agents-grid" data-aos="fade-up" data-aos-delay="150">
                            <div class="landscapes">
                                <div class="project-single">
                                    <div class="project-inner project-head">
                                        <div class="homes">
                                            <!-- homes img -->
                                            <a href="" class="homes-img">
                                                <div class="homes-tag button alt featured">Featured</div>
                                                <div class="homes-tag button alt sale">For Sale</div>
                                                <div class="homes-price">
                                                    <?php
                                                        $showings_number = get_post_meta(get_the_ID(), 'showings_price', true );
                                                        // english notation (default)
                                                        $english_format_number = number_format($showings_number); ?>
                                                        $<?php echo $english_format_number;
                                                    ?>
                                                </div>
                                                <img src="<?php echo wp_get_attachment_image_src( get_field('showings_image'), 'showings-image' )[0]; ?>" alt="home-1" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="button-effect">
                                            <a href="" class="btn"><i class="fa fa-link"></i></a>
                                            <a href="https://www.youtube.com/watch?v=2xHQqYRcrx4" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                            <a href="" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                        </div>
                                    </div>
                                    <!-- homes content -->
                                    <div class="homes-content">
                                        <!-- homes address -->
                                        <h3><a href=""><?php echo get_post_meta(get_the_ID(), 'showings_title', true ); ?></a></h3>
                                        <p class="homes-address mb-3">
                                            <a href="single-property-1.html">
                                                <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                                            </a>
                                        </p>
                                        <!-- homes List -->
                                        <ul class="homes-list clearfix pb-3">
                                            <li class="the-icons">
                                                <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                                <span><?php echo get_post_meta(get_the_ID(), 'showings_bed', true ); ?> Bedrooms</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                                <span><?php echo get_post_meta(get_the_ID(), 'showings_bath', true ); ?> Bathrooms</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                                <span><?php echo get_post_meta(get_the_ID(), 'showings_sqft', true ); ?> sq ft</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                                <span><?php echo get_post_meta(get_the_ID(), 'showings_garage', true ); ?> Garages</span>
                                            </li>
                                        </ul>
                                        <div class="footer">
                                            <a href="">
                                                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/testimonials/ts-1.jpg" alt="" class="mr-2"> <?php echo get_post_meta(get_the_ID(), 'showings_agent', true ); ?>
                                            </a>
                                            <span>2 months ago</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                            endwhile;
                            wp_reset_postdata();
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION PROPERTIES FOR SALE -->

        <!-- START SECTION TESTIMONIALS -->
        <section class="testimonials home18 bg-white-1">
            <div class="container">
                <div class="sec-title">
                    <h2><span>Clients </span>Testimonials</h2>
                    <p>We collect reviews from our customers.</p>
                </div>
                <div class="owl-carousel style1">
                    <div class="test-1 pb-0 pt-0" data-aos="zoom-in">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/testimonials/ts-1.jpg" alt="">
                        <h3 class="mt-3 mb-0">Lisa Smith</h3>
                        <h6 class="mt-1">New York</h6>
                        <ul class="starts text-center mb-2">
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, ligula magna at etiam aliquip venenatis. Vitae sit felis donec, suscipit tortor et sapien donec.</p>
                    </div>
                    <div class="test-1 pb-0 pt-0">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/testimonials/ts-2.jpg" alt="">
                        <h3 class="mt-3 mb-0">Jhon Morris</h3>
                        <h6 class="mt-1">Los Angeles</h6>
                        <ul class="starts text-center mb-2">
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star-o"></i>
                            </li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, ligula magna at etiam aliquip venenatis. Vitae sit felis donec, suscipit tortor et sapien donec.</p>
                    </div>
                    <div class="test-1 pt-0">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/testimonials/ts-3.jpg" alt="">
                        <h3 class="mt-3 mb-0">Mary Deshaw</h3>
                        <h6 class="mt-1">Chicago</h6>
                        <ul class="starts text-center mb-2">
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, ligula magna at etiam aliquip venenatis. Vitae sit felis donec, suscipit tortor et sapien donec.</p>
                    </div>
                    <div class="test-1 pt-0">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/testimonials/ts-4.jpg" alt="">
                        <h3 class="mt-3 mb-0">Gary Steven</h3>
                        <h6 class="mt-1">Philadelphia</h6>
                        <ul class="starts text-center mb-2">
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star-o"></i>
                            </li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, ligula magna at etiam aliquip venenatis. Vitae sit felis donec, suscipit tortor et sapien donec.</p>
                    </div>
                    <div class="test-1 pt-0">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/testimonials/ts-5.jpg" alt="">
                        <h3 class="mt-3 mb-0">Cristy Mayer</h3>
                        <h6 class="mt-1">San Francisco</h6>
                        <ul class="starts text-center mb-2">
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, ligula magna at etiam aliquip venenatis. Vitae sit felis donec, suscipit tortor et sapien donec.</p>
                    </div>
                    <div class="test-1 pt-0">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/testimonials/ts-6.jpg" alt="">
                        <h3 class="mt-3 mb-0">Ichiro Tasaka</h3>
                        <h6 class="mt-1">Houston</h6>
                        <ul class="starts text-center mb-2">
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star-o"></i>
                            </li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, ligula magna at etiam aliquip venenatis. Vitae sit felis donec, suscipit tortor et sapien donec.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION TESTIMONIALS -->

        <!-- START SECTION BLOG -->
        <?php global $post;
            $commentscount = wp_count_comments($post->ID);
        ?>
        <section class="blog-section home18 bg-white">
            <div class="container">
                <div class="sec-title">
                    <h2><span>Latest Articles & </span>Tips</h2>
                    <p>Read the latest news from our blog.</p>
                </div>
                <div class="news-wrap">
                    <div class="row">
                        <?php
                            $the_query = new WP_Query('posts_per_page=3');
                            while ($the_query -> have_posts()) : $the_query -> the_post();
                            global $post;
                            $commentscount = wp_count_comments($post->ID);
                        ?>
                        <div class="col-xl-4 col-md-6 col-xs-12">
                            <div class="news-item" data-aos="fade-up" data-aos-delay="150">
                                <a href="<?php the_permalink() ?>" class="news-img-link">
                                    <div class="news-item-img">
                                        <img class="img-responsive" src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id((int)$atts['id']), 'clarka-posts-image', false)[0]?>" alt="<?php echo get_post_meta(get_post_thumbnail_id($post->ID), '_wp_attachment_image_alt', true); ?>">
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
                                    <div class="news-item-descr big-news">
                                        <?php
                                            $excerpt = get_the_excerpt();
                                            $excerpt = substr( $excerpt, 0, 160 ); // Only display first 260 characters of excerpt
                                            $miniexcerpt = substr( $excerpt, 0, strrpos( $excerpt, ' ' ) );
                                        ?>
                                        <p><?php echo $miniexcerpt; ?></p>
                                    </div>
                                    <div class="news-item-bottom">
                                        <a href="<?php the_permalink() ?>" class="news-link">Read more...</a>
                                        <div class="admin">
                                            <p>By, Karl Smith</p>
                                            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/testimonials/ts-6.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php // Repeat the process and reset once it hits the limit
                            endwhile;
                            wp_reset_postdata();
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION BLOG -->

        <!-- STAR SECTION PARTNERS -->
        <div class="partners bg-white-1 home18">
            <div class="container">
                <div class="sec-title">
                    <h2><span>Our </span>Partners</h2>
                    <p>The Companies That Represent Us.</p>
                </div>
                <div class="owl-carousel style2">
                    <div class="owl-item" data-aos="fade-up"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/partners/11.jpg" alt=""></div>
                    <div class="owl-item" data-aos="fade-up"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/partners/12.jpg" alt=""></div>
                    <div class="owl-item" data-aos="fade-up"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/partners/13.jpg" alt=""></div>
                    <div class="owl-item" data-aos="fade-up"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/partners/14.jpg" alt=""></div>
                    <div class="owl-item" data-aos="fade-up"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/partners/15.jpg" alt=""></div>
                    <div class="owl-item" data-aos="fade-up"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/partners/16.jpg" alt=""></div>
                    <div class="owl-item" data-aos="fade-up"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/partners/17.jpg" alt=""></div>
                    <div class="owl-item" data-aos="fade-up"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/partners/11.jpg" alt=""></div>
                    <div class="owl-item" data-aos="fade-up"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/partners/12.jpg" alt=""></div>
                    <div class="owl-item" data-aos="fade-up"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/partners/13.jpg" alt=""></div>
                </div>
            </div>
        </div>
        <!-- END SECTION PARTNERS -->

<?php get_footer(); ?>
