<?php
$showcase_name  = get_sub_field( 'showcase_name' );
$showcase_background     = get_sub_field( 'showcase_background' );
$remove_container_padding   = get_sub_field( 'remove_container_padding' );
if ( $remove_container_padding == "yes" ) :
	$carousel_padding = 'padding-top: 0em; padding-bottom: 0em;';
endif;
if ( $showcase_background )  :
	$carousel_background = 'background:'.$showcase_background.';';
endif;
?>

<div id="<?php echo $showcase_name;?>" class="container-fluid carousel-container" >
    <article class="carousel feature showcase" style="<?php echo $carousel_padding." ".$carousel_background;?>">

		<?php if ( have_rows( 'showcase' ) ) : ?>
            <ul>

				<?php
				while ( have_rows( 'showcase' ) ) :
					the_row();
					?>

					<?php
					$image   = get_sub_field( 'showcase_image' );
					$showcase_background_color  = get_sub_field( 'showcase_background_color' );
					$showcase_heading = get_sub_field( 'showcase_heading' );
					$showcase_content = get_sub_field( 'showcase_content' );
					$showcase_cta = get_sub_field( 'showcase_cta' );
					$showcase_secondary_cta = get_sub_field( 'showcase_secondary_cta' );
					$cta_text = get_sub_field( 'showcase_cta_text' );
					$cta_link = get_sub_field( 'showcase_cta_link' );
					$cta_background_color = get_sub_field( 'showcase_cta_background_color' );
					$cta_text_color = get_sub_field( 'showcase_cta_text_color' );

					?>

					<?php if ( $image != '' || $image != null ) : ?>
                    <li class="slide-image page-banner" style="background-image:url('<?php echo $image; ?>');background-size: cover;" data-bg="background-image:url('<?php echo $image; ?>');">
				<?php else:?>
                    <li class="slide-image page-banner" style="background-color:<?php echo $showcase_background_color;?>;">
				<?php endif; ?>

                    <div class="slide-content">
                        <div class="slide-content-heading">
							<?php echo $showcase_heading; ?>
                        </div>
                        <div class="slide-content-content">
							<?php echo $showcase_content; ?>
                        </div>
                        <div class="slide-content-cta">
                            <a href="<?php echo $cta_link;?>" class="cta" style="background-color:<?php echo $cta_background_color;?>;color:<?php echo $cta_text_color;?>"><?php echo $cta_text;?></a>
                        </div>
                        <div class="slide-content-secondary-cta">
    						<?php echo $showcase_secondary_cta;?>
                        </div>
                    </div>
                    </li>

				<?php endwhile; ?>

            </ul>

		<?php endif; ?>

    </article>

</div>