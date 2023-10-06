<?php
$url = '';
if ( has_post_thumbnail() ) {
	$url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );


	if ( ENVIRONMENT == 'production' ) {
		$imgbinary = file_get_contents( $url );
		$img_str   = base64_encode( $imgbinary );

		$check_type = wp_check_filetype( $url );

		$background_style = 'background-image:url(data:' . $check_type['type'] . ';base64,' . $img_str . ');';
	} else {
		$background_style = "background-image:url('" . $url . "');";
	}
}

	// Added Due to Black Friday but not made as ACF to prevent overuse
	$banner_bg_color = get_field( 'banner-bg-color' );

if ( $banner_bg_color ) {
	$background_style .= '  background-color: ' . $banner_bg_color . ';';
}




?>

<?php if ( ! ( is_post_type_archive( 'addlib' ) ) && ! ( is_singular( 'addlib' ) ) && ! ( is_tax( 'categories' ) ) ) : ?>

	<?php if ( ( $url != '' || empty( $banner_bg_color ) == false ) && ! ( is_singular( 'addlib' ) ) ) : ?>

		<section class="page-banner hero" style="<?php echo $background_style; ?>">

	<?php else : ?>

		<section class="page-banner">

	<?php endif; ?>

			<div class="content-header">

				<?php
				$cornerRibbon = get_field( 'header-corner-ribbon' );
				if ( $cornerRibbon ) :
					echo '<div class="corner-ribbon">' . $cornerRibbon . '</div>';
					endif;
				?>
				<article class="container">

				<?php if ( is_404() ) : ?>

					<h1 class="animated fadeIn">We couldn't find that.</h1>

				<?php else : ?>

					<h1 class="animated fadeIn">

					<?php
					if ( is_category() ) :

						single_cat_title();

						elseif ( is_tag() ) :

						elseif ( is_singular( 'faqs' ) ) :

							echo empty( $post->post_parent ) ? 'FAQs:' . get_the_title() : get_the_title();

						elseif ( is_singular( 'meeting-points' ) ) :

							echo 'Pick up: ' . get_the_title();

						elseif ( is_search() ) :

							echo 'Search Results';

						elseif ( is_post_type_archive() ) :

							post_type_archive_title();

						elseif ( is_tax() ) :

							$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
							echo $term->name;

						else :
							$H1 = get_post_meta( $post->ID, 'heading1', true );
							if ( $H1 ) {
								echo $H1;
							} else {
								echo the_title();
							}
						endif;
						?>

					</h1>

					<?php if ( is_singular( 'faqs' ) ) : ?>
					<h2>
						<?php
						$taxonomy = 'faq-categories';
						$terms    = get_the_terms( $post->ID, $taxonomy );
						if ( $terms ) {
							foreach ( $terms as $term ) {
								echo '<a href="' . get_term_link( $term ) . '" class="faqcat">' . $term->name . '</a> ';
							}
						}
						?>
					</h2>
					<?php endif; ?>

					<?php

					if ( get_field( 'introduction' ) ) :
						$introCopy = get_field( 'introduction' );
						if ( $introCopy ) :
							echo '<div class="animated fadeIn">' . $introCopy . '</div>';
						endif;
				endif;

					?>

					<?php
					$formID  = '';
					$ctalink = '';
					if ( get_field( 'header_cta_link_type' ) == 'External Link' ) :
						if ( get_field( 'header_cta_external_link' ) ) :
							$ctalink = get_field( 'header_cta_external_link' );
						endif;
				elseif ( get_field( 'header_cta_link_type' ) == 'Internal Page' || get_field( 'header_cta_link_type' ) == 'Form' ) :
					if ( get_field( 'header_cta_page_link' ) ) :
						$ctalink = get_field( 'header_cta_page_link' );
					endif;

				elseif ( get_field( 'header_cta_link_type' ) == 'Custom HTML' ) :
					if ( get_field( 'header_cta_link_html' ) ) :
						$get_custom_html = get_field( 'header_cta_link_html' );
						echo $get_custom_html;
					endif;

				elseif ( get_field( 'header_cta_link_type' ) == 'Shortcode' ) :
					if ( get_field( 'header_cta_shortcode' ) ) :
						$get_cta_shortcode = get_field( 'header_cta_shortcode' );
						echo do_shortcode( $get_cta_shortcode );
					endif;

				elseif ( get_field( 'header_cta_link_type' ) == 'Download the app' ) :
					echo do_shortcode( '[downloadappbtn]' );
				endif;

				if ( get_field( 'header_cta_link_type' ) == 'External Link' || get_field( 'header_cta_link_type' ) == 'Internal Page' || get_field( 'header_cta_link_type' ) == 'Form' ) :
					?>

					<a class="cta 
					<?php
					if ( get_field( 'header_cta_link_type' ) == 'Form' ) {
						echo 'ajax-form'; }
					?>
					" 
					<?php
					if ( get_field( 'header_cta_link_type' ) == 'Form' ) {
						$formID = get_field( 'header_cta_form_id' );
						echo 'data-form_id="' . $formID . '"'; }
					?>
href="<?php echo $ctalink; ?>">
						<?php echo get_field( 'header_cta_text' ); ?>
					</a>
					   
				<?php endif; ?>

				</article>

			</div>

		</section>

					<?php
					if ( ! is_search() ) :
						if ( get_field( 'show_quickbooker' ) == true ) :
							get_template_part( 'templates/content/page', 'booking-widget' );
						endif;
					endif;
					?>

					<?php if ( is_front_page() ) { ?>

		<!-- <section class="page-banner hero" style="background-image:url('https://www.addisonlee.com/wp-content/uploads/2017/09/7292_ALee_SHOT2_R3_landscape-1.jpg')">
			<div class="content-header"></div>
		</section> -->

		<!-- <section id="home-app-cta" class="template-section beige flexi-cta full beige">
			<div class="container">
				<div class="row lazyloaded bg-app-download" data-bg="/wp-content/themes/addlee/assets/images/iPhone-X-Angle-min.png" style="background-image: url('/wp-content/themes/addlee/assets/images/iPhone-X-Angle-min.png');">
					<div class="col-md-9 outer-content">
						<div class="content">
							<h2>Download the app</h2>
							<p class="offer">Get <b>£10 Off</b> App Bookings using the code: Jan10*</p> 
							<div class="cta-buttons">
								<div class="cta-button"><a href="https://www.addisonlee.com/apps/"><img src="/wp-content/themes/addlee/assets/images/AppStore-540x160-min.png"></a></div>
								<div class="cta-button"><a href="https://www.addisonlee.com/apps/"><img src="/wp-content/themes/addlee/assets/images/GooglePlay-540x160-min.png"></a></div>
							</div>
							<p class="terms">*T&amp;C's apply</p>
						</div>
					</div>
				</div>
			</div>
		</section> -->
		<?php } ?>

					<?php
		endif;
	endif;
?>
