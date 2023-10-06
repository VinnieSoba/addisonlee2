<?php 
$cta_class = get_sub_field('featured_cta_class'); 
$cta_id = get_sub_field('featured_cta_id');
$cta_width = get_sub_field('featured_cta_width');
$featured_cta_link_custom_html = get_sub_field('featured_cta_link_custom_html');

if($cta_width == 'full-width') {
    $cta_coulmns = 'col-md-12';
}
else {
    $cta_coulmns = 'col-md-8 col-md-offset-2';
}
?>

<section <?php if ($cta_id): echo "id=\"".$cta_id."\""; endif; ?> class="template-section beige flexi-cta <?php echo $cta_class;?>">

    <div class="container">    

        <div class="row">

            <div class="<?php echo $cta_coulmns; ?> outer-content">

                <div class="content">
                    <?php if(get_sub_field('featured_cta_background') == true ) : ?>
                    <?php if( have_rows('featured_cta_background_images') ): ?>
                    <?php while ( have_rows('featured_cta_background_images') ) : the_row(); 
                        $image = get_sub_field('image');

                        if(is_front_page()) { ?>
                            <div class="bg-block lazyload"
                                 data-bg="<?php echo $image; ?>"></div>
                        <?php
                        }
                        else {
                        ?>
                            <div class="bg-block"
                             style="background-image:url('<?php echo $image; ?>')"></div>
                        <?php } ?>
                    <?php endwhile; ?>
                    <?php endif; ?>
                    <?php endif; ?>
                    <h2>
                        <?php echo the_sub_field('featured_cta_header');?>
                    </h2>
                    <p>
                        <?php echo the_sub_field('featured_cta_text');?>
                    </p>

                    <?php 
                    $formID = "";
                    $ctalink = "";
                    if(get_sub_field('featured_cta_type') == "External Link" ) : 
                        if(get_sub_field('featured_cta_external_link')) : 
                            $ctalink = get_sub_field('featured_cta_external_link');
                        endif;
                    elseif(get_sub_field('featured_cta_type') == "Internal Page") :
                        if(get_sub_field('featured_cta_link')) :
                            $ctalink = get_sub_field('featured_cta_link');
                        endif;
                    
                    elseif (get_sub_field('featured_cta_type') == "Download the app"):
                    echo do_shortcode('[downloadappbtn]');
                    ?> 
                    
                    <?php elseif (get_sub_field('featured_cta_type') == "Custom HTML"):
                    if(get_sub_field('featured_cta_link_html')) :
                        $get_custom_html = get_sub_field('featured_cta_link_html');
                        echo $get_custom_html;
                    endif;
                    ?> 
                    
                    <?php elseif (get_sub_field('featured_cta_type') == "Shortcode"):
                    if(get_sub_field('featured_cta_shortcode')) :
                        $get_shortcode = get_sub_field('featured_cta_shortcode');
                        echo do_shortcode($get_shortcode);
                    endif;
                    ?> 
                    

                    <?php endif; ?>
                    
                    
                    <?php if(get_sub_field('featured_cta_type') !== "Download the app" && get_sub_field('featured_cta_type') !== "Custom HTML" && get_sub_field('featured_cta_type') !== "Shortcode" ) { ?>
    
                    <a class="cta <?php if( $cta_class !== "apply-now" ) : echo "inverse"; endif; ?> <?php if(get_sub_field('featured_cta_type') == "Form" ) { echo 'ajax-form'; } ?>" <?php if(get_sub_field('featured_cta_type') == "Form" ) { $formID = get_sub_field('featured_cta_form_id'); echo 'data-form_id="'.$formID.'"'; } ?>href="<?php echo $ctalink; ?>">
                        <?php echo get_sub_field('featured_cta_link_text'); ?>
                    </a>
                    
                    <?php } else {
    
    
                    } ?>

                </div>

            </div>

        </div>
        
    </div>
        
</section>