<?php

return array(
	'id'          => 'omni_meta_asides',
	'types'       => array('omni_asides'),
	'title'       => __('Separator Settings', 'omni'),
	'priority'    => 'high',
	'template'    => array(
		array(
			'type' => 'select',
			'name' => 'aside_type',
			'label' => __('Separator Type', 'omni'),
			'description' => __('Choose the type of separator this post should be.', 'omni'),
			'items' => array(
				array(
					'value' => 'aside_type_parallax',
					'label' => __('Parallax Separator', 'omni'),
				),
				array(
					'value' => 'aside_type_gmaps',
					'label' => __('Google Maps Separator', 'omni'),
				),
				array(
					'value' => 'aside_type_normal',
					'label' => __('Normal display Content (e.g. tagline with buttons)', 'omni'),
				),
			),
		),
		array(
			'type' => 'toggle',
			'name' => 'aside_show_parallax',
			'label' => __('Show Parallax Separator Settings', 'omni'),
			'description' => __('Checking this will show settings for the parallax separator.', 'omni'),
		),
		array(
			'type'      => 'group',
			'repeating' => false,
			'length'    => 1,
			'name'      => 'aside_show_parallax_group',
			'title'     => __('Parallax separator Settings', 'omni'),
			'dependency' => array(
				'field'    => 'aside_show_parallax',
				'function' => 'vp_dep_boolean',
			),
			'fields'    => array(
				array(
					'type' => 'upload',
					'name' => 'aside_parallax_image',
					'label' => __('Parallax Image', 'omni'),
					'description' => __('You can upload a parallax image for this separator. Be sure to use a wide and high image (e.g. a resolution of 1920px x 1020px).', 'omni'),
				),
				array(
					'type' => 'toggle',
					'name' => 'aside_parallax_dark_overlay',
					'label' => __('Dark Overlay', 'omni'),
					'description' => __('Checking this will show the dark overlay.', 'omni'),
					'default' => '1',
				),
			),
		),
		array(
			'type' => 'toggle',
			'name' => 'aside_show_gmaps',
			'label' => __('Show Google Maps Separator Settings', 'omni'),
			'description' => __('Checking this will show settings for the parallax separator.', 'omni'),
		),
		array(
			'type'      => 'group',
			'repeating' => false,
			'length'    => 1,
			'name'      => 'aside_show_gmaps_group',
			'title'     => __('Google Maps Separator Settings', 'omni'),
			'dependency' => array(
				'field'    => 'aside_show_gmaps',
				'function' => 'vp_dep_boolean',
			),
			'fields'    => array(
				array(
					'type' => 'textbox',
					'name' => 'aside_gmaps_map_address',
					'label' => __('Map Address', 'omni'),
					'description' => __('Input the address for the map.', 'omni'),
				),
				array(
					'type' => 'textbox',
					'name' => 'aside_gmaps_marker_address',
					'label' => __('Marker Address', 'omni'),
					'description' => __('Input the address for the marker.', 'omni'),
				),
				array(
					'type' => 'textbox',
					'name' => 'aside_gmaps_zoom',
					'label' => __('Zoom', 'omni'),
					'description' => __('Input a zoom for the map, this should be a number, for example 14.', 'omni'),
				),
				array(
					'type' => 'color',
					'name' => 'aside_gmaps_hue',
					'label' => __('Map Hue Color (Styling)', 'omni'),
					'description' => __('Choose a hue color for this google map.', 'omni'),
					'default' => '#94100b',
					'format' => 'hex'
				),
				array(
					'type' => 'textbox',
					'name' => 'aside_gmaps_saturation',
					'label' => __('Map Saturation (Styling)', 'omni'),
					'description' => __('Input the saturation for this google map. This should be a number (negative or positive).', 'omni'),
				),
				array(
					'type' => 'upload',
					'name' => 'aside_gmaps_marker_img',
					'label' => __('Marker Image', 'omni'),
					'description' => __('You can upload an image for the marker.', 'omni'),
					'default' => get_template_directory_uri() . '/assets/img/marker-dark.png',
				),
			),
		),
		array(
			'type' => 'toggle',
			'name' => 'aside_show_normal',
			'label' => __('Show Normal Separator Settings', 'omni'),
			'description' => __('Checking this will show settings for the normal separator.', 'omni'),
		),
		array(
			'type'      => 'group',
			'repeating' => false,
			'length'    => 1,
			'name'      => 'aside_show_normal_group',
			'title'     => __('Normal Separator Settings', 'omni'),
			'dependency' => array(
				'field'    => 'aside_show_normal',
				'function' => 'vp_dep_boolean',
			),
			'fields'    => array(
				array(
					'type' => 'toggle',
					'name' => 'aside_bottom_arrow',
					'label' => __('Show Bottom Arrow', 'omni'),
					'description' => __('Checking this will show the bottom arrow.', 'omni'),
				),
				array(
					'type'      => 'group',
					'repeating' => false,
					'length'    => 1,
					'name'      => 'aside_bottom_arrow_group',
					'title'     => __('Bottom Arrow Settings', 'omni'),
					'dependency' => array(
						'field'    => 'aside_bottom_arrow',
						'function' => 'vp_dep_boolean',
					),
					'fields'    => array(
						array(
							'type' => 'color',
							'name' => 'aside_bottom_arrow_color',
							'label' => __('Bottom Arrow Color', 'omni'),
							'description' => __('Choose a color for the Bottom Arrow. Leave empty if you want to use the Preset Color.', 'omni'),
							'default' => '',
							'format' => 'rgb'
						)
					)
				),
				array(
					'type' => 'select',
					'name' => 'aside_preset_colors',
					'label' => __('Preset Colors', 'omni'),
					'description' => __('Select a preset color type for this separator. You can easily changes these presets in the Theme Options.', 'omni'),
					'items' => array(
						array(
							'value' => 'preset_color_green',
							'label' => __('Green', 'omni'),
						),
						array(
							'value' => 'preset_color_red',
							'label' => __('Red', 'omni'),
						),
						array(
							'value' => 'preset_color_blue',
							'label' => __('Blue', 'omni'),
						),
						array(
							'value' => 'preset_color_dark',
							'label' => __('Dark', 'omni'),
						),
						array(
							'value' => 'preset_color_grey',
							'label' => __('Grey', 'omni'),
						),
						array(
							'value' => 'preset_color_lightgrey',
							'label' => __('Light Grey', 'omni'),
						),
					),
				),
				array(
					'type' => 'color',
					'name' => 'aside_bg_color',
					'label' => __('Background Color', 'omni'),
					'description' => __('Choose a background color for this separator.', 'omni'),
					'default' => '#94100b',
					'format' => 'rgb'
				),
				array(
					'type' => 'toggle',
					'name' => 'aside_bg_light_radial',
					'label' => __('Show Light Background Radial Gradient', 'omni'),
					'description' => __('Do you want to show a light background radial gradient?', 'omni'),
				),
				array(
					'type' => 'upload',
					'name' => 'aside_bg_image',
					'label' => __('Background Image', 'omni'),
					'description' => __('You can upload a background image for this separator.', 'omni'),
				),
				array(
					'type' => 'toggle',
					'name' => 'aside_normal_bg_image_full',
					'label' => __('100% Background Image', 'omni'),
					'description' => __('Do you want the background image size to be 100% (full)?', 'omni'),
					'default' => '0',
				),
				array(
					'type' => 'select',
					'name' => 'aside_normal_bg_image_repeat',
					'label' => __('Background Image Repeat', 'omni'),
					'description' => __('Select a repeat type for your background image.', 'omni'),
					'items' => array(
						array(
							'value' => 'bg_repeat_tiled',
							'label' => __('Repeat Horizontally and Vertically', 'omni'),
						),
						array(
							'value' => 'bg_repeat_x',
							'label' => __('X Repeat (Horizontal)', 'omni'),
						),
						array(
							'value' => 'bg_repeat_y',
							'label' => __('Y Repeat (Vertical)', 'omni'),
						),
						array(
							'value' => 'bg_repeat_none',
							'label' => __('No Repeat', 'omni'),
						),
					),
				),
			),
		),
	),
);

/**
 * EOF
 */