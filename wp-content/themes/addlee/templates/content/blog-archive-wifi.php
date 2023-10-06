<?php 
$first = true;
$count = 0;
$args = array(
    'numberposts'	=> 6,
	'post_type'		=> 'addlib',
    'meta_key'    => 'add_to_wifi_landing_page',
    'meta_value'    => true,
);
query_posts( $args ); 
    if (have_posts()) :
    while ( have_posts() ) : the_post(); $count++; ?>

    <?php if ( $first ): ?>

        <div class="col-md-12 col-xs-12">

    <?php else: ?>

        <div class="col-md-6">
            
    <?php endif; ?>
            
            <article class="post-entry">

                <div class="panel-border">
                    <span class="border tr"></span>
                    <span class="border sr"></span>
                    <span class="border br"></span>
                    <span class="border tl"></span>
                    <span class="border sl"></span>
                    <span class="border bl"></span>
                    <div class="entry-image">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail( 'blog-image' ); ?>
                        </a>
                    </div>
                    <div class="entry-title">

                        <h2>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h2>

                    </div>
                    
                    <div class="entry-content">
                        <?php the_excerpt(); ?>
                    </div>

                </div>

        <?php if ( $first ): ?>

            </article>

        </div>

        </div>

        <div class="row">

            <?php $first = false; ?>

        <?php else: ?>
            
        </div>
            

        </article>

        <?php endif; ?>

        <?php if ( 1 == $count%2 ) {
            echo '</div><div class="row">';
        } ?>

    <?php endwhile; ?>

<?php endif; ?>
