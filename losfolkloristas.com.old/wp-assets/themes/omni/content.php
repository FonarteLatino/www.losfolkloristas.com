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

	$section_color_class = $section_light_radial = $section_bg_color = $section_bg_image = 
	$section_image_repeat = $section_image_full = '';
	
	$section_classes = array();
	
	$section_classes[] = 'page-type';
	$section_color_class	= omni_option('blogpost_preset_color');
	$section_light_radial	= omni_option('blogpost_bg_light_radial');
	$section_bg_color		= omni_option('blogpost_bg_color');
	$section_bg_image		= omni_option('blogpost_bg_image');
	$section_image_repeat	= omni_option('blogpost_bg_image_repeat');
	$section_image_full		= omni_option('blogpost_bg_image_full');
	
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
<section id="<?php echo $post->post_name; ?>" <?php post_class($section_classes); ?> <?php echo $page_bg_style; ?>>
    <div class="container">
        <div class="row">
            <div class="span24">
            
                <h2 class="section-title"><?php _e('Noticias', 'omni'); ?></h2>
                
                <div class="row">
                    <div class="span18" role="main">
                        <div class="blog-post">
                            <article>
                            	<?php if ( ! post_password_required() ) {
								if ( has_post_thumbnail() && (vp_metabox('omni_meta_post.media_type') == 'media_type_image') || has_post_thumbnail() && (vp_metabox('omni_meta_post.media_type') == '')) { ?>
                                <div class="blog-thumb"><?php the_post_thumbnail('post-img'); ?></div>
                                <?php }
								elseif ( vp_metabox('omni_meta_post.media_type') == 'media_type_slider' ) { ?>
                                <div class="blog-thumb flexslider">
									<ul class="slides">
										<?php
                                        $flexslider_slides = vp_metabox('omni_meta_post.slides_group.0.post_media_slides');
                                        $count = 0;
                                        foreach ($flexslider_slides as $slide) {
                                            echo '<li><img src="' . vp_metabox('omni_meta_post.slides_group.0.post_media_slides.' . $count . '.slide_image') . '" alt="' . vp_metabox('omni_meta_post.slides_group.0.post_media_slides.' . $count . '.slide_alt') . '" /></li>';
                                            $count++;
                                        }
                                        ?>
                                    </ul>
                                </div>
								<?php }
								elseif ( vp_metabox('omni_meta_post.media_type') == 'media_type_video' ) { ?>
                                <div class="blog-thumb video">
                                	<?php if ( vp_metabox('omni_meta_post.media_video_group.0.media_video_type') == 'media_video_vimeo'  ) { ?>
                                    <iframe src="http://player.vimeo.com/video/<?php echo vp_metabox('omni_meta_post.media_video_group.0.media_video_code'); ?>?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="600" height="335" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                                    <?php } ?>
                                    <?php if ( vp_metabox('omni_meta_post.media_video_group.0.media_video_type') == 'media_video_youtube'  ) { ?>
                                    <iframe src="http://www.youtube.com/embed/<?php echo vp_metabox('omni_meta_post.media_video_group.0.media_video_code'); ?>?controls=1&showinfo=1&modestbranding=1&autoplay=1&fs=0&hd=1&loop=0&wmode=opaque&rel=0" frameborder="0" allowfullscreen></iframe>
                                    <?php } ?>
                                </div>
                                <?php }
								} ?>
                                <div class="blog-content clearfix">
                                	<header>
                                        <h1 class="blog-title"><?php the_title(); ?></h1>
                                        <div class="post-meta">
                                            <ul>
                                            <li><?php _e('Posted on', 'omni'); ?> <?php the_time('F d, Y'); ?></li>
                                            <li><?php _e('By', 'omni'); ?> <?php the_author_posts_link(); ?></li>
                                            <li><?php _e('In', 'omni'); ?> <?php the_category(', '); ?></li>
                                            <li><a href="<?php comments_link(); ?>"><?php comments_number('0 Comments', '1 Comment', '% Comments'); ?></a></li>
                                            </ul>
                                        </div>
                                    </header>
                                    
                                    <div class="entry-content">
                                    <?php the_content(); ?>
                                    <?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'omni' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
                                    
                                    <?php if(has_tag()) { ?>
                                    <p class="tags">
									<?php the_tags(esc_attr('Tags: ', 'omni'), ' '); ?>
                                    </p>
                                    <?php } ?>
                                    
                                    <?php edit_post_link( __( 'Edit', 'omni' ), '<p class="edit-link">', '</p>' ); ?>
                                    </div>
                                    
                                    <?php if ( omni_option('blogpost_nav') == true ) { ?>
                                    <nav id="nav-single" class="clearfix">
										<?php previous_post_link('<span class="pull-left">%link</span>', '&#171; '. __('Previous', 'omni') ); ?>
                                        <?php next_post_link('<span class="pull-right">%link</span>', __('Next', 'omni').' &#187;'); ?>
                                    </nav><!-- // post nav -->
                                    <?php } ?>
                                
                                </div>
                            </article>
                            
                            <?php comments_template(); ?>
                            
                        </div>
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