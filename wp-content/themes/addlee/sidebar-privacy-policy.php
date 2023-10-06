
<?php
$sidebars = get_field('sidebar_privacy_policy');
?>
<div class="privacy-policy py3">
   
<div class="privacy-policy--links">       

    <ul>
        <li class="show-full-policy py1"><a href="#">Full Privacy Policy</a></li>
                <?php
                    $args = array(
                        'posts_per_page' => -1,
                        'post_status' => 'publish',
                        'post_type' => 'privacy policy',
                        'orderby' => 'menu_order title',
                        'order'   => 'ASC'

                    );
                    $queries = new WP_Query($args);

                    while($queries->have_posts()) :

                        $queries->the_post();

                        $edit_title = str_replace(' ', '-', get_the_title());

                        $sub_heading_text = get_sub_field('heading_text');
                ?>
                
                <li class="pp-links"  id="<?php echo get_the_ID(); ?>"><a  id="<?php echo get_the_ID();?>" href="#/<?php echo $edit_title; ?>"><?php echo the_title(); ?></a></li>

                    <?php endwhile; ?>
        
    </ul>
</div>
</div>