<?php
global $wpdb;
$query = $wpdb->prepare("
SELECT p1.*, wm2.meta_value, wtx.taxonomy, wtm.term_id, name
FROM $wpdb->posts p1 
LEFT JOIN $wpdb->postmeta wm1 ON (
    wm1.post_id = p1.id
    AND wm1.meta_value IS NOT NULL
    AND wm1.meta_key = '_thumbnail_id'
)
LEFT JOIN $wpdb->postmeta wm2
ON (
    wm1.meta_value = wm2.post_id
    AND wm2.meta_key = '_wp_attached_file'
    AND wm2.meta_value IS NOT NULL
)
LEFT JOIN $wpdb->term_relationships wtr
ON (
    object_id=p1.id
)

LEFT JOIN $wpdb->term_taxonomy wtx
ON (
    wtx.term_taxonomy_id=wtr.term_taxonomy_id
)
LEFT JOIN $wpdb->terms wtm
ON (
    wtm.term_id=wtx.term_id
)
WHERE
p1.post_status='publish'
AND p1.post_type='resource'
AND wtx.taxonomy = 'category'
AND wtm.term_id = 112
ORDER BY wtm.term_id DESC
LIMIT 0,10");
$result = $wpdb->get_results($query);
?>
<?php
foreach ($result as $instance) {
    $image = $instance->meta_value;
    ?>
    
    <div class="col-sm-6 col-md-3 col-lg-3 card">
        <div class="card-img-top card-image-cont" style="background-size: inherit; background-repeat: no-repeat; background-image: url('http://localhost/addisonlee2/wp-content/uploads/<?php echo $image; ?>')"></div>
        <div class="card-body">
        <div class="tags">
            <?php echo $instance->name; ?>
        </div>
        <div class="card-title-cont"> 
                <a class="card-title"><?php echo $instance->post_title; ?></a>
                <p>Lorem ipsum text goes here</p>
                <a href="<?php echo $instance->post_name; ?>" class="resources-btn btn-primary">See More</a>
        </div>
        </div>
    </div>
    
    <?php
    
    }
?>

