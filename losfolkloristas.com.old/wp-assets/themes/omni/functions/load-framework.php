<?php

/**
 * Load options, metaboxes, and shortcode generator array templates.
 */

// options
$tmpl_opt  = get_template_directory() . '/admin/option/option.php';

// metaboxes
$tmpl_mb_page  = get_template_directory() . '/admin/metabox/page_options.php';
$tmpl_mb_aside  = get_template_directory() . '/admin/metabox/aside_options.php';
$tmpl_mb_portfolio  = get_template_directory() . '/admin/metabox/portfolio_options.php';
$tmpl_mb_post  = get_template_directory() . '/admin/metabox/post_options.php';

// shortocode generators
$tmpl_sg_main  = get_template_directory() . '/admin/shortcode_generator/main_shortcodes.php';

/**
 * Create instance of Options
 */
$theme_options = new VP_Option(array(
	'is_dev_mode'           => false,                                  // dev mode, default to false
	'option_key'            => 'omni_options',                           // options key in db, required
	'page_slug'             => 'omni_options',                           // options page slug, required
	'template'              => $tmpl_opt,                              // template file path or array, required
	'menu_page'             => 'themes.php',                           // parent menu to display options page
	'use_auto_group_naming' => true,                                   // default to true
	'use_exim_menu'         => true,                                   // default to true, shows export import menu
	'minimum_role'          => 'edit_theme_options',                   // default to 'edit_theme_options'
	'layout'                => 'fixed',                                // fluid or fixed, default to fixed
	'page_title'            => __( 'Theme Options', 'omni' ), // page title
	'menu_label'            => __( 'Theme Options', 'omni' ), // menu label
));

/**
 * Create instances of Metaboxes
 */
$mb_pages = new VP_Metabox($tmpl_mb_page);
$mb_asides = new VP_Metabox($tmpl_mb_aside);
$mb_portfolio = new VP_Metabox($tmpl_mb_portfolio);
$mb_post = new VP_Metabox($tmpl_mb_post);

/**
 * Create instances of Shortcode Generator
 */
$tmpl_sg_main = array(
	'name'           => 'sg_main',                                        // unique name, required
	'template'       => $tmpl_sg_main,                                     // template file or array, required
	'modal_title'    => __( 'Omni Shortcodes', 'omni'), // modal title, default to empty string
	'button_title'   => __( 'Custom Shortcodes', 'omni'),              // button title, default to empty string
	'types'          => array( 'page', 'omni_asides', 'omni_portfolio', 'post' ),                       // at what post types the generator should works, default to post and page
	'included_pages' => array( 'appearance_page_vpt_option' ),         // or to what other admin pages it should appears
); 

$sg_main = new VP_ShortcodeGenerator($tmpl_sg_main);

/**
 * Function for returning the options
 */
function omni_option($key)
{
  return vp_option("omni_options." . $key);
}