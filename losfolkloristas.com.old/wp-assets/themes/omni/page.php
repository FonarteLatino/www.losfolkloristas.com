<?php
/**
 * The template for displaying all pages.
 *
 * @package WordPress
 * @subpackage Omni
 * @since Omni 1.0
 */
 
get_header(); ?>
 
<?php
	
	while ( have_posts() ) : the_post();
		
		// Display actual page
		get_template_part( 'content', 'page' );
        
		// Check if this page contains pages/seperators in the page sorter
		if (vp_metabox('omni_meta_pages.page_sorter')) {
			
			// Get page sorter array
			$get_insert_pages = vp_metabox('omni_meta_pages.page_sorter');
			$pages_args = array(
				'post_type'			=> array('page', 'omni_asides'),
				'post__in'			=> $get_insert_pages,
				'posts_per_page' 	=> count($get_insert_pages),
				'orderby'			=> 'post__in'
			);
			
			$query_pages_seperators = new WP_Query($pages_args);
			
			// Display the extra pages/seperators
			while ($query_pages_seperators->have_posts()) : $query_pages_seperators->the_post();
			
				get_template_part( 'content', 'page' );
				
			endwhile; wp_reset_postdata();
		}
	endwhile; // end of the loop. 
	
get_footer(); ?>