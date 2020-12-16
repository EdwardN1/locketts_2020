<?php
add_action( 'acf/init', 'register_foundation_orbit_block' );
function register_foundation_orbit_block() {

    if ( function_exists( 'acf_register_block_type' ) ) {

        // Register LockettsSlider block
        acf_register_block_type( array(
            'name' 					=> 'foundationOrbit',
            'title' 				=> __( 'foundationOrbit' ),
            'description' 			=> __( 'An image and content carousel with animation support and many customizable options.' ),
            'category' 				=> 'foundationblocks',
            'icon'					=> 'embed-photo',
            'keywords'				=> array( 'foundation','orbit','carousel','slider' ),
            'post_types'			=> array( 'post', 'page' ),
            'mode'					=> 'edit',
            // 'align'				=> 'wide',
            'render_template'		=> get_template_directory() . '/parts/blocks/BlockFoundationOrbit.php',
            // 'render_callback'	=> 'foundationOrbit_block_render_callback',
            // 'enqueue_style' 		=> get_template_directory_uri() . '/template-parts/blocks/foundationOrbit/foundationOrbit.css',
            // 'enqueue_script' 	=> get_template_directory_uri() . '/template-parts/blocks/foundationOrbit/foundationOrbit.js',
            // 'enqueue_assets' 	=> 'foundationOrbit_block_enqueue_assets',
        ));

    }

}