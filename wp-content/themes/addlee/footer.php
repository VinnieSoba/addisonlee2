<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */
?>
<?php
if(!is_front_page()) { ?>
<section id="footer-cta" class="template-section beige flexi-cta full grey">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 outer-content">
                <div class="content">
                    <div class="bg-block" style="background-image:url('https://2nefk1477gof28igzh196p3x-wpengine.netdna-ssl.com/wp-content/uploads/2014/08/iPhone6-V2-small.png')"></div>
                    <div class="bg-block" style="background-image:url('https://2nefk1477gof28igzh196p3x-wpengine.netdna-ssl.com/wp-content/uploads/2014/08/iPhone6-V3.png')"></div>
                    <h2> Download the app</h2>
                    <p> Get a car on demand or pre-book up to three months in advance, straight from your phone.</p>
                    <?php echo do_shortcode('[downloadappbtn]'); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php } ?>
    </main>
    <?php get_template_part('templates/widgets/footerfull'); ?>

        <footer class="page-footer" id="page-footer" role="contentinfo">

            <div id="upper-footer" class="footer-section">
                <div class="container">
                    <div class="row no-gutter">
                        <div class="col-md-6 col-xs-12">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-3 col-xs-6 fm-block">
                                        <div class="fm-title primary" href="#fm-book">
                                            Book
                                        </div>
                                        <div id="fm-book" class="fm-menu primary">
                                            <?php if ( has_nav_menu( 'footer-menu-book' ) ) : ?>
                                                <?php wp_nav_menu( array('theme_location' => 'footer-menu-book', 'container' => '', 'items_wrap' => '<ul class="links">%3$s</ul>' )); ?>
                                                    <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-xs-6  fm-block">
                                        <div class="fm-title primary" href="#fm-services">
                                            Services
                                        </div>
                                        <div id="fm-services" class="fm-menu primary">
                                            <?php if ( has_nav_menu( 'footer-menu-services' ) ) : ?>
                                                <?php wp_nav_menu( array('theme_location' => 'footer-menu-services', 'container' => '', 'items_wrap' => '<ul class="links">%3$s</ul>' )); ?>
                                                    <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-xs-6 fm-block">
                                        <div class="fm-title primary" href="#fm-work">
                                            Work With Us
                                        </div>
                                        <div id="fm-work" class="fm-menu primary">
                                            <?php if ( has_nav_menu( 'footer-menu-work' ) ) : ?>
                                                <?php wp_nav_menu( array('theme_location' => 'footer-menu-work', 'container' => '', 'items_wrap' => '<ul class="links">%3$s</ul>' )); ?>
                                                    <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-xs-6 fm-block">
                                        <div class="fm-title primary" href="#fm-drivers">
                                            Drivers
                                        </div>
                                        <div id="fm-drivers" class="fm-menu primary">
                                            <?php if ( has_nav_menu( 'footer-menu-drivers' ) ) : ?>
                                                <?php wp_nav_menu( array('theme_location' => 'footer-menu-drivers', 'container' => '', 'items_wrap' => '<ul class="links">%3$s</ul>' )); ?>
                                                    <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-3 col-xs-6 fm-block">
                                        <div class="fm-title primary" href="#fm-support">
                                            Support
                                        </div>
                                        <div class="fm-menu primary" id="fm-support">
                                            <?php if ( has_nav_menu( 'footer-menu-support' ) ) : ?>
                                                <?php wp_nav_menu( array('theme_location' => 'footer-menu-support', 'container' => '', 'items_wrap' => '<ul class="links">%3$s</ul>' )); ?>
                                                    <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-xs-6 fm-block">
                                        <div class="fm-title primary" href="#fm-company">
                                            Company
                                        </div>
                                        <div id="fm-company" class="fm-menu primary">
                                            <?php if ( has_nav_menu( 'footer-menu-company' ) ) : ?>
                                                <?php wp_nav_menu( array('theme_location' => 'footer-menu-company', 'container' => '', 'items_wrap' => '<ul class="links">%3$s</ul>' )); ?>
                                                    <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-xs-6 fm-block">
                                        <div class="fm-title primary" href="#fm-priority">
                                            Accounts
                                        </div>
                                        <div id="fm-priority" class="fm-menu primary">
                                            <?php if ( has_nav_menu( 'footer-menu-priority-accounts' ) ) : ?>
                                                <?php wp_nav_menu( array('theme_location' => 'footer-menu-priority-accounts', 'container' => '', 'items_wrap' => '<ul class="links">%3$s</ul>' )); ?>
                                                    <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-xs-6 fm-block">
                                        <div class="fm-title primary" href="#fm-airport">
                                            Airport Transfers
                                        </div>
                                        <div id="fm-airport" class="fm-menu primary">
                                            <?php if ( has_nav_menu( 'footer-menu-airport-transfers' ) ) : ?>
                                                <?php wp_nav_menu( array('theme_location' => 'footer-menu-airport-transfers', 'container' => '', 'items_wrap' => '<ul class="links">%3$s</ul>' )); ?>
                                                    <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="lower-footer" class="footer-section">
                <div class="container">
                    <div class="row no-gutter" href="#middle-accordion">
                        <div class="fm-title global">
                        UK Services
                        </div>
                        <div class="fm-menu global">
                            <ul class="row">
                                <li class="col-md-2 col-xs-6"><a href="https://www.addisonlee.com/stratford/">Stratford</a></li>
                                <li class="col-md-2 col-xs-6"><a href="https://www.addisonlee.com/waterloo/">Waterloo</a></li>
                                <li class="col-md-2 col-xs-6"><a href="https://www.addisonlee.com/soho/">Soho</a></li>
                                <li class="col-md-2 col-xs-6"><a href="https://www.addisonlee.com/crystal-palace/">Crystal Palace</a></li>
                                <li class="col-md-2 col-xs-6"><a href="https://www.addisonlee.com/angel/">Angel</a></li>
                                <li class="col-md-2 col-xs-6"><a href="https://www.addisonlee.com/clapham/">Clapham</a></li>
                                <li class="col-md-2 col-xs-6"><a href="https://www.addisonlee.com/mayfair/">Mayfair</a></li>
                                <li class="col-md-2 col-xs-6"><a href="https://www.addisonlee.com/victoria/">Victoria</a></li>
                                <li class="col-md-2 col-xs-6"><a href="https://www.addisonlee.com/wimbledon/">Wimbledon</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div id="bottom-footer" class="footer-section">
                <div class="container-fluid">
                    <div class="row">

                        <div id="footer-social" class="col-md-5 col-xs-12">
                            <ul>
                                <li class="inline">
                                    <a href="https://www.facebook.com/addisonleecabs/" target="_blank" class="icon-facebook">

                                    </a>
                                </li>
                                <li class="inline">
                                    <a href="https://twitter.com/AddisonLeeCabs/" target="_blank" class="icon-twitter">

                                    </a>
                                </li>
                                <li class="inline">
                                    <a href="https://www.linkedin.com/company/addison-lee/" target="_blank" class="icon-linkedin">

                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div id="footer-logo" class="center col-md-2 col-xs-12">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/logos/logo-letters.png" width="70" height="40" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
                        </div>

                        <div id="footer-terms" class="col-md-5 col-xs-12">
                            <?php if ( has_nav_menu( 'footer-menu-terms' ) ) : ?>
                                <?php wp_nav_menu( array('theme_location' => 'footer-menu-terms', 'container' => '', 'items_wrap' => '<ul class="terms-menu">%3$s</ul>' )); ?>
                                    <?php endif; ?>
                                        <p class="copyright">
                                            &copy; <?php echo date("Y");?> Addison Lee Limited. All rights reserved.
                                        </p>

                        </div>

                    </div>
                </div>
            </div>
        </footer>
        <?php if (getenv( 'HTTP_GEOIP_COUNTRY_CODE' ) === 'US') {
            get_template_part('templates/content/page', 'geotarget-popup');
        }
        ?>
        <!-- wrapper end -->
        <?php get_template_part('templates/content/page', 'brand-popup'); ?>
            <?php wp_footer(); ?>

                    </body>

                    </html>
