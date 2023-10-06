<?php 
// Template Name: Single Book Now Page
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
            <?php 
    $termsConditions = apply_filters('the_content', get_post_meta($post->ID, 'terms_and_conditions', true)); 
    ?>

                <?php if ($termsConditions) : ?>
                    <div class="container">
                        <div class="entry-content">
                            <?php echo $termsConditions; ?>
                        </div>

                    </div>
                    <?php endif; ?>

    </section>

<?php get_footer(); ?>
