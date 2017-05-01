<?php
// Register menus
register_nav_menus(
	array(
		'main-nav' => __( 'The Main Menu', 'ipacaraiwp' ),   // Main nav in header
		'footer-links' => __( 'Footer Links', 'ipacaraiwp' ) // Secondary nav in footer
	)
);

// The Top Menu
function ipacarai_top_nav() {
	wp_nav_menu(array(
        'container' => 'div',
        'container_class' => 'navbar-collapse collapse',
        'container_id' => 'ipacarai-navbar-collapse',
        'menu_class'     => 'nav navbar-nav main-nav',
        'theme_location' => 'main-nav',        			// Where it's located in the theme
        'depth' => 0,                                   // Limit the depth of the nav
   
    ));
} 

// The Footer Menu
function ipacarai_footer_links() {
    wp_nav_menu(array(
    	'container' => 'false',                         // Remove nav container
    	'menu' => __( 'Footer Links', 'ipacaraiwp' ),   	// Nav name
    	'menu_class' => 'footer-links',      					// Adding custom nav class
    	'theme_location' => 'footer-links',             // Where it's located in the theme
        'depth' => 0,                                   // Limit the depth of the nav
    	
	));
} /* End Footer Menu */

// Add active class to menu
function required_active_nav_class( $classes, $item ) {
    if ( ( !is_front_page() ) && ( $item->current == 1 || $item->current_item_ancestor == true ) ) {
        $classes[] = 'active';
    }
    return $classes;
}
add_filter( 'nav_menu_css_class', 'required_active_nav_class', 10, 2 );


function add_home_link( $atts, $item, $args ) {
    
    if ( !is_front_page() ) {
        if ( strpos( $atts['href'], '#' ) !== false ) {
            $atts['href'] = '/' . $atts['href'];
        }
    }

    return $atts;
}

add_filter( 'nav_menu_link_attributes', 'add_home_link', 10, 3 );

