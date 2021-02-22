<?php
/**
 * ACF block slider
 */

class ACF_Block_Slider {
	function __construct() {
		add_action('acf/init', [ $this, 'register_blocks' ]);
	}

	function register_blocks() {
		// Check function exists.
		if( function_exists('acf_register_block_type') ) {

			// Register a restricted block.
			acf_register_block_type(array(
				'name'              => 'slider',
				'title'             => __('Slider'),
				'description'       => __('A custom slider block.'),
				'render_template' => ACFB_BLOCK_TEMPLATE_PATH . 'slider.php',
				'enqueue_style'  => ACFB_PLUGIN_DIR_URI . '/assets/editor.css',
				'category'          => 'formatting',
				'icon'              => 'images-alt2',
				'keywords' => array('carousel', 'image', 'slider'),
				'align'				=> 'full',
				'enqueue_assets' 	=> function(){
					wp_enqueue_style( 'slick', 'http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), '1.8.1' );
					wp_enqueue_style( 'slick-theme', 'http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css', array(), '1.8.1' );
					wp_enqueue_script( 'slick', 'http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), '1.8.1', true );
				  },
			));
		}
	}
}

new ACF_Block_Slider();
