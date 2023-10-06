<?php 
$first = true;
$count = 0;

// args
$args = array(
	'numberposts'	=> -1,
	'post_type'		=> 'addlib',
	'meta_key'		=> 'show_in_addlib_archive',
	'meta_value'	=> true,
    'paged'          => get_query_var( 'paged' ),
);

if(is_tax('categories')) {
    $queried_object = get_queried_object();

    $args['tax_query'] = array(
        array(
            'taxonomy' => 'categories',
            'field'    => 'term_id',
            'terms'    => $queried_object->term_id,
        )
    );
}


// query
$wp_query = new WP_Query( $args );


if ( $wp_query->have_posts() ) : 
    while ( $wp_query->have_posts() ) : $wp_query->the_post(); $count++; ?>

    <?php if ( $first ): ?>
        <div class="col-md-12 col-xs-12">
            <article class="post-entry first">

                <?php else: ?>

                    <div class="col-md-6">
                        <article class="post-entry">

                            <?php endif; ?>

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

        <?php endif; 
        if ( 1 == $count%2 ) {
            echo '</div><div class="row">';
        } ?>

    <?php endwhile; ?>

<?php endif; ?>
