<?php
/**
 * The template for displaying all pages.
 *
 * @package WordPress
 * @subpackage Omni
 * @since Omni 1.0
 */
 ?>

<?php

	$section_color_class = $section_bottom_arrow = $section_light_radial = $section_bg_color = $section_bg_image = 
	$section_image_repeat = $section_image_full = $section_arrow_color = $section_custom_height = '';

	$section_classes = array();
	
	// Check if the post is a page or an omni_asides
	if ('page' == get_post_type()) {
		$section_classes[] = 'page-type';
		$section_color_class	= vp_metabox('omni_meta_pages.page_preset_colors');
		$section_bottom_arrow	= vp_metabox('omni_meta_pages.page_bottom_arrow');
		$section_light_radial	= vp_metabox('omni_meta_pages.page_bg_light_radial');
		$section_bg_color		= vp_metabox('omni_meta_pages.page_bg_color');
		$section_bg_image		= vp_metabox('omni_meta_pages.page_bg_image');
		$section_image_repeat	= vp_metabox('omni_meta_pages.page_bg_image_repeat');
		$section_image_full		= vp_metabox('omni_meta_pages.page_bg_image_full');
		$section_arrow_color	= vp_metabox('omni_meta_pages.page_bottom_arrow_group.0.page_bottom_arrow_color');
		$section_custom_height	= vp_metabox('omni_meta_pages.page_height');
	}
	if ('omni_asides' == get_post_type()) {
		$section_classes[] = 'seperator-type';
		
		// Check if the aside is type 'normal'
		if ( vp_metabox('omni_meta_asides.aside_type') == 'aside_type_normal' ) {
			$section_color_class	= vp_metabox('omni_meta_asides.aside_show_normal_group.0.aside_preset_colors');
			$section_bottom_arrow	= vp_metabox('omni_meta_asides.aside_show_normal_group.0.aside_bottom_arrow');
			$section_light_radial	= vp_metabox('omni_meta_asides.aside_show_normal_group.0.aside_bg_light_radial');
			$section_bg_color		= vp_metabox('omni_meta_asides.aside_show_normal_group.0.aside_bg_color');
			$section_bg_image		= vp_metabox('omni_meta_asides.aside_show_normal_group.0.aside_bg_image');
			$section_image_repeat	= vp_metabox('omni_meta_asides.aside_show_normal_group.0.aside_normal_bg_image_repeat');
			$section_image_full		= vp_metabox('omni_meta_asides.aside_show_normal_group.0.aside_normal_bg_image_full');
			$section_arrow_color	= vp_metabox('omni_meta_asides.aside_show_normal_group.0.aside_bottom_arrow_group.0.aside_bottom_arrow_color');
		}
		if ( vp_metabox('omni_meta_asides.aside_type') == 'aside_type_parallax' ) {
			$section_classes[] = 'parallax-type';
		}
	}
	
	// Add classes to the section_classes array
	if ( $section_bottom_arrow == true ) {
		$section_classes[] = 'bottom-arrow';
	}
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
	if (vp_metabox('omni_meta_pages.page_use_blog') == true) {
		$section_classes[] = 'blog-page';
	}
	
	$page_bg_color = $page_bg_image = $page_bg_repeat = $page_bg_full = $page_bg_style = $page_height = '';
	
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
	if ( $section_custom_height ) {
		$page_height = 'min-height: ' . $section_custom_height . '; ';
	}
	// Add styling to the post section
	if ( $section_bg_color || $section_bg_image || $section_image_repeat || ($section_image_full == true ) || $page_height) {
		$page_bg_style = 'style="' . $page_bg_image . $page_bg_repeat . $page_bg_color . $page_bg_full . $page_height . '"';
	}
	
	if( $section_arrow_color ) {
		$output = '<style type="text/css">';
		$output .= '#' . $post->post_name . '.bottom-arrow:after{border-top-color:' . $section_arrow_color . ';';
		$output .= '</style>';
		echo $output;
	}
	

/*
 * If post_type is page and a header is selected, then show the header
 */
