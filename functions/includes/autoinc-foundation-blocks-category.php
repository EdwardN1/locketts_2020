<?php
add_filter( 'block_categories', function( $categories, $post ) {
    return array_merge(
        $categories,
        array(
            array(
                'slug' => 'foundationblocks',
                'title' => __( 'Foundation Blocks', 'foundationblocks' ),
            ),
        )
    );
}, 10, 2 );