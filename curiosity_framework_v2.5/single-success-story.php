<?php get_header(); ?>
    <div id="primary" class="content-area container">
        <main id="main" class="site-main row" role="main">

            <?php while ( have_posts() ) : the_post(); ?>
		<div class="col-xs-12">
                    <h1>Success Stories</h1>
		</div>
                <div class="col-xs-12">
                    <div class="featured-image">
                        <img alt="" src="<?php echo the_post_thumbnail_url(); ?>" />
                    </div>
                    <div class="featured-content">
                        <p><?php echo the_content(); ?></p>
                    </div>
                </div>
            <?php endwhile; // end of the loop. ?>

        </main>
    </div>
    <?php get_footer(); ?>
