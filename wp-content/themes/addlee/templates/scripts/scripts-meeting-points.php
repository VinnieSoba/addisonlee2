<?php get_template_part('templates/scripts/scripts', 'map-styles'); ?>
<script>
    function googleMapsJsonCallback() {
        var latitude = <?php echo get_post_meta($post->ID, 'latitude', true); ?>;
        var longitude = <?php echo get_post_meta($post->ID, 'longitude', true); ?>;
        var mapCanvas = document.getElementById('main-map');
        var center = new google.maps.LatLng(latitude, longitude);
        var zoom = <?php $zoom = get_post_meta($post->ID, 'zoom', true);

  if ($zoom) {
    echo $zoom;
  }
  else {
    echo 18;
  }?>;
        //get client width
        var w = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
        var mobile = w > 960 ? true : false;
        var mapIcon = mobile;
        var isDraggable = mobile;
        var mapOptions = {
            center: center,
            zoom: zoom,
            draggable: mobile,
            panControl: mobile,
            zoomControl: mobile,
            mapTypeControl: mobile,
            scaleControl: mobile,
            streetViewControl: mobile,
            overviewMapControl: mobile,
            isZoomControlsEnabled: false,
            isZoomGesturesEnabled: false,
            setAllGesturesEnabled: false,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            styles: map_style,
            scrollwheel: false
        }
        var map = new google.maps.Map(mapCanvas, mapOptions)
        marker = new google.maps.Marker({
            map: map,
            animation: google.maps.Animation.DROP,
            position: center,
            icon: '/wp-content/themes/addlee/assets/images/icons/pickup-pin.png'
        });

        var bounds = new google.maps.LatLngBounds(center);

        <?php
            $map_marker_count = get_post_meta($post->ID, 'additional_map_markers', true);

            if(empty($map_marker_count) == false) {

                for ($i = 0; $i < $map_marker_count; $i++) {

                $map_marker_count = get_post_meta($post->ID, 'additional_map_markers', true);
                $map_marker_count = get_post_meta($post->ID, 'additional_map_markers', true);
                $map_marker_count = get_post_meta($post->ID, 'additional_map_markers', true);

        ?>

        var marker_latitude = <?php echo get_post_meta($post->ID, 'additional_map_markers_'.$i.'_marker_latitude', true); ?>;
        var marker_longitude = <?php echo get_post_meta($post->ID, 'additional_map_markers_'.$i.'_marker_longitude', true); ?>;
        var marker_title = '<?php echo get_post_meta($post->ID, 'additional_map_markers_'.$i.'_marker_title', true); ?>';

        var pos = new google.maps.LatLng(marker_latitude, marker_longitude);

        var extra_marker = new google.maps.Marker({
            map: map,
            position: pos,
            title: marker_title,
            icon: '/wp-content/themes/addlee/assets/images/icons/pickup-pin.png'
        });

        bounds.extend(extra_marker.getPosition());

        map.fitBounds(bounds);

        <?php
                }
        } ?>


        // HTML5 geolocation
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {

                var bounds = new google.maps.LatLngBounds(center);
                var pos = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);

                var geolocation = new google.maps.Marker({
                    position: pos,
                    map: map,
                    title: 'Your geolocation',
                    icon: '/wp-content/themes/addlee/assets/images/icons/geo-icon.png'
                });

                bounds.extend(geolocation.getPosition());

                map.fitBounds(bounds);

            }, function() {
                handleNoGeolocation(true);
            });
        } else {
            // Browser doesn't support Geolocation
            handleNoGeolocation(false);
        }
    }

    function handleNoGeolocation(errorFlag) {
        if (errorFlag) {
            var content = 'Error: The Geolocation service failed.';
        } else {
            var content = 'Error: Your browser doesn\'t support geolocation.';
        }
    }

</script>