if ('page' == get_post_type() ) { 

// If page header is Revolution Slider
if ( vp_metabox('omni_meta_pages.page_header') == 'rev_slider' ) { ?>
<section id="page-header" class="home-type">
	<?php
    $revslider = vp_metabox('omni_meta_pages.page_revslider');
	if ( function_exists( 'putRevSlider' ) ) {
    putRevSlider($revslider);
	} ?>
</section>
<?php }

// If page header is layer slider
elseif ( vp_metabox('omni_meta_pages.page_header') == 'layer_slider' ) { ?>
<section id="page-header" class="home-type">
	<?php echo do_shortcode('[layerslider id="' . vp_metabox('omni_meta_pages.page_layerslider') . '"]'); ?>
</section>
<?php }

// If page header is parallax
elseif ( vp_metabox('omni_meta_pages.page_header') == 'parallax_header' ) { ?>
<aside id="page-header" class="seperator-type parallax-type">
	<?php $background_size = ''; if (vp_metabox('omni_meta_pages.page_show_parallax_group.0.page_parallax_cover') == true ) { $background_size = ' background-size:cover;'; } ?>
    <!-- Parallax -->
    <div class="parallax" style="background-image:url(<?php echo vp_metabox('omni_meta_pages.page_show_parallax_group.0.page_parallax_image') ?>);<?php echo $background_size; ?>"></div>
    <!-- End Parallax -->

    <?php if (vp_metabox('omni_meta_pages.page_show_parallax_group.0.page_parallax_dark_overlay') == true ) { echo '<div class="dark-overlay"></div>'; } ?>

    <div class="container">
        <div class="row">
            <div class="span24 text-center">
				<div class="slogan less-margin"><p><?php echo vp_metabox('omni_meta_pages.page_show_parallax_group.0.page_parallax_tagline'); ?></p></div>
            </div>
        </div>
    </div>
</aside>
<?php }
}


/*
 * If post_type is page then show this markup
 */
if ('page' == get_post_type() && (vp_metabox('omni_meta_pages.page_use_blog') == false)) { ?>
<!-- Begin Page Section -->
<section id="<?php echo $post->post_name; ?>" <?php post_class($section_classes); ?> <?php echo $page_bg_style; ?>>
 	<div class="container">
    	<div class="row">
    		<div class="span24">
            
    		<?php if ( vp_metabox('omni_meta_pages.page_title') == false ) { ?>
    		<h1 class="section-title"><?php the_title(); ?></h1>
            <?php } ?>
            <div class="clearfix">
            	<?php the_content(); ?>
            </div>
            <?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'omni' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
            <?php edit_post_link( __( 'Edit', 'omni' ), '<p class="edit-link">', '</p>' ); ?>
            
            <?php comments_template(); ?>
            
            </div>
      	</div>          
	</div>
</section>
<!-- // End Page Section -->
<?php }


/*
 * If post_type is page and is used as Blog then show this markup
 */
