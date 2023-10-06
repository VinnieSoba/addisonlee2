<?php
/* Template Name: Privacy Policy
   Template Post Type: post, page, privacy policy
*/
get_header(); 
?>


<section class="privacy-policy">
<div class="container">
<div class="row">

            <div class="col-lg-4 col-md-4 col-xs-12"><?php get_template_part( "./sidebar-privacy-policy" ); ?></div>

            <div class="col-lg-8 col-md-8 col-xs-12">   
                                             
                <div id="privacy-policy-content" class="privacy-section py3">

                    <div class="accordion">
                      
                        <?php 

                            $args = array(
                                'posts_per_page' => -1,
                                'post_type' => 'privacy policy',
                                'orderby' => 'menu_order title',
                                'order' => 'ASC'
                            );

                        $policies = new WP_Query($args);

                            if($policies->have_posts()) :

                                while($policies->have_posts()) :
                                    $policies->the_post();

                                    $edit_title = str_replace(' ', '-', get_the_title());


                        ?>
                                    <div class="accordion-section <?php echo get_the_ID(); ?>">
                                        <h3 id="<?php echo $edit_title;?>"  name="#<?php echo $edit_title; ?>">
                                        <?php echo get_the_title(); ?>
                                        </h3>
                                        
                                        <div id="accordion-<?php echo get_the_ID();?>"  class="accordion-section-content">
                                            <p>
                                            <?php echo the_content(); ?>
                                            </p>
                                        </div><!--end .accordion-section-content-->
                                    </div>

                                <?php endwhile; ?>
                                  
                                <button id="buttontop" style="display: none" class="cta">Back To Top</button>
                            <?php endif; ?>                        
                       
                    </div>
                  
                </div>
                </div>

</div> 
</div>

</section>
    

<?php
get_footer();
?>