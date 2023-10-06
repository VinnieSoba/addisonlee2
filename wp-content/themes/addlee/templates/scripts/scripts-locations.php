<?php get_template_part('templates/scripts/scripts', 'map-styles'); ?>
<script>
var latitude = <?php the_field( "latitude" ); ?>;
    var longitude = <?php the_field( "longitude" ); ?>;
    var zoom = <?php the_field( "zoom" ); ?>;
    var map;
    var infoWindow;
    var service;
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
    };
</script>