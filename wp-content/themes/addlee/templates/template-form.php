<!DOCTYPE html>
<html>
<head>
    <?php
    // Template Name: AJAX Form Page
    ?>
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <?php wp_head(); ?>

</head>
    
<body id="ajax-form">
<div class="wrapper">
    <section class="page-content">
        <?php

            $form_id = $_GET['form_id'];
            if ($form_id){
                gravity_form($form_id, $display_title=false, $display_description=false);
            } else {
                echo 'Form not found';
            }

        ?>
    </section>
</div>
    
<?php wp_footer(); ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/src/iframeResizer.contentWindow.min.js"></script>

</body>
</html>
