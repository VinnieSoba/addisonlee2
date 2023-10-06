<?php 
if( have_rows('where_to_drink') || have_rows('where_to_eat') || have_rows('what_to_do') || have_rows('where_to_stay') ) {  ?>
    <section id="location-info" class="page-content">
        <div class="container entry-content">
            <?php
            // Get where to drink places from custom fields
            if( have_rows('where_to_drink') ):
            
            echo '<div class="row tiles">
                    <h2>Where to drink</h2>
                    <div class="featured-places">';
                // loop through the rows of data
                while ( have_rows('where_to_drink') ) : the_row();
            $wheretodrinkimage = get_sub_field('where_to_drink_image');
            echo '<div class="col-md-4">
        <div class="tile">
                            <div class="hero">
                                ';
            if( !empty($wheretodrinkimage) ): 

	        echo '<img src="'. $wheretodrinkimage['url']. '" alt="'. $wheretodrinkimage['alt'].'" />';
            endif; 
            
            $website = get_sub_field('where_to_drink_website');

            echo '</div><div class="wrapper"><div class="entry-title"><h3>'. get_sub_field('where_to_drink_title') .'</h3></div><div class="entry-content">'. get_sub_field('where_to_drink_content'). '<p class="address">'. get_sub_field('where_to_drink_address').'<br><a href="'. addhttp($website) .'" target="_blank">'. removehttp($website).'</a></p>
            </div></div>
            </div></div>
            ';
                endwhile;
                echo '</div></div>';
            else :
            endif;
            ?>

                <?php
            // Get where to eat places from custom fields
            if( have_rows('where_to_eat') ):
            
            echo '<div class="row tiles">
                    <h2>Where to eat</h2>
                    <div class="featured-places">';
                // loop through the rows of data
                while ( have_rows('where_to_eat') ) : the_row();
            $wheretoeatimage = get_sub_field('where_to_eat_image');
            echo '<div class="col-md-4">
        <div class="tile">
                            <div class="hero">
                                ';
            if( !empty($wheretoeatimage) ): 

	        echo '<img src="'. $wheretoeatimage['url']. '" alt="'. $wheretoeatimage['alt'].'" />';
            endif; 
    
            $website = get_sub_field('where_to_eat_website');
            
            echo '</div><div class="wrapper"><div class="entry-title"><h3>'.get_sub_field('where_to_eat_title' ).'</h3></div><div class="entry-content">'. get_sub_field('where_to_eat_content'). '<p class="address">'. get_sub_field('where_to_eat_address').'<br><a href="'. addhttp($website) .'" target="_blank">'. removehttp($website).'</a></p>
            </div></div>
            </div></div>
            ';
                endwhile;
                echo '</div></div>';
            else :
            endif;
            ?>


                    <?php
            // Get what to do places from custom fields
            if( have_rows('what_to_do') ):
            
            echo '<div class="row tiles">
                    <h2>What to do</h2>
                    <div class="featured-places">';
                // loop through the rows of data
                while ( have_rows('what_to_do') ) : the_row();
            $whattodoimage = get_sub_field('what_to_do_image');
            echo '<div class="col-md-4">
        <div class="tile">
                            <div class="hero">
                                ';
            if( !empty($whattodoimage) ): 

	        echo '<img src="'. $whattodoimage['url']. '" alt="'. $whattodoimage['alt'].'" />';
            endif; 
    
            $website = get_sub_field('what_to_do_website');
    
            echo '</div><div class="wrapper"><div class="entry-title"><h3>'.get_sub_field('what_to_do_title').'</h3></div><div class="entry-content">'. get_sub_field('what_to_do_content'). '<p class="address">'. get_sub_field('what_to_do_address').'<br><a href="'. addhttp($website) .'" target="_blank">'. removehttp($website).'</a></p>
            </div></div>
            </div></div>
            ';
                endwhile;
                echo '</div></div>';
            else :
            endif;
            ?>


                        <?php
            // Get where to stay places from custom fields
            if( have_rows('where_to_stay') ):
            
            echo '<div class="row tiles">
                    <h2>Where to stay</h2>
                    <div class="featured-places">';
                // loop through the rows of data
                while ( have_rows('where_to_stay') ) : the_row();
            $wheretostayimage = get_sub_field('where_to_stay_image');
            echo '<div class="col-md-4">
        <div class="tile">
                            <div class="hero">
                                ';
            if( !empty($wheretostayimage) ): 

            echo '<img src="'. $wheretostayimage['url']. '" alt="'. $wheretostayimage['alt'].'" />';
            endif; 
    
            $website = get_sub_field('where_to_stay');
            
            echo '</div><div class="wrapper"><div class="entry-title"><h3>'.get_sub_field('where_to_stay_title').'</h3></div><div class="entry-content">'. get_sub_field('where_to_stay_content'). '<p class="address">'. get_sub_field('where_to_stay_address').'<br><a href="'. addhttp($website) .'" target="_blank">'. removehttp($website).'</a></p>
            </div></div>
            </div></div>
            ';
                endwhile;
                echo '</div></div>';
            else :
            endif;
            ?>
                            <div class="row">
                                <?php echo do_shortcode( '[booknowbtn]' ); ?>
                            </div>
        </div>
    </section>


    <?php } ?>
