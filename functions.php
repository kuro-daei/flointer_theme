<?php

add_action( 'after_setup_theme', 'flointer_theme_setup' );

function flointer_theme_setup() {
	add_theme_support( 'custom-header' );
}

if ( function_exists('register_sidebar') ){
    register_sidebar(array(
	'description' => __( 'The primary widget area', 'dir' ),
	'before_widget' => '<div id="%1$s" class="col2 widget %2$s">',
	'after_widget' => "</div>",
	'before_title' => '<h2 class="widget-title">',
	'after_title' => '</h2>',
    ));
}
 ?>
