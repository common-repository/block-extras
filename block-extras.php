<?php
/**
 * Plugin Name: Block extras
 * Plugin URI: https://www.gutenbergextras.com
 * Description: This plugin creates extra options for default Gutenberg block types
 * Version: 1.0
 * Author: Guy Tucker
 *
 * @package block-extras
 */

defined( 'ABSPATH' ) || exit;

if ( ! defined( 'BLOCK_EXTRAS_PATH' ) ) {
	define( 'BLOCK_EXTRAS_PATH', plugin_dir_path( __FILE__ ) );
}
if ( ! defined( 'BLOCK_EXTRAS_URI' ) ) {
	define( 'BLOCK_EXTRAS_URI', plugin_dir_url( __FILE__ ) );
}

require_once( 'inc/blockExtras.php' );
require_once( 'inc/blockExtrasSettings.php' );

new blockExtras();