if ('page' == get_post_type() && (vp_metabox('omni_meta_pages.page_use_blog') == true)) { ?>
<!-- Begin Page Section -->
<section id="<?php echo $post->post_name; ?>" <?php post_class($section_classes); ?> <?php echo $page_bg_style; ?>>
 	<div class="container">
    	<div class="row">
    		<div class="span24">
            
    		<?php if ( vp_metabox('omni_meta_pages.page_title') == false ) { ?>
    		<h1 class="section-title"><?php the_title(); ?></h1>
            <?php } ?>
            
            <?php if ( omni_option('blog_sidebar') == true ) { ?>
            <div class="row">
                    <div class="span18" role="main">
            <?php } ?>
                    
                    	<?php if (omni_option('website_type') == 'onepage') { ?>
                    	<div class="ajaxed">
                        <?php } ?>
                        
                        <div class="row blog-posts">
                        	<?php
                            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
							$wp_query = new WP_Query( array( 'post_type' => 'post', 'paged' => $paged ) );

							if( $wp_query->posts ) :
							
							global $post; $backup=$post;
							$count = 1;
							while ($wp_query->have_posts()) : $wp_query->the_post();
									get_template_part('content', 'overview' );
									$count_arg = $count % 4 == 0;
									if (omni_option('blog_sidebar') == true) {
										$count_arg = $count % 3 == 0;
									}
									if ($count_arg) {
										echo '<div class="clearfix"></div>';
									}
									$count++;
							endwhile;
							wp_reset_postdata();
							$post=$backup;
							
							endif; ?>
                            
                            <?php omni_paging_nav(); ?>
                        
                        </div>
                        <?php if (omni_option('website_type') == 'onepage') { ?>
                        </div>
                        <?php } ?>
                        
                    </div>
                    
                    <?php if ( omni_option('blog_sidebar') == true ) { ?>
                    <div class="span6">
                    <?php get_sidebar(); ?>
                    </div>
                    <?php } ?>
                    
            <?php if ( omni_option('blog_sidebar') == true ) { ?>
                </div>
            </div>
            <!-- // End row -->
            <?php } ?>
            
      	</div>          
	</div>
</section>
<!-- // End Page Section -->
<?php }


/*
 * If post_type is omni_asides then show this markup
 */
if ('omni_asides' == get_post_type()) { ?>

<!-- Begin Seperator Aside -->
<aside id="<?php echo $post->post_name; ?>" <?php post_class($section_classes); ?> <?php echo $page_bg_style; ?>>
	<?php
    /*
	 * If aside is normal type
	 */
	if ( vp_metabox('omni_meta_asides.aside_type') == 'aside_type_normal' ) { ?>
    <div class="container">
        <div class="row">
            <div class="span24">
            <div class="clearfix">
            	<?php the_content(); ?>
            </div>
            <?php edit_post_link( __( 'Edit', 'omni' ), '<p class="edit-link">', '</p>' ); ?>
            </div>
        </div>
    </div>
    <?php }
	
	/*
	 * If aside is Google Maps
	 */
	if ( vp_metabox('omni_meta_asides.aside_type') == 'aside_type_gmaps' ) { ?>
    <div class="google-maps" data-marker-address="<?php echo vp_metabox('omni_meta_asides.aside_show_gmaps_group.0.aside_gmaps_marker_address'); ?>" data-map-address="<?php echo vp_metabox('omni_meta_asides.aside_show_gmaps_group.0.aside_gmaps_map_address'); ?>" data-zoom="<?php echo vp_metabox('omni_meta_asides.aside_show_gmaps_group.0.aside_gmaps_zoom'); ?>" data-hue="<?php echo vp_metabox('omni_meta_asides.aside_show_gmaps_group.0.aside_gmaps_hue'); ?>" data-saturation="<?php echo vp_metabox('omni_meta_asides.aside_show_gmaps_group.0.aside_gmaps_saturation'); ?>" data-marker-img="<?php echo vp_metabox('omni_meta_asides.aside_show_gmaps_group.0.aside_gmaps_marker_img'); ?>"></div>
    <?php }
	
	/*
	 * If aside is Parallax type
	 */
	if ( vp_metabox('omni_meta_asides.aside_type') == 'aside_type_parallax' ) { ?>
    <!-- Parallax -->
    <div class="parallax" style="background-image:url(<?php echo vp_metabox('omni_meta_asides.aside_show_parallax_group.0.aside_parallax_image') ?>);"></div>
    <!-- End Parallax -->
    
    <?php if (vp_metabox('omni_meta_asides.aside_show_parallax_group.0.aside_parallax_dark_overlay') == true ) { echo '<div class="dark-overlay"></div>'; } ?>

    <div class="container">
        <div class="row">
            <div class="span24">
            	<div class="clearfix">
					<?php the_content(); ?>
                </div>
                <?php edit_post_link( __( 'Edit', 'omni' ), '<p class="edit-link">', '</p>' ); ?>
            </div>
        </div>
    </div>
    <?php } ?>
    
</aside>
<!-- // End Seperator Aside -->
<?php } ?>