<?php
/**
 * The template for displaying comments
 *
 * The area of the page that contains both current comments
 * and the comment form.
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

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

    <?php global $post;
        $commentscount = wp_count_comments($post->ID);
    ?>
    <section class="comments">
        <h3 class="mb-5"><?php echo $commentscount->approved; ?> Comments</h3>
        <div class="row mb-4">
            <?php
                $args = array(
                    'post_id' => get_the_ID(),
                    'status'  => 'approve',
                );
                $comments_query   = new WP_Comment_Query;
                $comments         = $comments_query->query($args);
                foreach ( $comments as $comment ) :
            ?>
            <ul class="col-12 commented">
                <li class="comm-inf">
                    <div class="col-md-10 comments-info">
                        <h5 class="mb-1"><?php echo $comment->comment_author; ?></h5>
                        <p class="mb-4"><?php echo get_comment_date( 'M j Y' ); ?></p>
                        <p><?php echo $comment->comment_content; ?></p>
                    </div>
                </li>
            </ul>
        <?php endforeach; ?>
        </div>
    </section>

	<?php //Declare Vars
		$comment_send = 'Submit Comment';
		$comment_author = 'Name';
		$comment_email = 'Email';
		$comment_body = 'Message';
    	$comment_args = array(
			//Define Fields
			'fields' => array(
				//Author field
        		'author' => '<div class="col-md-12"><div class="form-group"><input type="text" name="name" class="form-control" aria-required="true" placeholder="' . $comment_author .'"></input></div></div>',
        		//Email Field
				'email' => '<div class="col-md-12"><div class="form-group"><input type="email" name="email" class="form-control" aria-required="true" placeholder="' . $comment_email .'"></input></div></div>',
			),
        	'title_reply_before' => '<h3 class="mb-5">',
        	'title_reply' => __( 'Leave a Comment', 'clarka'  ),
        	'title_reply_after'  => '</h3>',
			// Remove "Text or HTML to be displayed before the set of comment fields".
    		'comment_notes_before' => '',
			// Redefine your own textarea (the comment body).
    		'comment_field' => '<div class="col-md-12 form-group"><textarea class="form-control" id="exampleTextarea" rows="8" aria-required="true" placeholder="' . $comment_body .'"></textarea></div>',
			// Change the title of send button
			'label_submit' => __( $comment_send ),
        );
    ?>
    <section class="leve-comments wpb">
        <?php comment_form( $comment_args ); ?>
    </section>
</div><!-- .comments-area -->
