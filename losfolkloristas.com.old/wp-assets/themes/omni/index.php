<?php
/**
 * The main template file.
 *
 * @package WordPress
 * @subpackage Omni
 * @since Omni 1.0
 */

get_header();

if ( omni_option('website_type') == 'onepage' && has_nav_menu( 'primary' ) ) {
get_template_part( 'content', 'onepage' );
} else {
get_template_part( 'content', 'none' );	
}

get_footer(); ?>