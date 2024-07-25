<section class="awards-container">
<?php while(have_rows('awards_list')) : the_row();
    $header_light = get_sub_field('header_light');
    $columns = get_sub_field('column_count');
    $flex_column = get_sub_field('flex_column');
?>
    <div class="header-light--title">
        <h1><?php echo $header_light; ?></h1>
    </div>
<?php endwhile; ?>

<?php if($columns == 12 ) : ?>
    <div class="awards-container--wrapper__single-item">
<?php else : ?>
    <div class="awards-container--wrapper <?php echo $flex_column; ?>">
<?php endif; ?>
<?php while( have_rows('awards_list') ) : the_row();
   
    if($columns == 4) :
        $div_class = 'col-xs-12 col-md-3';
    elseif($columns == 6) : 
        $div_class ='col-xs-12 col-md-6';
    elseif($columns == 3) :
        $div_class = 'col-xs-4 col-md-4';
    elseif($columns == 12) : 
        $div_class = 'col-xs-12 col-md-12';
    endif;
    ?>
    <?php if(have_rows('fields') ) : ?>
        
        <div class="row" style="margin:0">

        <?php while(have_rows('fields') ) : the_row(); ?>

            <?php if($columns == 12 ) : ?>

                <div class="item-card-single-item <?php echo $div_class; ?>">
                <?php $awards_title = get_sub_field('awards_title'); $awards_image = get_sub_field('awards_image'); ?>
                <img src="<?php echo $awards_image; ?>">
                <p style="font-size: 16px; font-style: normal; line-height: normal; font-weight: 400; text-transform: inherit; padding: 0px"><?php echo $awards_title;?></p>
            </div>  

            <?php else : ?>
                
                <div class="item-card <?php echo $div_class; ?>">
                    <?php $awards_title = get_sub_field('awards_title'); $awards_image = get_sub_field('awards_image'); ?>
                    <img src="<?php echo $awards_image; ?>">
                    <div class="item-card-paragraph">
                        <p style="font-size: 16px; font-style: normal; font-weight: 400; text-transform: inherit; padding: 0px"><?php echo $awards_title;?></p>
                    </div>                    
                </div> 
         
            <?php endif; ?>

        <?php endwhile; ?>

        </div>
 
    <?php endif; ?>

    <?php endwhile; ?>
</div>
</section>