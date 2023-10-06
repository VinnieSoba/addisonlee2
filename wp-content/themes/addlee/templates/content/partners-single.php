<div class="entry-content">
    <div class="col-md-12 col-xs-12">

        <?php 
            $display_title = get_field( 'display_title' );
                if ( $display_title ) :
                    echo '<h2>' . $display_title . '</h2>';
                endif;
        ?>
        <div class="partner-content">
            <?php the_content(); ?>
        </div>

        <?php 
            $below_content_image = get_field( 'below_content_image' );
                if ( $below_content_image ) :
                    echo '<img src="' . $below_content_image . '">';
                endif;
        ?>

    </div>

</div>