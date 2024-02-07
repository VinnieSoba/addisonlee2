<?php
$flex_cols_class = get_sub_field('flexible_columns_class');
?>
<section class="template-section <?php echo $flex_cols_class;?>">
    <?php while ( have_rows('flexible_columns') ) : the_row();
    $header = get_sub_field('header_dark');
    $header_light = get_sub_field('header_light');
    $width  = get_sub_field('row_width');
    $columns  = get_sub_field('column_count');
    $draw_line = get_sub_field('draw_line');
    $sub_content = get_sub_field('sub_content');

    if($columns == 12) :
        $div_class = 'col-xs-12';
    elseif ($columns == 6) :
        $div_class = 'col-xs-12 col-md-6';
    elseif ($columns == 4) :
        $div_class = 'col-xs-12 col-lg-4';
    elseif ($columns == 3) :
        $div_class = 'col-xs-12 col-md-3';
    elseif ($columns == 2) :
        $div_class = 'col-xs-12 col-md-2';
    endif;
        $panel_class = get_sub_field('panel_class'); ?>


    <?php if($width == 'full') : ?>

    <div class="container-fluid  flexi multi">

    <?php else : ?>

    <div class="container flexi multi">

    <?php endif; ?>

				<?php if( $header || $header_light ) : ?>
					<h2><?php echo $header; ?>
							<span class="gold">
									<?php echo $header_light; ?>
							</span>
					</h2>
                    <div class="sub-content"><p><?php echo $sub_content; ?></p></div>
				<?php endif; ?>

        <div class="row no-gutter">

            <?php

            if( have_rows('fields') ):
            $i = 1;
            while ( have_rows('fields') ) : the_row();
                $field_header = get_sub_field('header');
                $field_image = get_sub_field('image');
                $field_icon = get_sub_field('icon');
                $field_content  = get_sub_field('content');
            ?>

            <article class="panel <?php echo $div_class; ?> <?php echo $panel_class.' '; if($i == 2) : echo 'active'; endif; ?>">
            <?php if($field_image != null && $field_image != '') : ?>
                <div class="image-container">
                    <div class="header-image"
                         style="background-image:url('<?php echo $field_image; ?>')" class="header-image">
                    </div>
                </div>
            <?php endif; ?>

            <?php if($panel_class == 'feature-blocks') : ?>
                <div class="panel-border <?php if($i == 2) : echo 'active'; endif; ?>">

                    <span class="border tr"></span>
                    <span class="border sr"></span>
                    <span class="border br"></span>
                    <span class="border tl"></span>
                    <span class="border sl"></span>
                    <span class="border bl"></span>

            <?php endif; ?>

                <?php if($field_icon != null && $field_icon != ''): ?>

                    <div class="header-icon">
                        <img src="<?php echo $field_icon; ?>">
                    </div>

                <?php endif; ?>

                    <div class="inner-content wow fadeInUp">
                        <?php if($field_header != '') : ?>
                            <h3><?php echo $field_header; ?></h3>
                        <?php endif; ?>
                        <?php if($field_content != '') : ?>
                            <?php echo $field_content; ?>
                        <?php endif; ?>
                    </div>

            <?php if($panel_class == 'feature-blocks') : ?>

                </div>

            <?php endif; ?>

            <?php if($panel_class == 'component-blocks') : ?>

                <?php if($i == 1 || $i == 3) : ?>
                <div class="line-block wow fadeIn" data-wow-delay="0.3s"></div>
                <div class="line-central"></div>
                <?php endif;?>

            <?php endif; ?>

            </article>

        <?php $i++; ?>

        <?php endwhile; ?>

        <?php endif; ?>

        <?php if( get_sub_field('cta') != '' ) : ?>
            <?php echo get_sub_field('cta'); ?>
        <?php endif;?>

        </div>

    </div>

<?php endwhile; ?>
        </section>
