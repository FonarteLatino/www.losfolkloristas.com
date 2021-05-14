<?php
/**
 * Omni custom shortcodes
 *
 * @package WordPress
 * @subpackage Omni
 * @since Omni 1.0
 */


// Content Filter
add_filter("the_content", "the_content_filter");

function the_content_filter($content) {
	// array of custom shortcodes requiring the fix
	$block = join("|",array(
			"row",
			"column",
			"clearfix",
			"block",
			"button",
			"social_button",
			"icon",
			"skill",
			"pricing_table",
			"feature",
			"services",
			"service",
			"item_box",
			"item_content",
			"item_images",
			"item_slide",
			"portfolio",
			"profile_carousel",
			"profile",
			"clients_carousel",
			"client",
			"omni_contact_form",
			"text_center",
			"slogan",
			"twitter_feed",
			"text_box",
			"omni_newsletter",
			"section_title",
		));
	 
	// opening tag
	$rep = preg_replace("/(<p>)?\[($block)(\s[^\]]+)?\](<\/p>|<br \/>)?/","[$2$3]",$content);
	// closing tag
	$rep = preg_replace("/(<p>)?\[\/($block)](<\/p>|<br \/>)?/","[/$2]",$rep);
	 
	return $rep;
}


/**
 * Layout Shortcodes
 */
 
// Layout Row Shortcode
function omni_row( $atts, $content = null ) {
	extract(shortcode_atts(array(  
        "text_center" => ''
    ), $atts));
	
	$centerclass = '';
	if ($text_center == 'true') {
		$centerclass = ' text-center';
	}
	
	return '<div class="row'.$centerclass.'">' . do_shortcode($content) . '</div>';
}
add_shortcode('row', 'omni_row');

// Layout Column Shortcode
function omni_column( $atts, $content = null ) {
	extract(shortcode_atts(array(  
        "grid" => '24',
		"offset" => '0',
		"text_center" => ''
    ), $atts));
	
	$offsetoutput = $centerclass = '';
	
	if ($offset > 0){
		$offsetoutput = ' offset'.$offset;
	}
	if ($text_center == 'true'){
		$centerclass = ' text-center';
	}
	
	return '<div class="span'. $grid . $offsetoutput . $centerclass .'">' . do_shortcode($content) . '</div>';
}
add_shortcode('column', 'omni_column');

// Layout Block Shortcode
function omni_clearfix( $atts, $content = null ) {
	return '<div class="clearfix">' . do_shortcode($content) . '</div>';
}
add_shortcode('clearfix', 'omni_clearfix');

// Layout Block Shortcode
function omni_block( $atts, $content = null ) {
	return '<div class="block">' . do_shortcode($content) . '</div>';
}
add_shortcode('block', 'omni_block');


/**
 * Elements Shortcodes
 */

// Buttons
function omni_btn( $atts, $content = null ) {
	extract(shortcode_atts(array( 
		"url"			=> '',
		"scroll_to"		=> 'false',
		"color"			=> 'default',
		"size"			=> 'default',
		"align"			=> 'none'
    ), $atts));
	
	$btncolor = $btnscroll = $btnsize = $btnalign = '';
	if ($size != 'default') $btnsize = ' btn-'.$size;
	if ($color != 'default') $btncolor = ' '.$color;
	if ($scroll_to == true) $btnscroll = ' scroll-to';
	if ($align != 'none') $btnalign = ' pull-'.$align;
	
	return '<a href="' . esc_url($url) . '" class="btn border-btn'.$btnsize.$btncolor.$btnscroll.$btnalign.'">' . do_shortcode($content) . '</a>';
}
add_shortcode('button', 'omni_btn');

