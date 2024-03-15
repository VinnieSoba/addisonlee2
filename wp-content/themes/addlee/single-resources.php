<?php
get_header();
?>

<?php
    if( have_posts() ) : 
    while ( have_posts() ) : the_post(); 
?>
    <section class="resources-content">
        <div class="resources-content-cont">
            <h4><?php echo the_title(); ?></h4>
            <div class="resources-content-para">
            <?php get_template_part('templates/template', 'resources'); ?>
            </div>
        </div>
    </section>
<?php
    endwhile;
    endif;
?>

<?php get_footer(); ?>