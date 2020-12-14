<?php
/**
 * Created by PhpStorm.
 * User: Edward Nickerson
 * Date: 24/07/2019
 * Time: 07:55
 */

/*add_action( 'acf/init', 'acfgbc_BlockLockettsSlider' );
function acfgbc_BlockHeroSection() {
    if ( ! function_exists( 'acf_register_block' ) ) {
        return;
    }
    acf_register_block( array(
        'name'            => 'acfgbcBlockLockettsSlider',
        'title'           => __( 'Block – Hero Section' ),
        'description'     => __( 'Block – Hero Section' ),
        'render_callback' => 'acfgbc_BlockLockettsSlider_rc',
        'category'        => 'Locketts',
        'icon'            => 'dashicons-embed-photo',
        'mode'            => 'edit',
        'supports'        => array( 'align' => false, 'multiple' => true, ),
        'keywords'        => array( 'Row', 'Common' ),
    ) );
}

function acfgbc_BlockLockettsSlider_rc( $block, $content = '', $is_preview = false ) {
    if ( $is_preview ) {
        include_once get_template_directory() . '/parts/blocks/editor/styles.php';
    }
    include get_template_directory() . '/parts/blocks/BlockLockettsSlider.php';
}*/

add_action( 'acf/init', 'register_lockettsslider_block' );
function register_lockettsslider_block() {

    if ( function_exists( 'acf_register_block_type' ) ) {

        // Register LockettsSlider block
        acf_register_block_type( array(
            'name' 					=> 'lockettsslider',
            'title' 				=> __( 'LockettsSlider' ),
            'description' 			=> __( 'Locketts slider block.' ),
            'category' 				=> 'lockettsblocks',
            'icon'					=> 'embed-photo',
            'keywords'				=> array( 'lockettsslider' ),
            'post_types'			=> array( 'post', 'page' ),
            'mode'					=> 'edit',
            // 'align'				=> 'wide',
            'render_template'		=> get_template_directory() . '/parts/blocks/BlockLockettsSlider.php',
            // 'render_callback'	=> 'lockettsslider_block_render_callback',
            // 'enqueue_style' 		=> get_template_directory_uri() . '/template-parts/blocks/lockettsslider/lockettsslider.css',
            // 'enqueue_script' 	=> get_template_directory_uri() . '/template-parts/blocks/lockettsslider/lockettsslider.js',
            // 'enqueue_assets' 	=> 'lockettsslider_block_enqueue_assets',
        ));

    }

}