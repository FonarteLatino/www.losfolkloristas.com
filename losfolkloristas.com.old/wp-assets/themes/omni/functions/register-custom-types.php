<?php

/**
 * Register Custom Post Types
 */
add_action( 'init', 'create_post_type' );
function create_post_type() {
	
	register_post_type( 'omni_portfolio',
		array(
			'labels' => array(
				'name' => 'Portfolio',
				'singular_name' => 'Portfolio'
			),
		'public' => true,
		'has_archive' => true,
		'rewrite' => array('slug' => omni_option('portfolio_slug')),
		'supports' => array('title', 'editor', 'thumbnail'),
		)
	);
	
	register_taxonomy(
		'portfolio_category',
		'omni_portfolio',
		array(
			'hierarchical' => true,
			'label' => 'Categories',
			'query_var' => true,
			'rewrite' => true
		)
	);
	register_taxonomy_for_object_type( 'portfolio_category', 'omni_portfolio' );
	
	register_post_type( 'omni_asides',
		array(
			'labels' => array(
				'name' => 'Separators',
				'singular_name' => 'Separator'
			),
		'public' => true,
		'has_archive' => true,
		'rewrite' => array('slug' => omni_option('asides_slug')),
		'supports' => array('title', 'editor', 'thumbnail'),
		)
	);
	
}