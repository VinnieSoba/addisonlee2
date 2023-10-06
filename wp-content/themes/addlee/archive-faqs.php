<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            
            <h3>
                <a href="<?php echo the_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
            </h3>
            
            <?php endwhile;  ?> 
            <?php endif; ?>
        </div>
    </div>
</div>


<?php
get_footer();
?>