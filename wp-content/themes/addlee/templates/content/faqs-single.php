<div class="entry-content">
    <article class="col-md-8 col-md-offset-2 col-xs-12">
        <?php the_content(); ?>
    </article>

    <article class="col-md-8 col-md-offset-2 col-xs-12">
            <?php
            if($post->post_parent) :
                $children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0&post_type=faqs&exclude=".$post->ID.""); ?>
                <ul class="faqs-list">
                    <h3>Related FAQs: <?php echo get_the_title( $post->post_parent ); ?></h3>
                    <?php echo $children; ?>
                </ul>

            <?php endif; ?>

    </article>
</div>