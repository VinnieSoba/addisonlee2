<?php
/*
Template Name: Web 2.0 Full Width
*/

get_header();

if(have_posts()){
    while (have_posts( )){
        the_post();

    ?>
     <div class="content">
        <?php echo the_content(); ?>
     </div>
    <?php
    }
}

