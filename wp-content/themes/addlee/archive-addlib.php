<?php get_header(); ?>

<?php $socialfeed = false; ?>

    <section class="page-content">
		<!--Yoast Breadcrumb-->
		<?php
		get_template_part('templates/content/page', 'breadcrumb');
		?>
        <div class="container">
			<?php if( ! $socialfeed ) : ?>
				<style>
                    .socialfeedrow {
                        margin: 0 auto;
                    }
                    @media only screen and (min-width: 544px) {
                        .socialfeedrow {
                            max-width: 576px;
                        }
                    }
                    @media only screen and (min-width: 768px) {
                        .socialfeedrow {
                            max-width: 720px;
                        }
                    }
				</style>
			<?php endif; ?>

            <div class="row socialfeedrow">

                <div class="<?php echo $socialfeed ? 'col-md-8' : 'col-md-12';?> col-xs-12"<?php echo ! $socialfeed ? ' style="text-align:center;"' : '';?>>

                    <div class="row">
                        <?php 
                        if ( isset($_GET['wifi']) == 1 ) :
                            get_template_part('templates/content/blog', 'archive-wifi');
                        else :
                            get_template_part('templates/content/blog', 'archive'); 
                        endif; 
                        ?>

                    </div>

                    <div class="row">

                        <?php 
                        if (function_exists("pagination")) {
                            pagination($wp_query->max_num_pages);
                        } 
                        ?>
                        <?php wp_reset_query(); ?>

                    </div>

                </div>

				<?php if( $socialfeed ) : ?>
					<div class="col-md-4 col-xs-12">

						<aside class="sidebar">

							<div class="social-feed-container">

							</div>

						</aside>

					</div>
				<?php endif; ?>

            </div>

        </div>

    </section>

<?php get_footer(); ?>