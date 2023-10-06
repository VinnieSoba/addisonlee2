<?php

get_header(); 
$sidebar = get_post_meta($post->ID, 'select_sidebar', true); 
?>

    <section class="page-content">

        <div class="container">

            <div class="row">
                
                <?php while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( 'templates/content/faqs', 'single' ); ?>
                
                <?php endwhile; // end of the loop. ?>
                
            </div>
            
        </div>

        <div class="template-section grey flexi-cta">

            <div class="container">

                <div class="row">

                    <div class="col-md-8 col-md-offset-2 outer-content">

                        <div class="content">

                            <h2>
                                Haven’t found what you’re looking for?
                            </h2>
                            <p>
                                Visit our Support page for more information. 
                            </p>
                            
                            <a class="cta inverse" href="/support/">Go to Support</a>

                        </div>

                    </div>

                </div>

            </div>

        </div>
    
    </section>

    <?php get_footer(); ?>
