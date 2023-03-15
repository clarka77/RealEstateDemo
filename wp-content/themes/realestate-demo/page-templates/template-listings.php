<?php
/**
 * Template Name: Listings
 */

get_header(); ?>

<body class="inner-pages hd-white about">
    <!-- Wrapper -->
    <div id="wrapper">
        <!-- START SECTION HEADINGS -->
<?php get_template_part('template-parts/content', 'header'); ?>

        <div class="clearfix"></div>
        <!-- Header Container / End -->
        <!-- END SECTION HEADINGS -->

        <!-- START SECTION PROPERTIES LISTING -->
        <section class="properties-list featured portfolio blog ho-17">
            <div class="container">
                <section class="headings-2 pt-0 pb-0">
                    <div class="pro-wrapper">
                        <div class="detail-wrapper-body">
                            <div class="listing-title-bar">
                                <div class="text-heading text-left">
                                    <p><a href="<?php echo site_url(); ?>">Home </a> &nbsp;/&nbsp; <span>Listings</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section><br><br>

                <!-- START SECTION PROPERTIES LISTING -->
                <?php $args = array(
                    'post_type' => 'showings',
                );
                $the_query = new WP_Query( $args ); ?>
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                <div class="row">
                    <div class="col">
                        <div class="project-single mb-0" data-aos="fade-up">
                            <a href="" class="recent-16">
                                <div class="recent-img16 img-center" style="background-image: url(<?php echo wp_get_attachment_image_src( get_field('showings_image'), 'showings-image' )[0]; ?>"></div>
                                <div class="recent-content"></div>
                                <div class="recent-details">
                                    <div class="recent-title"><?php echo get_post_meta(get_the_ID(), 'showings_title', true ); ?></div>
                                    <div class="recent-price">
                                    <?php
                                        $showings_number = get_post_meta(get_the_ID(), 'showings_price', true );
                                        // english notation (default)
                                        $english_format_number = number_format($showings_number); ?>
                                        $<?php echo $english_format_number;
                                    ?>
                                    </div>
                                    <div class="house-details"><?php echo get_post_meta(get_the_ID(), 'showings_bed', true ); ?> Bed <span>|</span> <?php echo get_post_meta(get_the_ID(), 'showings_bath', true ); ?> Bath <span>|</span> <?php echo get_post_meta(get_the_ID(), 'showings_garage', true ); ?> Garage <span>|</span> <?php echo get_post_meta(get_the_ID(), 'showings_sqft', true ); ?> sq ft </div>
                                </div>
                                <div class="view-proper">View Details</div>
                            </a>
                        </div>
                    </div>
                </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                ?>
            </div>
        </section>
        <!-- END SECTION PROPERTIES LISTING -->

<?php get_footer(); ?>
