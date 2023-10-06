<?php if( get_field('extra_content_panels') == true ) : ?>

    <?php if( have_rows('content_panels') ): ?>

    <?php while ( have_rows('content_panels') ) : the_row(); 

        $columns  = get_sub_field('column_count');
        if ($columns == 6) :
            $div_class = 'col-xs-12 col-md-6 wow fadeInUp';
        elseif ($columns == 4) :
            $div_class = 'col-xs-12 col-md-4 wow fadeInUp';
        elseif ($columns == 3) :
            $div_class = 'col-xs-12 col-md-3 wow fadeInUp';
        endif;
        ?>

    <?php 
    $padded  = get_sub_field('padded');
    $section = get_sub_field('new_section');
    if ($padded == true) : ?>
        <div class="container">
            <div class="row padded">
    <?php else : ?>
        <div class="container-fluid">
            <div class="row no-gutter">
    <?php endif; ?>
                
        <?php if ($section == true) : ?>
            <div class="entry-content">
        <?php else : ?>
            <div class="inner-entry-content">
        <?php endif; ?>         
                
        <?php 
        if( have_rows('panel_content') ): 
        while ( have_rows('panel_content') ) : the_row(); 
        $field_content = get_sub_field('content');
        ?>
                <div class="<?php echo $div_class; ?>">

                    <div class="content">
                    
                        <?php if($field_content != '') : ?>
                            <p><?php echo $field_content; ?></p>
                        <?php endif; ?>
                        
                    </div>

                </div>

            <?php endwhile; ?>

            <?php endif; ?>
                </div>
            </div>

        </div>

    <?php endwhile; ?>    
    <?php endif; ?>
            
<?php endif; ?>