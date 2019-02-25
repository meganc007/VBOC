<?php get_header('inner'); ?>
    <?php echo do_shortcode([ajax_load_more post_type="post" order="DESC" posts_per_page="4" max_pages="0" button_label="Older News" button_loading_label="Loading More Posts..." container_type="div"]); ?>
<?php get_footer(); ?>