<?php
// Template Name: Home Template
get_header();
?>

<?php 
$bannerUNwomensImage = get_field('banner_image');
$bannerUNwomensText = get_field('banner_text');
$bannerUNwomensCTALink = get_field('banner_cta_link');
$bannerUNwomensCTAbutton = get_field('banner_button');
$bannerUNwomensLogoUn = get_field('banner_logo_un');
$bannerUNwomensLogoAl = get_field('banner_logo_al');

?>
    <!--<section class="page-content">
    <div class="container-un-womens--banner" style="position: relative; display: flex; flex-direction: column; align-items: center; justify-content: center; height: 480px; background-repeat: no-repeat; background-size: cover; background-image: url('<?php //echo $bannerUNwomensImage; ?>')">
            <div class="container-un-womens--logo" style="display: flex; flex-direction: row; position: absolute; right: 0; top: 10px; padding: 50px;">
                <div class="container-un-womens--logo-un" style="margin-right: 116px;"><img src="<?php //echo $bannerUNwomensLogoUn; ?>"></div>
                <div class="container-un-womens--logo-al"><img src="<?php //echo $bannerUNwomensLogoAl; ?>"></div>
            </div>
            <div class="container-un-womens--banner-text" style="max-width: 1133px; width: 100%" ><h1 style="font-size: 25px; line-height: 1.2em; color: #fff; text-transform: initial;padding-top: 55px;"><?php //echo $bannerUNwomensText; ?></h1>
                <a href="<?php //echo $bannerUNwomensCTALink?>" class="cta"><?php //echo $bannerUNwomensCTAbutton; ?></a>
            </div>
        </div>
    -->

        <?php get_template_part('templates/component-parts/component', 'marketing');
        // check if the flexible content field has rows of data
        if( have_rows('flexible_components') ):

            // loop through the rows of data
            while ( have_rows('flexible_components') ) : the_row();

                if( get_row_layout() == 'featured_cta' ):

                    get_template_part('templates/component-parts/component', 'featured-cta');

                elseif( get_row_layout() == 'video' ):

                    get_template_part('templates/component-parts/component', 'video');

                elseif( get_row_layout() == 'black_taxi_component' ):

                    get_template_part('templates/component-parts/component', 'black-taxi');     

                elseif( get_row_layout() == 'flexible_cols' ):

                    get_template_part('templates/component-parts/component', 'flexible-columns');

                endif;

            endwhile;

        else :

        endif;
        ?>

    <?php get_template_part('templates/content/page', 'relevant'); ?>

    </section>


<?php get_footer(); ?>
