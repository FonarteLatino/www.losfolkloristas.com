<?php
/**
 * The template for displaying the header.
 *
 * @package WordPress
 * @subpackage Omni
 * @since Omni 1.0
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie lt-ie9 lt-ie8 lt-ie7 ie6" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 7 ]><html class="ie lt-ie9 lt-ie8 ie7" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 8 ]><html class="ie lt-ie9 ie8" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 9 ]><html class="ie ie9" <?php language_attributes(); ?>><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html <?php language_attributes(); ?>> <!--<![endif]--><head>

<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<?php if ( omni_option('omni_favicon') ) { ?>
<link rel="shortcut icon" href="<?php echo omni_option('omni_favicon'); ?>" />
<?php } ?>

<title><?php wp_title( '-', true, 'right' ); ?></title>

<?php wp_head();
	  echo omni_option('head_code');
?>
</head>

<body <?php body_class(); ?>>
		
        <!-- Begin Header - One Page -->
        <div id="top" class="header-type">
        	<div class="container">
            	<div class="row">
                		<div class="span24">
                        	<?php if ( omni_option('omni_header_logo')) { ?>
                        	<div class="logo pull-left"><a href="<?php echo home_url(); ?>"><img src="<?php echo omni_option('omni_header_logo'); ?>" alt="<?php echo bloginfo('name'); ?>" /></a></div>
                            <?php } ?>
                            <div class="pull-right">
                                <?php
								if ( omni_option('website_type') == 'onepage' ) {
									
								// Header Text inserted through theme options panel
                                echo do_shortcode(stripslashes(omni_option('header_text')));
								
								$headericons = omni_option('headericons');
								if ( $headericons || (omni_option('headericon_vcard') == true) || (omni_option('headericon_mail') == true) ) { ?>
                                <ul class="adds pull-left">
                                	<?php
									$scroll_to = '';
									if (omni_option('headericon_mail_scroll') == true) { $scroll_to = ' scroll-to'; }
									if ( omni_option('headericon_mail') == true ) {
                                    echo '<li><a class="icon-mail'.$scroll_to.'" href="' . do_shortcode(stripslashes(omni_option('headericon_mail_url'))) . '" data-placement="bottom" data-toggle="tooltip" title="' . __('Send us an email', 'omni') . '"></a></li>';
                                    }
									if ( omni_option('headericon_vcard') == true ) {
                                    echo '<li><a class="icon-vcard" href="' . do_shortcode(stripslashes(omni_option('headericon_vcard_url'))) . '" data-placement="bottom" data-toggle="tooltip" title="' . __('Download our vcard', 'omni') . '"></a></li>';
                                    } ?>
                                </ul>
                                <?php }
								
								} elseif ( omni_option('website_type') == 'multipage' ) {
								// Show Multi Page Navigation ?>
                                <nav class="main-nav clearfix">
                                    
                                    <?php wp_nav_menu( array(
										'theme_location'	=> 'primary',
										'menu_class' 		=> 'nav sf-menu main-menu',
										'container' 		=> false,
									) ); ?>
                                    
                                </nav>
                                <?php } ?>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <!-- // End Header -->
        
<?php
if ( (omni_option('website_type') == 'onepage' && is_front_page()) || (omni_option('website_type') == 'multipage' && is_front_page()) ) {
	if ( omni_option('header_type') == 'portfolio' ) { 
		get_template_part( 'hometype', 'portfolio' );
		
	} elseif ( omni_option('header_type') == 'parallax' ) {
		get_template_part( 'hometype', 'parallax' );
		
	} elseif ( omni_option('header_type') == 'revslider' ) {
		get_template_part( 'hometype', 'revslider' );
		
	} elseif ( omni_option('header_type') == 'video' ) {
		get_template_part( 'hometype', 'video' );
	} elseif ( omni_option('header_type') == 'layerslider' ) {
		get_template_part( 'hometype', 'layerslider' );
	} 
}
?>

      	<?php if ( omni_option('website_type') == 'onepage' ) {
		// Show One Page Navigation ?>
        <!-- Begin Main Navigation -->
        <div id="main-nav" class="nav-container">
                <nav class="main-nav clearfix one-page-nav" role="navigation">
                    
                    <?php wp_nav_menu( array(
							'theme_location'	=> 'primary',
							'menu_class' 		=> 'nav main-menu onepagenav',
							'container' 		=> false,
							'walker'			=> new Walker_One_Page_Nav(),
							'depth'				=> 1,
							'fallback_cb' 		=> 'show_onepagenav',
						) ); ?>
                               
                </nav>
        </div>
        <!-- // End Main Navigation -->
        <?php } ?>