<?php
/**
 * Template part for displaying page content in page.php
 */
?>

<div id="post-<?php the_ID(); ?>" <?php post_class('page-content'); ?> role="article" itemscope itemtype="http://schema.org/WebPage">

	    <?php the_content(); ?>

</div>