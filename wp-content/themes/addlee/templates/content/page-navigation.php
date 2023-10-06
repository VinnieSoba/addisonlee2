<!-- ******************* The Navbar Area ******************* -->
<header class="page-navigation header" id="page-navigation">

    <div class="container-fluid">

        <div class="row no-gutter">

            <div id="off-canvas-icon" class="col-sm-1 col-xs-2">
                <button class="menu-icon spin" type="button">
                    <span class="menu-icon-box">
                        <span class="menu-icon-inner"></span>
                    </span>
                </button>
            </div>

            <div class="col-xl-3 col-lg-1 col-sm-7 col-xs-2">
                <div class="navbar-header">
										<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">

												<?php
												// Check if new home page style is active
												$home_hero_style = get_field( 'home_hero_style' );
												if ( 'yes' == $home_hero_style ) :
														$logo_large = '/assets/images/logos/addlee-logo-2.svg';
												else :
														$logo_large = '/assets/images/logos/logo.svg';
												endif;
												?>
														<img class="logo-large" src="<?php echo get_template_directory_uri() . $logo_large ?>" alt="<?php bloginfo( 'name' ); ?>" width="267" height="80">
                            <img class="logo-small" src="<?php echo get_template_directory_uri();?>/assets/images/logos/logo-letters.png" alt="<?php bloginfo( 'name' ); ?>" width="47" height="27">
                        </a>
                </div>
            </div>

            <div class="col-xl-6 col-lg-7 hidden-md-down">
                <nav id="main-navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
                    <?php wp_nav_menu(
                        array(
                            'theme_location' => 'primary',
                            'container' => false,
                            'container_class' => '',
                            'menu_class' => 'main-menu',
                            'fallback_cb' => '',
                            'menu_id' => 'main-menu',
                            'walker' => new wp_bootstrap_navwalker()
                        )
                    ); ?>
                </nav>
            </div>

            <div class="col-xl-3 col-lg-4 col-sm-4 col-xs-8">
                <div id="header-options">

                <div id="sign-in">
                        <a id="logged-out-btn" href="https://book.addisonlee.com/al/registration" class="cta"><span>Sign in</span></a>
                        <a id="logged-in-btn" class="animated slideInRight" href="#"><span class="welcome-label">Welcome</span><span class="display-name"></span>
                            <span class="icon-user"></span></a>
                        <nav id="user-nav-links" class="off-canvas-menu">
                            <?php wp_nav_menu(
                                array(
                                    'theme_location' => 'user-links',
                                    'container' => false,
                                    'container_class' => '',
                                    'menu_class' => 'booking-menu',
                                    'fallback_cb' => '',
                                    'menu_id' => '',
                                    'walker' => new wp_bootstrap_navwalker()
                                )
                            ); ?>
                        </nav>

                    </div>
                    <div id="make-booking">
                        <a href="https://book.addisonlee.com/al/booking/new/car?bookingType=CAR" class="cta logged-out-btn"><span>Make a Booking</span></a>

                        <nav id="booking-nav-links" class="off-canvas-menu">
                            <?php wp_nav_menu(
                                array(
                                    'theme_location' => 'booking-links',
                                    'container' => false,
                                    'container_class' => '',
                                    'menu_class' => 'booking-menu',
                                    'fallback_cb' => '',
                                    'menu_id' => '',
                                    'walker' => new wp_bootstrap_navwalker()
                                )
                            ); ?>
                        </nav>

                    </div>
                </div>


        </div>

        </div>

        <?php if ( is_post_type_archive('addlib') || is_singular('addlib') || is_tax('categories')) { ?>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <nav id="sub-nav-links" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
                <?php wp_nav_menu(
                    array(
                        'theme_location' => 'addlib-menu',
                        'container' => false,
                        'container_class' => '',
                        'menu_class' => 'addlib-menu',
                        'fallback_cb' => '',
                        'menu_id' => 'addlib-menu',
                        'walker' => new wp_bootstrap_navwalker()
                    )
                ); ?>
                </nav>
            </div>
        </div>
        <?php } ?>

    </div>
    <?php get_template_part('templates/content/page', 'nav-off-canvas'); ?>

</header>
<!-- .wrapper-navbar end -->
