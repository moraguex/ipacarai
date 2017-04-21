<?php
// SIDEBARS AND WIDGETIZED AREAS
function ipacarai_register_sidebars() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'ipacaraiwp' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here.', 'ipacaraiwp' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '',
		'after_title'   => '',
	) );
} // don't remove this bracket!