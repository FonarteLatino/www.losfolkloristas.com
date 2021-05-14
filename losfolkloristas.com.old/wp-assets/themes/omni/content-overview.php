<?php
/**
 * The template for displaying all pages.
 *
 * @package WordPress
 * @subpackage Omni
 * @since Omni 1.0
 */
 
 $no_thumb = $video_class = '';
 if ( !has_post_thumbnail() ) {
	 $no_thumb = ' no-thumb';
	 if (vp_metabox('omni_meta_post.media_type') == 'media_type_video' ) {
		 $video_class = ' video';
	 }
 }

 $category = get_the_category();
?>

<div class="span6">
    <article class="blog-post">
		<?php if ( has_post_thumbnail() && ! post_password_required() ) { ?>
        <div class="blog-thumb"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_post_thumbnail(); ?></a></div>
        <?php } ?>
        <?php if ( ! has_post_thumbnail() && vp_metabox('omni_meta_post.media_type') == 'media_type_video' ) { ?>
        <div class="blog-thumb video">
        							<?php if ( vp_metabox('omni_meta_post.media_video_group.0.media_video_type') == 'media_video_vimeo'  ) { ?>
                                    <iframe src="http://player.vimeo.com/video/<?php echo vp_metabox('omni_meta_post.media_video_group.0.media_video_code'); ?>?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="600" height="335" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                                    <?php } ?>
                                    <?php if ( vp_metabox('omni_meta_post.media_video_group.0.media_video_type') == 'media_video_youtube'  ) { ?>
                                    <iframe src="http://www.youtube.com/embed/<?php echo vp_metabox('omni_meta_post.media_video_group.0.media_video_code'); ?>?controls=1&showinfo=1&modestbranding=1&autoplay=1&fs=0&hd=1&loop=0&wmode=opaque&rel=0" frameborder="0" allowfullscreen></iframe>
                                    <?php } ?>
        </div>
		<?php } ?>
        <div class="blog-info clearfix<?php echo $no_thumb; echo $video_class; ?>">
            <h3 class="blog-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
            <?php the_excerpt(); ?>
        </div>
        <div class="blog-meta clearfix">
            <a href="<?php the_permalink(); ?>" data-placement="bottom" data-toggle="tooltip" title="<?php echo getPostViews(get_the_ID()); ?>"><i class="icon-eye"></i></a>
            <a href="<?php comments_link(); ?>" class="item-link" data-placement="bottom" data-toggle="tooltip" title="<?php comments_number('0 Comments', '1 Comment', '% Comments'); ?>"><i class="icon-comment"></i></a>
            <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" data-placement="bottom" data-toggle="tooltip" title="<?php _e('Author:', 'omni'); ?> <?php the_author(); ?> | <?php _e('In', 'omni'); ?> <?php echo $category[0]->cat_name; ?>"><i class="icon-user"></i></a>
            <a href="<?php the_permalink(); ?>" class="item-link" data-placement="bottom" data-toggle="tooltip" title="<?php _e('Read More', 'omni'); ?>"><i class="icon-plus"></i></a>
        </div>
    </article>
</div>