<?php $tabs_intro = get_sub_field('tabs_intro');
if(have_rows('tabs')) : ?>

<section class="template-section grey">
   
    <?php   
        if ($tabs_intro) {
            echo '<div class="container"><div class="row"><article class="tabs-introduction col-md-10 col-md-offset-1 col-xs-12">'.$tabs_intro.'</article></div></div>';
        }
    ?>
    
    <div class="container">
        

        <div id="horizontalTab">          

            <div class="resp-tabs-container">                                                          
                <?php while ( have_rows('tabs') ) : the_row(); ?>

                <div class="resp-tab-content"> 
                    <div class="col-md-6">
                        <img src="<?php echo get_sub_field('tab_image'); ?>">
                    </div>
                    <div class="col-md-6">
                        <?php echo get_sub_field('tab_content'); ?> 
                    </div>
                </div>

                <?php endwhile; ?>

            </div>

            <ul class="resp-tabs-list">
                <?php while ( have_rows('tabs') ) : the_row();  ?>
                <li class="tab-title"> 
                    <?php echo get_sub_field('tab_title'); ?>
                </li>
                <?php endwhile; ?>
            </ul> 

        </div> 
        
    </div>
    
</section>
      
<?php endif; ?>
