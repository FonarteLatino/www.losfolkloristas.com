<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains comments and the comment form.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() )
	return;
?>

<?php if ( comments_open() || (! comments_open() && get_comments_number()) ) : ?>
<div id="comments" class="comments-area">

	<?php if ( have_comments() ) : ?>
		<h4>
			<?php
				printf( _nx( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'omni' ),
					number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
			?>
		</h4>

		<ol class="commentlist">
			<?php
				wp_list_comments( array(
					'style'       => 'ol',
					'short_ping'  => true,
					'callback' => 'omni_comment'
				) );
			?>
		</ol><!-- .comment-list -->

		<?php
			// Are there comments to navigate through?
			if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
		?>
		<nav class="navigation comment-navigation clearfix" role="navigation">
			<div class="nav-previous pull-left"><?php previous_comments_link( __( '&larr; Older Comments', 'omni' ) ); ?></div>
			<div class="nav-next pull-right"><?php next_comments_link( __( 'Newer Comments &rarr;', 'omni' ) ); ?></div>
		</nav><!-- .comment-navigation -->
		<?php endif; // Check for comment navigation ?>

		<?php if ( ! comments_open() && get_comments_number() ) : ?>
		<p class="no-comments"><?php _e( 'Comments are closed.' , 'omni' ); ?></p>
		<?php endif; ?>

	<?php endif; // have_comments() ?>

	<?php
	$commenter = wp_get_current_commenter();
	$req = get_option( 'require_name_email' );
	$aria_req = ( $req ? " aria-required='true'" : '' );

	$fields =  array(

	  'author' =>
		'<div class="row-fluid"><div class="span8 comment-form-author"><label for="author">' . __( 'Name', 'omni' ) . ( $req ? '*' : '' ) . '</label> ' .
		'<input id="author" class="input-block-level" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
		'" size="30"' . $aria_req . ' /></div>',
	
	  'email' =>
		'<div class="span8 comment-form-email"><label for="email">' . __( 'Email', 'omni' ) . ( $req ? '*' : '' ) . '</label> ' .
		'<input id="email" class="input-block-level" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
		'" size="30"' . $aria_req . ' /></div>',
	
	  'url' =>
		'<div class="span8 comment-form-url"><label for="url">' . __( 'Website', 'omni' ) . '</label>' .
		'<input id="url" class="input-block-level" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
		'" size="30" /></div></div>',
	);
	
	$comment_textarea = '<p class="comment-form-comment"><label for="comment">' . __( 'Comment', 'omni' ) . '*</label><textarea id="comment" rows="8" name="comment" class="input-block-level" aria-required="true"></textarea></p>';
	
	comment_form( array('fields' => $fields, 'comment_field' => $comment_textarea) ); ?>

</div><!-- #comments -->
<?php endif; ?>