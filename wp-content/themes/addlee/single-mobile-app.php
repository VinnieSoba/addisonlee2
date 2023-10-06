<?php 
// Template Name: Single App Page
get_header(); 
?>

<section class="page-content">

    <div class="container">
        <div class="row">

            <div class="col-md-12">

                <?php while ( have_posts() ) : the_post(); ?>

                    <?php get_template_part('templates/content/page', 'content'); ?>

                        <?php endwhile; ?>

            </div>
        </div>

    </div>
    <?php if(get_field('show_full_app_banner')) : 
            get_template_part( 'templates/content/page', 'content-app-banner' );
        endif;
        ?>

</section>

<?php get_footer(); ?>
