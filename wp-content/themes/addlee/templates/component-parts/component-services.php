<div class="template-section grey">
    <?php $services_title = get_sub_field('services_title'); ?>
    <?php if( have_rows('services_blocks') ): ?>

        <div id="services-grid" class="container">
            
            <h2><?php echo $services_title; ?></h2>
            
            <div class="row">

        <?php while( have_rows('services_blocks') ): the_row();?>
                    
            <?php 
                $post_object = get_sub_field('services_page'); 
                $image = get_field('second_image', $post_object->ID);
                $relevant_pages_excerpt = get_field('relevant_pages_excerpt', $post_object->ID);
            ?>

            <?php if( $post_object ): ?>

                <?php $post = $post_object; setup_postdata( $post ); ?>

                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                    <figure class="service-block">
                        <a href="<?php echo get_permalink();?>">
                            <?php 
                            $size = 'large'; 
                            echo wp_get_attachment_image( $image, $size );
                            ?>

                            <figcaption class="service-content">
                                <h3>
                                    <?php the_title(); ?>
                                </h3>
                                <div class="excerpt-content">
                                    <div class="block"></div>
                                    <?php echo $relevant_pages_excerpt;?>
                                </div>
                            </figcaption>
                        </a>
                    </figure>
                </div>

                <?php wp_reset_postdata(); ?>

            <?php endif; ?>
                    
        <?php endwhile; ?>

            </div>
            
        </div><!-- /container -->

    <?php endif; ?>
    
</div>