// Social Buttons
function omni_social_btn( $atts, $content = null ) {
	extract(shortcode_atts(array( 
		"url"			=> '',
		"title"			=> '',
		"color"			=> '',
		"icon"			=> 'icon-twitter'
    ), $atts));
	
	$btncolor = '';
	if ($color != 'default') $btncolor = ' '.$color;
	
	return '<a class="btn social-btn'.$btncolor.'" href="'. esc_url($url) .'" data-placement="bottom" data-toggle="tooltip" title="'. esc_attr($title) .'"><i class="'.$icon.'"></i></a>';
}
add_shortcode('social_button', 'omni_social_btn');

// Icon Shortcode
function omni_icon( $atts, $content = null ) {
	extract(shortcode_atts(array(
		"icon"			=> 'icon-twitter',
		"size"			=> ''
    ), $atts));
	
	$iconsize = '';
	if ($size != 'default') $iconsize = ' '.$size;
	
	return '<i class="'.$icon.$iconsize.'"></i>';
}
add_shortcode('icon', 'omni_icon');

// Skill Shortcode
function omni_skill( $atts, $content = null ) {
	extract(shortcode_atts(array(
		"value"			=> '',
		"bar_color"		=> ''
    ), $atts));
	
	$color = '';
	if ($bar_color != '') $color = ' background-color: '.$bar_color;
	
	$output = '<p class="skill">'. do_shortcode($content).'</p>';
	$output .= '<div class="progress">';
	$output .= '<div class="bar bar-success" style="width:'.$value.'%;'.$color.'" data-percentage="'. esc_attr($value) .'"></div>';
	$output .= '</div>';
	
	return $output;
}
add_shortcode('skill', 'omni_skill');

// Pricing Table
function omni_pricing_table( $atts, $content = null ) {
	extract(shortcode_atts(array(
		"name"			=> '',
		"price"			=> '',
		"price_text"	=> '',
		"btn_text"		=> '',
		"btn_url"		=> '',
    ), $atts));
	
	$priceoutput = '';
	if ($price_text != '') $priceoutput = '<small>'.$price_text.'</small>';
	
	$output = '<div class="price-package text-center clearfix">';
	$output .= '<div class="package-header"><div class="name">'.$name.'</div></div>';
	$output .= '<div class="package-price"><div class="price">'.$price.$priceoutput.'</div></div>';
	$output .= '<div class="package-features"><ul>'. do_shortcode($content) .'</ul></div>';
	$output .= '<a class="btn border-btn white" href="'. esc_url($btn_url) .'">'.$btn_text.'</a>';
	$output .= '</div>';
	
	return $output;
}
add_shortcode('pricing_table', 'omni_pricing_table');

function omni_pricing_feature( $atts, $content = null ) {
	return '<li>' . do_shortcode($content) . '</li>';
}
add_shortcode('feature', 'omni_pricing_feature');

// Services
function omni_services( $atts, $content = null ) {	
	return '<div class="row services">'.do_shortcode($content).'</div>';
}
add_shortcode('services', 'omni_services');

// Service
function omni_service( $atts, $content = null ) {	
	extract(shortcode_atts(array(  
        "grid"			=> '24',
		"offset"		=> '0',
		"icon"			=> 'icon-print',
		"name"			=> 'Print',
    ), $atts));
	
	$offsetoutput = '';
	if ($offset > 0){
		$offsetoutput = ' offset'.$offset;
	}
	
	$output = '<div class="span'. $grid . $offsetoutput .'"><div class="service text-center">';
	$output .= '<div class="front"><i class="'.$icon.' big"></i><h2 class="service-title">'.$name.'</h2></div>';
	$output .= '<div class="back"><p>'.do_shortcode($content).'</p></div>';
	$output .= '</div></div>';
	
	return $output;
}
add_shortcode('service', 'omni_service');

// Item Box
function omni_item_box( $atts, $content = null ) {
	return '<div class="item-box clearfix">' . do_shortcode($content) . '</div>';
} 
add_shortcode('item_box', 'omni_item_box');

// Item Box Content
function omni_item_box_content( $atts, $content = null ) {
	extract(shortcode_atts(array(  
        "title"			=> '',
    ), $atts));
	
	$output = '<div class="item-content">';
	if ( $title != '' ) $output .= '<h4 class="item-title">' . $title . '</h4>';
	$output .= do_shortcode($content);
	$output .= '</div>';
	
	return $output;
}
add_shortcode('item_content', 'omni_item_box_content');

