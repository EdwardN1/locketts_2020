<?php
/**
 * Created by PhpStorm.
 * User: Edward Nickerson
 * Date: 24/07/2019
 * Time: 07:51
 */

add_filter( 'block_categories', function( $categories, $post ) {
    return array_merge(
        $categories,
        array(
            array(
                'slug' => 'lockettsblocks',
                'title' => __( 'Locketts Blocks', 'lockettsblocks' ),
            ),
        )
    );
}, 10, 2 );
