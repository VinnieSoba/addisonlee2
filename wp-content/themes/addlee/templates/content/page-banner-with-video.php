<?php
$url = '';
if ( has_post_thumbnail() ) {
	$url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );

	if ( defined('ENVIRONMENT') && ENVIRONMENT == 'development' ) {

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

<?php
// Used by wp_kses().
$allowed_html = array(
	'a'      => array(
		'href'   => array(),
		'title'  => array(),
		'target' => array(),
		'rel'    => array(),
	),
	'div'    => array(
		'class'    => array(),
		'style'    => array(),
		'data-url' => array(),
	),
	'script' => array(
		'defer' => array(),
		'src'   => array(),
	),
	'p'      => array(
		'style' => array(),
	),
	'br'     => array(),
	'em'     => array(),
	'strong' => array(),
);

$message_banner_display = get_field( 'show_message' );

if ( 'show' === $message_banner_display ) {
	$message_title    = get_field( 'message_title' ) ? get_field( 'message_title' ) : '';
	$message_text     = get_field( 'message_text' ) ? get_field( 'message_text' ) : '';
	$message_width    = get_field( 'message_width' ) ? get_field( 'message_width' ) : '';
	$message_bg_color = get_field( 'message_bg_color' );
	$message_position = get_field( 'message_title_position' ) ? ' text-align:' . get_field( 'message_title_position' ) . ';' : '';
	$message_style_h3 = ' style="' . $message_position . '"';
	$message_output   = '';

	if ( ! empty( $message_title ) || ! empty( $message_text ) ) {
		?>
		<?php
		$message_output .= '<section id="msg-banner" class="template-section flexi-cta full ' . $message_bg_color . ' animated fadeInDown">';

		$message_output .= ( 'content' === $message_width ) ? '<div class="container">' : '';
		$message_output .= '<button id="msg-banner-close" class="icon-cancel"></button>';

		if ( ! empty( $message_title ) ) {
			$message_output .= '<h3 class="message_title"' . $message_style_h3 . '>' . esc_html( $message_title ) . '</h3>';
		}
		if ( ! empty( $message_text ) ) {
			$message_output .= '<div>';
			$message_output .= wp_kses( $message_text, $allowed_html );
			$message_output .= '</div>';
		}

		$message_output .= ( 'content' === $message_width ) ? '</div>' : '';
		$message_output .= '</section>';

		echo $message_output;
	}
}
?>
<?php
/**
 * Embed Widget (for GoFundMe Donate or any other script)
 * Note: The output for this section depends on what is selected - "before" or "after" the Download App Banner etc.
 */
$widget_display = get_field( 'widget_display' );

if ( 'show' === $widget_display ) {

	$widget_position    = get_field( 'widget_position' ) ? get_field( 'widget_position' ) : ''; // Used later on the page, depending on if it's before or after the Download App.
	$widget_code        = get_field( 'widget_code' ) ? get_field( 'widget_code' ) : '';
	$widget_text        = get_field( 'widget_text' ) ? get_field( 'widget_text' ) : '';
	$widget_width       = get_field( 'widget_width' ) ? get_field( 'widget_width' ) : '';
	$widget_title       = get_field( 'widget_title' ) ? '<h3>' . esc_html( get_field( 'widget_title' ) ) . '</h3>' : '';
	$widget_button_link = get_field( 'widget_button_link' ) ? get_field( 'widget_button_link' ) : '';
	$widget_button_text = get_field( 'widget_button_text' ) ? get_field( 'widget_button_text' ) : 'Find Out More';
	$col_width          = 12 - $widget_width;
	$widget_bg_color    = get_field( 'widget_bg_color' );
	$widget_output      = '';

	if ( ! empty( $widget_code ) || ! empty( $widget_text ) ) {
		$widget_output .= '<section id="widget-section" class="template-section flexi-cta ' . $widget_bg_color . ' ">';
		$widget_output .= '<div class="container">';
		if ( ! empty( $widget_code ) ) {
			$widget_output .= '<div id="widget-code" class="col-lg-' . $widget_width . ' col-md-12">';
			$widget_output .= wp_kses( $widget_code, $allowed_html );
			$widget_output .= '</div>';
		}

		if ( ! empty( $widget_text ) ) {
			$widget_output .= '<div id="widget-text" class="col-lg-' . $col_width . ' col-md-12">';

			$widget_output .= $widget_title;
			$widget_output .= wp_kses( $widget_text, $allowed_html );

			if ( ! empty( $widget_button_link ) ) {
				$widget_output .= '<a class="cta" href="' . $widget_button_link . '">' . $widget_button_text . '</a>';
			}

			$widget_output .= '</div>';
		}

		$widget_image_banner = get_field( 'widget_image_banner' );
		if ( $widget_image_banner ) {
			$widget_output .= '<img src="' . $widget_image_banner['url'] . '" alt="' . $widget_image_banner['alt'] . '" />';
		}

		$widget_output .= '</div>';
		$widget_output .= '</section>';
	}
}

$widget_display_banner = get_field( 'widget_display_banner' );

if ( 'show' === $widget_display_banner ) {
	$widget_banner_output      = '';
	$widget_banner_bg_color    = get_field( 'widget_banner_bg_color' );
	$widget_banner_title       = get_field( 'widget_banner_title' ) ? '<h3>' . esc_html( get_field( 'widget_banner_title' ) ) . '</h3>' : '';
	$widget_banner_link        = get_field( 'widget_banner_link' ) ? get_field( 'widget_banner_link' ) : '';
	$widget_banner_button_text = get_field( 'widget_banner_button_text' ) ? get_field( 'widget_banner_button_text' ) : 'Find Out More';

	$widget_banner_output .= '<section id="widget-banner" class="template-section flexi-cta ' . $widget_banner_bg_color . ' ">';
	$widget_banner_output .= '<div class="container">';
	$widget_banner_output .= $widget_banner_title;
	if ( ! empty( $widget_button_link ) ) {
		$widget_banner_output .= '<a class="cta" href="' . $widget_banner_link . '">' . $widget_banner_button_text . '</a>';
	}
	$widget_banner_output .= '</div>';
	$widget_banner_output .= '</section>';
}

if ( 'before_booking' === $widget_position ) {
	echo $widget_output;
	echo $widget_banner_output;
}


$home_hero_style = get_field( 'home_hero_style' );
$select_video_type = get_field( 'select_image_video' );
$background_type = get_field( 'video_background' );
$video_hero_title = get_field('video_hero_title');

$video_hero_subtitle = get_field( 'video_sub_title' );
$video_cta_url = get_field( 'video_cta_url' );
$video_cta_text = get_field( 'video_cta_text' );


	if ( 'yes' == $home_hero_style ) {
		$home_hero_class = 'home-hero';
	} else {
		$home_hero_class = '';
	}


// select video 

if ( $select_video_type == 'video') : ?>
    <section class="hero-video <?php echo $home_hero_class ?>">
        <?php echo $background_type; ?>
		<div class="hero-video--container">
			<h1><?php echo $video_hero_title; ?></h1>
			<h2><?php echo $video_hero_subtitle?></h2>
			<a class="cta" href="<?php echo $video_cta_url?>"><?php echo $video_cta_text; ?></a>
		</div>
    </section>

<!-- else bring in the banner -->
	<?php  else : ?> 

		<?php if ( ! ( is_post_type_archive( 'addlib' ) ) && ! ( is_singular( 'addlib' ) ) && ! ( is_tax( 'categories' ) ) ) : ?>

			<?php if ( ( $url != '' || empty( $banner_bg_color ) == false ) && ! ( is_singular( 'addlib' ) ) ) : ?> 
		
			<section class="page-banner  hero <?php echo $home_hero_class ?>" style="<?php echo $background_style; ?>">

			<?php else : ?>
			
			<section class="page-banner">

			<?php endif; ?>
		
			<div class="content-header">
				<!--Yoast Breadcrumb-->
			    <?php
			    get_template_part('templates/content/page', 'breadcrumb');
			    ?>
				<?php if ( 'yes' == $home_hero_style ) : ?>
						<div class="mobile-home-hero" style="<?php echo $background_style; ?>"></div>
				<?php endif; ?>

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
					if ( 'yes' == $home_hero_style ) :
						if ( get_field( 'show_quickbooker' ) == true ) :
							get_template_part( 'templates/content/page', 'booking-widget' );
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

	</section>	

<?php endif; ?>

	<!-- end background image-->

<?php endif; ?>

<?php endif; ?>