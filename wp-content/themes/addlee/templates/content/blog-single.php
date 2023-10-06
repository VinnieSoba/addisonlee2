<article class="post-entry main">

    <div class="panel-border">

        <div class="entry-image">
            <?php the_post_thumbnail( 'blog-image' ); ?>
        </div>

        <div class="entry-title">

            <div class="terms">
                <!-- debug removed to allow video conent upload<?php //the_taxonomies(array('template' => '% %l')); ?> -->
            </div>

            <span class="date">
                <?php the_date('jS F Y') ?>
            </span>
            <h1>
                <?php the_title(); ?>
            </h1>

        </div>

        <div class="entry-content">

            <?php the_content(); ?>
            
            <?php 
            $terms_and_conditions = get_field('terms_and_conditions');
            if ($terms_and_conditions) {
               echo '<div class="fine-print">'. $terms_and_conditions . '</div>';
            } 
            ?>

        </div>

        <div class="entry-footer">
            <div class="addthis_custom_sharing pull-right"></div>
        </div>

    </div>

</article>