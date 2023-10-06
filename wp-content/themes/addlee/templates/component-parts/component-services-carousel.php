<?php
    $service_main_background = get_sub_field('service_main_background');
    $service_header_title = get_sub_field('service_header_title');
    $service_header_content = get_sub_field('service_header_content');
    $service_carousel_items = get_sub_field('service_carousel_items');
?>

<div  class="container-fluid carousel-container" style="background: <?php echo $service_main_background;?>;">
<article class="carousel service-carousel" style="">
	<?php echo  $service_header_title;?>
	<?php echo  $service_header_content;?>
	<?php if ( have_rows( 'service_carousel' ) ) : ?>
		<ul>

		<?php
        $ii = 0;
		while ( have_rows( 'service_carousel' ) ) :

			if ( intval( $service_carousel_items ) > 0 && intval( $service_carousel_items ) === $ii++ ) {
			    break;
            }

			the_row();
			?>

			<?php
			$service_title                = get_sub_field( 'service_title' );
			$service_image                = get_sub_field( 'service_image' );
			$service_content              = get_sub_field( 'service_content' );
			
			$service_cta_text             = get_sub_field( 'service_cta_text' );
			$service_cta_link             = get_sub_field( 'service_cta_link' );
			$service_cta_background_color = get_sub_field( 'service_cta_background_color' );
			$service_cta_text_color       = get_sub_field( 'service_cta_text_color' );
			$service_secondary_cta        = get_sub_field( 'service_secondary_cta' );
			?>

			
			<li class="slide-image">
				<div class="slide-content image-blocks-simple">
					<div class="slide-inner-content">
					<?php if ( $service_image != '' || $service_image != null ) : ?>
						<img src="<?php echo $service_image;?>">
					<?php endif; ?>
				
					<?php echo $service_title; ?>
					<?php echo $service_content; ?>
					<?php if ( $service_cta_text != '' || $service_cta_text != null ) : ?>
					<!-- CTA-->
						<a href="<?php echo $service_cta_link;?>" class="cta" style="background-color:<?php echo $service_cta_background_color;?>;color:<?php echo $service_cta_text_color;?>"><?php echo $service_cta_text;?></a>
					<!-- END CTA-->
					<?php endif; ?>	
					 <!-- SECONDARY CTA-->
					<?php echo $service_secondary_cta;?>	
					</div>	
				</div>
			</li>

		<?php endwhile; ?>

		</ul>

		<?php endif; ?>

</article>

</div>