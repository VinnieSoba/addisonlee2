<?php
get_header();

while( have_posts()) {
 the_post();

 ?>
    <div class="content">
        <?php echo the_title(); ?>
    </div>
 <?php
}

get_footer();

?>