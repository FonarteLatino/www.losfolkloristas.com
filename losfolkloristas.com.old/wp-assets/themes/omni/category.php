<?php
/**
 * The template for displaying Category pages.
 *
 * @package WordPress
 * @subpackage Omni
 * @since Omni 1.0
 */

get_header(); ?>

<?php
	$section_color_class = $section_light_radial = $section_bg_color = $section_bg_image = 
	$section_image_repeat = $section_image_full = '';
	
	$section_classes = array();
	
	$section_classes[] = 'page-type';
	$section_color_class	= omni_option('blogpage_preset_color');
	$section_light_radial	= omni_option('blogpage_bg_light_radial');
	$section_bg_color		= omni_option('blogpage_bg_color');
	$section_bg_image		= omni_option('blogpage_bg_image');
	$section_image_repeat	= omni_option('blogpage_bg_image_repeat');
	$section_image_full		= omni_option('blogpage_bg_image_full');
	
	if ( $section_light_radial == true ) {
		$section_classes[] = 'light-bg';
	}
	if ( $section_color_class ) {
		if ($section_color_class == 'preset_color_green') {
			$preset_bg_class = 'green-bg';
		} elseif ($section_color_class == 'preset_color_dark') {
			$preset_bg_class = 'dark-bg';
		} elseif ($section_color_class == 'preset_color_blue') {
			$preset_bg_class = 'blue-bg';
		} elseif ($section_color_class == 'preset_color_red') {
			$preset_bg_class = 'red-bg';
		} elseif ($section_color_class == 'preset_color_grey') {
			$preset_bg_class = 'grey-bg';
		} elseif ($section_color_class == 'preset_color_lightgrey') {
			$preset_bg_class = 'lightgrey-bg';
		}
		$section_classes[] = $preset_bg_class;
	}
	
	$page_bg_color = $page_bg_image = $page_bg_repeat = $page_bg_full = $page_bg_style = '';
	
	if ( $section_bg_color ) {
		$page_bg_color = 'background-color: ' . $section_bg_color . '; ';
	}
	if ( $section_bg_image ) {
		$page_bg_image = 'background-image: ' . 'url(' . $section_bg_image . ')' . '; ';
	}
	if ( $section_image_repeat ) {
		if ( $section_image_repeat == 'bg_repeat_tiled' ) {
			$page_bg_repeat = 'repeat';
		} elseif ( $section_image_repeat == 'bg_repeat_x' ) {
			$page_bg_repeat = 'repeat-x';
		} elseif ( $section_image_repeat == 'bg_repeat_y' ) {
			$page_bg_repeat = 'repeat-y';
		} elseif ( $section_image_repeat == 'bg_repeat_none' ) {
			$page_bg_repeat = 'no-repeat';
		}
		$page_bg_repeat = 'background-repeat: ' . $page_bg_repeat . '; ';
	}
	if ( $section_image_full == true ) {
		$page_bg_full = 'background-size: cover;';
	}
	// Add styling to the post section
	if ( $section_bg_color || $section_bg_image || $section_image_repeat || ($section_image_full == true )) {
		$page_bg_style = 'style="' . $page_bg_image . $page_bg_repeat . $page_bg_color . $page_bg_full . '"';
	}
?>

<!-- Begin Blog Post -->
<section id="blog" <?php post_class($section_classes); ?> <?php echo $page_bg_style; ?>>
    <div class="container">
        <div class="row">
            <div class="span24">
            
                <h2 class="section-title"><?php printf( __( 'Category Archives: %s', 'omni' ), single_cat_title( '', false ) ); ?></h2>
                
                <div class="row">
                    <div class="span18" role="main">
                    <?php if ( have_posts() ) { ?>
                        <div class="row blog-posts">
							<?php $count = 1; while ( have_posts() ) : the_post(); ?>
							<?php get_template_part( 'content', 'overview' );
									if ($count % 3 == 0) {
										echo '<div class="clearfix"></div>';
									}
									$count++;
							?>
							<?php endwhile; // end of the loop. ?>
                            <?php omni_paging_nav(); ?>
                        </div>
                    <?php } else { ?>
                    <?php } ?>
                    </div>
                    
                    <div class="span6">
                    	<?php get_sidebar(); ?>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>
<!-- // End Blog Post -->
        
<?php get_footer(); ?>