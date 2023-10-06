<?php

    $marketing_left = array();
    $marketing_right = array();

    $columns_width = get_field('marketing_columns_width');
    $column_width_left = 'col-lg-7';
    $column_width_right = 'col-lg-5';


    if($columns_width == 'half') {
        $column_width_left = 'col-lg-6';
        $column_width_right = 'col-lg-6';
        $container_class = 'half-blocks';
    }
    else {
        $container_class = 'standard-blocks';
    }


    // check if the repeater field has rows of data
    if( have_rows('marketing_blocks') ):

        // loop through the rows of data
        while ( have_rows('marketing_blocks') ) : the_row();

            // display a sub field value
            $column = get_sub_field('column');
            $width = get_sub_field('width');
            $title = get_sub_field('block_title');
            $icon = get_sub_field('block_icon');
            $bg_image = get_sub_field('block_background_image');
            $fg_image = get_sub_field('block_foreground_image');
            $content = get_sub_field('block_content');
            $cta = get_sub_field('block_cta');
            $link = get_sub_field('block_entire_link');
            $contentarray = array (
                'column' => $column,
                'width' => $width,
                'title' => $title,
                'icon' => $icon,
                'bg_image' => $bg_image,
                'fg_image' => $fg_image,
                'content' => $content,
                'cta' => $cta,
                'link' => $link,
            );

            if( $column == 'left' ) :
                array_push($marketing_left, $contentarray);
            elseif( $column == 'right' ) :
                array_push($marketing_right, $contentarray);
            else :
            endif;

        endwhile;

    endif; 
?>

<div class="template-section mk-block-container <?php echo $container_class; ?>">
    <div class="container">
        <div class="row tiny-gutter">
            
            <!-- Left hand marketing blocks -->
            <div id="home-pm-l" class="<?php echo $column_width_left; ?> col-md-12">
                
                <?php 
                if(count($marketing_left) > 1) : 
                    $height = 'half';
                else :
                    $height = 'full';
                endif;
                
                foreach ($marketing_left as $row) : ?>
                
                    <div class="mk-block mk-l lazyload <?php echo $row['width']. ' ' . $height; ?>" data-bg="<?php echo $row['bg_image'];?>"  >
                        <?php if($row['cta'] == '' || $row['cta'] == null) :
                            echo '<a href="'.$row['link'].'">';
                        endif; ?>
                            <div data-bg="<?php echo $row['fg_image'];?>" class="fg-image lazyload"></div>
                        <?php if($row['icon'] != '') :
                            echo $row['icon']; 
                        endif;?>
                        
                        <div class="mk-block-content">
                            <h3>
                                <?php echo $row['title'];?>
                            </h3>
                            <?php echo $row['content'];?>
                            <?php echo $row['cta']; ?>
                        </div>
                        <?php if($row['cta'] == '' || $row['cta'] == null) :
                            echo '</a>';
                        endif; ?>
                    </div>
                
                <?php endforeach; ?>
                
            </div>
            <!-- End left hand -->
            
            <!-- Right hand marketing blocks -->
            <div id="home-pm-r" class="<?php echo $column_width_right; ?> col-md-12">
                
                <?php 
                if(count($marketing_right) > 1) : 
                    $height = 'half';
                else :
                    $height = 'full';
                endif;
                
                foreach ($marketing_right as $row) : ?>
                    <div class="lazyload mk-block mk-r <?php echo $row['width']. ' ' . $height; ?>" data-bg="<?php echo $row['bg_image'];?>">
                        <?php if($row['cta'] == '' || $row['cta'] == null) : 
                            echo '<a href="'.$row['link'].'">';
                        endif; ?>
                        <div class="content">
                            <?php if($row['icon'] != '') :
                                echo $row['icon']; 
                            endif;?>

                            <h3><?php echo $row['title'];?></h3>
                            <?php echo $row['content'];?>
                            <?php echo $row['cta']; ?>
                        </div>
                        <?php if($row['cta'] == '' || $row['cta'] == null) : 
                            echo '</a>';
                        endif; ?>

                    </div>
                
                <?php endforeach; ?>

            </div>
            <!-- End right hand -->
            
        </div>
    </div>
</div>