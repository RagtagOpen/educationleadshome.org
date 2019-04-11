<?php
add_action( 'wp_enqueue_scripts', 'coblocks_child_enqueue_styles' );
function coblocks_child_enqueue_styles() {
	
	$parent_style = 'coblocks';
	
	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'coblocks-child',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    ); 
}
?>