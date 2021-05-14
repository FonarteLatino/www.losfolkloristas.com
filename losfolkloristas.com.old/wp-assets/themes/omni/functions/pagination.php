<?php
/**
 * Displays navigation to next/previous set of posts when applicable.
 *
 * @since Omni 1.0
 *
 * @return void
 */
if ( ! function_exists( 'omni_paging_nav' ) ) :

function omni_paging_nav() {
	global $wp_query;

	// Don't print empty markup if there's only one page.
	if ( $wp_query->max_num_pages < 2 )
		return;
	?>
	<nav id="paging-links" class="span18 paging-navigation clearfix">
		<div class="nav-links">

			<?php if ( get_next_posts_link() ) { ?>
			<div class="nav-previous pull-left"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'omni' ) ); ?></div>
			<?php } ?>

			<?php if ( get_previous_posts_link() ) { ?>
			<div class="nav-next pull-right"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'omni' ) ); ?></div>
			<?php } ?>

		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
}

endif;
?>