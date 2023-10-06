<?php
get_header();
get_template_part('templates/scripts/scripts', 'meeting-points');
?>

        <section class="page-content">

            <div class="container">

                <div class="row entry-content">

                    <div id="primary" class="col-md-12 content-area">

                        <h3>Meeting point</h3>
                        <p>
                            <?php echo get_post_meta($post->ID, 'meeting-point', true); ?>
                        </p>
                        <h3>Directions</h3>
                        <p>
                            <?php echo get_post_meta($post->ID, 'directions', true); ?>
                        </p>
                        <?php while ( have_posts() ) : the_post(); ?>

                        <?php get_template_part( 'templates/content/page', 'content' ); ?>

                        <?php endwhile; // end of the loop. ?>

                        <?php 
                            $showMap = get_post_meta($post->ID, 'show_map', true); 
                            if ($showMap) { ?>
                            <div class="map-container">
                                <div id="main-map"></div>
                            </div>


                            <a class="cta" target="_blank" href="https://www.google.com/maps?q=<?php echo get_post_meta($post->ID, 'latitude', true); ?>,<?php echo get_post_meta($post->ID, 'longitude', true); ?>&z=<?php echo $zoom; ?>">View full map</a>


                            <script>
                                jQuery(function() {
                                    if (jQuery(window).width() < 960) {
                                        var mapURL = "<a href=\"https://www.google.com/maps?q=<?php echo get_post_meta($post->ID, 'latitude', true); ?>,<?php echo get_post_meta($post->ID, 'longitude', true); ?>&z=<?php echo $zoom; ?>\" target\"_blank\"></a>";
                                        jQuery("#map-directions").wrap(mapURL);
                                    }
                                });

                            </script>
                        <?php } ?>

                    </div>
                    <!-- #primary -->

                </div>
                <!-- .row -->

            </div>
            <!-- Container end -->

        </section>

<?php get_template_part('templates/scripts/scripts', 'maps'); ?>

    <?php
    get_footer();
    ?>
