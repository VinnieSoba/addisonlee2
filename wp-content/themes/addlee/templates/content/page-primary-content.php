<?php if(is_page(58)) : ?>
<section class="support-search">
    <div class="container">
        <div class="row">
            <article class="col-md-12 col-xs-12">
                <?php get_template_part('templates/component-parts/component', 'custom-search'); ?>
            </article>
        </div>
    </div>
</section>
<?php endif; ?>

<?php if ( !is_front_page() && !is_search() ) : ?>

    <?php while ( have_posts() ) : the_post();

        $bannerheader = get_field('banner_header');
        $bannercontent = get_field('banner_content');
        $draw_line = get_field('draw_line');

        if ( ($bannercontent != '') || ($bannerheader != '') ) : ?>

        <section class="page-primary <?php if ($draw_line) { echo "draw-line"; } ?>">

            <div class="container">

                <div class="row">

                    <article class="col-md-10 col-md-offset-1 col-xs-12">
                        <?php
                        if ($draw_line) { 
                            echo "<div class=\"line primary\"></div>";
                        } ?>
                        <?php
                            if ($bannerheader) :
                                echo '<h2 class="wow fadeInUp" data-wow-delay="0.5s">' . $bannerheader . '</h2>';
                            endif;
                            if($bannercontent) :
                                echo '<div class="banner-content wow fadeInUp" data-wow-delay="0.7s">'.$bannercontent.'</div>';
                            endif;
                        ?>
                    </article>

                </div>

            </div>

        </section>

        <?php endif; ?>

    <?php endwhile; ?>

<?php endif; ?>

<?php wp_reset_postdata(); ?>