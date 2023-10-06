<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

get_header(); ?>
    
    <section class="page-content">

        <div class="container">

            <div class="row">

                <div id="primary" class="<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>col-md-8<?php else : ?>col-md-12<?php endif; ?> content-area">

                        <?php while ( have_posts() ) : the_post(); ?>

                            <?php get_template_part( 'templates/_template-loops/content', 'single' ); ?>

                            <?php understrap_post_nav(); ?>

                            <?php
                            // If comments are open or we have at least one comment, load up the comment template
                            if ( comments_open() || get_comments_number() ) :
                                comments_template();
                            endif;
                            ?>

                        <?php endwhile; // end of the loop. ?>

                </div><!-- #primary -->

            <?php get_template_part('sidebar'); ?>

            </div><!-- .row -->

        </div><!-- Container end -->
    
    </section>

<?php get_footer(); ?>
