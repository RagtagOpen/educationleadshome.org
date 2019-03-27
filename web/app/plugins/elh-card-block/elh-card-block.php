<?php
/**
 * Plugin Name: Card Block
 * Description: A block for displaying content in a card format.
 * Version: 1.0.0
 * Text Domain: elh-card-block
 * Domain Path: /languages
 *
 * @package elh-card-block
 */

defined( 'ABSPATH' ) || die();

define( 'ELH_CARD_VERSION', '1.0.0' );
// Our dev mode depends on SCRIPT_DEBUG, but you can also override this
// by setting `ELH_CARD_DEV_MODE` in wp-config.php.
if ( ! defined( 'ELH_CARD_DEV_MODE' ) ) {
	define( 'ELH_CARD_DEV_MODE', defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG );
}

/**
 * Load up the assets if Gutenberg exists
 */
function elh_card_initialize() {
	$files_exist = file_exists( plugin_dir_path( __FILE__ ) . '/build/card-block.js' );
	if ( $files_exist && function_exists( 'register_block_type' ) ) {
		add_action( 'init', 'elh_card_register_block' );
		add_action( 'init', 'elh_card_register_scripts' );
	}
}
add_action( 'plugins_loaded', 'elh_card_initialize' );

/**
 * Register the card block and its scripts.
 */
function elh_card_register_block() {
	register_block_type(
		'elh/card',
		array(
			'editor_script' => 'elh-card-block-editor',
		)
	);
}

/**
 * Register extra scripts needed.
 */
function elh_card_register_scripts() {
	wp_register_script(
		'elh-card-block-editor',
		plugins_url( 'build/card-block.js', __FILE__ ),
		array( 'wp-i18n', 'wp-element', 'wp-editor', 'wp-blocks', 'lodash' ),
		elh_card_get_file_version( '/build/card-block.js' )
	);
}

/**
 * Get the file modified time as a cache buster if we're in dev mode.
 *
 * @param string $file Local path to the file.
 * @return string The cache buster value to use for the given file.
 */
function elh_card_get_file_version( $file ) {
	if ( ELH_CARD_DEV_MODE ) {
		return filemtime( plugin_dir_path( __FILE__ ) . $file );
	}
	return ELH_CARD_VERSION;
}
