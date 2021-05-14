<?php
/**
 * Custom Walker Menu for One Page Navigation
 */
class Walker_One_Page_Nav extends Walker_Nav_Menu {
	function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

		$class_names = $value = '';

		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
		$classes[] = 'menu-item-' . $item->ID;

		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
		$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

		$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
		$id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

		$output .= $indent . '<li' . $id . $value . $class_names .'>';

		$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
		$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
		$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
		if( $item->object == 'page' ) {
			$varpost	 = get_post( $item->object_id );
			$attributes .= ' href="' . get_site_url() . '#' . $varpost->post_name . '"';
		} else {
			$attributes .= ! empty( $item->url )	? ' href="'   . esc_attr( $item->url        ) .'"' : '';
		}
		
		$item_output = $args->before;
		$item_output .= '<a'. $attributes .'>';
		$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
		$item_output .= '</a>';
		$item_output .= $args->after;

		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
}

//This function shows the top menu if the user didn't create the menu in Appearance -> Menus.
if( !function_exists( 'show_onepagenav') )
{
	function show_onepagenav($args) {
		if ( ! current_user_can( 'manage_options' ) ) {
			return;
		}
		
		// see wp-includes/nav-menu-template.php for available arguments
		extract( $args );
		
		$link = $link_before
		. '<a href="' . admin_url( 'nav-menus.php' ) . '">' . $before . 'Add a menu' . $after . '</a>'
		. $link_after;
		
		// We have a list
		if ( FALSE !== stripos( $items_wrap, '<ul' )
		or FALSE !== stripos( $items_wrap, '<ol' )
		)
		{
			$link = "<li>$link</li>";
		}
		$output = sprintf( $items_wrap, $menu_id, $menu_class, $link );
		if ( ! empty ( $container ) ) {
			$output  = "<$container class='$container_class' id='$container_id'>$output</$container>";
		}
		
		if ( $echo ) {
			echo $output;
		}
		return $output;
	}
}