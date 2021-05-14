<?php
/**
 * The Parallax Header Type
 *
 * @package WordPress
 * @subpackage Omni
 * @since Omni 1.0
 */
?>
		<!-- Begin Home Section -->
        <section id="home-header" class="home-type parallax-type">
            
            <div class="overlay">
                <div class="container">
                    <div class="row">
                    <div class="span24 text-center">
                    	<div class="overlay-content">
                            <div class="big-logo"><img src="<?php echo omni_option('header_parallax_logo'); ?>" alt="" /></div>
                            <div class="element-fader">
                            <div class="fade-element slogan"><p><?php echo omni_option('header_parallax_tagline'); ?></p></div>
                            </div>
                        </div>
					</div>
                    </div>
				</div>
			</div>
            <!-- End Overlay -->

            <?php $parallax_images = array();
            if ($image_one =omni_option('header_parallax_bg_image')){
                $parallax_images[] = $image_one;
            }
            if ($image_two = omni_option('header_parallax_bg_image_two')){
                $parallax_images[] = $image_two;
            }
            if ($image_three = omni_option('header_parallax_bg_image_three')){
                $parallax_images[] = $image_three;
            }
            if ($image_four = omni_option('header_parallax_bg_image_four')){
                $parallax_images[] = $image_four;
            }
            if ($image_five = omni_option('header_parallax_bg_image_five')){
                $parallax_images[] = $image_five;
            } ?>
            
            <!-- Parallax - Place your parallax image as a background-image -->
            <div class="parallax two" style="background-image:url(<?php echo $parallax_images[array_rand($parallax_images, 1)]; ?>);"></div>
            <!-- End Parallax -->
                    	
        </section>
        <!-- // End Home Section -->