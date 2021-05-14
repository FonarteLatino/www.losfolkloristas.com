<?php
/**
 * Omni Custom JavaScripts
 *
 * @package WordPress
 * @subpackage Omni
 * @since Omni 1.0
 */

// Custom JS Variables
function load_custom_js(){
	$output = '';
	
	$output .= '<script type="text/javascript">'."\n";
	
	if ( omni_option('header_portfolio_rows') != '' ) {
		$output .= 'var tiledItemsRows = ' . omni_option('header_portfolio_rows')."\n";
	}
	
	$output .= "\n".'</script>'."\n\n\n";

	echo $output;
}
add_action('wp_footer','load_custom_js', 10);