<?php
/**
 * The template for displaying content for a portfolio post.
 *
 * @package WordPress
 * @subpackage Omni
 * @since Omni 1.0
 */
 ?>

<?php

	if ( vp_metabox('omni_meta_portfolio.second_title') ) {
		$portfolio_title = '<h3>' . get_the_title() . '<br /><small>' . vp_metabox('omni_meta_portfolio.second_title') . '</small></h3>';
	} else {
		$portfolio_title = '<h3>' . get_the_title() . '</h3>';
	}
	
	$section_classes = array(
		'white-popup-block',
		'item-in-detail',
		'clearfix'
	);

?>

<div id="post-<?php the_ID(); ?>" <?php post_class($section_classes); ?>>
	<div class="item-header"><?php echo $portfolio_title ?></div>
    <?php if ( vp_metabox('omni_meta_portfolio.media_type') == 'media_type_slider'  ) { ?>
    <div class="item-media flexslider">
    	<ul class="slides">
        	<?php
            $flexslider_slides = vp_metabox('omni_meta_portfolio.slides_group.0.portfolio_media_slides');
			$count = 0;
			foreach ($flexslider_slides as $slide) {
				echo '<li><img src="' . vp_metabox('omni_meta_portfolio.slides_group.0.portfolio_media_slides.' . $count . '.slide_image') . '" alt="' . vp_metabox('omni_meta_portfolio.slides_group.0.portfolio_media_slides.' . $count . '.slide_alt') . '" /></li>';
				$count++;
			}
			?>
    	</ul>
    </div>
    <?php } ?>
    <?php if ( vp_metabox('omni_meta_portfolio.media_type') == 'media_type_video'  ) { ?>
    <div class="item-media video">
    	<?php if ( vp_metabox('omni_meta_portfolio.media_video_group.0.media_video_type') == 'media_video_vimeo'  ) { ?>
        <iframe src="http://player.vimeo.com/video/<?php echo vp_metabox('omni_meta_portfolio.media_video_group.0.media_video_code'); ?>?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="600" height="335" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
        <?php } ?>
        <?php if ( vp_metabox('omni_meta_portfolio.media_video_group.0.media_video_type') == 'media_video_youtube'  ) { ?>
    	<iframe src="http://www.youtube.com/embed/<?php echo vp_metabox('omni_meta_portfolio.media_video_group.0.media_video_code'); ?>?controls=1&showinfo=1&modestbranding=1&autoplay=1&fs=0&hd=1&loop=0&wmode=opaque&rel=0" frameborder="0" allowfullscreen></iframe>
        <?php } ?>
    </div>
    <?php } ?>
    <?php if ( vp_metabox('omni_meta_portfolio.media_type') == 'media_type_image'  ) { ?>
	<div class="item-media">
    	<img src="<?php echo vp_metabox('omni_meta_portfolio.media_single_image') ?>" alt="<?php echo vp_metabox('omni_meta_portfolio.media_single_image_alt') ?>" />
    </div>
    <?php } ?>
    <div class="item-body clearfix">
    	<?php the_content(); ?>
	</div>
</div>