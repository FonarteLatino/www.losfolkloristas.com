<?php

return array(

	'Layout' => array(
		'elements' => array(

			'row' => array(
				'title'   => __('Row', 'omni'),
				'code'    => '[row][/row]',
				'attributes' => array(
					array(
						'name'  => 'text_center',
						'type'  => 'toggle',
						'label' => __('Text Center', 'omni'),
					),
				),
			),

			'column' => array(
				'title'   => __('Column', 'omni'),
				'code'    => '[column][/column]',
				'attributes' => array(
					array(
						'name'    => 'grid',
						'type'    => 'slider',
						'label'   => __('Grid', 'omni'),
						'min'     => 1,
						'max'     => 24,
						'default' => 24,
					),
					array(
						'name'    => 'offset',
						'type'    => 'slider',
						'label'   => __('Offset', 'omni'),
						'min'     => 0,
						'max'     => 24,
						'default' => 0,
					),
					array(
						'name'  => 'text_center',
						'type'  => 'toggle',
						'label' => __('Text Center', 'omni'),
					),
				),
			),
			
			'clearfix' => array(
				'title'   => __('Clearfix', 'omni'),
				'code'    => '[clearfix][/clearfix]'
			),
			
			'block' => array(
				'title'   => __('(Service) Block', 'omni'),
				'code'    => '[block][/block]'
			),
			
			'text_center' => array(
				'title'   => __('Text Center Container', 'omni'),
				'code'    => '[text_center][/text_center]',
			),
			
		),
	),
	
	'Elements' => array(
		'elements' => array(

			'button' => array(
				'title'   => __('Button', 'omni'),
				'code'    => '[button][/button]',
				'attributes' => array(
					array(
						'name'  => 'url',
						'type'  => 'textbox',
						'label' => __('Button URL', 'omni'),
					),
					array(
						'name'  => 'size',
						'type'  => 'select',
						'label' => __('Button Size', 'omni'),
						'items' => array(
							array(
								'value' => 'default',
								'label' => 'Default'
							),
							array(
								'value' => 'large',
								'label' => 'Large'
							),
							array(
								'value' => 'medium',
								'label' => 'Medium'
							),
							array(
								'value' => 'small',
								'label' => 'Small'
							),
							array(
								'value' => 'mini',
								'label' => 'Mini'
							),
						),
					),
					array(
						'name'  => 'color',
						'type'  => 'select',
						'label' => __('Button Color', 'omni'),
						'items' => array(
							array(
								'value' => 'default',
								'label' => 'Default'
							),
							array(
								'value' => 'white',
								'label' => 'White'
							),
						),
					),
					array(
						'name'  => 'scroll_to',
						'type'  => 'toggle',
						'label' => __('Button Scroll To', 'omni'),
					),
					array(
						'name'  => 'align',
						'type'  => 'select',
						'label' => __('Button Align', 'omni'),
						'items' => array(
							array(
								'value' => 'none',
								'label' => 'None'
							),
							array(
								'value' => 'left',
								'label' => 'Left'
							),
							array(
								'value' => 'right',
								'label' => 'Right'
							),
						),
					),
				),
			),
			
			'social_button' => array(
				'title'   => __('Social Button', 'omni'),
				'code'    => '[social_button][/social_button]',
				'attributes' => array(
					array(
						'name'  => 'url',
						'type'  => 'textbox',
						'label' => __('Button URL', 'omni'),
					),
					array(
						'name'  => 'title',
						'type'  => 'textbox',
						'label' => __('Tooltip Title', 'omni'),
					),
					array(
						'name'  => 'icon',
						'type'  => 'textbox',
						'label' => __('Icon', 'omni'),
						'default' => 'icon-twitter',
					),
					array(
						'name'  => 'color',
						'type'  => 'select',
						'label' => __('Button Color', 'omni'),
						'items' => array(
							array(
								'value' => 'default',
								'label' => 'Default'
							),
							array(
								'value' => 'white',
								'label' => 'White'
							),
						),
					),
				),
			),
			
			'icon' => array(
				'title'   => __('Icon', 'omni'),
				'code'    => '[icon][/icon]',
				'attributes' => array(
					array(
						'name'  => 'icon',
						'type'  => 'textbox',
						'label' => __('Icon', 'omni'),
						'default' => 'icon-twitter',
					),
					array(
						'name'  => 'size',
						'type'  => 'select',
						'label' => __('Icon Size', 'omni'),
						'items' => array(
							array(
								'value' => 'default',
								'label' => 'Default'
							),
							array(
								'value' => 'medium',
								'label' => 'Medium'
							),
							array(
								'value' => 'big',
								'label' => 'Big'
							),
							array(
								'value' => 'huge',
								'label' => 'Huge'
							),
						),
					),
				),
			),
			
			'skill' => array(
				'title'   => __('Skill', 'omni'),
				'code'    => '[skill][/skill]',
				'attributes' => array(
					array(
						'name'  => 'value',
						'type'  => 'textbox',
						'label' => __('(Percentage) Value', 'omni'),
						'default' => '50',
					),
					array(
						'name'  => 'bar_color',
						'type'  => 'color',
						'label' => __('Bar Color', 'omni'),
					),
				),
			),
			
			'pricing_table' => array(
				'title'   => __('Pricing Table', 'omni'),
				'code'    => '[pricing_table][/pricing_table]',
				'attributes' => array(
					array(
						'name'  => 'name',
						'type'  => 'textbox',
						'label' => __('Package Header Name', 'omni'),
						'default' => 'Basic',
					),
					array(
						'name'  => 'price',
						'type'  => 'textbox',
						'label' => __('Package Price', 'omni'),
						'default' => '$24,-',
					),
					array(
						'name'  => 'price_text',
						'type'  => 'textbox',
						'label' => __('Package Price Small Text', 'omni'),
						'default' => '/mo',
					),
					array(
						'name'  => 'btn_text',
						'type'  => 'textbox',
						'label' => __('Button Text', 'omni'),
						'default' => 'Sign Up',
					),
					array(
						'name'  => 'btn_url',
						'type'  => 'textbox',
						'label' => __('Button URL', 'omni'),
						'default' => 'http://',
					),
				),
			),
			
			'pricing_feature' => array(
				'title'   => __('Pricing Feature', 'omni'),
				'code'    => '[feature][/feature]',
			),
			
			'services' => array(
				'title'   => __('Services Container (Row)', 'omni'),
				'code'    => '[services][/services]',
			),
			
			'service' => array(
				'title'   => __('Service', 'omni'),
				'code'    => '[service][/service]',
				'attributes' => array(
					array(
						'name'  => 'name',
						'type'  => 'textbox',
						'label' => __('Service Name', 'omni'),
						'default' => 'Print',
					),
					array(
						'name'  => 'icon',
						'type'  => 'textbox',
						'label' => __('Service Icon', 'omni'),
						'default' => 'icon-print',
					),
					array(
						'name'    => 'grid',
						'type'    => 'slider',
						'label'   => __('Grid', 'omni'),
						'min'     => 1,
						'max'     => 24,
						'default' => 24,
					),
					array(
						'name'    => 'offset',
						'type'    => 'slider',
						'label'   => __('Offset', 'omni'),
						'min'     => 0,
						'max'     => 24,
						'default' => 0,
					),
				),
			),
			
			'slogan' => array(
				'title'   => __('Slogan (Container)', 'omni'),
				'code'    => '[slogan][/slogan]',
			),
			
			'twitter_feed' => array(
				'title'   => __('Twitter Feed', 'omni'),
				'code'    => '[twitter_feed][/twitter_feed]',
				'attributes' => array(
					array(
						'name'  => 'username',
						'type'  => 'textbox',
						'label' => __('Twitter Username', 'omni'),
						'default' => 'themeshifters',
					),
					array(
						'name'    => 'count',
						'type'    => 'slider',
						'label'   => __('Tweet Count', 'omni'),
						'min'     => 1,
						'max'     => 15,
						'default' => 1,
					),
				),
			),
			
			'text_box' => array(
				'title'   => __('Text or Quote Box', 'omni'),
				'code'    => '[text_box][/text_box]',
				'attributes' => array(
					array(
						'name'  => 'type',
						'type'  => 'select',
						'label' => __('Box Type', 'omni'),
						'items' => array(
							array(
								'value' => 'quote',
								'label' => 'Quote'
							),
							array(
								'value' => 'text',
								'label' => 'Text'
							),
						),
					),
				),
			),
			
		),
	),
	
	'Typography' => array(
		'elements' => array(

			'section_title' => array(
				'title'   => __('Section Title', 'omni'),
				'code'    => '[section_title][/section_title]',
				'attributes' => array(
					array(
						'name'  => 'heading_type',
						'type'  => 'select',
						'label' => __('Heading Type', 'omni'),
						'description' => __('Choose your heading type (e.g. h1, h2, h3, h4, h5, h6).', 'omni'),
						'default' => 'h1',
						'items' => array(
							array(
								'value' => 'h1',
								'label' => 'Heading 1 (h1)'
							),
							array(
								'value' => 'h2',
								'label' => 'Heading 2 (h2)'
							),
							array(
								'value' => 'h3',
								'label' => 'Heading 3 (h3)'
							),
							array(
								'value' => 'h4',
								'label' => 'Heading 4 (h4)'
							),
							array(
								'value' => 'h5',
								'label' => 'Heading 5 (h5)'
							),
							array(
								'value' => 'h6',
								'label' => 'Heading 6 (h6)'
							),
						),
					),
				),
			),
			
		),
	),
	
	'Portfolio' => array(
		'elements' => array(

			'item_box' => array(
				'title'   => __('Item Box', 'omni'),
				'code'    => '[item_box][/item_box]',
			),
			
			'item_content' => array(
				'title'   => __('Item Box Content', 'omni'),
				'code'    => '[item_content][/item_content]',
				'attributes' => array(
					array(
						'name'  => 'title',
						'type'  => 'textbox',
						'label' => __('Title', 'omni'),
					),
				),
			),
			
			'item_images' => array(
				'title'   => __('Item Box Images', 'omni'),
				'code'    => '[item_images][/item_images]',
				'attributes' => array(
					array(
						'name'  => 'slider',
						'type'  => 'toggle',
						'label' => __('Do you want to use the slider?', 'omni'),
					),
					array(
						'name'  => 'image',
						'type'  => 'upload',
						'label' => __('If you don\'t want to use the slider you can upload a single image in here.', 'omni'),
					),
					array(
						'name'  => 'url',
						'type'  => 'textbox',
						'label' => __('You can input an url for the image link (you can leave it empty).', 'omni'),
					),
					array(
						'name'  => 'alt',
						'type'  => 'textbox',
						'label' => __('Image alternate text.', 'omni'),
					),
				),
			),
			
			'item_slide' => array(
				'title'   => __('Item Box Slide', 'omni'),
				'code'    => '[item_slide][/item_slide]',
				'attributes' => array(
					array(
						'name'  => 'image',
						'type'  => 'upload',
						'label' => __('Upload your slide image.', 'omni'),
					),
					array(
						'name'  => 'url',
						'type'  => 'textbox',
						'label' => __('You can input an url for the image link (you can leave it empty).', 'omni'),
					),
					array(
						'name'  => 'alt',
						'type'  => 'textbox',
						'label' => __('Image alternate text.', 'omni'),
					),
				),
			),
			
			'portfolio' => array(
				'title'   => __('Isotope Portfolio (Filterable)', 'omni'),
				'code'    => '[portfolio][/portfolio]',
				'attributes' => array(
					array(
						'name'  => 'filter',
						'type'  => 'toggle',
						'label' => __('Do you want to use the filter?', 'omni'),
					),
					array(
						'name'  => 'categories',
						'type'  => 'textbox',
						'label' => __('Input the categorie slugs you want to display. Seperate them by commas.', 'omni'),
						'default'	=> 'category-name, webdesign, print'
					),
					array(
						'name'  => 'shownumber',
						'type'  => 'textbox',
						'label' => __('Input the amount of items you\'d like to display. You can leave this empty if you want to show all items.', 'omni'),
					),
				),
			),
			
		),
	),
	
	'Carousels' => array(
		'elements' => array(

			'profile_carousel' => array(
				'title'   => __('Profile Carousel', 'omni'),
				'code'    => '[profile_carousel][/profile_carousel]',
				'attributes' => array(
					array(
						'name'  => 'name',
						'type'  => 'textbox',
						'label' => __('Give this carousel a unique ID, e.g. team-carousel.', 'omni'),
						'default' => 'team-carousel'
					),
				),
			),
			
			'profile' => array(
				'title'   => __('Profile', 'omni'),
				'code'    => '[profile][/profile]',
				'attributes' => array(
					array(
						'name'  => 'name',
						'type'  => 'textbox',
						'label' => __('The name of the person.', 'omni'),
					),
					array(
						'name'  => 'function',
						'type'  => 'textbox',
						'label' => __('The function of the person or company name of the person.', 'omni'),
					),
					array(
						'name'  => 'url',
						'type'  => 'textbox',
						'label' => __('URL of the function of the person (for the company name or function).', 'omni'),
					),
					array(
						'name'  => 'image',
						'type'  => 'upload',
						'label' => __('Profile Image', 'omni'),
					),
					array(
						'name'  => 'alt',
						'type'  => 'textbox',
						'label' => __('Alternate text for the profile image.', 'omni'),
					),
					array(
						'name'  => 'type',
						'type'  => 'select',
						'label' => __('Choose which layout you\'d like to use: team or testimonial.', 'omni'),
						'items' => array(
							array(
								'value' => 'team',
								'label' => 'Team'
							),
							array(
								'value' => 'testimonial',
								'label' => 'Testimonial'
							),
						),
					),
					array(
						'name'  => 'github',
						'type'  => 'textbox',
						'label' => __('URL of github icon. You can leave this empty if you don\'t want to display this icon', 'omni'),
					),
					array(
						'name'  => 'vimeo',
						'type'  => 'textbox',
						'label' => __('URL of Vimeo icon. You can leave this empty if you don\'t want to display this icon', 'omni'),
					),
					array(
						'name'  => 'twitter',
						'type'  => 'textbox',
						'label' => __('URL of Twitter icon. You can leave this empty if you don\'t want to display this icon', 'omni'),
					),
					array(
						'name'  => 'facebook',
						'type'  => 'textbox',
						'label' => __('URL of Facebook icon. You can leave this empty if you don\'t want to display this icon', 'omni'),
					),
					array(
						'name'  => 'gplus',
						'type'  => 'textbox',
						'label' => __('URL of Google Plus icon. You can leave this empty if you don\'t want to display this icon', 'omni'),
					),
					array(
						'name'  => 'pinterest',
						'type'  => 'textbox',
						'label' => __('URL of Pinterest icon. You can leave this empty if you don\'t want to display this icon', 'omni'),
					),
					array(
						'name'  => 'tumblr',
						'type'  => 'textbox',
						'label' => __('URL of Tumblr icon. You can leave this empty if you don\'t want to display this icon', 'omni'),
					),
					array(
						'name'  => 'linkedin',
						'type'  => 'textbox',
						'label' => __('URL of Linkedin icon. You can leave this empty if you don\'t want to display this icon', 'omni'),
					),
					array(
						'name'  => 'dribbble',
						'type'  => 'textbox',
						'label' => __('URL of Dribbble icon. You can leave this empty if you don\'t want to display this icon', 'omni'),
					),
					array(
						'name'  => 'instagrem',
						'type'  => 'textbox',
						'label' => __('URL of Instagram icon. You can leave this empty if you don\'t want to display this icon', 'omni'),
					),
					array(
						'name'  => 'skype',
						'type'  => 'textbox',
						'label' => __('URL of Skype icon. You can leave this empty if you don\'t want to display this icon', 'omni'),
					),
					array(
						'name'  => 'behance',
						'type'  => 'textbox',
						'label' => __('URL of Behance icon. You can leave this empty if you don\'t want to display this icon', 'omni'),
					),
					
				),
			),
			
			'clients_carousel' => array(
				'title'   => __('Clients Carousel', 'omni'),
				'code'    => '[clients_carousel][/clients_carousel]',
				'attributes' => array(
					array(
						'name'  => 'name',
						'type'  => 'textbox',
						'label' => __('Give this carousel a unique ID, e.g. clients-carousel.', 'omni'),
						'default' => 'clients-carousel'
					),
				),
			),
			
			'client' => array(
				'title'   => __('Client Slide', 'omni'),
				'code'    => '[client][/client]',
				'attributes' => array(
					array(
						'name'  => 'url',
						'type'  => 'textbox',
						'label' => __('URL for the link of the client slide. You can leave this empty if you don\'t want the logo to have a link.', 'omni'),
					),
					array(
						'name'  => 'logo',
						'type'  => 'upload',
						'label' => __('Client Image (e.g. Logo)', 'omni'),
					),
					array(
						'name'  => 'alt',
						'type'  => 'textbox',
						'label' => __('Alternate text for the Client Image.', 'omni'),
					),
				),
			),
			
		),
	),
	
	'Forms' => array(
		'elements' => array(

			'contact_form' => array(
				'title'   => __('Omni Contact Form', 'omni'),
				'code'    => '[omni_contact_form][/omni_contact_form]',
				'attributes' => array(
					array(
						'name'  => 'name_label',
						'type'  => 'textbox',
						'label' => __('Input text for the Name Label', 'omni'),
						'default' => 'Name'
					),
					array(
						'name'  => 'email_label',
						'type'  => 'textbox',
						'label' => __('Input text for the Email Label', 'omni'),
						'default' => 'Email'
					),
					array(
						'name'  => 'message_label',
						'type'  => 'textbox',
						'label' => __('Input text for the Message Label', 'omni'),
						'default' => 'Message'
					),
					array(
						'name'  => 'btn_label',
						'type'  => 'textbox',
						'label' => __('Input text for the Submit Button', 'omni'),
						'default' => 'Submit'
					),
					array(
						'name'  => 'success_message',
						'type'  => 'textbox',
						'label' => __('Input text for the Success Message', 'omni'),
						'default' => '&lt;strong&gt;Thank you!&lt;/strong&gt; We have received your message.'
					),
				),
			),
			
			'omni_newsletter' => array(
				'title'   => __('Omni Newsletter Form', 'omni'),
				'code'    => '[omni_newsletter][/omni_newsletter]',
				'attributes' => array(
					array(
						'name'  => 'email_label',
						'type'  => 'textbox',
						'label' => __('Input text for the Email Label', 'omni'),
						'default' => 'Enter your email'
					),
					array(
						'name'  => 'success_message',
						'type'  => 'textbox',
						'label' => __('Input text for the Success Message', 'omni'),
						'default' => '&lt;strong&gt;Thank you!&lt;/strong&gt; We have received your email adress.'
					),
				),
			),
			
		),
	),


);

/**
 * EOF
 */