// Item Box Image(s)
function omni_item_box_images( $atts, $content = null ) {
	extract(shortcode_atts(array(  
        "slider"		=> 'false',
		"alt"			=> '',
		"url"			=> '',
		"image"			=> '',
    ), $atts));
	
	$output = '<div class="item-images">';
	if ( $slider == 'true' ) {
		$output .= '<div class="portfolio-slider flexslider">';
		$output .= '<ul class="slides">';
		$output .= do_shortcode($content);
		$output .= '</ul>';
		$output .= '</div>';
	} else {
		if ( $url != '' ) {
			$output .= '<a target="_blank" href="' .  esc_url($url) . '"><img src="' . esc_url($image) . '" alt="' . esc_attr($alt) . '" /></a>';
		} else {
			$output .= '<img src="' . esc_url($image) . '" alt="' . esc_attr($alt) . '" />';
		}
	}
	$output .= '</div>';
	
	return $output;
}
add_shortcode('item_images', 'omni_item_box_images');

// Item Box Slides
function omni_item_box_slides( $atts, $content = null ) {
	extract(shortcode_atts(array(  
		"alt"			=> '',
		"url"			=> '',
		"image"			=> '',
    ), $atts));
	
	if ( $url != '' ) {
		$output = '<li><a target="_blank" href="' .  esc_url($url) . '"><img src="' . esc_url($image) . '" alt="' . esc_attr($alt) . '" /></a></li>';
	} else {
		$output = '<li><img src="' . esc_url($image) . '" alt="' . esc_attr($alt) . '" /></li>';
	}
	
	return $output;
}
add_shortcode('item_slide', 'omni_item_box_slides');

// Isotope Portfolio
function omni_isotope( $atts, $content = null ) {
	extract(shortcode_atts(array(  
		"filter"		=> 'true',
		"categories"	=> '',
		"shownumber"	=> '',
    ), $atts));
	
	global $post;
	
	$number = (int)$shownumber;
	$categories = esc_attr($categories);
	$categories = str_replace(' ', '', $categories);
	
	$output = '<div class="row"><div class="portfolio clearfix">';
	
	// display filter
	if ( $filter == 'true' ) {
		$output .= '<div class="filter"><ul>';
		$output .= '<li><a href="#" data-filter="*">' . __('All', 'omni') . '</a></li>';
		
		if( $categories == '' ) {
			$portfolio_cats = get_terms( 'portfolio_category', array( 'hide_empty' => 0, 'taxonomy' => 'portfolio_category' ) );
			foreach($portfolio_cats as $cat) {
				$output .= '<li><a href="#" data-filter=".' . $cat->slug . '">' . $cat->name . '</a></li>';
			}
		} else {
			$portfolio_cats = explode(",", $categories);
			foreach($portfolio_cats as $cat) {
				$cat_term = get_term_by('slug', $cat, 'portfolio_category');
				$output .= '<li><a href="#" data-filter=".' . $cat . '">' . $cat_term->name . '</a></li>';
			}
		}
		
		$output .= '</ul></div>';
	}
	
	$output .= '<div class="portfolio-items clearfix">';
	
	// show categories
	if( $categories == '' ) {
		$port_cats = get_terms( 'portfolio_category', array( 'hide_empty' => 0, 'taxonomy' => 'portfolio_category' ) );
		$show_categories = array();
		foreach ($port_cats as $port_cat) {
			$show_categories[] = $port_cat->slug;
		}
	} else {
		$show_categories = explode(",", $categories);
	}
	
	// wp_query arguments
	$item_args = array(
		'post_type'			=> array('omni_portfolio'),
		'posts_per_page'	=> $number,
		'tax_query' => array(
			array(
				'taxonomy'	=> 'portfolio_category',
				'field' 	=> 'slug',
				'terms' 	=> $show_categories,
			)
		)
	);
	
	$items_query = new WP_Query($item_args);
	
	global $post;$backup=$post;
	while ($items_query->have_posts()) : $items_query->the_post();
		
		// Getting the item categories
		// Get the classes and names
		$cat_class = $cat_names = '';
		$item_cats = get_the_terms( $post->ID , 'portfolio_category' );
		$count = 0;
		foreach ( $item_cats as $cat ) {
			$count++;
			$cat_class .= ' ' . $cat->slug;
			
			if ( count( $item_cats ) > 1 ) {
				if ( count( $item_cats ) == $count ) {
					$cat_names .= $cat->name;
				} else {
					$cat_names .= $cat->name . ', ';
				}
			} else {
				$cat_names .= $cat->name;
			}
		}
		
		$thumb_id = get_post_thumbnail_id();
		$thumb_url = wp_get_attachment_image_src($thumb_id, 'full', true);
	
		$output .= '
		<div class="item' . $cat_class . '">
			<div class="item-thumb">
				<div class="back">
					<div class="item-icons">';
		
		if (vp_metabox('omni_meta_portfolio.portfolio_show_post_icon')) {
			$output .= "<a class=\"item-link\" href=\"" . get_permalink() . "\"><i class=\"icon-link\"></i></a>\n";
		}
		if (vp_metabox('omni_meta_portfolio.portfolio_show_zoom_icon')) {
			$output .= "<a class=\"item-zoom\" href=\"" . $thumb_url[0] . "\"><i class=\"icon-search\"></i></a>\n";
		}
		
		$output .= '</div>
			</div>'
			.get_the_post_thumbnail($post->ID, 'portfolio-thumb').
			'</div>
			<div class="item-info text-center">
				<h4>' . get_the_title() . '</h4>
				<span>' . $cat_names . '</span>
			</div>
		</div>';
	endwhile; wp_reset_postdata();
	$post=$backup;
	$output .= '</div>';
	$output .= '</div></div>';
	
	return $output;
}
add_shortcode('portfolio', 'omni_isotope');

