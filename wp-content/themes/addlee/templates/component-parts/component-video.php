<?php if ( get_sub_field( 'video_has_content' ) ): ?>
	<section class="template-section padded black">
		<div class="container">
			<div class="video-block">
				<div class="video-block__video video-wrapper">
					<?php echo get_sub_field( 'video_code' ); ?>
				</div>
				<div class="video-block__content">
					<?php echo get_sub_field( 'content' ) ?>
				</div>
			</div>
		</div>
	</section>
<?php else: ?>
	<section class="template-section padded dark-grey">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="video-wrapper">
						<?php
						echo get_sub_field( 'video_code' );
						?>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>
