<?php

return array(
	'id'          => 'omni_meta_pages',
	'types'       => array('page'),
	'title'       => __('Page Settings', 'omni'),
	'priority'    => 'high',
	'template'    => array(
		array(
			'type' => 'toggle',
			'name' => 'page_title',
			'label' => __('Don\'t Show Page Title', 'omni'),
			'description' => __('Do you not want to show the page title?', 'omni'),
		),
		array(
			'type' => 'toggle',
			'name' => 'page_use_blog',
			'label' => __('Use as Blog Page', 'omni'),
			'description' => __('Use this page as the blog page.', 'omni'),
		),
		array(
			'type' => 'toggle',
			'name' => 'page_bottom_arrow',
			'label' => __('Show Bottom Arrow', 'omni'),
			'description' => __('Checking this will show the bottom arrow.', 'omni'),
		),
		array(
			'type'      => 'group',
			'repeating' => false,
			'length'    => 1,
			'name'      => 'page_bottom_arrow_group',
			'title'     => __('Bottom Arrow Settings', 'omni'),
			'dependency' => array(
				'field'    => 'page_bottom_arrow',
				'function' => 'vp_dep_boolean',
			),
			'fields'    => array(
				array(
					'type' => 'color',
					'name' => 'page_bottom_arrow_color',
					'label' => __('Bottom Arrow Color', 'omni'),
					'description' => __('Choose a color for the Bottom Arrow. Leave empty if you want to use the Preset Color.', 'omni'),
					'default' => '',
					'format' => 'rgb'
				)
			)
		),
		array(
			'type'        => 'sorter',
			'name'        => 'page_sorter',
			'label'       => 'Sorter',
			'description' => 'Select the pages you want to include and sort them into the desired order.',
			'items' => array(
				'data' => array(
					array(
						'source' => 'function',
						'value'  => 'vp_get_pages_and_asides',
					),
				),
			),
			'default' => array(
				'{{first}}',
				'{{last}}',
			),
		),
		array(
			'type' => 'select',
			'name' => 'page_preset_colors',
			'label' => __('Preset Colors', 'omni'),
			'description' => __('Select a preset color type for this page. You can easily changes these presets in the Theme Options.', 'omni'),
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
			'name' => 'page_bg_color',
			'label' => __('Background Color', 'omni'),
			'description' => __('Choose a background color for this page.', 'omni'),
			'default' => '',
			'format' => 'rgb'
		),
		array(
			'type' => 'toggle',
			'name' => 'page_bg_light_radial',
			'label' => __('Show Light Background Radial Gradient', 'omni'),
			'description' => __('Do you want to show a light background radial gradient?', 'omni'),
		),
		array(
			'type' => 'upload',
			'name' => 'page_bg_image',
			'label' => __('Background Image', 'omni'),
			'description' => __('You can upload a background image for this page.', 'omni'),
		),
		array(
			'type' => 'toggle',
			'name' => 'page_bg_image_full',
			'label' => __('100% Background Image', 'omni'),
			'description' => __('Do you want the background image size to be 100% (full)?', 'omni'),
			'default' => '0',
		),
		array(
			'type' => 'select',
			'name' => 'page_bg_image_repeat',
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
		array(
			'type' => 'textbox',
			'name' => 'page_height',
			'label' => __('Custom Minimal Page Height (px)', 'omni'),
			'description' => __('You can set your own custom minimal page height in pixels for this page. For example: 450px You can also leave this empty if you don\'t want to set a custom minimal page height.', 'omni'),
		),
		array(
			'type' => 'select',
			'name' => 'page_header',
			'label' => __('Page Header Settings', 'omni'),
			'description' => __('Select a header type, select none if you don\'t want to show the header.', 'omni'),
			'items' => array(
				array(
					'value' => 'rev_slider',
					'label' => __('Revolution Slider Header', 'omni'),
				),
				array(
					'value' => 'parallax_header',
					'label' => __('Parallax Header', 'omni'),
				),
				array(
					'value' => 'layer_slider',
					'label' => __('Layer Slider Header', 'omni'),
				),
				array(
					'value' => 'no_header',
					'label' => __('No Header', 'omni'),
				),
			),
			'default' => 'no_header',
		),
		array(
			'type' => 'toggle',
			'name' => 'page_show_parallax_header',
			'label' => __('Show Parallax Header Settings', 'omni'),
			'description' => __('Checking this will show settings for the parallax header.', 'omni'),
		),
		array(
			'type'      => 'group',
			'repeating' => false,
			'length'    => 1,
			'name'      => 'page_show_parallax_group',
			'title'     => __('Parallax Header Settings', 'omni'),
			'dependency' => array(
				'field'    => 'page_show_parallax_header',
				'function' => 'vp_dep_boolean',
			),
			'fields'    => array(
				array(
					'type' => 'textbox',
					'name' => 'page_parallax_tagline',
					'label' => __('Tagline', 'omni'),
					'description' => __('Input the tagline for the header.', 'omni'),
				),
				array(
					'type' => 'upload',
					'name' => 'page_parallax_image',
					'label' => __('Parallax Image', 'omni'),
					'description' => __('You can upload a parallax image for this header.', 'omni'),
				),
				array(
					'type' => 'toggle',
					'name' => 'page_parallax_dark_overlay',
					'label' => __('Dark Overlay', 'omni'),
					'description' => __('Checking this will show the dark overlay.', 'omni'),
					'default' => '0',
				),
				array(
					'type' => 'toggle',
					'name' => 'page_parallax_cover',
					'label' => __('Full Width Background (Cover)', 'omni'),
					'description' => __('Checking this will make the background image full width size.', 'omni'),
					'default' => '0',
				),
			)
		),
		array(
			'type' => 'select',
			'name' => 'page_revslider',
			'label' => __('Revolution Slider Header', 'omni'),
			'description' => __('Select which Revolution Slider you\'d like to display.', 'omni'),
			'items' => array(
				'data' => array(
					array(
						'source' => 'function',
						'value' => 'vp_get_revsliders',
					),
				),
			),
		),
		array(
			'type' => 'select',
			'name' => 'page_layerslider',
			'label' => __('Layer Slider Header', 'omni'),
			'description' => __('Select which Layer Slider you\'d like to display.', 'omni'),
			'items' => array(
				'data' => array(
					array(
						'source' => 'function',
						'value' => 'vp_get_layersliders',
					),
				),
			),
		),
	),
);

/**
 * EOF
 */