<?php 
$column_class = get_sub_field('column_class');
$join_us_title = get_sub_field('join_us_title');
$join_us_image = get_sub_field('join_us_image');
$gallery = get_sub_field('gallery');
$banner_content = get_sub_field('banner_content');
$position_of_image = get_sub_field('position_image');
$heading_title = get_sub_field('heading_title');
$selection = get_sub_field('selection');
$video = get_sub_field('video');
?>

<section class="row careers-at-join-the-family <?php echo $column_class; ?>">
        <?php if( $column_class == 'black') : ?>
            <h1 style="text-align: center; color: #fff; padding-top:1em; padding-bottom:2em;"><?php echo $heading_title; ?></h1>
        <?php else : ?>
            <?php if ($heading_title) : ?>
            <h1 style="text-align: center"><?php echo $heading_title; ?></h1>
            <?php endif; ?>
        <?php endif; ?>
    <div class="careers-at-join-the-family--wrapper">
        <div class="careers-at-join-the-family--cont">
            <div class="careers-at-join-the-family__content col-sm-12 col-md-6 col-lg-6">
                <?php if($position_of_image == 'left') : ?>
                    <?php if($selection == 'image') : ?>
                            <img src="<?php echo $join_us_image; ?>" width="100%" height="auto"/> 
                        <?php elseif($selection == 'video'): ?>
                            <iframe src="<?php echo $video; ?>" width="100%" height="600" class="careers-the-point" frameborder="0"  webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        <?php elseif($selection == 'gallery') : ?>
                            <?php echo $gallery; ?>
                    <?php endif; ?>
                <?php else : ?>
                    <?php if($column_class == 'black') : ?>
                        <h1 style="color: #fff"><?php echo $join_us_title; ?></h1>
                        <p style="color: #fff"><?php echo $banner_content; ?></p> 
                    <?php else : ?>  
                    <h1><?php echo $join_us_title; ?></h1>
                    <p><?php echo $banner_content; ?></p>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
            <div class="careers-at-join-the-family__img col-sm-12 col-md-6 col-lg-6">
                <?php if($position_of_image == 'left') : ?>
                    <?php if($column_class == 'black') : ?>
                        <h1 style="color: #fff"><?php echo $join_us_title; ?></h1>
                        <p style="color: #fff"><?php echo $banner_content; ?></p> 
                        <?php else : ?>  
                        <h1><?php echo $join_us_title; ?></h1>
                        <p><?php echo $banner_content; ?></p>
                    <?php endif; ?>
                    
                <?php else : ?>
                    <?php if( $selection == 'gallery') :?>
                        <?php echo $gallery; ?>
                    <?php else : ?>
                        <img src="<?php echo $join_us_image; ?>" width="100%" height="auto"/>
                    <?php endif; ?>
                <?php endif; ?>
            </div> 
        </div>
    </div>
</section>