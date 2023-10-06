<section class="teams-page" style="background-color: #ddd;">
    <div class="teams-page--wrapper">    
        <h1 style="padding-top: 1em; padding-bottom: 2em; text-align: center;">WHAT MAKES ADDISON LEE GREAT</h1>
        <div class="row teams-page--cont">
            

            <?php if(have_rows('team') ) : ?>
                <?php while(have_rows('team')) : the_row();

                $team_title = get_sub_field('title');
                $team_position = get_sub_field('position');
                $team_content = get_sub_field('content');
                $team_image = get_sub_field('image');

            ?>
            <div class="col-md-4 items">
                    <img src="<?php echo $team_image; ?>" />
                    <h2><?php echo $team_title; ?></h2>
                    <h3><?php echo $team_position; ?></h3>
                    <p><?php echo $team_content; ?></p>
            </div>
                <?php endwhile; ?>
            <?php endif; ?>
                           
        </div>
    </div>
</section>