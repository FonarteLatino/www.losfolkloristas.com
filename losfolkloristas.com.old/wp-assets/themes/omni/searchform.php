<?php
/**
 * The template for displaying search forms in Omni
 *
 * @package WordPress
 * @subpackage Omni
 * @since Omni 1.0
 */
?>
	<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" class="searchform">
		<label for="s" class="assistive-text"><?php _e( 'Search for:', 'omni' ); ?></label>
		<input type="text" class="field input-block-level" name="s" id="s" />
		<input type="submit" class="submit btn border-btn btn-small" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search', 'omni' ); ?>" />
	</form>