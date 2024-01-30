<section class="roadmap--container">
    
<?php while(have_rows('esg_roadmap')) : the_row(); ?>
        <?php 
            $select_background_image = get_sub_field('select_background_image');
            $background_image = get_sub_field('background_image');
            $title = get_sub_field('header_dark_title');
        ?>
<div class="header-title"><h2><?php echo $title; ?></h2></div>
<div class="container">

    <div class="wrapper <?php if($select_background_image == 'yes') echo 'background-active'; ?>"  style="background-image: url(<?php if($select_background_image == 'yes') echo  $background_image; ?>)"> 

        <div class="row">

            <?php while(have_rows('fields')) : the_row(); ?>
                
                <?php
                $column_count = get_sub_field('column_count');

                    if($column_count == 12) : 
                        $div_class = 'col-xs-12 col-sm-12 col-md-12';
                    elseif($column_count == 6) : 
                        $div_class = 'col-xs-12 col-sm-12 col-md-6 col-lg-6';
                    elseif($column_count == 3) :
                        $div_row = 'row';
                        $div_class = 'col-xs-12 col-sm-12 col-md-4 col-lg-4';
                    elseif($column_count == 4) :
                        $div_class = 'col-xs-12 col-sm-12 col-md-12 col-lg-3';
                    
                    endif;
                ?>
                    <?php while(have_rows('time_line_panel') ) : the_row(); ?>
                                <?php 
                                        $title = get_sub_field('title');
                                        $image = get_sub_field('images');
                                        $content = get_sub_field('content');
                                        $column_count = get_sub_field('column_count');
                                ?>                              

                                <?php if($column_count == 4) : ?>
                                    <div class="row">
                                        <div class="item-card--wrapper <?php echo $div_class; ?>">
                                            <!-- start card item -->
                                            <div class="item-card">
                                                <div class="item-card--image">
                                                    <img src="<?php echo $image; ?>"  class="esg-image-container" alt="addison lee esg" />
                                                </div>
                                                <div class="item-card--content">
                                                    <h4><?php echo $title; ?></h4>
                                                    <p><?php echo $content; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                 <!-- end card item --> 
                                
                                    <?php else : ?>
                                        <div class="item-card--wrapper <?php echo $div_class; ?>">
                                            <!-- start card item -->
                                            <div class="item-card">
                                                <div class="item-card--image">
                                                    <img src="<?php echo $image; ?>"  class="esg-image-container" alt="addison lee esg" />
                                                </div>
                                                <div class="item-card--content">
                                                    <h4><?php echo $title; ?></h4>
                                                    <p><?php echo $content; ?></p>
                                                </div>
                                            </div>
                                        </div>

                                <?php endif; ?>
                                 
                            <?php endwhile; ?> <!-- loop through time line panel--> 
                
            <?php endwhile; ?> <!-- loop through fields-->
        </div>
    </div><!-- div class wrapper -->
<?php endwhile; ?> <!--end esg roadmap loop -->
</div>    
</section>