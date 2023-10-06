<?php
// Template Name: Partners
get_header();

?>
<div class="partner-bg">
    <div class="container entry-content partner-logos">
        <div class="col-md-6">
            <?php 
                $hero_image_one = get_field( 'hero_image_one' );
                    if ( $hero_image_one ) :
                        echo '<img src="' . $hero_image_one . '">';
                    endif;
            ?>
        </div>
         <div class="col-md-6">
            <?php 
                $hero_image_two = get_field( 'hero_image_two' );
                    if ( $hero_image_two ) :
                        echo '<img src="' . $hero_image_two . '">';
                    endif;
            ?>
        </div>
    </div>
</div>

<section class="page-content content-padding">

    <div class="container entry-content">

        <div class="row">

            <div class="col-md-12">

                <?php 
                    $sub_title = get_field( 'sub_title' );
                        if ( $sub_title ) :
                            echo '<h2>' . $sub_title . '</h2>';
                        endif;
                ?>

                <?php the_content();?>

            </div>
            <div class="row partner-loop">
                <?php 

                    $args = array(  
                        'post_type' => 'partner',
                        'post_status' => 'publish',
                    );

                    $loop = new WP_Query( $args ); 
                        
                    while ( $loop->have_posts() ) : $loop->the_post(); ?>
                        <?php $tile_image = get_field( 'tile_image' ); 
                              $brand_alignment = get_field( 'brand_alignment' ); 
                        ?>
                        <div class="col-md-6">
                            <?php if ($brand_alignment == 'left') { 
                                echo ' <div class="single-partner-bg left"';
                            } else{
                                echo ' <div class="single-partner-bg"';
                            };?>

                            style="background-image:url('<?php echo $tile_image ?>');">
                            <?php $brand_logo = get_field( 'brand_logo' ); 
                                if ( $brand_logo ) :
                                    echo '<img src="' . $brand_logo . '">';
                                endif;
                            ?>
                            </div>
                        
                            <a href="<?php the_permalink() ?>">Find out more</a>
                        </div>
                    <?php 
                    endwhile;

                    wp_reset_postdata();    
                 ?>
             </div>

        </div>

    </div>
    <div style="background:#f7f7ef;">
        <div class="container" style="background:#f7f7ef;">

            <div class="row">
        <?php 
                $app_link = get_field( 'app_link' );
                $app_image = get_field( 'app_image' );
                    if ( $app_image ) :
                        echo '<a href="'.  $app_link .'"><img src="' . $app_image . '"></a>';
                    endif;
            ?>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>
