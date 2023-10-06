<?php 
$faqs_class = get_sub_field('faqs_class');
$faqs_title = get_sub_field('faqs_title');
$faqs_content = get_sub_field('faq_content');
$faqs_open_content = get_sub_field('faq_open_content');
?>
<section style="display: none" class="template-section padded line faqs <?php echo $faqs_class; ?>">
        
    <div class="container">
        
        <div class="row">
            
            <div class="col-md-10 col-md-offset-1 col-xs-12">
                <div class="line"></div>
                
                <div class="faq-content">
                    <?php echo $faqs_content; ?>
                </div>
                
                <div class="accordion-parent">
                    
                    <div class="accordion-parent-section">
                        
                        <a class="accordion-parent-section-title" href="#faq-accordion">
                            <h3><?php echo $faqs_title; ?></h3>
                        </a>
                            
                        <div id="faq-accordion" class="accordion-section-content">
                            
                            <?php
                            $faq_cat = get_sub_field('faq_category'); 
                            
                            $args = array(
                                'faq-categories' => $faq_cat->slug,
                                'posts_per_page' => -1,
                                'post_type' => 'faqs',
                                'orderby' => 'title',
                                'order' => 'ASC'
                            );
                            $faqs = new WP_Query($args); ?>

                            <?php if($faqs->have_posts()): ?>

                            <div class="accordion">
                                <?php while($faqs->have_posts()): ?>
                                <?php $faqs->the_post(); ?>

                                <div class="accordion-section">
                                    <a class="accordion-section-title" 
                                       href="#accordion-<?php echo get_the_ID();?>">
                                        <h4>
                                            <?php echo get_the_title();?>
                                        </h4>
                                    </a>
                                    <div id="accordion-<?php echo get_the_ID();?>" 
                                         class="accordion-section-content">
                                        <?php the_content(); ?>
                                    </div><!--end .accordion-section-content-->
                                </div><!--end .accordion-section-->

                                <?php endwhile; ?>

                            </div>
                            <?php if ($faqs_open_content): ?>
                                <div class="faq-content">
                                    <?php echo $faqs_open_content; ?>
                                </div>
                            <?php endif; ?>
                            
                        <?php endif; ?>
                            
                        </div>

                    <?php wp_reset_postdata(); ?>

                    </div>
                    
                </div>
                
            </div>
            
        </div>
        
    </div>
    
</section>
