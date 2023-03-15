<?php
/**
 * Template Name: Login
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
                    <h1>Login</h1>
                    <h2><a href="<?php echo site_url(); ?>">Home </a> &nbsp;/&nbsp; login</h2>
                </div>
            </div>
        </section>
        <!-- END SECTION HEADINGS -->

        <!-- START SECTION LOGIN -->
        <div id="login">
            <div class="login">
                <div><!-- used to be form -->
                    <div class="access_social">
                        <a href="#0" class="social_bt facebook">Login with Facebook</a>
                        <a href="#0" class="social_bt google">Login with Google</a>
                        <a href="#0" class="social_bt linkedin">Login with Linkedin</a>
                    </div>
                    <div class="divider"><span>Or</span></div>

                    <?php
                        if ( ! is_user_logged_in() ) {
                            $args = array(
                                'redirect' => admin_url(), // redirect to admin dashboard
                                'form_id'           => '',
                                'label_username'    => '',
                                'label_password'    => '',
                                'id_username'       => 'user7',
                                'id_password'       => 'pass7',
                                'label_log_in'      => __( 'Login to Find Houses' ),
                                'id_submit'         => 'wp3-submit',
                            );
                        }
                    ?>

                    <?php wp_login_form( $args ); ?>
                    <div class="text-center add_top_10">New to Find Houses? <strong><a href="<?php echo site_url(); ?>/register">Sign up!</a></strong></div>
                </div><!-- used to be form -->
            </div>
        </div>


<?php get_footer(); ?>
