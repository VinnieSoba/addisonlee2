<?php
// Template Name: FAQs
get_header();
the_post();
?>

<section class="page-content content-padding">

    <div class="container entry-content">

        <div class="row">

            <div class="col-md-8 col-md-offset-2">

            <?php    
            $args = array(
                'nopaging' => TRUE,
                'post_type' => 'faqs',
                'post_parent' => 0,
                'orderby' => 'title',

                'order' => 'ASC'
            );
            $faqs = new WP_Query($args); ?>

            <?php if ($faqs->have_posts()): 
                echo '<h3>Top 10 FAQs</h3>';
                ?>

                <?php while($faqs->have_posts()): ?>

                <?php 
                $faqs->the_post();
                $faq_id = get_the_ID();


                $args = array(
                    'nopaging' => TRUE,
                    'post_type' => 'faqs',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'faq-categories',
                            'field'    => 'slug',
                            'terms'    => 'top-10',
                        ),
                    ),
                    'post_parent' => $faq_id,
                    'orderby' => 'menu_order',
                    'order' => 'ASC'
                );

                $c_faqs = new WP_Query($args);
                ?>

                <?php if ($c_faqs->have_posts()): ?>

                <div class="accordion">

                    <?php while($c_faqs->have_posts()): ?>
                    <?php $c_faqs->the_post(); ?>

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

                <?php endif; ?>

                <?php wp_reset_postdata(); ?>

                <?php endwhile; ?>

            <?php endif; ?>

            <?php wp_reset_postdata(); ?>



            <?php    
            $args = array(
                'nopaging' => TRUE,
                'post_type' => 'faqs',
                'post_parent' => 0,
                'orderby' => 'title',
                'order' => 'ASC'
            );
            $faqs = new WP_Query($args); ?>

            <?php if ($faqs->have_posts()): ?>

                <?php while($faqs->have_posts()): ?>

                <?php 
                $faqs->the_post();
                $faq_id = get_the_ID();
                echo '<h3>'.get_the_title().'</h3>';

                $args = array(
                    'nopaging' => TRUE,
                    'post_type' => 'faqs',
                    'post_parent' => $faq_id,
                    'orderby' => 'menu_order',
                    'order' => 'ASC'
                );

                $c_faqs = new WP_Query($args);
                ?>

                <?php if ($c_faqs->have_posts()): ?>

                <div class="accordion">

                    <?php while($c_faqs->have_posts()): ?>
                    <?php $c_faqs->the_post(); ?>

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

                <?php endif; ?>

                <?php wp_reset_postdata(); ?>

                <?php endwhile; ?>

            <?php endif; ?>

            <?php wp_reset_postdata(); ?>

            </div>

        </div>

    </div>

</section>

<?php 
$additionalContent = wpautop(get_post_meta($post->ID, 'additional_content', true)); 

if ($additionalContent) {
   echo '<article class="alt"><div class="col">' . $additionalContent . '</div></article>';
}
?>

<?php get_footer(); ?>
