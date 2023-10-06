<?php
// Template Name: Location Page Template
get_header(); 
get_template_part('templates/scripts/scripts', 'locations');
?>
    
        <section class="page-content">
            <div class="container"
				 <?php 
				 	$subHeading = get_post_meta($post->ID, 'sub_heading', true); 
				 	if(!$subHeading) {echo ' style="display: none"';} 
				 ?>
			>

                <div class="row entry-content">

                    <div class="col-md-12">
                        <?php 
                    $subHeading = get_post_meta($post->ID, 'sub_heading', true); 
                    if ($subHeading) {
                        echo '<h2 class="center-text">' . $subHeading . '</h2>';
                    }
                ?>
                            <article class="main-content">
                                <div class="three-col">
                                    <?php the_content(); ?>
                                </div>
                                <div class="center">
                                    <?php //echo do_shortcode( '[booknowbtn]' ); ?>
                                </div>
                            </article>
                    </div>
                </div>

                <div class="row">
                    <div id="featured-bar">
                        <?php //echo do_shortcode('[usps]'); ?>
                    </div>
                </div>

            </div>
            <?php

            // check if the flexible content field has rows of data
            if( have_rows('flexible_components') ):

            // loop through the rows of data
            while ( have_rows('flexible_components') ) : the_row();

            if( get_row_layout() == 'two_column_panels' ):

            get_template_part('templates/component-parts/component', 'two-column-panels');

            elseif( get_row_layout() == 'featured_cta' ):

            get_template_part('templates/component-parts/component', 'featured-cta');

            elseif( get_row_layout() == 'flexible_cols' ):

            get_template_part('templates/component-parts/component', 'flexible-columns');

            elseif( get_row_layout() == 'locations_map' ):

            get_template_part('templates/component-parts/component', 'locations-map');

            elseif( get_row_layout() == 'tri_blocks' ):

            get_template_part('templates/component-parts/component', 'tri-blocks');

            elseif( get_row_layout() == 'carousel_component' ):

            get_template_part('templates/component-parts/component', 'carousel');

            elseif( get_row_layout() == 'services' ):

            get_template_part('templates/component-parts/component', 'services');

            elseif( get_row_layout() == 'tabs' ):

            get_template_part('templates/component-parts/component', 'tabs');


            elseif( get_row_layout() == 'faqs_component' ):

            get_template_part('templates/component-parts/component', 'faq-accordion');

            elseif( get_row_layout() == 'icon_list_component' ):

            get_template_part('templates/component-parts/component', 'icon-list');

            elseif( get_row_layout() == 'video' ):

            get_template_part('templates/component-parts/component', 'video');

            endif;

            endwhile;

            else :
            endif; ?>
            
    <?php
    // show related pages split by location-category term
    $location_terms = get_terms( 'location-category' );
    
    foreach ( $location_terms as $location_term ) {
    $location_query = new WP_Query( array(
        'post_parent' => $post->ID, 
        'post_type' => 'page',
        'posts_per_page' => -1,
        'orderby' => 'title', 
        'order'=> 'ASC',
        'tax_query' => array(
            array(
                'taxonomy' => 'location-category',
                'field' => 'slug',
                'terms' => array( $location_term->slug ),
                'operator' => 'IN'
            )
        )
    ) );
    ?>
    
    <?php
    if ( $location_query->have_posts() ) : 
    
    echo "<div class=\"container related-locations\"><h2>".$location_term->name."</h2><ul class=\"row\">";
    while ( $location_query->have_posts() ) : $location_query->the_post(); ?>
        <li class="col-md-3"><a href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a></li>
    <?php endwhile; 
    echo "</ul></div>";
        
    endif; ?>
    
    <?php
    $location_query = null;
    wp_reset_postdata();
}
?>

            <?php get_template_part('templates/content/places', 'content'); ?>     


<?php 
    if( get_field('show_map') ) { ?>
        
    <div id="main-map"></div>

<?php  } ?>
    </section>
<?php get_template_part('templates/content/page', 'relevant');  ?>
<?php get_template_part('templates/scripts/scripts', 'maps'); ?>
<?php get_footer(); ?>
