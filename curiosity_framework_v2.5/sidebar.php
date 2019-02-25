<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package Curiosity
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
    <!-- wrapper -->
    <div id="secondary" class="widget-area" role="complementary">
        <?php dynamic_sidebar( 'sidebar-1' ); ?>
    </div>
    <!-- #secondary -->
    <!-- wrapper -->
