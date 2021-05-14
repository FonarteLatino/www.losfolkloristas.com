<?php
/**
 * Template for comments and pingbacks.
 *
 * To override this walker in a child theme without modifying the comments template
 * simply create your own twentytwelve_comment(), and that function will be used instead.
 *
 * Used as a callback by wp_list_comments() for displaying the comments.
 *
 * @since Omni 1.0
 */
 
if ( ! function_exists( 'omni_comment' ) ) :

function omni_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case 'pingback' :
		case 'trackback' :
		// Display trackbacks differently than normal comments.
	?>
	<li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
		<p><?php _e( 'Pingback:', 'omni' ); ?> <?php comment_author_link(); ?> <?php edit_comment_link( __( '(Edit)', 'omni' ), '<span class="edit-link">', '</span>' ); ?></p>
	<?php
			break;
		default :
		// Proceed with normal comments.
		global $post;
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<article id="comment-<?php comment_ID(); ?>" class="comment">
			<header class="comment-author vcard">
				<?php
					echo '<div class="comment-img">' . get_avatar( $comment, 60 ) . '</div>';
					echo '<div class="comment-meta">';
					printf( '<cite class="fn">' . __('By', 'omni') . ' ' . '%1$s %2$s' . __('on', 'omni') . ' </cite>',
						get_comment_author_link(),
						// If current post author is also comment author, make it known visually.
						( $comment->user_id === $post->post_author ) ? '<span>' . __( 'Post author', 'omni' ) . '</span> ' : ''
					);
					printf( '<a href="%1$s"><time datetime="%2$s">%3$s</time></a>',
						esc_url( get_comment_link( $comment->comment_ID ) ),
						get_comment_time( 'c' ),
						/* translators: 1: date, 2: time */
						sprintf( __( '%1$s at %2$s', 'omni' ), get_comment_date(), get_comment_time() )
					);
					 comment_reply_link( array_merge( $args, array( 'reply_text' => __( 'Reply', 'omni' ), 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) );
					echo '</div>';
				?>
			</header><!-- .comment-meta -->

			<section class="comment-content comment clearfix">
            	<?php if ( '0' == $comment->comment_approved ) : ?>
                    <p class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'omni' ); ?></p>
                <?php endif; ?>
				<?php comment_text(); ?>
				<?php edit_comment_link( __( 'Edit', 'omni' ), '<p class="edit-link">', '</p>' ); ?>
			</section><!-- .comment-content -->
            
		</article><!-- #comment-## -->
	<?php
		break;
	endswitch; // end comment_type check
}
endif;