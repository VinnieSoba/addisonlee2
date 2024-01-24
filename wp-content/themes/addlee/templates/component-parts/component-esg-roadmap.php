<section class="roadmap--container">
<div class="container">

<?php 
while(have_rows('esg_roadmap')) : the_row();
$select_background_image = get_sub_field('select_background_image');
$background_image = get_sub_field('background_image');
$title = get_sub_field('header_dark_title');
?>
     <div class="header-title">
        <h2><?php echo $title; ?></h2>
    </div>

    <div class="wrapper <?php if($select_background_image == 'yes') echo 'background-active'; ?>"  style="background-image: url(<?php if($select_background_image == 'yes') echo  $background_image; ?>)">

    <?php while(have_rows('fields')) : the_row();
        $title = get_sub_field('title');
        $image = get_sub_field('image');
        $content = get_sub_field('content');
    ?>

        <div class="col-xs-12 col-md-4 col-lg-4">
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
       
       
    <?php endwhile; ?>
    
    </div>

<?php endwhile; ?>
</div>    
</section>