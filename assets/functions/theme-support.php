<?php
	
// Adding WP Functions & Theme Support
function ipacarai_theme_support() {

	// Add WP Thumbnail Support
	add_theme_support( 'post-thumbnails' );
	
	// Default thumbnail size
	set_post_thumbnail_size(125, 125, true);

	// Add RSS Support
	add_theme_support( 'automatic-feed-links' );
	
	// Add Support for WP Controlled Title Tag
	add_theme_support( 'title-tag' );
	
	// Add HTML5 Support
	add_theme_support( 'html5', 
	         array( 
	         	'comment-list', 
	         	'comment-form', 
	         	'search-form', 
	         ) 
	);
	
	// Adding post format support
	 add_theme_support( 'post-formats',
		array(
			'aside',             // title less blurb
			'gallery',           // gallery of images
			'link',              // quick link to other site
			'image',             // an image
			'quote',             // a quick quote
			'status',            // a Facebook like status update
			'video',             // video
			'audio',             // audio
			'chat'               // chat transcript
		)
	); 
	
	// Set the maximum allowed width for any content in the theme, like oEmbeds and images added to posts.
	$GLOBALS['content_width'] = apply_filters( 'ipacarai_theme_support', 1200 );	
	
} /* end theme support */

add_action( 'after_setup_theme', 'ipacarai_theme_support' );

/**
 * Adds custom social media link
 */
add_filter( 'wp_nav_menu_items', 'add_social_link', 10, 2 );
function add_social_link ( $items, $args ) {
    $array = explode('</li>', $items, -1);
    $keyword = 'facebook';
    $links = '';

    foreach( $array as $item ) {
		if( my_search( $item, $keyword ) !== false ) {
		  	$social_link = '';
		  	$href = explode('"', $item);
		  	
		  	foreach( $href as $i ) {
		  		$keyword = 'http';
		  		
		  		if( my_search( $i, $keyword ) !== false ) { 
		  			$social_link .= '<li><a href="'.$i.'"><span class="visible-xs-block">Facebook</span><i class="fa fa-facebook hidden-xs" aria-hidden="true"></i></a></li>';

		  			$links .= $social_link;
		  		}
		  	}
		} else {
			$links .= (string) $item;
		}
	}

	$items = $links;

    return $items;
}

function my_search($haystack, $needle) {
    return(strpos($haystack, $needle)); // or stripos() if you want case-insensitive searching.
}

