<?php

$args = array(
   'posts_per_page' => -1,
   'post_status' => 'publish',
   'post_type' => 'resource',
   'orderby' => 'menu_order title',
   'order'   => 'ASC'
);
                    
$queries = new WP_Query($args);

if($queries) : 
while($queries->have_posts() ) : 
$queries->the_post();
?>
    <div class="resource-side-bar-links">
    <ul>
        <li class="pp-links"><a href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a></li>
    </ul>
    </div>
<?php
endwhile;
endif;
?>