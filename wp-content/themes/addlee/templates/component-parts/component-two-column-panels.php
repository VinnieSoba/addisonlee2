    <div class="container-fluid flexi two">
        
    <?php if( have_rows('two_col_panels') ):

        while ( have_rows('two_col_panels') ) : the_row(); ?>

        <div class="row no-gutter">

            <div class="col-lg-6 col-md-8 col-xs-12 panel">
                
                <div class="content">
                    <h2>
                        <span class="gold"><?php echo get_sub_field('panel_header_light'); ?></span>
                        <?php echo get_sub_field('panel_header');?>
                    </h2>
                    <?php echo get_sub_field('panel_content'); ?>
                    
                    <?php if ( get_sub_field('cta_text') ) : 
                        if( get_sub_field('cta_external_page_link') != '' ) :
                            $cta_link = get_sub_field('cta_external_page_link');
                        else: 
                            $cta_link = get_sub_field('cta_page_link');
                        endif;
                    ?>
                    <a class="cta" href="<?php echo $cta_link?>">
                        <?php echo get_sub_field('cta_text'); ?>
                    </a>
                    <?php endif; ?>
                </div>
                
            </div>
            
            <div class="col-lg-6 col-md-4 col-xs-12 image <?php echo get_sub_field('cta_class');?>" 
                 style="background-image:url('<?php echo get_sub_field('panel_image');?>')">
            </div>

        </div>

        <?php endwhile; ?>

    <?php endif; ?>
        
    </div>