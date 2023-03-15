<?php
/**
 * Template Name: Agents
 */

 get_header(); ?>

 <body class="inner-pages hd-white about">
     <!-- Wrapper -->
     <div id="wrapper">
         <!-- START SECTION HEADINGS -->
 <?php get_template_part('template-parts/content', 'header'); ?>

         <div class="clearfix"></div>
         <!-- Header Container / End -->

         <section class="headings">
             <div class="text-heading text-center">
                 <div class="container">
                     <h1>Our Agents</h1>
                     <h2><a href="<?php echo site_url(); ?>">Home </a> &nbsp;/&nbsp; Our Agents</h2>
                 </div>
             </div>
         </section>
         <!-- END SECTION HEADINGS -->

         <!-- START SECTION AGENTS -->
         <?php $args = array(
             'post_type' => 'salesagents',
         );
         $the_query = new WP_Query( $args ); ?>
         <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

         <section class="team blog pt-5">
             <div class="container">
                 <div class="row">
                     <div class="col-lg-12 agent-mb">
                         <div class="agent agent-row shadow-hover">
                             <a href="" class="agent-img">
                                 <div class="img-fade"></div>
                                 <?php
                                    $agent_name = get_post_meta(get_the_ID(), 'salesagents_name', true );
                                    switch ($agent_name) {
                                        case "Katy Grace":
                                            $number_listings = 3;
                                            break;
                                        case "Mark Web":
                                            $number_listings = 1;
                                            break;
                                        case "Arling Tracy":
                                            $number_listings = 1;
                                            break;
                                        case "Carls Jhons":
                                            $number_listings = 1;
                                            break;
                                        default:
                                            $number_listings = 0;
                                    }
                                 ?>
                                 <div class="button alt agent-tag"><?php echo $number_listings; ?> Properties</div>
                                 <img src="<?php echo wp_get_attachment_image_src( get_field('salesagents_image'), 'salesagents-image' )[0]; ?>" alt="<?php echo get_post_meta(get_the_ID(), 'salesagents_name', true ); ?>" />
                             </a>
                             <div class="agent-content">
                                 <div class="agent-details">
                                     <h4><a href=""><?php echo get_post_meta(get_the_ID(), 'salesagents_name', true ); ?></a></h4>
                                     <p><i class="fa fa-tag icon"></i><?php echo get_post_meta(get_the_ID(), 'salesagents_title', true ); ?></p>
                                     <p><i class="fa fa-envelope icon"></i><?php echo get_post_meta(get_the_ID(), 'salesagents_email', true ); ?></p>
                                     <p><i class="fa fa-phone icon"></i><?php echo get_post_meta(get_the_ID(), 'salesagents_phone', true ); ?></p>
                                 </div>
                                 <div class="agent-text">
                                     <p><?php echo get_post_meta(get_the_ID(), 'salesagents_bio', true ); ?></p>
                                 </div><br><br>
                                 <div class="agent-footer center">
                                     <ul class="netsocials">
                                         <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                         <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                         <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                         <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                     </ul>
                                 </div>
                             </div>
                             <div class="clear"></div>
                         </div>
                     </div>
                 </div>
                 <!-- end row -->
             </div>
         </section>
         <?php endwhile; ?>
         <?php wp_reset_postdata(); ?>
         <!-- END SECTION AGENTS -->

 <?php get_footer(); ?>
