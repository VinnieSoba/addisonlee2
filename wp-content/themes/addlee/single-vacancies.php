<?php get_header(); ?>
<div class="container">
    
    <div class="row">
        
        <div class="col-md-8">

            <section class="page-content">

                    <article class="entry-content">

                        <?php while ( have_posts() ) : the_post(); ?>    

                            <?php the_content(); ?>

                            <?php
                            $values = get_post_meta($post->ID, 'closing_date', true);
                            if ($values){
                                echo '<ul><li>Closing date: <strong>';
                                echo $values;
                                echo '</strong></li></ul>';
                            } 
                            ?> 

                            <?php $currentvac = get_post_meta($post->ID, 'current_vacancy', true);

                            if ($currentvac == 'yes'){
                                $applyvacref = get_post_meta($post->ID, 'position', true);
                            echo '<a href="/work-with-us/apply/?position='. urlencode(get_the_title()) . '" class="cta" data-form_id="29">Apply <i class="icon-chevron-right"></i></a>'; }
                            elseif ($currentvac == 'no'){
                                    echo '<span class="alert label label-important">This post has expired. If you would like to be considered for future roles, please email recruitment@addisonlee.com.</span>';
                            } ?>

                        <?php endwhile; ?>

                    </article>
                
            </section>
            
        </div>
        
        <aside id="sidebar" class="col-md-4">
            <?php get_sidebar('vacancies'); ?>
        </aside><!-- #primary -->
        
    </div>
    
</div>

<?php get_footer();?>