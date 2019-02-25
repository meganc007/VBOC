<?php /* Template Name: Home */ get_header(); ?>
    <section class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <?php if ( function_exists( 'soliloquy' ) ) { soliloquy( '40' ); } 
                    /*if ( function_exists( 'soliloquy' ) ) { soliloquy( 'success-stories', 'slug' ); } */?>
            </div>
            <div class="col-md-12 news-stories">
                <div class="container">
                    <div class="row">
                        <?php
                        //Start Loop
                        $args = array(
                        'post_type' => array( 'post' ),
                        'posts_per_page' => 3,
                        'orderby' => 'date',
                        'order' => 'DESC',
                        );
                        $recentpost = new WP_Query($args);
                        if ($recentpost->have_posts()) :
                        while ($recentpost->have_posts()) : $recentpost->the_post();
                        ?>
                        <div class="col-md-4 addspace-bottom">
                            <div class="featured-image">
                                <img alt="" src="<?php echo the_post_thumbnail_url(); ?>" />
                            </div>
                            <div class="featured-content">
                                <h3><?php echo the_title(); ?></h3>
                                <p><?php echo the_excerpt(); ?></p>
                            </div>
                            <a href="<?php echo the_permalink(); ?>">
                                <span class="read-more">Read More</span>
                            </a>
                        </div>
                        <?php
                        //End Loop
                        endwhile;
                        endif;
                        ?>
                    </div>
                </div>
            </div>
            <div class="container add-fluid">
                <div class="row">
                    <div class="col-xs-12 event-section">
                        <div class="col-xs-12 col-sm-6 text-center">
                            <div id="fb-root"></div>
                            <script>
                                (function(d, s, id) {
                                var js, fjs = d.getElementsByTagName(s)[0];
                                if (d.getElementById(id)) return;
                                js = d.createElement(s); js.id = id;
                                js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
                                fjs.parentNode.insertBefore(js, fjs);
                                }(document, 'script', 'facebook-jssdk'));
                            </script>
                            <div class="fb-page" data-href="https://www.facebook.com/VBOC.GCSC" data-height="340" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="false"><blockquote cite="https://www.facebook.com/VBOC.GCSC" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/VBOC.GCSC">Veterans Business Outreach Center at GCSC</a></blockquote></div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <?php echo do_shortcode('[add_eventon]'); ?>
                        </div>
                    </div>
                    <div class="col-xs-12 text-center map-section">
                        <div class="col-xs-12 col-md-6 map">
                            <script src='https://maps.googleapis.com/maps/api/js?key=&sensor=false&extension=.js'></script> 
                            <script> 
                                google.maps.event.addDomListener(window, 'load', init);
                                var map;
                                function init() {
                                    var mapOptions = {
                                        center: new google.maps.LatLng(30.186243,-85.726983),
                                        zoom: 17,
                                        zoomControl: true,
                                        zoomControlOptions: {
                                            style: google.maps.ZoomControlStyle.DEFAULT,
                                        },
                                        disableDoubleClickZoom: true,
                                        mapTypeControl: true,
                                        mapTypeControlOptions: {
                                            style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
                                        },
                                        scaleControl: true,
                                        scrollwheel: true,
                                        panControl: true,
                                        streetViewControl: true,
                                        draggable : true,
                                        overviewMapControl: true,
                                        overviewMapControlOptions: {
                                            opened: false,
                                        },
                                        mapTypeId: google.maps.MapTypeId.ROADMAP,
                                        styles: [
                                                {
                                                    "featureType": "poi.school",
                                                    "elementType": "geometry.fill",
                                                    "stylers": [
                                                        {
                                                            "color": "#e8ddbd"
                                                        }
                                                    ]
                                                }
                                            ],
                                    }
                                    var mapElement = document.getElementById('gcsc');
                                    var map = new google.maps.Map(mapElement, mapOptions);
                                    var locations = [
                            ['gcsc', 'undefined', 'undefined', 'undefined', 'undefined', 30.186036, -85.72666509999999, 'https://mapbuildr.com/assets/img/markers/default.png']
                                    ];
                                    for (i = 0; i < locations.length; i++) {
                                        if (locations[i][1] =='undefined'){ description ='';} else { description = locations[i][1];}
                                        if (locations[i][2] =='undefined'){ telephone ='';} else { telephone = locations[i][2];}
                                        if (locations[i][3] =='undefined'){ email ='';} else { email = locations[i][3];}
                                       if (locations[i][4] =='undefined'){ web ='';} else { web = locations[i][4];}
                                       if (locations[i][7] =='undefined'){ markericon ='';} else { markericon = locations[i][7];}
                                        marker = new google.maps.Marker({
                                            icon: markericon,
                                            position: new google.maps.LatLng(locations[i][5], locations[i][6]),
                                            map: map,
                                            title: locations[i][0],
                                            desc: description,
                                            tel: telephone,
                                            email: email,
                                            web: web
                                        });
                            link = '';     }

                            }
                            </script>
                            <style>
                                #gcsc {
                                    width: 100%;
                                    height: 300px;
                                }
                                .gm-style-iw * {
                                    display: block;
                                    width: 100%;
                                }
                                .gm-style-iw h4, .gm-style-iw p {
                                    margin: 0;
                                    padding: 0;
                                }
                                .gm-style-iw a {
                                    color: #4272db;
                                }
                            </style>

                            <div id='gcsc'></div>
                        </div>
                        <div class="col-xs-12 col-md-6 gcsc">
                            <img alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/images/gcsclogo.png" />
                            <h2 class="uppercase">Veterans Business Outreach Center</h2>
                            <h3 class="uppercase">at Gulf Coast State College</h3>
                            <p>Asbell Bldg, Room 206 <br>
                                5230 W Hwy 98, Panama City, FL 32401 <br>
                                800-542-7232
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php get_footer(); ?>
