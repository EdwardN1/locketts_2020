<?php
/**
 * Block template file: /var/www/clients/client74/web174/web/wp-content/themes/locketts_2020/parts/blocks/BlockFoundationGridXY.php
 *
 * Foundation Xy Grid Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'foundation-xy-grid-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-foundation-xy-grid';
if ( ! empty( $block['className'] ) ) {
    $classes .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $classes .= ' align' . $block['align'];
}
?>

<style type="text/css">
    <?php echo '#' . $id; ?> {
    /* Add styles that use ACF values here */
    }
</style>

<div id="<?php echo esc_attr( $id ); ?>" class="<?php echo esc_attr( $classes ); ?>">
    <?php if ( have_rows( 'cells' ) ) : ?>
        <?php while ( have_rows( 'cells' ) ) : the_row(); ?>
            <?php the_sub_field( 'type' ); ?>
            <?php the_sub_field( 'content' ); ?>
        <?php endwhile; ?>
    <?php else : ?>
        <?php // no rows found ?>
    <?php endif; ?>
</div>