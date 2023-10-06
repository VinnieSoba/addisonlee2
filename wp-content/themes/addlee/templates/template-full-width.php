<?php
// Template Name: Full width
get_header(); 
$sidebar = get_post_meta($post->ID, 'select_sidebar', true); 
?>

<section class="page-content">

    <div class="container">

        <div class="row">

            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-xs-12">

                <?php while ( have_posts() ) : the_post(); ?>

                    <?php get_template_part( 'templates/content/page', 'content' ); ?>

                <?php endwhile; // end of the loop. ?>
            </div>

        </div>
        
    </div>
    
    <?php 
    get_template_part('templates/component-parts/flexible', 'extra'); 
    ?>

    <div class="container">
        <div class="row">
            <?php get_template_part('templates/content/page', 'relevant'); ?>
        </div>
    </div>

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

<?php get_footer(); ?>