/**
 * Carousels
 */

// profile carousel ids array
$carousel_ids = array();

// Profile Carousel
function omni_profile_carousel( $atts, $content = null ) {	
	extract(shortcode_atts(array(
		"name"			=> '',
    ), $atts));
	
	$output = '<div id="' . esc_attr($name) . '" class="flexslider carousel profile-carousel">
		<ul class="slides">'
			. do_shortcode($content) .
		'</ul>
	</div>';
	
	global $carousel_ids;
	$carousel_ids[] = '#' . $name;
	
	return $output;
}
add_shortcode('profile_carousel', 'omni_profile_carousel');

// Profile
function omni_profile( $atts, $content = null ) {	
	extract(shortcode_atts(array(
		"name"			=> '',
		"function"		=> '',
		"url"			=> '',
		"image"			=> '',
		"alt"			=> '',
		"type"			=> '',
		"github"		=> '',
		"vimeo"			=> '',
		"twitter"		=> '',
		"facebook"		=> '',
		"gplus"			=> '',
		"pinterest"		=> '',
		"tumblr"		=> '',
		"linkedin"		=> '',
		"dribbble"		=> '',
		"instagrem"		=> '',
		"skype"			=> '',
		"behance"		=> '',
    ), $atts));
	
	$function_output = '';
	if ( $url != '' ) {
		$function_output = '<a href="'. esc_url($url) .'">' . $function . '</a>';
	} else {
		$function_output = $function;
	}
	
	$social_output = '';
	
	if ($github != '') $social_output .= '<a class="icon-github" href="'. $github .'"></a>';
	if ($vimeo != '') $social_output .= '<a class="icon-vimeo" href="'. $vimeo .'"></a>';
	if ($twitter != '') $social_output .= '<a class="icon-twitter" href="'. $twitter .'"></a>';
	if ($facebook != '') $social_output .= '<a class="icon-facebook" href="'. $facebook .'"></a>';
	if ($gplus != '') $social_output .= '<a class="icon-gplus" href="'. $gplus .'"></a>';
	if ($pinterest != '') $social_output .= '<a class="icon-pinterest" href="'. $pinterest .'"></a>';
	if ($tumblr != '') $social_output .= '<a class="icon-tumblr" href="'. $tumblr .'"></a>';
	if ($linkedin != '') $social_output .= '<a class="icon-linkedin" href="'. $linkedin .'"></a>';
	if ($dribbble != '') $social_output .= '<a class="icon-dribbble" href="'. $dribbble .'"></a>';
	if ($instagrem != '') $social_output .= '<a class="icon-instagrem" href="'. $instagrem .'"></a>';
	if ($skype != '') $social_output .= '<a class="icon-skype" href="'. $skype .'"></a>';
	if ($behance != '') $social_output .= '<a class="icon-github" href="'. $behance .'"></a>';
	
	$profile_social = '';
	if ( $social_output != '' ) {
		$profile_social = '<span class="profile-social">'
			. $social_output .
		'</span>';
	}
	$profile_photo = '';
	if ( $image != '' ) {
		$profile_photo = '<div class="profile-photo"><img src="'. esc_url($image) .'" alt="'.esc_attr($alt).'" /></div>';
	}
	$profile_name = '';
	if ( $name != '' ) {
		$profile_name = '<span class="profile-name">' . $name . '</span>';
	}
	$profile_function = '';
	if ( $function_output != '' ) {
		$profile_function = '<span class="profile-function">' . $function_output . '</span>';
	}
	
	if ( $type == 'team' ) {
		$output = '<li>
			<div class="profile text-center">'
				. $profile_photo .
				'<div class="profile-content">
					<div class="profile-info">'
						. $profile_name .
						$profile_function
						. $profile_social .
					'</div>
					<div class="profile-text"><p>' . do_shortcode($content) . '</p></div>
				</div>
			</div>
		</li>';
	} else {
		$output = '<li>
			<div class="profile text-center">'
				. $profile_photo .
				'<div class="profile-content">
					<div class="profile-text"><p>' . do_shortcode($content) . '</p></div>
					<div class="profile-info">'
						. $profile_name .
						$profile_function .
					'</div>
				</div>
			</div>
		</li>';
	}
	
	return $output;
}
add_shortcode('profile', 'omni_profile');

