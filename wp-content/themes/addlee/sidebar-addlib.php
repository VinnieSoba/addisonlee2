    <div class="textwidget">
        
        <h2>More from Add Lib</h2>
        <ul>
            <?php    
                      $args = array(
                'posts_per_page' => 3,
                'post_type' => 'addlib'
            );

            $featured = new WP_Query($args);

            if ($featured->have_posts()): while($featured->have_posts()): $featured->the_post(); ?>

            <li>
                <a href="<?php echo the_permalink(); ?>">
                <?php the_title(); ?>
                </a>
            </li>

            <?php endwhile; else: ?>

            <li>There are no Add Lib articles.</li>
            <?php endif; ?>
        </ul>

    </div>