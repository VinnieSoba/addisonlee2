<?php
/*
Template Name: Resources
Template Post Type: resource
*/
get_header();
 
$cols = get_field('flexible_components');
if($cols) : 

    while(have_rows('flexible_components') ) : the_row();

        while(have_rows( 'flexible_columns' ) ) : the_row();

            $row_width = get_sub_field('row_width');

            if($row_width == 'normal') :
                $row_class = 'container';
            elseif($row_width == 'full') :
                $row_class = 'container-fluid';
            endif;

        endwhile;


    endwhile;
?>

<section class="resource-wrapper">

<div class="resource-container <?php echo $row_class; ?>">

        <div class="sidebar col-md-3">
            <?php get_template_part('sidebar', 'resource'); ?>
        </div>
        <div class="resource-container--content col-md-9">
            <?php get_template_part('templates/template', 'flexible'); ?>
        </div>

</div>
</section>


  
<?php endif; ?>
<?php get_footer(); ?>