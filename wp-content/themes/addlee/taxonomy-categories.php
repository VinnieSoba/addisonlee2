<?php get_header(); ?>

    <section class="page-content">

        <div class="container">

            <div class="row">

                <div class="col-md-8 col-xs-12">

                    <div class="row">

                        <?php get_template_part('templates/content/blog', 'archive'); ?>

                    </div>

                    <div class="row">

                        <?php 
                            if (function_exists("pagination")) {
                                pagination($additional_loop->max_num_pages);
                            } 
                        ?>

                            <?php wp_reset_query(); ?>

                    </div>

                </div>

                <div class="col-md-4 col-xs-12">

                    <aside class="sidebar">

                        <div class="social-feed-container">

                        </div>

                    </aside>

                </div>

            </div>

        </div>

    </section>

    <?php get_footer(); ?>
