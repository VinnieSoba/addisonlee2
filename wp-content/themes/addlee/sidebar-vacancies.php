<?php
      if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('vacancies-sidebar') ) :
      endif; ?>

    <div class="textwidget">
              
    <?php if (is_singular('vacancies')) : ?>
        <h5 class="capitalize">
        Posted <?php the_time('d'); echo ' '; the_time('M'); echo ' '; 
        the_time('Y') ; ?>
        </h5>
        <div class="addthis_custom_sharing"></div>
    <?php endif; ?>
        
        <h4>Current Vacancies</h4>

        <ul>

        <?php    
            $args = array(
                'posts_per_page' => 20,
                'meta_key' => 'current_vacancy',
                'meta_value' => 'yes',
                'post_type' => 'vacancies'
            );

            $featured = new WP_Query($args);

            if ($featured->have_posts()): while($featured->have_posts()): $featured->the_post(); ?>

            <li>
                <a href="<?php echo the_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
            </li>

        <?php endwhile; else: ?>

            <li>There are currently no vacancies.</li>

        <?php endif; ?>

        </ul>

    </div>