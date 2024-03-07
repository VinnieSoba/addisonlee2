<?php
// Template Name: Landing Pages

get_header();

    if (have_rows('landing_pages_component') ) : 

        while(have_rows('landing_pages_component') ) : the_row();

            if( get_row_layout('flexible_cols') ) : 

                get_template_part( 'templates/component-parts/component', 'landing-page' );
        
            endif;

        endwhile;

    endif;
?>

<?php
get_footer();
?>