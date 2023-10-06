<?php
// Template Name: Built Visible Template
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google Tag Manager-->
    <script>
        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-W6H5FZ');
    </script>
    <!-- End Google Tag Manager-->
    <!--if lt IE 9 script(src='static/assets/html5shiv.min.js') -->
    <title>SOS Packages: Which could save you? | Addison Lee</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="canonical" href="https://www.addisonlee.com/sos-packages/">
    <meta name="description" content="In a quest to cure forgetfulness, our same-day courier service is experimenting with rolling out one SOS package. Cast your vote between the birthday bail-out, passport panic button and hangover survival kit now!">
    <meta property="og:title" content="Addison Lee's SOS Packages: Which could save you in your time of need?">
    <meta property="og:description" content="In a quest to cure forgetfulness, our same-day courier service is experimenting with rolling out one SOS package. Cast your vote between the birthday bail-out, passport panic button and hangover survival kit now!">
    <meta property="og:site_name" content="https://www.addisonlee.com/">
    <meta property="article:publisher" content="https://www.facebook.com/addisonleecabs/">
    <meta property="og:url" content="https://www.addisonlee.com/sos-packages/">
    <meta property="og:type" content="website">
    <?php echo("<meta name=\"og:image\" content=\"" . get_template_directory_uri() . "/custom-pages/sos/img/facebook-sharing.jpg\">"); ?>
    <meta name="twitter:title" content="Addison Lee's SOS Packages: Which could save you in your time of need?">
    <meta name="twitter:description" content="In a quest to cure forgetfulness, our same-day courier service is experimenting with rolling out one SOS package. Cast your vote between the birthday bail-out, passport panic button and hangover survival kit now!">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@AddisonLeeCabs">
    <meta name="twitter:url" content="https://www.addisonlee.com/sos-packages/">
    <?php echo("<meta name=\"twitter:image\" content=\"" . get_template_directory_uri() . "/custom-pages/sos/img/twitter-sharing.jpg\">"); ?>
    <!-- ######################-->

	<?php if(ENVIRONMENT == 'production'){
		require get_template_directory() . '/templates/scripts/scripts-new-relic.php';
	} else if(ENVIRONMENT == 'development'){
		require get_template_directory() . '/templates/scripts/scripts-new-relic-dev.php';
	}
	wp_head();
	// Fix header position when admin bar is showing
	if ( is_admin_bar_showing() ) : ?>

        <style type="text/css">
            header#page-navigation {
                top: 32px !important;
            }
            body:not(.showBanner) #page-navigation {
                top: 32px !important;

            }
            @media screen and ( max-width: 782px) {
                header#page-navigation {
                    top: 46px !important;
                }
            }
        </style>

	<?php endif;
	// Hide header and footer in app pages and selected pages with custom field
	if ( 'yes' == get_field('hide_header_and_footer') || isset($_GET['inApp'] ) ):
		?>

        <style type="text/css">
            body>header,
            body>footer {
                display: none;
            }
            body>#main {
                padding-top: 0;
            }

            #app-banner-full,
            body>#main>section.page-banner {
                display: none
            }
        </style>

	<?php endif; ?>
	<?php echo get_theme_mod( 'understrap_theme_script_code_setting' ); ?>


    <!-- Integration CSS styles-->
    <!-- ######################-->
	<?php echo("<link rel=\"stylesheet\" type=\"text/css\" href=\"" . get_template_directory_uri() . "/custom-pages/sos/css/styles.min.css\">"); ?>
</head>
<body <?php body_class(); ?> >

<?php get_template_part('templates/content/page', 'navigation'); ?>

