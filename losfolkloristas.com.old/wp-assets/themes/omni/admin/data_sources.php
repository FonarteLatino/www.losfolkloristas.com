<?php

// Added Functions for Omni
function vp_get_pages_and_asides()
{
	$wp_pages = get_pages();
	$wp_posts = get_posts(array('post_type' => 'omni_asides'));

	$result = array();
	foreach ($wp_pages as $page)
	{
		$result[] = array('value' => $page->ID, 'label' => $page->post_title);
	}
	foreach ($wp_posts as $post)
	{
		$result[] = array('value' => $post->ID, 'label' => $post->post_title);
	}
	return $result;
}
function vp_get_custom_categories()
{
	$wp_cat_custom = get_terms( 'portfolio_category', array( 'hide_empty' => 0, 'taxonomy' => 'portfolio_category' ) );

	$result = array();
	foreach ($wp_cat_custom as $cat_custom)
	{
		$result[] = array('value' => $cat_custom->slug, 'label' => $cat_custom->name);
	}
	return $result;
}
function vp_get_revsliders()
{
	global $wpdb;
	$get_sliders = $wpdb->get_results('SELECT * FROM '.$wpdb->prefix . 'revslider_sliders');
	
	$result = array();
	if($get_sliders) {
		foreach($get_sliders as $slider) {
			$result[] = array('value' => $slider->alias, 'label' => $slider->title);
		}
	}
	return $result;
}
function vp_get_layersliders()
{
	// Get WPDB Object
	global $wpdb;
	
	$result = array();
	
	// Table name
	$table_name = $wpdb->prefix . "layerslider";
	
	// Get sliders
	$sliders = $wpdb->get_results( "SELECT * FROM $table_name
									WHERE flag_hidden = '0' AND flag_deleted = '0'
									ORDER BY date_c ASC LIMIT 100" );
									
	foreach($sliders as $item) {
		$name = empty($item->name) ? 'Unnamed' : $item->name;
		
		$result[] = array('value' => $item->id, 'label' => $name . ' | #' . $item->id);
	}
	
	return $result;
}

function vp_bind_preset_bg($preset)
{
	switch ($preset) {
		case 'green':
			return '#94100b';
		case 'dark':
			return '#393939';
		case 'red':
			return '#9e1b1b';
		case 'blue':
			return '#008ac5';
		case 'grey':
			return '#f0f0f4';
		case 'lightgrey':
			return '#f7f7f9';
		default:
			return '#94100b';
	}
}

function vp_bind_preset_bottom_arrow($preset)
{
	switch ($preset) {
		case 'green':
			return '#94100b';
		case 'dark':
			return '#393939';
		case 'red':
			return '#9e1b1b';
		case 'blue':
			return '#008ac5';
		case 'grey':
			return '#f0f0f4';
		case 'lightgrey':
			return '#f7f7f9';
		default:
			return '#94100b';
	}
}

function vp_bind_preset_title($preset)
{
	switch ($preset) {
		case 'green':
			return '#fff';
		case 'dark':
			return '#fff';
		case 'red':
			return '#fff';
		case 'blue':
			return '#fff';
		case 'grey':
			return '#94100b';
		case 'lightgrey':
			return '#94100b';
		default:
			return '#94100b';
	}
}
function vp_bind_preset_paragraph($preset)
{
	switch ($preset) {
		case 'green':
			return '#fff';
		case 'dark':
			return '#fff';
		case 'red':
			return '#fff';
		case 'blue':
			return '#fff';
		case 'grey':
			return '#8f8f8f';
		case 'lightgrey':
			return '#8f8f8f';
		default:
			return '#8f8f8f';
	}
}

VP_Security::instance()->whitelist_function('vp_font_preview');

function vp_font_preview($face, $weight, $size, $line_height)
{
	$gwf   = new VP_Site_GoogleWebFont();
	$gwf->add($face, $weight);
	$links = $gwf->get_links();
	$link  = reset($links);
	$dom   = <<<EOD
<link href='$link' rel='stylesheet' type='text/css'>
<p style="padding: 0 10px 0 10px; font-family: $face; font-weight: $weight; font-size: {$size}px; line-height: {$line_height}px;">
	Nunc consectetur cursus mollis. Curabitur ac urna quis nibh dictum cursus. In hac habitasse platea dictumst. Praesent in sodales nisl. Aenean vestibulum est eros, sit amet ultricies nunc consectetur sed.
</p>
EOD;
	return $dom;
}

VP_Security::instance()->whitelist_function('vp_font_preview_two');

function vp_font_preview_two($font_face, $font_weight, $text_transform)
{
	$gwf   = new VP_Site_GoogleWebFont();
	$gwf->add($font_face, $font_weight);
	$links = $gwf->get_links();
	$link  = reset($links);
	$dom   = <<<EOD
<link href='$link' rel='stylesheet' type='text/css'>
<p style="padding: 0 10px 0 10px; font-family: $font_face; font-weight: $font_weight; text-transform: $text_transform; font-size: 18px; line-height: 22px;">
	Grumpy wizards make toxic brew for the evil Queen
</p>
EOD;
	return $dom;
}
// End Added Functions for Omni