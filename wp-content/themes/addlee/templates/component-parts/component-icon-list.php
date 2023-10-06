<?php 
$icon_list_class = get_sub_field('icon_list_class'); 
$featured_cta_link_custom_html = get_sub_field('featured_cta_link_custom_html');
?>
    <div class="template-section list-icons grey <?php echo $icon_list_class;?>">
        <div class="container">
            <div class="row">
                <article class="col-md-10 col-md-offset-1 col-xs-12">
                    <h2><?php echo the_sub_field('icon_list_header');?></h2>
                    <p><?php echo the_sub_field('icon_list_text');?></p>
                </article>
            </div>
            <div class="icons-list row">
                <ul class="tiles col-md-10 col-md-offset-1 col-xs-12">
                <?php $i = 0; ?>
                <?php while( have_rows('icon_list') ): the_row();?>

                     <li class="col-md-3 wow fadeInUp" data-wow-delay="<?php echo $i;?>s">
                            <div class="tile">
                                <div class="wrapper">
                                    <div class="icon">
                                        <?php echo get_sub_field('icon_list_icon');?>
                                    </div>
                                    <h4><?php echo get_sub_field('icon_list_title'); ?></h4>
                                    
                                </div>
                            </div>
                        </li>

                    <?php $i += .20; ?>

                        <?php endwhile;?>
                    </ul>

            </div>

        </div>




    </div>
