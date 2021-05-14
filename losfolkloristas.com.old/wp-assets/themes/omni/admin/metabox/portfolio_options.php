<?php

return array(
	'id'          => 'omni_meta_portfolio',
	'types'       => array('omni_portfolio'),
	'title'       => __('Portfolio Post Settings', 'omni'),
	'priority'    => 'high',
	'template'    => array(
		array(
			'type' => 'textbox',
			'name' => 'second_title',
			'label' => __('Second Title', 'omni'),
			'description' => __('Input a second title.', 'omni'),
		),
		array(
			'name'  => 'portfolio_show_zoom_icon',
			'label' => __('Show the Zoom Icon', 'omni'),
			'type'  => 'toggle',
			'default' => '1',
		),
		array(
			'name'  => 'portfolio_show_post_icon',
			'label' => __('Show the Post Icon', 'omni'),
			'type'  => 'toggle',
			'default' => '1',
		),
		array(
			'type' => 'select',
			'name' => 'media_type',
			'label' => __('Choose Media Type', 'omni'),
			'description' => __('Choose the type of media you want to display.', 'omni'),
			'items' => array(
				array(
					'value' => 'media_type_slider',
					'label' => __('Image Slider', 'omni'),
				),
				array(
					'value' => 'media_type_video',
					'label' => __('Video', 'omni'),
				),
				array(
					'value' => 'media_type_image',
					'label' => __('Single Image', 'omni'),
				),
				array(
					'value' => 'media_type_none',
					'label' => __('None', 'omni'),
				),
			),
		),
		array(
			'name'  => 'portfolio_show_slides',
			'label' => __('Show the Slides (Image Slider)', 'omni'),
			'type'  => 'toggle',
		),
		array(
			'type'      => 'group',
			'name'		=> 'slides_group',
			'title'		=> __('Slides', 'omni'),
			'fields'	=> array(
				array(
					'type'      => 'group',
					'repeating' => true,
					'name'      => 'portfolio_media_slides',
					'title'     => __('Image Slider Slide', 'omni'),
					'fields'    => array(
						array(
							'type' => 'textbox',
							'name' => 'slide_alt',
							'label' => __('Slide Name (image alt)', 'omni'),
							'description' => __('This is the slider name for the image alt attribute.', 'omni'),
						),
						array(
							'type' => 'upload',
							'name' => 'slide_image',
							'label' => __('Slide Image', 'omni'),
							'description' => __('Upload the image for the slide.', 'omni'),
						),
					),
				),
			),
			'dependency' => array(
				'field'    => 'portfolio_show_slides',
				'function' => 'vp_dep_boolean'
			)
		),
		array(
			'name'  => 'portfolio_show_video',
			'label' => __('Show the Video Settings', 'omni'),
			'type'  => 'toggle',
		),
		array(
			'type'      => 'group',
			'name'		=> 'media_video_group',
			'title'		=> __('Video Settings', 'omni'),
			'fields'	=> array(
					array(
					'type' => 'radiobutton',
					'name' => 'media_video_type',
					'label' => __('Video Type', 'omni'),
					'description' => __('Select the video provider.', 'omni'),
					'items' => array(
						array(
							'value' => 'media_video_youtube',
							'label' => __('YouTube', 'omni'),
						),
						array(
							'value' => 'media_video_vimeo',
							'label' => __('Vimeo', 'omni'),
						),
					),
					'default' => array(
						'media_video_vimeo',
					),
				),
				array(
					'type' => 'textbox',
					'name' => 'media_video_code',
					'label' => __('Video URL Code', 'omni'),
					'description' => __('Typ in the (url)code of the video, (e.g. 67175696 if you&#039;ve selected Vimeo, e.g. W3OQgh_h4U4 for a YouTube video).', 'omni'),
				),
			),
			'dependency' => array(
				'field'    => 'portfolio_show_video',
				'function' => 'vp_dep_boolean'
			)
		),
		array(
			'name'  => 'media_single_image',
			'label' => __('Single Image', 'omni'),
			'description' => __('Upload the single image. This image will be displayed if selected. It is best to have an image width size of at least 600px.', 'omni'),
			'type'  => 'upload',
		),
		array(
			'name'  => 'media_single_image_alt',
			'label' => __('Single Image Alternate Text', 'omni'),
			'description' => __('Type in a title/text for the Alt img attribute.', 'omni'),
			'type'  => 'textbox',
		),
	),
);


/**
 * EOF
 */