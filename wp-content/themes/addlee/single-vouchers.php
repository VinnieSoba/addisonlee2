<?php get_header(); ?>
<section class="page-content">
    <div class="container">

        <div class="row entry-content">

            <div class="col-md-12">


                <div class="">
                <?php while ( have_posts() ) : the_post(); ?>

                     <?php the_content(); ?>

                    <?php 
                        $thedeal = get_field('the_deal');
                        if ($thedeal) {
                            echo '<h3>The Deal</h3>' . $thedeal;
                        }
                    ?>

                    <?php 
                        $promocode = get_field('promo_code');
                        if ($promocode) {
                            echo '<h3>Promo Code</h3>' . $promocode;
                        }
                    ?>

                    <?php 
                        $howtoclaim = get_field('how_to_claim');
                        if ($howtoclaim) {
                            echo '<h3>How to Claim</h3>' . $howtoclaim;
                        }
                    ?>

                    <?php 
                        $details = get_field('the_details'); 
                        if ($details) {
                            echo '<h3>Details</h3>' . $details;
                        }
                    ?>
                    
                    <?php 
                        $voucherslink = get_post_meta($post->ID, 'vouchers_link', true); 
                        if ($voucherslink) {
                            echo '<a href="' . $voucherslink . '" class="cta">Redeem Now</a>';
                        }
                    ?>

                <?php endwhile; ?>

                </div>
            </div>

        </div>

    </div>
</section>
<?php get_footer();?>