<?php 
/*
Template Name: Careers
*/

get_header();

$flexible_teams = get_field('flexible_teams');
?>

<?php 

    if(have_rows('flexible_teams') ) :
    
        while(have_rows('flexible_teams') ) : the_row();

        if(get_row_layout() == 'flexible_cols') :

            get_template_part('templates/component-parts/component', 'careers-at');

        elseif(get_row_layout() == 'current_vacancies') : 

            get_template_part('templates/component-parts/component', 'current-vacancies');

        elseif(get_row_layout() == 'benefits') :
            
            get_template_part('templates/component-parts/component', 'benefits');

        elseif(get_row_layout() == 'team_details') :

            get_template_part('templates/component-parts/component', 'team');

        endif;

        endwhile;

    endif;

    get_template_part('templates/component-parts/component', 'carousel');

        
?>

<?php
get_footer();
?>