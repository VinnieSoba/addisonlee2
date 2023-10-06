<?php
// Template Name: PPC Template
get_header();
?>
    <section class="page-content">
    
        <?php get_template_part('templates/component-parts/component', 'marketing');
        // check if the flexible content field has rows of data
        if( have_rows('flexible_components') ):

            // loop through the rows of data
            while ( have_rows('flexible_components') ) : the_row();

                if( get_row_layout() == 'featured_cta' ): 

                    get_template_part('templates/component-parts/component', 'featured-cta');

                elseif( get_row_layout() == 'video' ): 

                        get_template_part('templates/component-parts/component', 'video'); 
        
                endif;

            endwhile;

        else :

        endif;
        ?>

    <?php get_template_part('templates/content/page', 'relevant'); ?>
        
    </section>


<?php get_footer(); ?>
