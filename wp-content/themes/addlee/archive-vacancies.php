<?php get_header(); ?>

<section class="page-content">

    <div class="container">

        <div class="row">

            <div class="col-md-8 col-md-offset-2">

                <article class="entry-content">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                        <?php $currentvac = get_post_meta($post->ID, ('current_vacancy'), true);

                        if ($currentvac == 'yes'): ?>
                    <div class="article-vacancy">
                        <h3>
                            <a href="<?php echo the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h3>

                        <h4 class="capitalize">
                            Posted <?php the_time('d'); echo ' '; the_time('M'); echo ' '; the_time('Y') ; ?>
                        </h4>

                        <?php the_excerpt(); 

                        else :
                            echo ''; 
                        endif;

                        ?>
                    </div>
                    <?php endwhile;  ?> 
                    <?php endif; ?>

                    <?php wp_reset_query(); ?>
                </article>

            </div>

        </div>

    </div>

</section>

<?php get_footer(); ?>