// Clients Carousel
function omni_clients_carousel( $atts, $content = null ) {	
	extract(shortcode_atts(array(
		"name"			=> '',
    ), $atts));
	
	$output = '<div id="' . esc_attr($name) . '" class="flexslider clients carousel">
		<ul class="slides">'
			. do_shortcode($content) .
		'</ul>
	</div>';
	
	global $carousel_ids;
	$carousel_ids[] = '#' . $name;
	
	return $output;
}
add_shortcode('clients_carousel', 'omni_clients_carousel');

// Load Carousel IDs to wp_footer
// Needed for jQuery Carousels
function load_carousel_ids(){
	$output = '';
	global $carousel_ids;
	
	$output .= '<script type="text/javascript">'."\n";
	$output .= 'var profileCarouselIds = "'.implode(', ', $carousel_ids).'"';
	$output .= "\n".'</script>'."\n\n\n";

	echo $output;
}
add_action('wp_footer','load_carousel_ids', 10);

// Client
function omni_client( $atts, $content = null ) {	
	extract(shortcode_atts(array(
		"url"			=> '',
		"logo"			=> '',
		"alt"			=> '',
    ), $atts));
	
	if ( $url != '' ) {
		$output = '<li>
			<a href="'. esc_url($url) .'"><img src="'. esc_url($logo) .'" alt="'. esc_attr($alt) .'" /></a>
		</li>';
	} else {
		$output = '<li>
			<img src="'. esc_url($logo) .'" alt="'. esc_attr($alt) .'" />
		</li>';

	}
	
	return $output;
}
add_shortcode('client', 'omni_client');