<!-- BV ID to isolate styles and prevent them from conflicting with site styles-->
<div id="bv__wrapper">
    <!-- Google Tag Manager (noscript)-->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W6H5FZ" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript)-->

    <div class="wrapper">
        <header>
            <h1>Addison Lee's SOS Packages: <span>Which would you want most in a time of need?</span></h1>
            <ul class="share social sharelinks inhead">
                <li> <a class="link" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=SBLINK" title="Share on Facebook"><i class="icon-facebook"></i></a></li>
                <li><a class="link" target="_blank" href="https://twitter.com/intent/tweet?text=Forgotten your passport, your friend's birthday, or your limits? Addison Lee wants to come to the rescue with a choice of 3 'SOS' delivery packages. Vote for your favourite here:%0ASBLINK" title="Share on Twitter"><i class="icon-twitter"></i></a></li>
            </ul>
        </header>
        <div class="container">
            <div class="intro">
                <p class="first">Forgotten <span>your passport</span>, your friend's <span>birthday</span>, or <span>your limits</span>?<br /><span class="bold">at Addison Lee, we’re thinking about new ways we could come to your rescue.</span></p>
                <hr>
                <div class="text">
                    <p>We’re an absent-minded bunch: our research has found that almost two thirds of 18 - 34 year olds describe themselves as forgetful, men are more likely to forget important items than women, and Northern Ireland is the forgetfulness capital of the UK.</p>
                    <p>Indeed, each week our <a target="_blank" href="https://www.addisonlee.com/services/courier-services/same-day/">same day couriers</a> are flooded with requests to ferry forgotten passports to desperate would-be travellers in their time of need.</p>
                    <p>That’s why we’ve come up with the three packages below, and we need your valuable input. Which one would you most like to see rolled out? Cast your vote below!</p>
                </div>
            </div>
            <main>
                <section class="first">
                    <div class="image"></div>
                    <div class="panel-border">
                        <span class="border tr"></span>
                        <span class="border sr"></span>
                        <span class="border br"></span>
                        <span class="border tl"></span>
                        <span class="border sl"></span>
                        <span class="border bl"></span>
	                    <?php echo("<img src=\"" . get_template_directory_uri() . "/custom-pages/sos/img/birthday.jpg\" alt=\"\">"); ?>
                    </div>
                    <div class="box">
                        <div class="box-padding">
                            <!-- The script uses the text after 1. to send the title GTM and sharing-->
                            <h2><i class="icon-first"></i>1. The Birthday Bail-Out  </h2>
                            <hr>
                            <p>Just received that dreaded Facebook alert that it’s your best friend’s birthday? Breathe easy, we have you covered.</p>
                            <h3>Package includes:</h3>
                            <ul class="standard">
                                <li>Personalised card</li>
                                <li>Flowers</li>
                                <li>Bottle of wine or beer</li>
                                <li>Jar of sweets</li>
                                <li>Balloons</li>
                            </ul>
                        </div>
                        <div class="bv-cta" data-id="first"><span>VOTE FOR THIS PACKAGE</span></div>
                    </div>
                </section>
                <section class="second">
                    <div class="image"></div>
                    <div class="panel-border">
                        <span class="border tr"></span>
                        <span class="border sr"></span>
                        <span class="border br"></span>
                        <span class="border tl"></span>
                        <span class="border sl"></span>
                        <span class="border bl"></span>
	                    <?php echo("<img src=\"" . get_template_directory_uri() . "/custom-pages/sos/img/passport.jpg\" alt=\"\">"); ?>
                    </div>
                    <div class="box">
                        <div class="box-wrapper">
                            <div class="box-padding">
                                <!-- The script uses the text after 2. to send the title GTM and sharing-->
                                <h2><i class="icon-second"></i> 2. The Passport Panic Button</h2>
                                <hr>
                                <p>Oh my, you’re that person, arriving at airport security only to realise you’ve forgotten that most important of documents.</p>
                                <h3>Stay put, we’re on our way with:</h3>
                                <ul class="standard">
                                    <li>Passport pick-up service</li>
                                    <li>Boarding pass printing</li>
                                    <li>Charger</li>
                                    <li>Travel-size toiletries</li>
                                    <li>Underwear</li>
                                </ul>
                            </div>
                            <div class="bv-cta" data-id="second"><span>VOTE FOR THIS PACKAGE</span>      </div>
                        </div>
                    </div>
                </section>
                <section class="third">
                    <div class="image"></div>
                    <div class="panel-border">
                        <span class="border tr"></span>
                        <span class="border sr"></span>
                        <span class="border br"></span>
                        <span class="border tl"></span>
                        <span class="border sl"></span>
                        <span class="border bl"></span>
	                    <?php echo("<img src=\"" . get_template_directory_uri() . "/custom-pages/sos/img/hangover.jpg\" alt=\"\">"); ?>
                    </div>
                    <div class="box">
                        <div class="box-wrapper">
                            <div class="box-padding">
                                <!-- The script uses the text after 3. to send the title GTM and sharing-->
                                <h2><i class="icon-third"></i> 3. The Hangover Survival Kit</h2>
                                <hr>
                                <p>Forgot that you just can’t party quite as hard as you used to? Did 'just the one' turn into 'one too many'?</p>
                                <h3>Revitalise with this package:</h3>
                                <ul class="standard">
                                    <li>Bottle of water or energy drink</li>
                                    <li>Painkillers</li>
                                    <li>Mints</li>
                                    <li>Savoury snack</li>
                                    <li>Coffee</li>
                                </ul>
                            </div>
                            <div class="bv-cta" data-id="third"><span>VOTE FOR THIS PACKAGE</span>      </div>
                        </div>
                    </div>
                </section>
            </main>
            <footer>
                <div class="foot-wrapper">
                    <h2 class="reg">CAST YOUR VOTE NOW!</h2>
                    <p>We’re looking to offer just one of these packages, so pick carefully. Whether you’re a bad friend, a careless traveller or an over-indulger, it’s time to have your say!</p>
                </div>
                <div class="bv-tiles">
                    <ul class="choices">
                        <li id="first">
                            <div class="img-wrapper">
                                <div class="small-border">
                                    <span class="border tr"></span>
                                    <span class="border sr"></span>
                                    <span class="border br"></span>
                                    <span class="border tl"></span>
                                    <span class="border sl"></span>
                                    <span class="border bl"></span>
                                    <i class="icon-first desktop-only"></i>
	                                <?php echo("<img src=\"" . get_template_directory_uri() . "/custom-pages/sos/img/birthday-lrg.jpg\" alt=\"\">"); ?>
                                </div>
                            </div>
                            <div class="option"><i class="icon-first mobile-only"></i>
                                <h3>1. The Birthday Bail-Out</h3>
                                <div class="bv-cta bv-tile" data-id="first"><span>VOTE FOR THIS PACKAGE</span>    </div>
                            </div>
                        </li>
                        <li id="second">
                            <div class="img-wrapper">
                                <div class="small-border">
                                    <span class="border tr"></span>
                                    <span class="border sr"></span>
                                    <span class="border br"></span>
                                    <span class="border tl"></span>
                                    <span class="border sl"></span>
                                    <span class="border bl"></span>
                                    <i class="icon-second desktop-only"></i>
	                                <?php echo("<img src=\"" . get_template_directory_uri() . "/custom-pages/sos/img/passport-lrg.jpg\" alt=\"\">"); ?>
                                </div>
                            </div>
                            <div class="option"><i class="icon-second mobile-only"></i>
                                <h3>2. The Passport Panic Button</h3>
                                <div class="bv-cta bv-tile" data-id="second"><span>VOTE FOR THIS PACKAGE</span>    </div>
                            </div>
                        </li>
                        <li id="third">
                            <div class="img-wrapper">
                                <div class="small-border">
                                    <span class="border tr"></span>
                                    <span class="border sr"></span>
                                    <span class="border br"></span>
                                    <span class="border tl"></span>
                                    <span class="border sl"></span>
                                    <span class="border bl"></span>
                                    <i class="icon-third desktop-only"></i>
	                                <?php echo("<img src=\"" . get_template_directory_uri() . "/custom-pages/sos/img/hangover-lrg.jpg\" alt=\"\">"); ?>
                                </div>
                            </div>
                            <div class="option"><i class="icon-third mobile-only"></i>
                                <h3>3. The Hangover Survival Kit</h3>
                                <div class="bv-cta bv-tile" data-id="third"><span>VOTE FOR THIS PACKAGE</span>    </div>
                            </div>
                        </li>
                    </ul>
                    <div class="message">
                        <p>Good choice, thanks for voting! Tell your friends and help make the package of your choice a reality:</p>
                        <ul class="share social sharelinks">
                            <li>
                                <h4>Share</h4>
                            </li>
                            <li> <a class="link" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=SBLINK" title="Share on Facebook"><i class="icon-facebook"></i></a></li>
                            <li class="tweet"><a class="link" target="_blank" href="https://twitter.com/intent/tweet?text=Addison Lee's SOS packages could come to the rescue in your time of need. I've voted for CHOICE, which will you choose? Vote now:%0ASBLINK" title="Share your vote on Twitter"><i class="icon-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
            </footer>
            <div class="signup" style="display:none;">
                <p>Would you like to learn more about the Addison Lee courier service and receive exclusive offers and information from the Addison Lee Group? If so, please enter your email address below:</p>
                <!-- To access the email address submited there will be a global variable window.signup_email accesible once submitted -->
                <div class="form-container">
                    <div class="flex-parent">
                        <input id="email" type="email" placeholder="Enter e-mail" autocomplete="off">
                        <button class="submit" id="send" type="submit" disabled="">Sign up</button>
                    </div>
                    <input id="checkbox" type="checkbox" autocomplete="off">
                    <label for="checkbox">I agree to receive marketing, promotional and product emails from the <a target="_blank" href="https://www.addisonlee.com/addison-lee-group/">Addison Lee Group</a>.<span> By clicking ‘Sign up’, you acknowledge that you have read and understood our <a href="https://www.addisonlee.com/privacy-notice/" target="_blank">Privacy Notice</a>. </span></label>
                </div>
                <div class="response">
                    <p>Thanks! We’ll be in touch.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- #############################-->
    <!-- Integration JavaScript script-->
    <!-- #############################-->
</div> <!-- End of BV Wrapper-->
<?php get_footer(); ?>
<?php echo("<script src=\"" . get_template_directory_uri() . "/custom-pages/sos/js/main.min.js\"></script>"); ?>
</body>
</html>



