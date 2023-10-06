<?php get_template_part('templates/scripts/scripts', 'map-styles'); ?>
<script>
    var latitude = 51.507351;
    var longitude = -0.127758;
    var zoom = 7;
    var map;
    var latlong = {
        lat: latitude,
        lng: longitude
    };

    function googleMapsJsonCallback() {
        // define map
        map = new google.maps.Map(document.getElementById('main-map'), {
            //draggable: false,
            center: latlong,
            styles: map_style,
            scrollwheel: false,
            streetViewControl: false,
            mapTypeControl: false,
            styles: map_style,
            zoom: zoom
        });
        setMarkers(map);
    };

    function setMarkers(map) {
        // Adds markers to the map.
        var cities = [];
        <?php
        // The Query
        $location_category = get_sub_field('locations_taxonomy');
        $args = array( 'sort_order' => 'desc', 'post_type' => 'page', 'tax_query' => array(
                array(
                'taxonomy' => 'location-category',
                'field' => 'slug',
                'terms' => array($location_category->slug)
            ))) ;
        query_posts( $args );

        // The Loop
        if ( have_posts() ) : 
            while ( have_posts() ) : the_post();
            $cityLat = get_field( "latitude" );
            $cityLong = get_field( "longitude" );          
            echo 'cities.push({
                name:"' .get_the_title().'",
                permalink:"' .get_the_permalink().'",
                latlng: new google.maps.LatLng('.$cityLat.', '.$cityLong.'),
                zindex: 1
            });';
            endwhile;
            endif;
        // Reset Query
        wp_reset_query();
        ?>

        var image = {
            url: '/wp-content/themes/addlee/assets/images/icons/geo-icon.png',
            // This marker is 20 pixels wide by 32 pixels high.
            size: new google.maps.Size(40, 40),
            // The origin for this image is (0, 0).
            //origin: new google.maps.Point(0, 0),
            // The anchor for this image is the base of the flagpole at (0, 32).
            //anchor: new google.maps.Point(0, 32)
        };

        var shape = {
            coords: [1, 1, 1, 20, 18, 20, 18, 1],
            type: 'poly'
        };

        // coords: [1, 1, 1, 20, 18, 20, 18, 1],
        var bounds = new google.maps.LatLngBounds();
        for (var i = 0; i < cities.length; i++) {

            var marker = new google.maps.Marker({
                position: cities[i].latlng,
                map: map,
                icon: image,
                shape: shape,
                animation: google.maps.Animation.DROP,
                title: cities[i].name,
                //zIndex: cities[i].zindex
            });

            marker['infowindow'] = new google.maps.InfoWindow({
                content: '<a href="' + cities[i].permalink + '">' + cities[i].name + '</a>'
            });

            google.maps.event.addListener(marker, 'click', function() {
                marker['infowindow'].close(map);
                this['infowindow'].open(map, this);
            });
            bounds.extend(cities[i].latlng);
        }
        map.fitBounds(bounds);
    };

</script>

<section class="template-section">
    <div class="container locations-map">

        <div class="row no-gutter">

            <div class="col-lg-6 panel wow fadeInLeft">
                <div class="content">
                    <h2><?php the_sub_field('locations_map_title'); ?></h2>
                    <p><?php the_sub_field('locations_map_text'); ?></p>
                    <?php 
                    $locations_cta_1 = get_sub_field('locations_map_cta_1');
                    $locations_cta_2 = get_sub_field('locations_map_cta_2');
                    if ($locations_cta_1 && $locations_cta_2) { ?>
                    <div class="row two-btns">
                        <div class="col-md-6">
                            <?php echo $locations_cta_1; ?>
                        </div>
                        <div class="col-md-6">
                            <?php echo $locations_cta_2; ?>
                        </div>
                    </div>
                    <?php } else { ?>
                    
                    <div class="row">
                        <?php echo $locations_cta_1; ?>
                    </div>
                    
                    <?php } ?>
                </div>
            </div>

            <div class="col-lg-6 wow fadeInRight">
                <div id="main-map"></div>
            </div>
        </div>
    </div>
</section>
<?php get_template_part('templates/scripts/scripts', 'maps'); ?>