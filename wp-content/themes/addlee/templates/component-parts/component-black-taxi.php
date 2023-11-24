<?php
$background_color = get_sub_field('black_taxi_background_color');
$black_taxi_title = get_sub_field('black_taxi_title');
$black_taxi_image = get_sub_field('black_taxi_image');
$black_taxi_content = get_sub_field('black_taxi_content');
?>

<?php
if($background_color){
    $black_taxi_class = 'black-taxi';
} else {
    $black_taxi_class = 'black-taxi black-taxi-container';
}

?>
<section class="template-section <?php echo $black_taxi_class; ?>" style="background-color: <?php echo $background_color; ?>">
        <div class="container">
            <div class="col-md-6">
                <div class="black-taxi--image"><img src="<?php echo $black_taxi_image; ?>"  alt="<?php echo $black_taxi_title; ?>"></div>
            </div>
            <div class="black-taxi--content col-md-6">
                <h3><?php echo $black_taxi_title; ?></h3>
                <div class="cta-button"><?php echo $black_taxi_content; ?></div>
            </div>
        </div>
</section>
