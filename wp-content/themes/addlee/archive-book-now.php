<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            
           <?php 

            if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <article>
                    <h3>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h3>
                </article>

            <?php endwhile;  
            
            else : ?>

                <p>Coming soon!</p>

            <?php endif; ?>

            <?php 
                if (function_exists('wp_corenavi')) { 
                    wp_corenavi();
                } 
            ?>

            <?php wp_reset_query(); ?>
            
        </div>
    </div>
</div>

<?php get_footer(); ?>