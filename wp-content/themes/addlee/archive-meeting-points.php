<?php get_header(); ?>
        <section class="page-content">

            <div class="container">

                <div class="row">

                    <div class="col-md-8 col-md-offset-2 col-xs-12">

                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                        <article class="post-entry">
                            <div class="article-border">
                                <div class="entry-title">
                                    <h2>
                                        <a href="<?php the_permalink(); ?>">Pick up: <?php the_title(); ?></a>
                                    </h2>
                                </div>
                                <h3>Meeting point</h3>
                                <p>
                                    <?php echo get_post_meta($post->ID, 'meeting-point', true); ?>
                                </p>
                                <h3>Directions</h3>
                                <p>
                                    <?php echo get_post_meta($post->ID, 'directions', true); ?>
                                </p>
                                <p>
                                    <?php the_excerpt(); ?>
                                </p>
                            </div>

                        </article>

                        <?php endwhile; ?>

                        <?php endif; ?>

                        <?php if (function_exists("pagination")) {
                            pagination($additional_loop->max_num_pages);
                        } ?>

                        <?php wp_reset_query(); ?>

                    </div>

                </div>

            </div>

        </section>

    <?php get_footer(); ?>
