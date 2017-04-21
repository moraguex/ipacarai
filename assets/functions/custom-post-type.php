<?php


// let's create the function for the custom type
function custom_post_example() { 
	// creating (registering) the custom type 
	register_post_type( 'product', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type
		array('labels' => array(
			'name' => __('Products', 'ipacaraiwp'), /* This is the Title of the Group */
			'singular_name' => __('Product', 'ipacaraiwp'), /* This is the individual type */
			'all_items' => __('All Products', 'ipacaraiwp'), /* the all items menu item */
			'add_new' => __('Add New', 'ipacaraiwp'), /* The add new menu item */
			'add_new_item' => __('Add New Product', 'ipacaraiwp'), /* Add New Display Title */
			'edit' => __( 'Edit', 'ipacaraiwp' ), /* Edit Dialog */
			'edit_item' => __('Edit Product', 'ipacaraiwp'), /* Edit Display Title */
			'new_item' => __('New Product', 'ipacaraiwp'), /* New Display Title */
			'view_item' => __('View Product', 'ipacaraiwp'), /* View Display Title */
			'search_items' => __('Search Products', 'ipacaraiwp'), /* Search Custom Type Title */ 
			'not_found' =>  __('Nothing found in the Database.', 'ipacaraiwp'), /* This displays if there are no entries yet */ 
			'not_found_in_trash' => __('Nothing found in Trash', 'ipacaraiwp'), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */ 
			'menu_icon' => 'dashicons-products', /* the icon for the product menu. uses built-in dashicons (CSS class name) */
			'rewrite'	=> array( 'slug' => 'product', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'product', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'revisions')
	 	) /* end of options */
	); /* end of register post type */
	
	/* this adds your post categories to your product */
	register_taxonomy_for_object_type('category', 'product');
	/* this adds your post tags to your product */
	register_taxonomy_for_object_type('post_tag', 'product');
	
} 

// adding the function to the Wordpress init
add_action( 'init', 'custom_post_example');
	
	