<?php 

$column_class = get_sub_field( 'column_class' ); 

while(have_rows( 'flexible_components' ) ) : the_row();
$column_width = get_sub_field( 'column_width' ); 

if($column_width == 'full-width') :
    $row_width = 'container-fluid';
elseif($column_width == 'normal') :
    $row_width = 'container';
endif;

endwhile;
?>


<div class="content <?php echo $column_class; ?>">
<div class="<?php echo $row_width; ?>">
<div class="row">
<div class="col-md-4 sidebar">
<ul>
<li><a href="/resource/learn-how-to-understand-your-prism-dashboard-indicating-trends-and-spend-on-your-account/">Dashboard</a></li>
<li><a href="/resource/learn-how-to-create-edit-and-update-a-travel-policy-with-prism/">Travel Policy</a></li>
<li><a href="/resource/learn-how-to-manage-multiple-traveller-profiles-in-real-time-access-levels-and-how-to-upload-new-users-to-your-account/">People Management</a></li>
<li><a href="/resource/learn-how-to-access-and-download-all-live-and-historic-booking-data-via-prism/">Job Listing Report</a></li>
</ul>
</div>

<div class="col-md-8">
<?php

while(have_rows( 'flexible_components' ) ) : the_row();
    
$heading_title = get_sub_field('heading_title');
?>
<h2><?php echo $heading_title; ?></h2>
    <?php if(have_rows( 'fields' ) ) : ?>
        <?php while(have_rows( 'fields' ) ) : the_row();
        $content = get_sub_field('content'); 
        $video = get_sub_field( 'video' );
        ?>
            <h3><?php echo $content; ?></h3>
            <?php echo $video; ?>
            
        <?php endwhile; ?>

    <?php endif; ?>

<?php endwhile; ?>

</div>
</div>
</div>
</div>

