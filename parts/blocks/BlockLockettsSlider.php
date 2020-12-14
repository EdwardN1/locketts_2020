<?php
/**
 * Block template file: template-parts/blocks/lockettsslider.php
 *
 * Lockettsslider Block Template.
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'lockettsslider-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-lockettsslider';
if (!empty($block['className'])) {
    $classes .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $classes .= ' align' . $block['align'];
}
?>

<style type="text/css">
    <?php echo '#' . $id; ?>
    {
    /* Add styles that use ACF values here */
    }
</style>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($classes); ?>">
    <?php
    if (have_rows('slides')) :
        ?>
        <div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit="">
            <div class="orbit-wrapper">
                <?php
                if (get_field('show_controls') == 1) :
                    ?>
                    <div class="orbit-controls">
                        <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
                        <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
                    </div>
                <?php endif; ?>
                <?php
                $bullets = '';
                $slides = '';
                $activeClass = 'is-active ';
                $dataSlide = 0;
                while (have_rows('slides')) :
                    the_row();
                    $image = get_sub_field('image');
                    $caption = get_sub_field('caption');
                    $link = get_sub_field('link');
                    if ($image) :
                        $slides .= '<li class="' . $activeClass . 'orbit-slide">';
                        $slides .= '<figure class="orbit-figure">';
                        $slides .= '<img class="orbit-image" src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '"';
                        $slides .= '<figcaption class="orbit-caption">' . $caption . '</figcaption>';
                        $slides .= '</figure>';
                        $slides .= '</li>';
                        $extraSpan = '<span class="show-for-sr" data-slide-active-label>Current Slide</span>';
                        if ($activeClass != ''):
                            $activeClass = ' class="is-active"';
                        endif;
                        $bullets .= '<button' . $activeClass . ' data-slide="' . $dataSlide . '">';
                        $bullets .= '<span class="show-for-sr">' . LockettsNumToOrdinalWord($dataSlide + 1) . ' slide details.</span>';
                        $bullets .= $extraSpan;
                        $bullets .= '</button>';
                        $dataSlide++;
                        $activeClass = '';
                        $extraSpan = '';
                    endif;
                endwhile;
                ?>
                <ul class="orbit-container">
                    <?php echo $slides; ?>
                </ul>
                <?php if (get_field('show_bullets') == 1) : ?>
                    <nav class="orbit-bullets">
                        <?php echo $bullets; ?>
                    </nav>
                <?php endif; ?>
            </div>
        </div>
    <?php
    endif;
    ?>
</div>
