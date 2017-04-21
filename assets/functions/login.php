<?php
// Calling your own login css so you can style it
function ipacarai_login_css() {
	wp_enqueue_style( 'ipacarai_login_css', get_template_directory_uri() . '/assets/css/login.css', false );
}

// changing the logo link from wordpress.org to your site
function ipacarai_login_url() {  return home_url(); }

// changing the alt text on the logo to show your site name
function ipacarai_login_title() { return get_option('blogname'); }

// calling it only on the login page
add_action( 'login_enqueue_scripts', 'ipacarai_login_css', 10 );
add_filter('login_headerurl', 'ipacarai_login_url');
add_filter('login_headertitle', 'ipacarai_login_title');