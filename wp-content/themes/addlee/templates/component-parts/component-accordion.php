<?php if( have_rows('accordions') ): ?>
<div class="accordion">
    
    <?php 
    $i = 1;
    while ( have_rows('accordions') ) : the_row(); 
    ?>

    <div class="accordion-section">
        <a class="accordion-section-title" href="#accordion-<?php echo $i;?>">
            <h3>
                <?php the_sub_field('accordion_title'); ?>
            </h3>
        </a>
        <div id="accordion-<?php echo $i;?>" class="accordion-section-content">
            <p>
                <?php get_sub_field('accordion_content');?>
            </p>
        </div><!--end .accordion-section-content-->
    </div>
    
    <?php 
    $i++;
    endwhile;
    ?>
    
</div>
<?php endif; ?>
