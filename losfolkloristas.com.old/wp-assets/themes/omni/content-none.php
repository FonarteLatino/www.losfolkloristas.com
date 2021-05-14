<?php
/**
 * The template for displaying no pages.
 *
 * @package WordPress
 * @subpackage Omni
 * @since Omni 1.0
 */
 
get_header(); ?>

<?php if ( is_home()) { ?>
		
		<!-- Begin Page Section -->
		<section class="page-type">
			<div class="container">
				<div class="row">
					<div class="span24 text-center">
                    
                    <?php if ( is_home() && current_user_can( 'publish_posts' ) ) { ?>
					
					<h1 style="padding-top: 80px;" class="section-title"><?php _e( 'No Content to Show', 'omni' ); ?></h1>
                    
					<h3><?php _e( 'This is somewhat disappointing, isn&rsquo;t it?', 'omni' ); ?></h3>
                    <div class="row">
                    <div class="span12 offset6">
					<p style="margin-bottom: 80px;"><?php printf( __( 'It looks like there is no content to show. Begin making pages and adding them as your homepage or add pages to your main navigation if your using the One Page version. Go <a href="%1$s">here</a> to get started.', 'omni' ), admin_url() ); ?></p>
                    </div>
                    </div>
                    
                    <?php } else { ?>
                    
                    <h1 style="padding-top: 80px;" class="section-title"><?php _e( 'Not found', 'omni' ); ?></h1>
                    
					<h3><?php _e( 'This is somewhat embarrassing, isn&rsquo;t it?', 'omni' ); ?></h3>
					<p style="margin-bottom: 80px;"><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'omni' ); ?></p>
					
                    <div style="margin-bottom: 80px;">
                    <?php get_search_form(); ?>
                    </div>
                    
                    <?php } ?>
                    
					</div>
				</div>          
			</div>
		</section>
		<!-- // End Page Section -->

<?php } else { ?>

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

<?php } ?>		
	
<?php get_footer(); ?>