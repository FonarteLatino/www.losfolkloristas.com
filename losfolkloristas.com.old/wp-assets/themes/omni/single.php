<?php
/**
 * The template for displaying all pages.
 *
 * @package WordPress
 * @subpackage Omni
 * @since Omni 1.0
 */
 setPostViews(get_the_ID());
 if ( 'omni_portfolio' == get_post_type() ) { ?>
 
 <?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'content', 'portfolio' ); ?>
 <?php endwhile; // end of the loop. ?>
 
<?php } else {
 get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'content' ); ?>
<?php endwhile; // end of the loop. ?>
        
<?php get_footer(); } ?>