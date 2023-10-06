<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package understrap
 */

get_header(); 
$sidebar = get_post_meta($post->ID, 'select_sidebar', true); 
?>
    
<section class="page-content">

    <div class="container">

        <div class="row">

        <?php if ($sidebar != 'none') : ?>
            <div class="col-md-8">
        <?php else : ?>
            <div class="col-md-12">
        <?php endif; ?>

                <?php while ( have_posts() ) : the_post(); ?>

                    <?php get_template_part( 'templates/content/page', 'content' ); ?>

                <?php endwhile; // end of the loop. ?>

            </div><!-- #primary -->

		   <?php if (! empty( get_sidebar( $sidebar ) ) && $sidebar != 'null' && $sidebar != 'none') : ?>

				<aside id="sidebar" class="col-md-4">
					<?php get_sidebar( $sidebar ); ?>
				</aside><!-- #primary -->
                
            <?php endif; ?>
                
        </div><!-- .row -->

    </div><!-- Container end -->

</section>

<?php get_footer(); ?>
