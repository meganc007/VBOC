<?php
/**
 * @package Curiosity Marketing Group (www.curiositymg.com)
 **/?>
    <!DOCTYPE html>
    <html "<?php language_attributes(); ?>">

    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <header class="container-fluid site_header">
            <div class="row hidden-md hidden-lg">
                <nav id="primary-bootstrap-menu" class="navbar navbar-default text-center" role="navigation">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary-navigation">
                                <span>Menu</span>
                            </button>
                        </div>
                        <?php wp_nav_menu( array( 'menu'=> 'primary', 'theme_location' => 'primary', 'depth' => 2, 'container' => 'div', 'container_class' => 'collapse navbar-collapse', 'container_id' => 'primary-navigation', 'menu_class' => 'nav navbar-nav', 'fallback_cb' => 'wp_bootstrap_navwalker::fallback', 'walker' => new wp_bootstrap_navwalker()) ); ?>
                    </div>
                </nav>
            </div>
            <div class="row">
                <div class="col-xs-12 top-header">
                    <h1>Veterans Business Outreach Center of Florida</h1>
                    <p>Empowering Veteran Entrepreneurs</p>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="header-wrap">
                            <div class="col-xs-12 header-slider">
                                <div class="text-center logo-box">
                                    <img alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/images/vboclogo.jpg" />
                                </div>
                                <div class="text-center dogtags-text">
                                    <h1>Start Here</h1>
                                    <a href="/register/"><p>Register Now <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></p></a>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12">
                            <script type="text/javascript">
                                jQuery(document).ready(function($){
                                    var distance = $('#primary-bootstrap-menu').offset().top,
                                    $window = $(window);

                                    $window.scroll(function() {
                                        if ( $window.scrollTop() >= distance ) {
                                            $('#primary-bootstrap-menu').addClass('navigation-fixed');
                                        } else {
                                            $('#primary-bootstrap-menu').removeClass('navigation-fixed');
                                        }      
                                    });
                                });
                            </script>
                            <div class="row hidden-sm hidden-xs">
                                <nav id="primary-bootstrap-menu" class="navbar navbar-default text-center" role="navigation">
                                    <div class="container-fluid">
                                        <div class="navbar-header">
                                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary-navigation">
                                                <span>Menu</span>
                                            </button>
                                        </div>
                                        <?php wp_nav_menu( array( 'menu'=> 'primary', 'theme_location' => 'primary', 'depth' => 2, 'container' => 'div', 'container_class' => 'collapse navbar-collapse', 'container_id' => 'primary-navigation', 'menu_class' => 'nav navbar-nav', 'fallback_cb' => 'wp_bootstrap_navwalker::fallback', 'walker' => new wp_bootstrap_navwalker()) ); ?>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
