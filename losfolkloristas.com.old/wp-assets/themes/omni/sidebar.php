<?php
/**
 * The sidebar containing the blog widget area.
 *
 * If no active widgets in this sidebar, it will be hidden completely.
 *
 * @package WordPress
 * @subpackage Omni
 * @since Omni 1.0
 */

if (is_single()) {
	if ( is_active_sidebar( 'sidebar-2' ) ) { ?>
		<div class="sidebar" role="complementary">
			<?php dynamic_sidebar( 'sidebar-2' ); ?>
		</div>
<?php } else { ?>
		<div class="sidebar" role="complementary">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</div>
<?php } 
} else { ?>
		<div class="sidebar" role="complementary">
        	<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</div>
<?php 
} ?>