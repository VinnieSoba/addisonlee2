<section class="row benefits-section">

    <div class="benefits-section--wrapper">
        <h1 style="text-align: center;">BENEFITS OF WORKING WITH ADDISON LEE</h1>
    <div class="benefits-section--cont">

    <?php 

    if(have_rows('benefits_component') ) : 

        while(have_rows('benefits_component') ) : the_row();

        $benefits_image = get_sub_field('icon');
        $benefits_title = get_sub_field('title');
    
    ?>
        <div class="col-md-4">
            <div class="benefits-item">
                <div class="benefits-item__image">
                    <img src="<?php echo $benefits_image; ?>" width="50" height="50" alt="" />
                </div>
                <div class="benefits-item__content">
                    <p><?php echo $benefits_title; ?></p>
                </div>
               
            </div>
        </div>
        <?php endwhile; ?>
    <?php endif; ?>
        </div>
    </div>
</section>