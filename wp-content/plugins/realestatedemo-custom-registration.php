<?php
/**
 * Plugin Name: Real Estate Demo Custom Registration
 * Plugin URI: https://www.clarka.me/
 * Description: Creating a Custom WordPress Registration Form Plugin for Real Estate Demo site
 * Version: 1.0.0
 * Author: Clark Alford
 * Author URI: https://www.clarka.me/links/
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

function clarka_registration_form( $first_name, $username, $email, $password ) {

    $loginpage = home_url( '/login/' );

    echo '
    <form action="' . $_SERVER['REQUEST_URI'] . '" method="post">
        <div class="form-group">
            <label for="firstname">First Name</label>
            <input class="form-control" type="text" name="fname" value="' . ( isset( $_POST['fname']) ? $first_name : null ) . '">
            <i class="ti-user"></i>
        </div>

        <div class="form-group">
            <label for="username">Username</label>
            <input class="form-control" type="text" name="username" value="' . ( isset( $_POST['username'] ) ? $username : null ) . '">
            <i class="ti-user"></i>
        </div>

        <div class="form-group">
            <label for="email">Your Email</label>
            <input class="form-control" type="text" name="email" value="' . ( isset( $_POST['email']) ? $email : null ) . '">
            <i class="icon_mail_alt"></i>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input class="form-control" type="password" name="password" value="' . ( isset( $_POST['password'] ) ? $password : null ) . '">
            <i class="icon_lock_alt"></i>
        </div>

        <div id="pass-info" class="clearfix"></div>
        <input class="btn_1 rounded full-width add_top_30" type="submit" name="submit" value="Register Now!"/>
        <div class="text-center add_top_10">Already have an acccount? <strong><a href="' . $loginpage . '">Sign In</a></strong></div>
    </form>
    ';
}

function clarka_registration_validation( $first_name, $username, $email, $password ) {

    global $reg_errors;
    $reg_errors = new WP_Error;

    /**
     * Check empty fields
     */
    if ( empty( $username ) || empty( $email ) || empty( $password ) ) {
        $reg_errors->add('field', 'Required form field is missing');
    }

    /**
     * Check user name length greater than 4 character.
     */
    if ( 4 > strlen( $username ) ) {
        $reg_errors->add( 'username_length', 'Username too short. At least 4 characters is required' );
    }

    /**
     * Check user name is exists
     */
    if ( username_exists( $username ) ){
        $reg_errors->add('user_name', 'Sorry, that username already exists!');
    }

    /**
     * validate wp user name
     */
    if ( ! validate_username( $username ) ) {
        $reg_errors->add( 'username_invalid', 'Sorry, the username you entered is not valid' );
    }

    /**
     * check password lengh
     */
    if ( 5 > strlen( $password ) ) {
        $reg_errors->add( 'password', 'Password length must be greater than 5' );
    }

    /**
     * check email is correct email
     */
    if ( !is_email( $email ) ) {
        $reg_errors->add( 'email_invalid', 'Email is not valid' );
    }

    /**
     * check email already in use or not
     */
    if ( email_exists( $email ) ) {
        $reg_errors->add( 'email', 'Email Already in use' );
    }

    if ( is_wp_error( $reg_errors ) ) {
        foreach ( $reg_errors->get_error_messages() as $error ) {
            echo '<div>';
            echo '<strong><span style="color:red;">ERROR</strong>: ';
            echo $error . '<br/>';
            echo '</div><br>';
        }
    }
}

function clarka_complete_registration() {
    global $reg_errors, $first_name, $username, $email, $password;

    if ( 1 > count( $reg_errors->get_error_messages() ) ) {
        $userdata = array(
            'first_name' => $first_name,
            'user_login' => $username,
            'user_email' => $email,
            'user_pass' => $password,
        );
        $user = wp_insert_user( $userdata );
        echo '<br>Registration complete. Goto <a href="' . get_site_url() . '/wp-login.php">login page</a>.<br><br>';
    }
}

function custom_registration_function() {

    global $first_name, $username, $email, $password;

    if ( isset($_POST['submit'] ) ) {
        clarka_registration_validation(
            $_POST['fname'],
            $_POST['username'],
            $_POST['email'],
            $_POST['password'],
        );

        // sanitize user form input
        $first_name = sanitize_text_field( $_POST['fname'] );
        $username = sanitize_user( $_POST['username'] );
        $email = sanitize_email( $_POST['email'] );
        $password = esc_attr( $_POST['password'] );

        // call @function complete_registration to create the user
        // only when no WP_error is found
        clarka_complete_registration(
            $first_name,
            $username,
            $email,
            $password,
        );
    }

    clarka_registration_form(
        $first_name,
        $username,
        $email,
        $password,
    );
}

add_shortcode( 'clarka_custom_registration', 'clarka_custom_registration_shortcode' );
// adds shortcode
function clarka_custom_registration_shortcode() {
    ob_start();
    custom_registration_function();
    return ob_get_clean();
}
