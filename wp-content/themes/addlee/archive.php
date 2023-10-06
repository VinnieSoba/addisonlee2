<?php get_header(); ?>

<section class="page-content">

    <div class="container">

        <div class="col-md-8 col-xs-12">

            <?php 
            if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <article class="post-entry">

                <div class="panel-border">
                    <span class="border tr"></span>
                    <span class="border sr"></span>
                    <span class="border br"></span>
                    <span class="border tl"></span>
                    <span class="border sl"></span>
                    <span class="border bl"></span>
                    <div class="entry-title">

                        <h3>
                            <?php the_taxonomies(array('template' => '% %l')); ?>
                        </h3>

                        <h2>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h2>


                        <h4>
                            <?php the_date('jS F Y') ?>
                        </h4>


                    </div>

                    <div class="entry-content">

                        <div class="entry-image">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail( 'blog-image' ); ?>
                            </a>
                        </div>

                        <p>
                            <?php the_excerpt(); ?>
                        </p>

                    </div>

                </div>

            </article>

            <?php endwhile;  ?>
                <div class="core-navi">
                    <?php if (function_exists('wp_corenavi')) {
                        wp_corenavi(); 
                    } ?>
                </div>
            <?php endif; ?>
        </div>

        <?php wp_reset_query(); ?>

    </div>

</section>

<?php
get_footer();
?>