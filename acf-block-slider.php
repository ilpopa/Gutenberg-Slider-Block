<?php
/**
 * Plugin Name: ACF Slider Block
 * Description: Basic slick slider block for ACF Pro
 * Plugin URI:  https://github.com/ilpopa
 * Author:      Vilppu Similä
 * Author URI:  https://github.com/ilpopa
 * License:     GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Version:     1.0.0
 * Text Domain: acf-block-slider
 *
 * @package acf-block-example
 */

define( 'ACFB_PLUGIN_DIR_PATH', untrailingslashit( plugin_dir_path( __FILE__ ) ) );
define( 'ACFB_BLOCK_TEMPLATE_PATH', ACFB_PLUGIN_DIR_PATH . '/block-templates/' );
define( 'ACFB_PLUGIN_DIR_URI', untrailingslashit( plugin_dir_url( __FILE__ ) ) );

include_once 'inc/class-acf-block.php';
