<?php if( get_sub_field('tri_blocks_primary_content') != '' ) : ?>

<section class="template-section padded line beige">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="line"></div>
                <?php echo get_sub_field('tri_blocks_primary_content'); ?>
            </div>
        </div>
        
        <div id="tri-blocks" class="primary row">
            
<?php else : ?>
                
<section class="template-section tri-block beige">
    
    <div class="container">
        
        <div id="tri-blocks" class="row">

<?php endif; ?>

    <?php $i = 0; ?>

    <?php if( have_rows('tri_blocks') ): ?>
        
        <?php while( have_rows('tri_blocks') ): the_row();?>

            <div class="col-md-4 wow fadeInUp" data-wow-delay="<?php echo $i;?>s">
                <div class="icon">
                    <?php echo get_sub_field('tri_blocks_icon');?>
                </div>
                <?php echo get_sub_field('tri_blocks_content'); ?>
            </div>

            <?php $i += .20; ?>

        <?php endwhile;?>
            
    <?php endif;?>
            
        </div>

    </div>

</section>