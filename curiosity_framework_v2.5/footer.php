<?php wp_footer(); ?>
    <footer class="container-fluid footer-main">
        <div class="row">
            <div class="container">
                <div class="col-xs-12 col-md-2 footer-menu">
                    <h4 class="uppercase">Menu</h4>
                    <?php wp_nav_menu( array( 'menu'=> 'footer', 'theme_location' => 'footer', 'depth' => 2, 'container' => 'div', 'container_class' => '', 'container_id' => 'footer-navigation', 'menu_class' => 'nav navbar-default', 'fallback_cb' => 'wp_bootstrap_navwalker::fallback', 'walker' => new wp_bootstrap_navwalker()) ); ?>
                </div>
                <div class="col-xs-12 col-md-3 footer-contact">
                    <h4 class="uppercase">Contact Us</h4>
                    <p>Veterans Business Outreach Center at Gulf Coast State College
                        <br> Asbell Bldg, Room 206
                        <br>5230 W Hwy 98,
                        <br>Panama City, FL 32401
                    </p>
                    <p><a href="tel:+8005427232">800-542-7232</a>
                        <br><a href="mailto:Info@VBOC.org">Info@VBOC.org</a>
                    </p>
                </div>
                <div class="col-xs-12 col-md-3 footer-social">
                    <h4 class="uppercase">Get Social</h4>
                    <img alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/images/fblogo.png" />
                    <h6 class="uppercase addspace">Site Designed and Maintained by</h6>
                    <img alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/images/curiositylogo.png" />
                </div>
                <div class="col-xs-12 col-md-3 footer-logos text-center">
                    <div class="col-xs-12 col-md-6">
                        <img alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/images/vboclogo.jpg" />
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <img alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/images/sbalogo.jpg" />
                        <p>Funded in part through a cooperative agreement with the U.S. Small Business Administration.<br><br>
                        All opinions, conclusions or recommendations expressed are those of the author(s) and do not necessarily reflect the views of the SBA.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    </body>

    </html>