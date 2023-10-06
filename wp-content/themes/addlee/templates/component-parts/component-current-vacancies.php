<!-- We are Hiring Section-->
<?php 

    $current_title = get_sub_field('current_title');
    $current_image = get_sub_field('current_image');

?>

<section class="row current-vacancies">
    <div class="current-vacancies--wrapper">
        <div class="current-vacancies--wrapper__image col-md-6 col-lg-6">
            <img src="<?php echo $current_image; ?>" width="394" height="368" alt="Addison Lee Current Vacancies" />
        </div>
 
        <div class="current-vacancies__parent-content col-md-6 col-lg-6">
                <div class="current-vacancies__heading-title">
                    <h1><?php echo $current_title; ?></h1>
                    <h2>We Are Hiring</h2>
                    <?php
                        while(have_posts()){
                            the_post();
                    ?>
                <?php echo the_content(); ?>
                </div>
        </div>
            <div class="col-md-12 col-lg-12">
                <div class="current-vacancies--wrapper__content">
                    <div class="text-widget">
                            <script src='https://www.workable.com/assets/embed.js' type='text/javascript'></script>
                            <script type='text/javascript' charset='utf-8'>
                                jQuery.noConflict();
                                jQuery(document).ready(function(){

                                whr_embed(407621, {detail: 'titles', base: 'jobs', zoom: 'country', grouping: 'none'});

                                });

                            </script>

                        <div id="whr_embed_hook"></div>
                    </div>
                    <?php
                    }
                    ?>
                </div>
    </div>
</section>