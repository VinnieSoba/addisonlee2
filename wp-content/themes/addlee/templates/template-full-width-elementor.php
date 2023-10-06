<?php
// Template Name: Full width (Elementor)
get_header(); 
$sidebar = get_post_meta($post->ID, 'select_sidebar', true); 
?>

<section class="page-content">

    <div class="container">

        <div class="row">

            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-xs-12">

                <?php while ( have_posts() ) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<div class="entry-content">

							<?php the_content(); ?>

						</div><!-- .entry-content -->

					</article><!-- #post-## -->

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