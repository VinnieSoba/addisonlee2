<?php
/*
Template Name: Resources
Template Post Type: resource
*/
get_header();


?>

<section class="prism-page">
<?php 
if(have_rows( 'prism_instructional_video' ) ) :
    while(have_rows( 'prism_instructional_video' ) ) : the_row();
    $column_class = get_sub_field('column_class'); 

    if( get_row_layout() == 'prism_component' ):
        get_template_part('templates/component-parts/component', 'prism');
    endif;
?>

<?php endwhile; ?>

<?php endif; ?>
</section>

<?php get_footer(); ?>