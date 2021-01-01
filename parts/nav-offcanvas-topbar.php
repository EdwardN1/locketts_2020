<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */

//get_theme_mod( 'secondary_logo_technicks_customizer_setting' )
?>

<div class="top-bar" id="top-bar-menu">
    <div class="grid-container">
        <div class="grid-x">
            <div class="cell shrink">
                <ul class="menu">
                    <?php

                    if (get_page_template_slug() == 'page-dark.php'):
                        $sLogoURL = get_theme_mod('technicks_secondary_logo');
                        if ($sLogoURL != '') { ?>
                            <li>
                                <a href="<?php echo home_url(); ?>" class="custom-logo-link" rel="home" aria-current="page">
                                    <img width="300" height="21" src="<?php echo $sLogoURL;?>" class="custom-logo" alt="Lockett Bros Scotland"></a>
                            </li>
                            <?php
                        } else {
                            ?>
                            <li><a href="<?php echo home_url(); ?>" class="logo"><?php bloginfo('name'); ?></a></li>
                            <?php
                        }
                    else:
                        if (has_custom_logo()) { ?>
                            <li>
                                <?php the_custom_logo(); ?>
                            </li>
                            <?php
                        } else {
                            ?>
                            <li><a href="<?php echo home_url(); ?>" class="logo"><?php bloginfo('name'); ?></a></li>
                            <?php
                        }
                    endif;
                    ?>
                </ul>
            </div>
            <div class="cell auto">&nbsp;</div>
            <div class="top-bar-right show-for-medium cell shrink">
                <?php joints_top_nav(); ?>
            </div>
            <div class="top-bar-right show-for-small-only cell shrink">
                <ul class="menu">
                    <!-- <li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li> -->
                    <li><a data-toggle="off-canvas"><?php _e('Menu', 'jointswp'); ?></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>