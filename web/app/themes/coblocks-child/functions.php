<?php
function coblocks_child_enqueue_styles() {
	
	$parent_style = 'coblocks';
	
	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'co-blocks-child',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );     
}
add_action( 'wp_enqueue_scripts', 'coblocks_child_enqueue_styles' );

function co_blocks_child_support() {
    add_theme_support(
		'editor-color-palette', array(
			array(
				'name'  => esc_html__( 'ELH Aubergine', 'co-blocks-child' ),
				'slug'  => 'elh-aubergine',
				'color' => '#510185',
			),
			array(
				'name'  => esc_html__( 'ELH Purple Black', 'co-blocks-child' ),
				'slug'  => 'elh-purple-black',
				'color' => '#1F002B',
			),
			array(
				'name'  => esc_html__( 'ELH White', 'co-blocks-child' ),
				'slug'  => 'elh-white',
				'color' => '#FFFFFF',
			),
			array(
				'name'  => esc_html__( 'ELH Black', 'co-blocks-child' ),
				'slug'  => 'elh-black',
				'color' => '#272727',
			),
			array(
				'name'  => esc_html__( 'ELH Lilac', 'co-blocks-child' ),
				'slug'  => 'elh-lilac',
				'color' => '#8D78F4',
			),
			array(
				'name'  => esc_html__( 'ELH Silver', 'co-blocks-child' ),
				'slug'  => 'elh-silver',
				'color' => '#C7C7C7',
			),
			array(
				'name'  => esc_html__( 'ELH Pink', 'co-blocks-child' ),
				'slug'  => 'elh-pink',
				'color' => '#F62A8D',
			),
			array(
				'name'  => esc_html__( 'ELH Gold', 'co-blocks-child' ),
				'slug'  => 'elh-gold',
				'color' => '#FFB300',
			),
		)
	);
	add_theme_support( 'disable-custom-colors' );
	add_theme_support( 'align-wide' );
}	
add_action( 'after_setup_theme', 'co_blocks_child_support', 15);