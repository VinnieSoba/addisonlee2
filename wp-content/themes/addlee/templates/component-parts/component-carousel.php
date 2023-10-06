<?php
$carouselName  = get_sub_field( 'carousel_name' );
$carousel_type = get_sub_field( 'carousel_type' );
if ( $carousel_type == 'Global' ) {
	?>
	
<div class="container-fluid carousel-container">
		
	<article class="carousel feature">
		
		<ul>
			<?php
			$items = get_posts(
				array(
					'post_type' => 'slide',
					'tax_query' => array(
						array(
							'taxonomy' => 'slide-category',
							'field'    => 'slug',
							'terms'    => $carouselName,
						),
					),
				)
			);
			if ( $items ) :
				foreach ( $items as $item ) :
					setup_postdata( $item );
					if ( $carouselName == 'app' || 'NHS' == $carouselName ) :
						echo '<li><div class="app-image">' . get_the_post_thumbnail( $item->ID, 'portrait-slide' ) . '</div><div class="slide-content"><div class="slide-border"><h2>' . get_the_title( $item->ID ) . '</h2><p>' . get_the_content( $item->ID ) . '</p></div></div></li>';
					elseif ( $carouselName == 'driver-testimonials' ) :
						echo '<li><div class="slide-content"><div class="slide-border">' . get_the_post_thumbnail( $item->ID, 'portrait-slide' ) . '<p>' . get_the_content( $item->ID ) . '</p></div></div></li>';
					else :
						echo '<li><div class="slide-content"><div class="slide-border">' . get_the_post_thumbnail( $item->ID ) . '<h2>' . get_the_title( $item->ID ) . '</h2><p>' . get_the_content( $item->ID ) . '</p></div></div></li>';
					endif;
				endforeach;
			endif;
			?>
		</ul>
		
	</article>
	
</div>

<?php } else { ?>
	
	<?php
	$carousel_class     = get_sub_field( 'carousel_class' );
	$carousel_sub_class = get_sub_field( 'carousel_sub_class' );
	?>

<div class="container-fluid carousel-container 
	<?php
	if ( $carousel_class ) :
		echo $carousel_class;
endif;
	?>
">

<article class="carousel 
	<?php
	if ( $carousel_sub_class ) :
		echo $carousel_sub_class;
endif;
	?>
">

	<?php if ( have_rows( 'carousel' ) ) : ?>
		<div class="intro-content">
			<?php echo get_field( 'carousel_intro_content' ); ?>
		</div>
		<ul>

		<?php
		while ( have_rows( 'carousel' ) ) :
			the_row();
			?>

			<?php
			$image   = get_sub_field( 'carousel_image' );
			$content = get_sub_field( 'carousel_content' );

			?>

			<?php if ( $image != '' || $image != null ) : ?>
			<li class="slide-image">
				<div class="slide-image-container">
					<div class="slide-image-border">
						<?php if ( $image != '' || $image != null ) : ?>
						<img src="<?php echo $image; ?>" 
							 alt="<?php echo $title; ?>" class="tier">
						<?php endif; ?>
					</div>
				</div>
			<?php else : ?>

			<li class="slide-testimonial">

			<?php endif; ?>

				<div class="slide-content">
					<?php echo $content; ?>
				</div>
			</li>

		<?php endwhile; ?>

		</ul>

		<?php endif; ?>

</article>

</div>
<?php } ?>
