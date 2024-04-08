<?php 
/*
Template Name: Test
*/

get_header();

?>

<section class="test-application">
    <h1 class="test-application--header-title">
        This is a test page
    </h1>
</section>

<section class="query-database">
<?php
//global $wpdb;
$query = "SELECT * FROM `czbhw794wh_posts` ORDER BY `post_date` LIMIT 0,4";
$result = $wpdb->get_results($query);
foreach ($result as $instance) {
?>
<table>
    <tr>
        <td><?php echo $instance->post_title; ?></td><td><?php echo $instance->post_status; ?></td>
    </tr>

</table>
<?php

}

?>
</section>

<?php
get_footer();
?>
