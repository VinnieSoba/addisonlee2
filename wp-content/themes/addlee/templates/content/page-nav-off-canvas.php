<nav class="off-canvas-menu" id="off-canvas-menu">
    <?php wp_nav_menu(
        array(
            'theme_location' => 'primary',
            'container' => false,
            'container_class' => '',
            'menu_class' => 'main-menu',
            'fallback_cb' => '',
            'menu_id' => 'offcanvas-main-menu',
            'walker' => new wp_bootstrap_navwalker()
        )
    ); ?>
</nav>