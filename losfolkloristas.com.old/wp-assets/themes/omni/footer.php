<?php
/**
 * The template for displaying the footer.
 *
 * @package WordPress
 * @subpackage Omni
 * @since Omni 1.0
 */
 
 $footer_text = '&copy; <a href="'.site_url().'">'.get_bloginfo('name').'</a> '. __('All Right Reserved','omni');
 if (omni_option('footer_text') != '') {
	 $footer_text = do_shortcode(stripslashes(omni_option('footer_text')));
 }
 
?>
		<!-- Begin Footer -->
        <footer class="footer-type">
        	<div class="container">
            	<div class="row">
                	<div class="span24 text-center">
                    		<p class="copyright"><?php echo $footer_text; ?></p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- // End Footer -->

<?php
	echo omni_option('tracking_code');
	echo omni_option('body_code'); 
	wp_footer();
?>

</body>
</html>