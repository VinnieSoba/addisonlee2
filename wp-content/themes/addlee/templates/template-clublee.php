<?php
// Template Name: ClubLee
get_header(); ?>

<section class="page-content">

    <div class="container-fluid">

        <article class="carousel clublee">

            <?php if( have_rows('clublee_tiers') ): ?>

            <ul>

                <?php while ( have_rows('clublee_tiers') ) : the_row(); ?>

                <?php 
                $image = get_sub_field('tier_image');
                $title = get_sub_field('tier_title');
                $content = get_sub_field('tier_content');
                $points = get_sub_field('tier_points');
                ?>

                <li>
                    <img src="<?php echo $image;?>" alt="<?php echo $title; ?>" class="tier">
                    <div class="slide-content">
                        <h3><?php echo $title; ?></h3>
                        <p><?php echo $content; ?></p>
                        <div class="points">
                            <?php echo $points; ?>
                        </div>
                    </div>
                </li>

                <?php endwhile; ?>

            </ul>

            <?php endif; ?>

        </article>

    </div>

    <div class="container">

        <div class="row">

            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-xs-12">
                <?php while ( have_posts() ) : the_post(); ?>

                    <?php get_template_part( 'templates/content/page', 'content' ); ?>

                <?php endwhile; // end of the loop. ?>
            </div>

        </div>

    </div>

    <div class="container-fluid blocks">

        <div class="row no-gutter">

            <div class="col-lg-10 col-lg-offset-1">
                <?php if( have_rows('info_blocks') ): ?>
                    <?php while ( have_rows('info_blocks') ) : the_row(); ?>

                    <div class="col-md-6 info-blocks">
                        <?php echo get_sub_field('info_content'); ?>
                    </div>

                    <?php endwhile; ?>

                <?php endif; ?>
            </div>

        </div>

    </div>

</section>

<?php get_footer(); ?>