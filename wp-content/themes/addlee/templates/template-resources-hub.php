<?php
/*
Template Name: Resource Hub
*/
get_header();

?>

<?php

function getAll() {
    get_template_part('templates/component-parts/component', 'get-all');
}
?>

<section class="resource-hub-cont">
    <div class="container">
    <div class="row">
        <div class="col-md-6 category-list">
            <?php get_template_part('templates/component-parts/component', 'category-list'); ?>
        </div>
        <div class="col-md-6 search-form">
            <input type='text' onkeyup="search()" id='myInput' name='search-input' placeholder="Search by resource title">
        </div>
    </div>
    </div>
    
    <div class="container">
    <div class="row" id="card-row">
        <?php echo getAll(); ?>
    </div>
</section>
<?php
get_footer();
?>