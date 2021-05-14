<?php
/**
 * The Portfolio Header Type
 *
 * @package WordPress
 * @subpackage Omni
 * @since Omni 1.0
 */
?>
    	<!-- Begin Home Section -->
        <section id="home-header" class="home-type tiled-container">
        	<div class="tiled-items clearfix">
                
                <!-- Begin Items Container -->
                <div class="items-container">
					<?php
					$args = array(
						'post_type'			=> array('omni_portfolio'),
						'posts_per_page'	=> '-1',
						'tax_query' => array(
							array(
								'taxonomy'	=> 'portfolio_category',
								'field' 	=> 'slug',
								'terms' 	=> omni_option('header_portfolio_cats'),
							)
						)
					);
				
					$query = new WP_Query($args);
					while ($query->have_posts()) : $query->the_post();
					
					$thumb_id = get_post_thumbnail_id();
					$thumb_url = wp_get_attachment_image_src($thumb_id, 'full', true);
					
					?>
                    <div class="item">
                        <div class="back">
                            <div class="item-icons">
                            	<?php if (vp_metabox('omni_meta_portfolio.portfolio_show_post_icon')) { ?>
                                <a class="item-link" href="<?php the_permalink(); ?>"><i class="icon-link"></i></a>
                                <?php } if (vp_metabox('omni_meta_portfolio.portfolio_show_zoom_icon')) { ?>
                                <a class="item-zoom" href="<?php echo $thumb_url[0]; ?>"><i class="icon-search"></i></a>
                                <?php } ?>
                            </div>
                        </div>
                        <?php if ( has_post_thumbnail() ) { the_post_thumbnail('tiled-thumb'); } ?>
                    </div>
                    <?php endwhile; wp_reset_postdata(); ?>
                    
                </div>
                <!-- // End Tiled Items Container -->
                
                <!-- Direction Nav -->
                <ul class="direction-nav">
                	<li><a class="prev" href="#"><i class="icon-left-open-mini"></i></a></li>
                    <li><a class="next" href="#"><i class="icon-right-open-mini"></i></a></li>
                </ul>
                <!-- // End Direction Nav -->
                
               <?php if ( omni_option('header_portfolio_show_overlay') == true ) { ?>
                <!-- Overlay -->
                <div class="overlay">
                	<div class="container">
                    	<div class="row">
                        <div class="span24 text-center">
                        		<div class="overlay-content">
                                    <div class="big-logo"><img src="<?php echo omni_option('header_portfolio_logo'); ?>" alt="<?php echo bloginfo( 'description' ); ?>" /></div>
                                    <div class="element-fader">
                                    	<?php if ( omni_option('header_portfolio_line_one') ) { ?>
                                        <div class="fade-element slogan fade-line"><p><?php echo omni_option('header_portfolio_line_one'); ?></p></div>
                                        <?php } ?>
                                        <?php if ( omni_option('header_portfolio_line_two') ) { ?>
                                        <div class="fade-element slogan fade-line"><p><?php echo omni_option('header_portfolio_line_two'); ?></p></div>
                                        <?php } ?>
                                        <?php if ( omni_option('header_portfolio_line_three') ) { ?>
                                        <div class="fade-element slogan fade-line"><p><?php echo omni_option('header_portfolio_line_three'); ?></p></div>
                                        <?php } ?>
                                        <div class="fade-element slogan"><a id="hide-overlay" class="btn border-btn" href="#portfolio"><?php _e('Click', 'omni'); ?></a></div>
                                    </div>
                                    <a id="hide-overlay-phone" class="btn border-btn" href="#portfolio"><?php _e('Click', 'omni'); ?></a>
                                </div>
                        </div>
                        </div>
                    </div>
                </div>
                <!-- // End Overlay -->
                <?php } ?>
                
            </div>
        </section>
        <!-- // End Home Section -->