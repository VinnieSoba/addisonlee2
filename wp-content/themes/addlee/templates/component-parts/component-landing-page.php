<?php
$column_class = get_sub_field('landing_column_class');
$heading_title = get_sub_field('heading_title');
if($column_class == 'full black b2b'):
?>
 <section id="apply-now" class="landing-page-content pt3 pb3 <?php echo $column_class; ?>">
 <?php else : ?>
<section class="landing-page-content pt3 pb3 <?php echo $column_class; ?>">
<?php endif; ?>
<div class="heading-title pb2"><h1><?php echo $heading_title; ?></h1></div>
<?php 
    if (have_rows('flexible_columns') ) : 

        while(have_rows( 'flexible_columns' ) ) : the_row(); 
          
            $panels = get_sub_field( 'panels' );
        
            $row_width = get_sub_field('row_width' );

                if($row_width == 'full') : ?> 

                <div class="container-fluid landing-page-wrapper">  
                
                <?php elseif($row_width == 'normal') : ?>

                <div class="container landing-page-wrapper">

                <?php endif;
            ?>

            <?php 
                $column_count = get_sub_field('column_count');

                if($column_count == '12') : 
                    $divclass = "col-xs-12 col-sm-12 col-md-12 col-lg-12";
                elseif($column_count == '6') :
                    $divclass = "col-xs-12 col-sm-12 col-md-6 col-lg-6";
                elseif($column_count == '3') :
                    $divclass = "col-xs-12 col-sm-12 col-md-4 col-lg-4";
                elseif($column_count == '4') :
                    $divclass = "col-xs-12 col-sm-12 col-md-3 col-lg-3";
                endif;
            ?>
                   <?php
                        if(have_rows('fields') ) : 
                            while(have_rows('fields') ) : the_row();
                                $title = get_sub_field('title');
                                $icon = get_sub_field('icon');
                                $image = get_sub_field('image');
                                $content = get_sub_field('content');
    
                                if($panels == 'usp selection') : ?>

                                <div class="inner-content pt1 ptb1 <?php echo $divclass; ?>">
                                    <div class="card-item">
                                        <h4><?php echo $title; ?></h4>
                                        <?php if($icon) : ?>
                                            <img src="<?php echo $icon; ?>" />
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <?php elseif('standard selection') : ?>

                                    <div class="standard-content <?php echo $divclass; ?>" style="
                                        background-image: url('<?php echo $image; ?>'); 
                                        background-repeat: no-repeat; 
                                        background-position-x: center;
                                        background-position-y: center; 
                                        background-size: cover;
                                        background-size: 100%;
                                        height: auto;
                                        width: 35%;
                                        " >
                                        <h4><?php echo $title; ?></h4>
                                        <p><?php echo $content; ?></p>
                                      
                                    </div>

                                <?php endif; ?>   
                                    
                            <?php endwhile; ?>

                        <?php endif; ?> 

            </div>

        <?php endwhile; ?>

    <?php endif; ?>

</section>
    

