<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage Omni
 * @since Omni 1.0
 */
 
get_header(); ?>
 
		
		<!-- Begin Page Section -->
		<section class="page-type">
			<div class="container">
				<div class="row">
					<div class="span24 text-center">
					
					<h1 style="padding-top: 80px;" class="section-title"><?php _e( 'Not found', 'omni' ); ?></h1>
                    
					<h3><?php _e( 'This is somewhat embarrassing, isn&rsquo;t it?', 'omni' ); ?></h3>
					<p style="margin-bottom: 80px;"><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'omni' ); ?></p>
					
                    <div style="margin-bottom: 80px;">
                    <?php get_search_form(); ?>
                    </div>
                    
					</div>
				</div>          
			</div>
		</section>
		<!-- // End Page Section -->
		
	
<?php get_footer(); ?>