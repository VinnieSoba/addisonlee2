<!DOCTYPE html>
<head <?php language_attributes(); ?>>
    <meta charset="<?php bloginfo( 'charset' ) ?>">
    <title></title>
<?php
wp_head();
?>
</head>
<body <?php body_class(); ?> >
<?php
$homepageBanner = get_field('homepage_banner');
?>

<div class="site-header" style="background-image: url('<?php echo $homepageBanner; ?>');">

    <div class="row">

        <div class="col-md-3">
            <img src="./wp-content/themes/web2.3/assets/images/logos/addisonlee-logo.svg" width="267" height="80" alt="Addison Lee"/>
        </div>
        <div class="col-md-9">
            <div class="navigation">
                <?php 
                wp_nav_menu(array(
                    'menu' => 'Main Menu',
                    'theme_location' => 'My Custom'
                ));

                ?>
            </div>
        </div>
    </div>
</div>