// AJAX Contact Form
function omni_ajax_contact( $atts, $content = null ) {
	extract(shortcode_atts(array(
		"name_label"			=> 'Name',
		"email_label"			=> 'Email',
		"message_label"			=> 'Message',
		"btn_label"				=> 'Submit',
		"success_message"		=> '<strong>Thank you!</strong> We have received your message.',
    ), $atts));
	
	$output = '<div class="form-success contact-success">'. $success_message .'</div>
	<div class="contact-form">
		<form method="post" action="'. get_template_directory_uri() .'/assets/php/contact-form/contact.php">
			<fieldset>
				<label>'. $name_label .'</label>
				<input type="text" name="name" class="input-block-level" />
				<label>' . $email_label . '</label>
				<input type="text" name="email" class="input-block-level" />
				<label>'. $message_label .'</label>
				<textarea rows="8" name="message" class="input-block-level"></textarea>
				<input id="submit" class="btn border-btn input-block-level" type="submit" value="'. esc_attr($btn_label) .'" />
				<div class="loading"></div>
			</fieldset>
		</form>
	</div>';
	
	return $output;
}
add_shortcode('omni_contact_form', 'omni_ajax_contact');

// Text Center
function omni_text_center( $atts, $content = null ) {
	return '<div class="text-center">' . do_shortcode($content) . '</div>';
} 
add_shortcode('text_center', 'omni_text_center');

// Slogan
function omni_slogan( $atts, $content = null ) {
	return '<div class="slogan">' . do_shortcode($content) . '</div>';
} 
add_shortcode('slogan', 'omni_slogan');

// Twitter Feed
function omni_twitter_feed( $atts, $content = null ) {
	extract(shortcode_atts(array(
		"username"				=> 'themeshifters',
		"count"					=> '1',
    ), $atts));
	
	return '<div class="tweet-box clearfix">
		<div class="tweet" data-twitter-username="'.esc_attr($username).'" data-count="'.esc_attr($count).'"></div>
		<i class="icon-twitter pull-right"></i>
	</div>';
} 
add_shortcode('twitter_feed', 'omni_twitter_feed');

// Text and Quote Box
function omni_text_box( $atts, $content = null ) {
	extract(shortcode_atts(array(
		"type"				=> 'quote',
    ), $atts));
	
	$quote_icon = '';
	if ( $type == 'quote' ) $quote_icon = '<i class="icon-quote pull-right"></i>';
	
	return '<div class="'. $type .'-box clearfix">'
		. do_shortcode($content)
		. $quote_icon .
	'</div>';
} 
add_shortcode('text_box', 'omni_text_box');

// Newsletter shortcode
function omni_newsletter( $atts, $content = null ) {
	extract(shortcode_atts(array(
		"email_label"			=> 'Enter your email',
		"success_message"		=> '<strong>Thank you!</strong> We have received your email address.',
    ), $atts));
	
	$output = '<div class="form-success newsletter-success">'. $success_message .'</div>
	<div class="newsletter">
		<span class="news-title">Newsletter</span>
		<span class="news-icon"></span>
		<form method="post" action="'. get_template_directory_uri() .'/assets/php/contact-form/newsletter.php">
			<fieldset>
				<span><input type="text" name="email" placeholder="'. esc_attr($email_label) .'" class="input-block-level" /></span>
				<span><button id="newsletter-signup" type="submit" class="news-icon" value="" /><i class="icon-mail"></i></button></span>
				<div class="loading"></div>
			</fieldset>
		</form>
	</div>';
	
	return $output;
}
add_shortcode('omni_newsletter', 'omni_newsletter');

// Section Title
function omni_section_title( $atts, $content = null ) {
	extract(shortcode_atts(array(
		"heading_type"			=> 'h1',
    ), $atts));
	
	$output = '<'.$heading_type.' class="section-title">'.do_shortcode($content).'</'.$heading_type.'>';
	
	return $output;
}
add_shortcode('section_title', 'omni_section_title');