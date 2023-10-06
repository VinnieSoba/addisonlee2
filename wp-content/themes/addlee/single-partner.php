<?php

get_header(); 
$sidebar = get_post_meta($post->ID, 'select_sidebar', true); 
?>

    <section class="page-content">

        <div class="container">

            <div class="row">
                
                <?php while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( 'templates/content/partners', 'single' ); ?>
                
                <?php endwhile; // end of the loop. ?>
                
            </div>
            
        </div>
		<div style="background:#f7f7ef;">
		<div class="container" style="background:#f7f7ef;">

            <div class="row">
		<?php 
				$app_link = get_field( 'app_link' );
                $app_image = get_field( 'app_image' );
                    if ( $app_image ) :
                        echo '<a href="'. $app_link .'"><img src="' . $app_image . '"></a>';
                    endif;
            ?>
			</div>
		</div>
		</div>
    </section>

    <?php get_footer(); ?>
