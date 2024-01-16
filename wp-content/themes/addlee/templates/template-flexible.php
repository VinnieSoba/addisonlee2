<?php
// Template Name: Flexible Template
get_header();
$sidebar = get_post_meta($post->ID, 'select_sidebar', true);
?>
    <section class="page-content">
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

        elseif( get_row_layout() == 'showcase_component' ):

                get_template_part('templates/component-parts/component', 'showcase');

        elseif( get_row_layout() == 'services_carousel' ):

                get_template_part('templates/component-parts/component', 'services-carousel');

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
    
        elseif( get_row_layout() == 'awards_list_component' ):

                get_template_part('templates/component-parts/component', 'awards');
        endif;

    endwhile;

else :
endif;
?>

        <?php if ( have_posts() ) : ?>
            <div class="container">

                <div class="row">

                    <div class="col-md-8 col-md-offset-2 center">

                        <?php while ( have_posts() ) : the_post(); ?>

                            <?php get_template_part('templates/content/page', 'content'); ?>

                        <?php endwhile; ?>

                    </div>

                </div>

            </div>

        <?php endif; ?>

    </section>
<?php if ($sidebar != 'none') : ?>
<aside id="sidebar">
    <div id="form-lookup" class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <?php get_sidebar($sidebar); ?>

            </div>
        </div>
    </div>
</aside>
<?php endif; ?>
    <?php get_template_part('templates/content/page', 'relevant'); ?>
    <?php get_footer(); ?>
