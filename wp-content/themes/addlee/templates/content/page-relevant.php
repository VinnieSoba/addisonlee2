<?php if(get_field('link_to_relevant') == true ) : ?>
    <div class="template-section">
        <?php if( have_rows('relevant_pages') ): ?>

        <div id="relevant-pages" class="container">

            <div class="row narrow-gutter">

                <?php while( have_rows('relevant_pages') ): the_row();?>

                <?php 
                $post_object = get_sub_field('page'); 
                $image = get_field('second_image', $post_object->ID);
                $relevant_pages_excerpt = get_field('relevant_pages_excerpt', $post_object->ID);
                ?>

                    <?php if( $post_object ): ?>

                    <?php $post = $post_object; setup_postdata( $post ); ?>

                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">

                        <figure class="relevant-block">

                            <a href="<?php echo get_permalink();?>">
                                <div class="entry-image">
                                    <?php 

                                    $size = 'large';
                                    $attr = array();
                                    if(is_front_page()) {
                                        $attr['class']  = 'lazyload';
                                    }
                                    echo wp_get_attachment_image($image, $size, false, $attr);
                                    ?>

                                    <figcaption>
                                        <div class="excerpt-content">
                                            <div class="wrapper">
                                                <?php echo $relevant_pages_excerpt;?>
                                            </div>
                                        </div>
                                    </figcaption>
                                </div>
                                <div class="entry-title">
                                    <h3>
                                        <?php the_title(); ?>
                                    </h3>
                                </div>
                            </a>

                        </figure>

                    </div>

                    <?php wp_reset_postdata(); ?>

                    <?php endif; ?>

                <?php endwhile; ?>

                <?php while( have_rows('absolute_suggested_pages') ): the_row();?>

                    <?php $post = $post_object; setup_postdata( $post ); ?>

                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">

                        <figure class="relevant-block">

                            <a href="<?php echo get_sub_field('link');?>">
                                <div class="entry-image">
                                    <img class="test" src="<?php echo get_sub_field('image'); ?>">
                                    <figcaption>
                                        <div class="excerpt-content">
                                            <div class="wrapper">
                                                <?php echo get_sub_field('content'); ?>
                                            </div>
                                        </div>
                                    </figcaption>
                                </div>

                                <div class="entry-title">
                                    <h3>
                                        <?php echo get_sub_field('title'); ?>
                                    </h3>
                                </div>

                            </a>

                        </figure>

                    </div>

                    <?php wp_reset_postdata(); ?>

                <?php endwhile; ?>

            </div>

        </div>
        <!-- /container -->

        <?php endif; ?>
    </div>

    <?php endif; ?>
