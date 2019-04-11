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
function coblocks_child_setup() {
	add_theme_support( 'editor-color-palette', array(
		array(
			'name'  => __( 'ELH Eggplant', 'coblocks-child' ),
			'slug'  => 'elheggplant',
			'color'	=> '#510185',
		),
		array(
			'name'  => __( 'ELH Blackplant', 'coblocks-child' ),
			'slug'  => 'elhblackplant',
			'color' => '#1F002B',
		),
		array(
			'name'  => __( 'ELH White', 'coblocks-child' ),
			'slug'  => 'elhwhite',
			'color' => '#FFFFFF',
		),
		array(
			'name'	=> __( 'ELH Black', 'coblocks-child' ),
			'slug'	=> 'elhblack',
			'color'	=> '#272727',
		),
		array(
			'name'	=> __( 'ELH Lilac', 'coblocks-child' ),
			'slug'	=> 'elhlilac',
			'color'	=> '#8D78F4',
		),
		array(
			'name'	=> __( 'ELH Silver', 'coblocks-child' ),
			'slug'	=> 'elhsilver',
			'color'	=> '#C7C7C7',
		),
		array(
			'name'	=> __( 'ELH HotPink', 'coblocks-child' ),
			'slug'	=> 'elhhotpink',
			'color'	=> '#F62A8D',
		),
		array(
			'name'	=> __( 'Gold', 'coblocks-child' ),
			'slug'	=> 'gold',
			'color'	=> '#FFB300',
		),
	));	
}
add_action( 'after_setup_theme', 'coblocks_child_setup' );
?>