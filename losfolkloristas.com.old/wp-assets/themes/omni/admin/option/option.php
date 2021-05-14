<?php

return array(
	'title' => __('Omni Option Panel', 'omni'),
	'page' => __('Omni Menu', 'omni'),
	'logo' => 'omni-logo.jpg',
	'menus' => array(
		array(
			'title' => __('General Settings', 'omni'),
			'name' => 'menu_general',
			'icon' => 'font-awesome:icon-cogs',
			'menus' => array(
				array(
					'title' => __('General', 'omni'),
					'name' => 'submenu_general',
					'icon' => 'font-awesome:icon-th-list',
					'controls' => array(
						array(
							'type' => 'section',
							'title' => __('Website Type', 'omni'),
							'name' => 'section_1',
							'description' => __('Choose if you want to use the One Page or the Multi Page version.', 'omni'),
							'fields' => array(
								array(
									'type' => 'radiobutton',
									'name' => 'website_type',
									'label' => __('One Page or Multi Page', 'omni'),
									'items' => array(
										array(
											'value' => 'onepage',
											'label' => __('One Page', 'omni'),
										),
										array(
											'value' => 'multipage',
											'label' => __('Multi Page', 'omni'),
										),
									),
									'default' => array(
										'onepage',
									),
								),
							),
						),
						array(
							'type' => 'upload',
							'name' => 'omni_favicon',
							'label' => __('Favicon', 'omni'),
							'description' => __('Here you can upload a favicon for your website.', 'omni'),
							'default' => '',
						),
						array(
							'type' => 'section',
							'title' => __('Footer', 'omni'),
							'fields' => array(
								array(
									'type' => 'textarea',
									'name' => 'footer_text',
									'label' => __('Copyright Footer Text', 'omni'),
									'description' => __('This text will be displayed in the footer copyright section.', 'omni'),
									'default' => '',
								),
							),
						),
						array(
							'type' => 'section',
							'title' => __('Custom Code', 'omni'),
							'fields' => array(
								array(
									'type' => 'textarea',
									'name' => 'tracking_code',
									'label' => __('Tracking Code', 'omni'),
									'description' => __('Paste your Google Analytics (or other) tracking code here. This will be added into the footer template of your theme.', 'omni'),
									'default' => '',
								),
								array(
									'type' => 'textarea',
									'name' => 'head_code',
									'label' => __('Space before &lt;/head&gt;', 'omni'),
									'description' => __('Add code before the &lt;/head&gt; tag.', 'omni'),
									'default' => '',
								),
								array(
									'type' => 'textarea',
									'name' => 'body_code',
									'label' => __('Space before &lt;/body&gt;', 'omni'),
									'description' => __('Add code before the &lt;/body&gt; tag.', 'omni'),
									'default' => '',
								),
							),
						),
					),
				),
				array(
					'title' => __('Twitter App', 'omni'),
					'name' => 'submenu_twitter',
					'icon' => 'font-awesome:icon-file-text',
					'controls' => array(
						array(
							'type' => 'section',
							'title' => __('Twitter Feed App Settings', 'omni'),
							'description' => __('Put in your Twitter App Keys for the Twitter Feed to work. You need to have a Twitter App: https://dev.twitter.com/apps', 'omni'),
							'fields' => array(
								array(
									'type' => 'textbox',
									'name' => 'twitter_consumer_key',
									'label' => __('Your Twitter App Consumer Key', 'omni'),
									'description' => __('Typ in your Twitter App Consumer Key.', 'omni'),
								),
								array(
									'type' => 'textbox',
									'name' => 'twitter_consumer_secret',
									'label' => __('Your Twitter App Consumer Secret', 'omni'),
									'description' => __('Typ in your Twitter App Consumer Secret.', 'omni'),
								),
								array(
									'type' => 'textbox',
									'name' => 'twitter_access_token',
									'label' => __('Your Twitter App Access Token', 'omni'),
									'description' => __('Typ in your Twitter App Access Token.', 'omni'),
								),
								array(
									'type' => 'textbox',
									'name' => 'twitter_access_token_secret',
									'label' => __('Your Twitter App Access Token Secret', 'omni'),
									'description' => __('Typ in your Twitter App Access Token Secret.', 'omni'),
								),
							),
						),
					),
				),
				
				array(
					'title' => __('Contact Form', 'omni'),
					'name' => 'submenu_contactform',
					'icon' => 'font-awesome:icon-comment',
					'controls' => array(
						array(
							'type' => 'section',
							'title' => __('Contact Form Settings', 'omni'),
							'fields' => array(
									array(
										'type' => 'textbox',
										'name' => 'contactform_email',
										'label' => __('Emailaddress where the contact form should be sent to.', 'omni'),
										'description' => __('Typ in the emailaddress where the contact form should be sent to.', 'omni'),
										'default' => 'email@address.com',
									),
									array(
										'type' => 'textbox',
										'name' => 'contactform_name',
										'label' => __('The name of the person which the contact form will be sent to.', 'omni'),
										'description' => __('Typ in the name where the contact form will be sent to.', 'omni'),
										'default' => 'John Doe',
									),
							),
						),
					),
				),
				
			),
		),
		array(
			'title' => __('Header Settings', 'omni'),
			'name' => 'menu_header',
			'icon' => 'font-awesome:icon-magic',
			'menus' => array(
				array(
					'title' => __('Top Header', 'omni'),
					'name' => 'submenu_top_header',
					'icon' => 'font-awesome:icon-cog',
					'controls' => array(
						array(
							'type' => 'section',
							'title' => __('Header Logo and Text', 'omni'),
							'fields' => array(
								array(
									'type' => 'upload',
									'name' => 'omni_header_logo',
									'label' => __('Header Logo', 'omni'),
									'description' => __('The logo will appear on the header', 'omni'),
									'default' => get_template_directory_uri() . '/assets/img/logo.jpg',
								),
								array(
									'type' => 'textarea',
									'name' => 'header_text',
									'label' => __('Header Text', 'omni'),
									'description' => __('This text will be displayed in the header next to the icons.', 'omni'),
									'default' => '<ul class="address pull-left">
	<li>1582 Pineview Drive</li>
	<li>&#149;</li>
	<li>Saint Peter</li>
	<li>&#149;</li>
	<li>MN 56082</li>
	<li>&#149;</li>
	<li>+0 123 456 7890</li>
</ul>',
								),
								array(
									'type' => 'toggle',
									'name' => 'headericon_mail',
									'label' => __('Mail Contact Icon', 'omni'),
									'description' => __('Check the box if you want the Mail Icon to show.', 'omni'),
								),
								array(
									'type' => 'toggle',
									'name' => 'headericon_mail_scroll',
									'label' => __('Scroll To', 'omni'),
									'dependency' => array(
										'field' => 'headericon_mail',
										'function' => 'vp_dep_boolean',
									),
									'description' => __('Check the box if you want to use jQuery scrollTo for the Mail Icon\'s URL. Useable if using the one page version.', 'omni'),
								),
								array(
									'type' => 'textbox',
									'name' => 'headericon_mail_url',
									'label' => __('URL to your Mail Page or mailaddress', 'omni'),
									'dependency' => array(
										'field' => 'headericon_mail',
										'function' => 'vp_dep_boolean',
									),
									'description' => __('Typ in the URL to your Contact Page or mailaddress', 'omni'),
									'default' => 'http:// or mailto:email@email.com',
								),
								array(
									'type' => 'toggle',
									'name' => 'headericon_vcard',
									'label' => __('VCard Icon', 'omni'),
									'description' => __('Check the box if you want the VCard to show.', 'omni'),
								),
								array(
									'type' => 'textbox',
									'name' => 'headericon_vcard_url',
									'label' => __('URL to your VCard', 'omni'),
									'dependency' => array(
										'field' => 'headericon_vcard',
										'function' => 'vp_dep_boolean',
									),
									'description' => __('Typ in the URL where your VCard could be downloaded.', 'omni'),
									'default' => 'http://',
									'validation' => 'url',
								),
								array(
									'type' => 'toggle',
									'name' => 'header_arrows',
									'label' => __('Top Header Jagged Arrows', 'omni'),
									'description' => __('Check the box if you want to show the jagged arrows under the top header', 'omni'),
								),
								array(
									'type' => 'toggle',
									'name' => 'footer_arrows',
									'label' => __('Footer Jagged Arrows', 'omni'),
									'description' => __('Check the box if you want to show the jagged arrows on top of the footer.', 'omni'),
								),
							),
						),
					),
				),
				array(
					'title' => __('Home Header', 'omni'),
					'name' => 'submenu_home_header',
					'icon' => 'font-awesome:icon-rocket',
					'controls' => array(
						array(
							'type' => 'section',
							'title' => __('Home Header Settings', 'omni'),
							'fields' => array(
								array(
									'type' => 'radiobutton',
									'name' => 'header_type',
									'label' => __('Choose a Home Header Type', 'omni'),
									'items' => array(
										array(
											'value' => 'portfolio',
											'label' => __('Portfolio', 'omni'),
										),
										array(
											'value' => 'video',
											'label' => __('Video', 'omni'),
										),
										array(
											'value' => 'parallax',
											'label' => __('Parallax', 'omni'),
										),
										array(
											'value' => 'revslider',
											'label' => __('Revolution Slider', 'omni'),
										),
										array(
											'value' => 'layerslider',
											'label' => __('Layer Slider', 'omni'),
										),
									),
									'default' => array(
										'parallax',
									),
								),
							),
						),
						array(
							'type' => 'section',
							'title' => __('Portfolio Header', 'omni'),
							'fields' => array(
								array(
									'type' => 'slider',
									'name' => 'header_portfolio_rows',
									'label' => __('Amount of Rows', 'omni'),
									'description' => __('Set the amount of rows the portfolio will have.', 'omni'),
									'min' => '1',
									'max' => '6',
									'step' => '1',
									'default' => '3',
								),
								array(
									'type' => 'multiselect',
									'name' => 'header_portfolio_cats',
									'label' => __('Portfolio Categories', 'omni'),
									'description' => __('Select the categories you want to display.', 'omni'),
									'items' => array(
										'data' => array(
											array(
												'source' => 'function',
												'value' => 'vp_get_custom_categories',
											),
										),
									),
									'default' => array(
										'{{first}}',
										'{{last}}',
									),
								),
								array(
									'type' => 'toggle',
									'name' => 'header_portfolio_show_overlay',
									'label' => __('Show Overlay', 'omni'),
									'description' => __('Do you want to show the overlay? (Dark overlay with taglines)', 'omni'),
									'default' => 1
								),
								array(
									'type' => 'upload',
									'name' => 'header_portfolio_logo',
									'label' => __('Big Logo', 'omni'),
									'description' => __('Upload a big logo to display above the taglines.', 'omni'),
									'default' => '',
								),
								array(
									'type' => 'textbox',
									'name' => 'header_portfolio_line_one',
									'label' => __('First Tagline', 'omni'),
									'description' => __('Typ in text for the first tagline.', 'omni'),
									'default' => 'We are a creative studio that will make stunning designs for your business.',
								),
								array(
									'type' => 'textbox',
									'name' => 'header_portfolio_line_two',
									'label' => __('Second Tagline', 'omni'),
									'description' => __('Typ in text for the second tagline. You can leave this field empty if you don\'t want to show a second tagline.', 'omni'),
									'default' => 'Design Agency? Photographer?',
								),
								array(
									'type' => 'textbox',
									'name' => 'header_portfolio_line_three',
									'label' => __('Third Tagline', 'omni'),
									'description' => __('Typ in text for the third tagline. You can leave this field empty if you don\'t want to show a third tagline.', 'omni'),
									'default' => 'This is the third line.',
								),
							),
						),
						array(
							'type' => 'section',
							'title' => __('Video Header', 'omni'),
							'fields' => array(
								array(
									'type' => 'radiobutton',
									'name' => 'header_video_type',
									'label' => __('Where is your video being streamed?', 'omni'),
									'items' => array(
										array(
											'value' => 'youtube',
											'label' => __('YouTube', 'omni'),
										),
										array(
											'value' => 'vimeo',
											'label' => __('Vimeo', 'omni'),
										),
									),
									'default' => array(
										'vimeo',
									),
								),
								array(
									'type' => 'textbox',
									'name' => 'header_video_code',
									'label' => __('Video Code', 'omni'),
									'description' => __('Typ in the (url)code of the video, (e.g. 72726988 if you&#039;ve selected Vimeo, e.g. W3OQgh_h4U4 for a YouTube video).', 'omni'),
									'default' => '72726988',
								),
							),
						),
						array(
							'type' => 'section',
							'title' => __('Parallax Header', 'omni'),
							'fields' => array(
								array(
									'type' => 'upload',
									'name' => 'header_parallax_bg_image',
									'label' => __('Parallax Image', 'omni'),
									'description' => __('Upload the parallax image. This image will have the parallax effect. You can only upload a parallax image here and leave the other upload fields empty if you just want to display this parallax image.', 'omni'),
									'default' => get_template_directory_uri() . '/assets/img/black-green-bg.jpg',
								),
								array(
									'type' => 'upload',
									'name' => 'header_parallax_bg_image_two',
									'label' => __('Parallax Image Two', 'omni'),
									'description' => __('Upload another parallax image, then one of the parallax images will be randomly displayed on page load.', 'omni'),
									'default' => '',
								),
								array(
									'type' => 'upload',
									'name' => 'header_parallax_bg_image_three',
									'label' => __('Parallax Image Three', 'omni'),
									'description' => __('Upload another parallax image, then one of the five parallax images will be randomly displayed on page load.', 'omni'),
									'default' => '',
								),
								array(
									'type' => 'upload',
									'name' => 'header_parallax_bg_image_four',
									'label' => __('Parallax Image Four', 'omni'),
									'description' => __('Upload another parallax image, then one of the five parallax images will be randomly displayed on page load.', 'omni'),
									'default' => '',
								),
								array(
									'type' => 'upload',
									'name' => 'header_parallax_bg_image_five',
									'label' => __('Parallax Image Five', 'omni'),
									'description' => __('Upload another parallax image, then one of the five parallax images will be randomly displayed on page load.', 'omni'),
									'default' => '',
								),
								array(
									'type' => 'upload',
									'name' => 'header_parallax_logo',
									'label' => __('Parallax Logo', 'omni'),
									'description' => __('Upload the logo that will come over the parallax image.', 'omni'),
									'default' => get_template_directory_uri() . '/assets/img/logo-big.png',
								),
								array(
									'type' => 'textbox',
									'name' => 'header_parallax_tagline',
									'label' => __('Parallax Tagline', 'omni'),
									'description' => __('Typ in your tagline for the parallax header.', 'omni'),
									'default' => 'We are a creative studio that will make stunning designs for your business.',
								),
							),
						),
						array(
							'type' => 'section',
							'title' => __('Revolution Slider Header', 'omni'),
							'fields' => array(
								array(
									'type' => 'select',
									'name' => 'header_revslider',
									'label' => __('Revolution Slider', 'omni'),
									'description' => __('Select which Revolution Slider you want to display.', 'omni'),
									'items' => array(
										'data' => array(
											array(
												'source' => 'function',
												'value' => 'vp_get_revsliders',
											),
										),
									),
								),
							),
						),
						array(
							'type' => 'section',
							'title' => __('Layer Slider Header', 'omni'),
							'fields' => array(
								array(
									'type' => 'select',
									'name' => 'header_layerslider',
									'label' => __('Layer Slider', 'omni'),
									'description' => __('Select which Layer Slider you want to display.', 'omni'),
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
						),
					),
				),
			),
		),
		array(
			'title' => __('Blog Settings', 'omni'),
			'name' => 'menu_blog',
			'icon' => 'font-awesome:icon-cogs',
			'controls' => array(
				array(
					'type' => 'section',
					'title' => __('Blog Page Settings', 'omni'),
					'description' => __('Set the settings for the blog page.', 'omni'),
					'fields' => array(
						array(
							'type' => 'toggle',
							'name' => 'blog_sidebar',
							'label' => __('Enable/Disable Sidebar', 'omni'),
							'description' => __('Do you want to show the sidebar?', 'omni'),
							'default' => '1',
						),
					),
				),
				array(
					'type' => 'section',
					'title' => __('Blog Post Settings', 'omni'),
					'description' => __('Set the settings for the blog posts.', 'omni'),
					'fields' => array(
						array(
							'type' => 'select',
							'name' => 'blogpost_preset_color',
							'label' => __('Preset Color', 'omni'),
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
							'default' => array(
								'preset_color_green',
							),
						),
						array(
							'type' => 'upload',
							'name' => 'blogpost_bg_image',
							'label' => __('Background Image', 'omni'),
							'description' => __('Upload a background image for a blog post.', 'omni'),
							'default' => '',
						),
						array(
							'type' => 'color',
							'name' => 'blogpost_bg_color',
							'label' => __('Background Color', 'omni'),
							'description' => __('Choose a background color for this page.', 'omni'),
							'default' => '',
							'format' => 'rgb'
						),
						array(
							'type' => 'toggle',
							'name' => 'blogpost_bg_light_radial',
							'label' => __('Show Light Background Radial Gradient', 'omni'),
							'description' => __('Do you want to show a light background radial gradient?', 'omni'),
						),
						array(
							'type' => 'toggle',
							'name' => 'blogpost_bg_image_full',
							'label' => __('100% Background Image', 'omni'),
							'description' => __('Do you want the background image size to be 100% (full)?', 'omni'),
							'default' => '0',
						),
						array(
							'type' => 'select',
							'name' => 'blogpost_bg_image_repeat',
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
							'type' => 'toggle',
							'name' => 'blogpost_nav',
							'label' => __('Show Post Navigation', 'omni'),
							'description' => __('Do you want to show the Post Navigation?', 'omni'),
							'default' => '0',
						),
						
					),
				),
				array(
					'type' => 'section',
					'title' => __('Other Blog Pages Settings (Category/Archive/Search/Author)', 'omni'),
					'description' => __('Set the settings for the other blog pages (e.g. category, archive, author and search).', 'omni'),
					'fields' => array(
						array(
							'type' => 'select',
							'name' => 'blogpage_preset_color',
							'label' => __('Preset Color', 'omni'),
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
							'default' => array(
								'preset_color_green',
							),
						),
						array(
							'type' => 'upload',
							'name' => 'blogpage_bg_image',
							'label' => __('Background Image', 'omni'),
							'description' => __('Upload a background image for a blog post.', 'omni'),
							'default' => '',
						),
						array(
							'type' => 'color',
							'name' => 'blogpage_bg_color',
							'label' => __('Background Color', 'omni'),
							'description' => __('Choose a background color for this page.', 'omni'),
							'default' => '',
							'format' => 'rgb'
						),
						array(
							'type' => 'toggle',
							'name' => 'blogpage_bg_light_radial',
							'label' => __('Show Light Background Radial Gradient', 'omni'),
							'description' => __('Do you want to show a light background radial gradient?', 'omni'),
						),
						array(
							'type' => 'toggle',
							'name' => 'blogpage_bg_image_full',
							'label' => __('100% Background Image', 'omni'),
							'description' => __('Do you want the background image size to be 100% (full)?', 'omni'),
							'default' => '0',
						),
						array(
							'type' => 'select',
							'name' => 'blogpage_bg_image_repeat',
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
		),
		array(
			'title' => __('Typography Options', 'omni'),
			'name' => 'menu_typography',
			'icon' => 'font-awesome:icon-font',
			'controls' => array(
				array(
					'type' => 'section',
					'title' => __('Body Font', 'omni'),
					'description' => __('Set the typography options for the body.', 'omni'),
					'fields' => array(
						array(
							'type' => 'html',
							'name' => 'typo_body_preview',
							'binding' => array(
								'field'    => 'typo_body_font_family, typo_body_font_weight, typo_body_font_size, typo_body_line_height',
								'function' => 'vp_font_preview',
							),
						),
						array(
							'type' => 'select',
							'name' => 'typo_body_font_family',
							'label' => __('Google Font Face', 'omni'),
							'items' => array(
								'data' => array(
									array(
										'source' => 'function',
										'value' => 'vp_get_gwf_family',
									),
								),
							),
							'default' => 'Roboto'
						),
						array(
							'type' => 'checkbox',
							'name' => 'typo_body_font_styles',
							'label' => __('Font Styles', 'omni'),
							'description' => __('Choose which font styles you want to use for this font.', 'omni'),
							'items' => array(
								'data' => array(
									array(
										'source' => 'binding',
										'field' => 'typo_body_font_family',
										'value' => 'vp_get_gwf_style',
									),
								),
							),
							'default' => array(
								'{{first}}',
							),
						),
						array(
							'type' => 'checkbox',
							'name' => 'typo_body_font_weights',
							'label' => __('Font Weights', 'omni'),
							'description' => __('Choose which font weights you want to use for this font.', 'omni'),
							'items' => array(
								'data' => array(
									array(
										'source' => 'binding',
										'field' => 'typo_body_font_family',
										'value' => 'vp_get_gwf_weight',
									),
								),
							),
						),
						array(
							'type' => 'radiobutton',
							'name' => 'typo_body_font_weight',
							'label' => __('Font Weight', 'omni'),
							'description' => __('Choose which font weight you want to use as the body weight.', 'omni'),
							'items' => array(
								'data' => array(
									array(
										'source' => 'binding',
										'field' => 'typo_body_font_family',
										'value' => 'vp_get_gwf_weight',
									),
								),
							),
						),
						array(
							'type'    => 'slider',
							'name'    => 'typo_body_font_size',
							'label'   => __('Font Size (px)', 'omni'),
							'min'     => '5',
							'max'     => '22',
							'default' => '13',
						),
						array(
							'type'    => 'slider',
							'name'    => 'typo_body_line_height',
							'label'   => __('Line Height (px)', 'omni'),
							'min'     => '5',
							'max'     => '50',
							'default' => '22',
							'step'    => '1',
						),
					),
				),
				
				array(
					'type' => 'section',
					'title' => __('Titles and Slogan Font', 'omni'),
					'description' => __('Set the typography options for the titles and slogans.', 'omni'),
					'fields' => array(
						array(
							'type' => 'html',
							'name' => 'typo_title_preview',
							'binding' => array(
								'field'    => 'typo_title_font_family, typo_title_font_weight, typo_title_transform',
								'function' => 'vp_font_preview_two',
							),
						),
						array(
							'type' => 'select',
							'name' => 'typo_title_font_family',
							'label' => __('Google Font Face', 'omni'),
							'items' => array(
								'data' => array(
									array(
										'source' => 'function',
										'value' => 'vp_get_gwf_family',
									),
								),
							),
							'default' => 'Montserrat'
						),
						array(
							'type' => 'checkbox',
							'name' => 'typo_title_font_styles',
							'label' => __('Font Styles', 'omni'),
							'description' => __('Choose which font styles you want to use for this font.', 'omni'),
							'items' => array(
								'data' => array(
									array(
										'source' => 'binding',
										'field' => 'typo_title_font_family',
										'value' => 'vp_get_gwf_style',
									),
								),
							),
							'default' => array(
								'{{first}}',
							),
						),
						array(
							'type' => 'checkbox',
							'name' => 'typo_title_font_weights',
							'label' => __('Font Weights', 'omni'),
							'description' => __('Choose which font weights you want to use for this font.', 'omni'),
							'items' => array(
								'data' => array(
									array(
										'source' => 'binding',
										'field' => 'typo_title_font_family',
										'value' => 'vp_get_gwf_weight',
									),
								),
							),
						),
						array(
							'type' => 'radiobutton',
							'name' => 'typo_title_font_weight',
							'label' => __('Font Weight', 'omni'),
							'description' => __('Choose which font weight you want to use as the title weight.', 'omni'),
							'items' => array(
								'data' => array(
									array(
										'source' => 'binding',
										'field' => 'typo_title_font_family',
										'value' => 'vp_get_gwf_weight',
									),
								),
							),
						),
						array(
							'type' => 'select',
							'name' => 'typo_title_transform',
							'label' => __('Text Transform', 'omni'),
							'description' => __('Choose the text-transform.', 'omni'),
							'items' => array(
								array(
									'value' => 'capitalize',
									'label' => __('Capitalize', 'omni'),
								),
								array(
									'value' => 'inherit',
									'label' => __('Inherit', 'omni'),
								),
								array(
									'value' => 'lowercase',
									'label' => __('Lowercase', 'omni'),
								),
								array(
									'value' => 'none',
									'label' => __('None', 'omni'),
								),
								array(
									'value' => 'uppercase',
									'label' => __('Uppercase', 'omni'),
								),
							),
						),
					),
				),
			),
		),
		array(
			'title' => __('Styling Options', 'omni'),
			'name' => 'menu_styling',
			'icon' => 'font-awesome:icon-gift',
			'menus' => array(
				array(
					'title' => __('Preset Colors', 'omni'),
					'name' => 'submenu_preset_colors',
					'icon' => 'font-awesome:icon-cog',
					'controls' => array(
						array(
							'type' => 'notebox',
							'name' => 'preset_notebox',
							'label' => __('Preset Colors', 'omni'),
							'description' => __('Here you can set the preset colors, change them to whatever color you want. These preset colors can be used in the pages and posts settings.', 'omni'),
							'status' => 'info',
						),
						array(
							'type' => 'section',
							'title' => __('Preset Color: Green', 'omni'),
							'fields' => array(
								array(
									'type' => 'color',
									'name' => 'preset_background_green',
									'label' => __('Background Color', 'omni'),
									'default' => '#94100b',
								),
								array(
									'type' => 'color',
									'name' => 'preset_bottom_arrow_green',
									'label' => __('Bottom Arrow Color', 'omni'),
									'default' => '#94100b',
								),
								array(
									'type' => 'color',
									'name' => 'preset_title_green',
									'label' => __('Title Colors', 'omni'),
									'default' => '#fff',
								),
								array(
									'type' => 'color',
									'name' => 'preset_paragraph_green',
									'label' => __('Paragraph Color', 'omni'),
									'default' => '#fff',
								),
							),
						),
						
						array(
							'type' => 'section',
							'title' => __('Preset Color: Red', 'omni'),
							'fields' => array(
								array(
									'type' => 'color',
									'name' => 'preset_background_red',
									'label' => __('Background Color', 'omni'),
									'default' => '#9e1b1b',
								),
								array(
									'type' => 'color',
									'name' => 'preset_bottom_arrow_red',
									'label' => __('Bottom Arrow Color', 'omni'),
									'default' => '#9e1b1b',
								),
								array(
									'type' => 'color',
									'name' => 'preset_title_red',
									'label' => __('Title Colors', 'omni'),
									'default' => '#fff',
								),
								array(
									'type' => 'color',
									'name' => 'preset_paragraph_red',
									'label' => __('Paragraph Color', 'omni'),
									'default' => '#fff',
								),
							),
						),
						
						array(
							'type' => 'section',
							'title' => __('Preset Color: Blue', 'omni'),
							'fields' => array(
								array(
									'type' => 'color',
									'name' => 'preset_background_blue',
									'label' => __('Background Color', 'omni'),
									'default' => '#008ac5',
								),
								array(
									'type' => 'color',
									'name' => 'preset_bottom_arrow_blue',
									'label' => __('Bottom Arrow Color', 'omni'),
									'default' => '#008ac5',
								),
								array(
									'type' => 'color',
									'name' => 'preset_title_blue',
									'label' => __('Title Colors', 'omni'),
									'default' => '#fff',
								),
								array(
									'type' => 'color',
									'name' => 'preset_paragraph_blue',
									'label' => __('Paragraph Color', 'omni'),
									'default' => '#fff',
								),
							),
						),
						
						array(
							'type' => 'section',
							'title' => __('Preset Color: Dark', 'omni'),
							'fields' => array(
								array(
									'type' => 'color',
									'name' => 'preset_background_dark',
									'label' => __('Background Color', 'omni'),
									'default' => '#393939',
								),
								array(
									'type' => 'color',
									'name' => 'preset_bottom_arrow_dark',
									'label' => __('Bottom Arrow Color', 'omni'),
									'default' => '#393939',
								),
								array(
									'type' => 'color',
									'name' => 'preset_title_dark',
									'label' => __('Title Colors', 'omni'),
									'default' => '#fff',
								),
								array(
									'type' => 'color',
									'name' => 'preset_paragraph_dark',
									'label' => __('Paragraph Color', 'omni'),
									'default' => '#fff',
								),
							),
						),
						
						array(
							'type' => 'section',
							'title' => __('Preset Color: Grey', 'omni'),
							'fields' => array(
								array(
									'type' => 'color',
									'name' => 'preset_background_grey',
									'label' => __('Background Color', 'omni'),
									'default' => '#f0f0f4',
								),
								array(
									'type' => 'color',
									'name' => 'preset_bottom_arrow_grey',
									'label' => __('Bottom Arrow Color', 'omni'),
									'default' => '#f0f0f4',
								),
								array(
									'type' => 'color',
									'name' => 'preset_title_grey',
									'label' => __('Title Colors', 'omni'),
									'default' => '#94100b',
								),
								array(
									'type' => 'color',
									'name' => 'preset_paragraph_grey',
									'label' => __('Paragraph Color', 'omni'),
									'default' => '#8f8f8f',
								),
							),
						),
						
						array(
							'type' => 'section',
							'title' => __('Preset Color: Light Grey', 'omni'),
							'fields' => array(
								array(
									'type' => 'color',
									'name' => 'preset_background_lightgrey',
									'label' => __('Background Color', 'omni'),
									'default' => '#f7f7f9',
								),
								array(
									'type' => 'color',
									'name' => 'preset_bottom_arrow_lightgrey',
									'label' => __('Bottom Arrow Color', 'omni'),
									'default' => '#f7f7f9',
								),
								array(
									'type' => 'color',
									'name' => 'preset_title_lightgrey',
									'label' => __('Title Colors', 'omni'),
									'default' => '#94100b',
								),
								array(
									'type' => 'color',
									'name' => 'preset_paragraph_lightgrey',
									'label' => __('Paragraph Color', 'omni'),
									'default' => '#8f8f8f',
								),
							),
						),
						
					),
				),
				
				array(
					'title' => __('General Colors', 'omni'),
					'name' => 'submenu_general_colors',
					'icon' => 'font-awesome:icon-beaker',
					'controls' => array(
						array(
							'type' => 'section',
							'title' => __('Typography Colors', 'omni'),
							'fields' => array(
								array(
									'type' => 'color',
									'name' => 'general_color_titles',
									'label' => __('Title Colors', 'omni'),
									'default' => '#94100b',
								),
								array(
									'type' => 'color',
									'name' => 'general_color_body',
									'label' => __('Body Color', 'omni'),
									'default' => '#8f8f8f',
								),
								array(
									'type' => 'color',
									'name' => 'general_color_links',
									'label' => __('Link Color', 'omni'),
									'default' => '#94100b',
								),
								array(
									'type' => 'color',
									'name' => 'general_color_links_hover',
									'label' => __('Link Hover Color', 'omni'),
									'default' => '#393939',
								),
								array(
									'type' => 'color',
									'name' => 'general_color_button',
									'label' => __('Button Text Color', 'omni'),
									'default' => '#94100b',
								),
								array(
									'type' => 'color',
									'name' => 'general_color_button_border',
									'label' => __('Button Border Color', 'omni'),
									'default' => '#94100b',
								),
								array(
									'type' => 'color',
									'name' => 'general_color_button_border_hover',
									'label' => __('Button Hover Border Color', 'omni'),
									'default' => '#94100b',
								),
								array(
									'type' => 'color',
									'name' => 'general_color_button_bg_hover',
									'label' => __('Button Hover Background Color', 'omni'),
									'default' => '#94100b',
								),
								array(
									'type' => 'color',
									'name' => 'general_color_button_hover',
									'label' => __('Button Hover Text Color', 'omni'),
									'default' => '#fff',
								),
								
							),
						),
						
						array(
							'type' => 'section',
							'title' => __('Background Colors', 'omni'),
							'fields' => array(
								array(
									'type' => 'color',
									'name' => 'general_bg_top',
									'label' => __('Top Background Color', 'omni'),
									'default' => '#000000',
								),
								array(
									'type' => 'color',
									'name' => 'general_bg_top_color',
									'label' => __('Top Text Color', 'omni'),
									'default' => '#8f8f8f',
								),
								array(
									'type' => 'color',
									'name' => 'general_bg_nav',
									'label' => __('One Page Nav Background Color', 'omni'),
									'default' => '#94100b',
								),
								array(
									'type' => 'color',
									'name' => 'general_bg_nav_a',
									'label' => __('One Page Nav Link Color', 'omni'),
									'default' => '#fff',
								),
								array(
									'type' => 'color',
									'name' => 'general_bg_nav_hover',
									'label' => __('One Page Nav Link Hover Color', 'omni'),
									'default' => '#393939',
								),
								array(
									'type' => 'color',
									'name' => 'general_bg_footer',
									'label' => __('Footer Background Color', 'omni'),
									'default' => '#000000',
								),
								array(
									'type' => 'color',
									'name' => 'general_bg_footer_color',
									'label' => __('Footer Text Color', 'omni'),
									'default' => '#fff',
								),
								array(
									'type' => 'color',
									'name' => 'general_bg_service',
									'label' => __('Service Front Background Color', 'omni'),
									'default' => '#94100b',
								),
								array(
									'type' => 'color',
									'name' => 'general_bg_price',
									'label' => __('Price Package Hover Background Color', 'omni'),
									'default' => '#94100b',
								),
								
							),
						),
						
						array(
							'type' => 'section',
							'title' => __('Portfolio Colors', 'omni'),
							'fields' => array(
								array(
									'type' => 'color',
									'name' => 'general_portfolio_item',
									'label' => __('Item Hover Background Color', 'omni'),
									'default' => 'rgba(0, 187, 166, 0.85)',
									'format' => 'rgba',
								),
								array(
									'type' => 'color',
									'name' => 'general_portfolio_icons_hover',
									'label' => __('Item Icons Hover Color', 'omni'),
									'default' => '#94100b',
								),
							),
						),

						array(
							'type' => 'section',
							'title' => __('Slider Colors', 'omni'),
							'fields' => array(
								array(
									'type' => 'color',
									'name' => 'general_slider_navbg',
									'label' => __('Next/Prev Background Color', 'omni'),
									'default' => '#8f8f8f',
								),
								array(
									'type' => 'color',
									'name' => 'general_slider_navborder',
									'label' => __('Next/Prev Border Color', 'omni'),
									'default' => '#8f8f8f',
								),
								array(
									'type' => 'color',
									'name' => 'general_slider_navarrow',
									'label' => __('Next/Prev Arrow Color', 'omni'),
									'default' => '#393939',
								),
								array(
									'type' => 'color',
									'name' => 'general_slider_navbg_hover',
									'label' => __('Next/Prev Background Color on Hover', 'omni'),
									'default' => '#94100b',
								),
								array(
									'type' => 'color',
									'name' => 'general_slider_navborder_hover',
									'label' => __('Next/Prev Border Color on Hover', 'omni'),
									'default' => '#94100b',
								),
								array(
									'type' => 'color',
									'name' => 'general_slider_navarrow_hover',
									'label' => __('Next/Prev Arrow Color on Hover', 'omni'),
									'default' => '#ffffff',
								),
							),
						),

						array(
							'type' => 'section',
							'title' => __('Profile Carousel Colors', 'omni'),
							'fields' => array(
								array(
									'type' => 'color',
									'name' => 'general_carprofile_navbg',
									'label' => __('Next/Prev Background Color', 'omni'),
									'default' => '#8F8F8F',
								),
								array(
									'type' => 'color',
									'name' => 'general_carprofile_navborder',
									'label' => __('Next/Prev Border Color', 'omni'),
									'default' => '#8F8F8F',
								),
								array(
									'type' => 'color',
									'name' => 'general_carprofile_navarrow',
									'label' => __('Next/Prev Arrow Color', 'omni'),
									'default' => '#393939',
								),
								array(
									'type' => 'color',
									'name' => 'general_carprofile_navbg_hover',
									'label' => __('Next/Prev Background Color on Hover', 'omni'),
									'default' => '#94100b',
								),
								array(
									'type' => 'color',
									'name' => 'general_carprofile_navborder_hover',
									'label' => __('Next/Prev Border Color on Hover', 'omni'),
									'default' => '#94100b',
								),
								array(
									'type' => 'color',
									'name' => 'general_carprofile_navarrow_hover',
									'label' => __('Next/Prev Arrow Color on Hover', 'omni'),
									'default' => '#ffffff',
								),
								array(
									'type' => 'color',
									'name' => 'general_carprofile_bullet',
									'label' => __('Bullet Background Color', 'omni'),
									'default' => '#ffffff',
								),
								array(
									'type' => 'color',
									'name' => 'general_carprofile_bullet_hover',
									'label' => __('Bullet Background Color on Hover', 'omni'),
									'default' => '#94100b',
								),
							),
						),

						array(
							'type' => 'section',
							'title' => __('Clients Carousel Colors', 'omni'),
							'fields' => array(
								array(
									'type' => 'color',
									'name' => 'general_carclients_navbg',
									'label' => __('Next/Prev Background Color', 'omni'),
									'default' => '',
								),
								array(
									'type' => 'color',
									'name' => 'general_carclients_navborder',
									'label' => __('Next/Prev Border Color', 'omni'),
									'default' => '#94100b',
								),
								array(
									'type' => 'color',
									'name' => 'general_carclients_navarrow',
									'label' => __('Next/Prev Arrow Color', 'omni'),
									'default' => '#94100b',
								),
								array(
									'type' => 'color',
									'name' => 'general_carclients_navbg_hover',
									'label' => __('Next/Prev Background Color on Hover', 'omni'),
									'default' => '#94100b',
								),
								array(
									'type' => 'color',
									'name' => 'general_carclients_navborder_hover',
									'label' => __('Next/Prev Border Color on Hover', 'omni'),
									'default' => '#94100b',
								),
								array(
									'type' => 'color',
									'name' => 'general_carclients_navarrow_hover',
									'label' => __('Next/Prev Arrow Color on Hover', 'omni'),
									'default' => '#ffffff',
								),
							),
						),
						
						array(
							'type' => 'section',
							'title' => __('Miscellaneous', 'omni'),
							'fields' => array(
								array(
									'type' => 'color',
									'name' => 'general_box_icon_color',
									'label' => __('Tweet/Quote Box Icon Color', 'omni'),
									'default' => '#94100b',
								),
								array(
									'type' => 'color',
									'name' => 'general_newsletter_color',
									'label' => __('Newsletter Colors', 'omni'),
									'default' => '#94100b',
								),
								array(
									'type' => 'color',
									'name' => 'general_headslider_arrow_color',
									'label' => __('Header Slider Navigation Background Color', 'omni'),
									'default' => '#2DC7B5',
								),
							),
						),
						
					),
				),
				
				array(
					'title' => __('Custom CSS', 'omni'),
					'name' => 'submenu_custom_css',
					'icon' => 'font-awesome:icon-code',
					'controls' => array(
						array(
							'type' => 'section',
							'title' => __('Custom CSS', 'omni'),
							'fields' => array(
								array(
									'type' => 'codeeditor',
									'name' => 'styling_custom_css',
									'label' => __('Custom CSS', 'omni'),
									'description' => __('Write your custom css here.', 'omni'),
									'theme' => 'github',
									'mode' => 'css',
								),
							),
						),
					),
				),
				
			),
		),
		
	),
);

/**
 *EOF
 */