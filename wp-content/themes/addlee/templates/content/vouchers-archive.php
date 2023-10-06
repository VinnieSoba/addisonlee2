<?php 

if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); ?>

    <div class="col-md-12 col-xs-12">
        <article class="post-entry">
            <a href="<?php the_permalink(); ?>" class="ajax-page-content">

            <div class="panel-border">

                <div class="entry-image">
                    
                        <?php the_post_thumbnail( 'blog-image' ); ?>
                </div>
                <div class="entry-title">
                    <h2>
                        <?php the_title(); ?>
                    </h2>
                </div>
            </div>
                </a>
        </article>
    </div>
<?php endwhile; ?>

<?php endif; ?>