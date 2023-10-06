<?php
// Template Name: Built Visible Template Airport
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
    <!--if lt IE 9
    script(src='static/assets/html5shiv.min.js')
    
    -->
    <title>Largest & Smallest Airports: Their Daily Aircraft Movements | Addison Lee</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="canonical" href="https://www.addisonlee.com/one-airborne-every-minute/">
    <meta name="description" content="We doubt you need telling, but airports get busy. Have you ever wondered just how many planes leave some of the world's largest and smallest airports in 60 minutes, or even 60 seconds? Check out our new visual to find out!">
    <meta property="og:title" content="The World's Largest &amp; Smallest Airports: 24 hours of Daily Aircraft Movements">
    <meta property="og:description" content="Have you ever wondered just how many planes have left Heathrow or Gatwick, compared to JFK, before you've even brushed your teeth? Find out today, with our mesmerising airport comparison piece!">
    <meta property="og:site_name" content="Addison Lee">
    <meta property="article:publisher" content="https://www.facebook.com/addisonleecabs/">
    <meta property="og:url" content="https://www.addisonlee.com/one-airborne-every-minute/">
    <meta property="og:type" content="website">
    <?php echo("<meta name=\"og:image\" content=\"" . get_template_directory_uri() . "/custom-pages/airport/img/facebook-sharing.jpg\">"); ?>
    <meta name="twitter:title" content="The World's Largest &amp; Smallest Airports: 24 hours of Daily Aircraft Movements">
    <meta name="twitter:description" content="Curious to see how many planes have taken off from some of the world's largest airports by the time you've scrolled the length of your Twitter timeline? Find out today in our new interactive.">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@AddisonLeeCabs">
    <meta name="twitter:url" content="https://www.addisonlee.com/one-airborne-every-minute/">
    <?php echo("<meta name=\"twitter:image\" content=\"" . get_template_directory_uri() . "/custom-pages/sos/img/twitter-sharing.jpg\">"); ?>


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
	<?php echo("<link rel=\"stylesheet\" type=\"text/css\" href=\"" . get_template_directory_uri() . "/custom-pages/airport/css/styles.min.css\">"); ?>
</head>
<body <?php body_class(); ?> >

<?php get_template_part('templates/content/page', 'navigation'); ?>

<!-- Google Tag Manager (noscript)-->
<noscript>
      <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W6H5FZ" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript)-->
    <!-- BV ID to isolate styles and prevent them from conflicting with site styles-->
    <div id="bv__wrapper">
      <header>
        <h1>One airborne every minute <span>Comparing air traffic across the world’s largest and smallest airports</span></h1>
        <ul class="share social sharelinks social__top">
          <li> <a class="link" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=SBLINK" title="Share on Facebook"><i class="icon-facebook"></i></a></li>
          <li><a class="link" target="_blank" href="https://twitter.com/intent/tweet?text=Curious about the numbers behind some of the biggest international airports? Find out here: %0ASBLINK" title="Share on Twitter"><i class="icon-twitter">     </i></a></li>
        </ul>
        <main></main>
      </header>
      <main class="hidden">
        <div class="small__width intro-mobile">
          <p>We doubt you need telling, but airports can get busy! When we looked at just how busy they get, we decided it’s best to let the numbers do the talking. </p>
          <p class="pbreak">Our mesmerising new 24hr aircraft tracker brings to life the daily aircraft movements of some of the world’s largest (and smallest) airports.</p>
          <p class="bold">Tap below to see how many planes have taken off before you’ve even brushed your teeth!</p>
          <div class="cta_bv">Get Started  </div>
        </div>
        <div class="small__width hide-mobile">
          <p>How often have you sat people-watching at the airport? With the great swathes of people walking through the arrival and departure gates every day, it’s hard not to reflect on your surroundings. In fact, the two largest airports in the UK, <a target="_blank" href="https://www.addisonlee.com/services/airport-transfers/heathrow-airport-transfers/">Heathrow</a> and <a target="_blank" href="https://www.addisonlee.com/services/airport-transfers/gatwick-airport-transfers/">Gatwick</a>, broke records last year for the number of passengers who travelled.</p>
        </div>
        <div class="board">
          <div class="overlay">
            <div class="box">
              <p>We doubt you need telling, but airports can get busy! When we looked at just how busy they get, we decided it’s best to let the numbers do the talking. </p>
              <p class="pbreak">Our mesmerising new 24hr aircraft tracker brings to life the daily aircraft movements of some of the world’s largest (and smallest) airports.</p>
              <p class="bold">Click below to see how many planes have taken off before you’ve even brushed your teeth!</p>
              <div class="cta_bv">Get Started</div>
            </div>
          </div>
          <div class="panel left">
            <div class="airports">
              <h2>Airports</h2>
              <ul id="airports"></ul>
            </div>
            <div class="lightbox"></div>
          </div>
          <div class="panel right">
            <h2><span class="mobile-only">Airports</span> Flights per day</h2>
            <ul id="board"></ul>
          </div>
        </div>
        <p class="strapline mobile-load">The chart represents the frequency of flights at each airport, relative to each other. One second represents roughly 30 seconds of real time</p>
        <div class="small__width mobile-load">
          <p>With more and more people travelling to new and exciting destinations, at Addison Lee, we realise that, at times, airports can be overwhelming. To eliminate unnecessary stress and put you at ease, our <a target="_blank" href="https://www.addisonlee.com/services/airport-transfers/">airport transfer</a> drivers are well equipped, professional and knowledgeable in their fields. </p>
        </div>
        <div class="share mobile-load">
          <hr>
          <h5>Share</h5>
          <ul class="share social sharelinks inhead">
            <li> <a class="link" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=SBLINK" title="Share on Facebook"><i class="icon-facebook"></i></a></li>
            <li><a class="link" target="_blank" href="https://twitter.com/intent/tweet?text=https://twitter.com/intent/tweet?text=I've just found out the numbers behind the world's largest and smallest airports. Check them out here: %0ASBLINK" title="Share on Twitter"><i class="icon-twitter"></i></a></li>
          </ul>
        </div>
        <div class="small__width sources mobile-load">
          <h2>Sources</h2>
          <ul class="togglebox">
            <li><a target="_blank" href="http://aci.aero">aci.aero</a></li>
            <li><a target="_blank" href="https://www.airport-technology.com/">airport-technology.com</a></li>
            <li><a target="_blank" href="http://www.atl.com">atl.com</a></li>
            <li><a target="_blank" href="https://www.bbc.co.uk/">bbc.co.uk</a></li>
            <li><a target="_blank" href="http://uk.businessinsider.com/?r=US&amp;IR=T">businessinsider.com</a></li>
            <li><a target="_blank" href="https://centreforaviation.com/">centreforaviation.com</a></li>
            <li><a target="_blank" href="https://www.cnbc.com/world/?region=world">cnbc.com</a></li>
            <li><a target="_blank" href="https://www.gatwickairport.com/">gatwickairport.com</a></li>
            <li><a target="_blank" href="https://www.getsurrey.co.uk/">getsurrey.co.uk</a></li>
            <li><a target="_blank" href="https://www.gov.im/">gov.im</a></li>
            <li><a target="_blank" href="https://www.heathrow.com/">heathrow.com</a></li>
            <li><a target="_blank" href="https://www.hial.co.uk/">hial.co.uk</a></li>
            <li><a target="_blank" href="http://kastellorizo.de">kastellorizo.de</a></li>
            <li><a target="_blank" href="https://www.lonelyplanet.com/">lonelyplanet.com</a></li>
            <li><a target="_blank" href="https://nltimes.nl/">nltimes.nl</a></li>
            <li><a target="_blank" href="https://www.nventthermal.com/">nventthermal.com</a></li>
            <li><a target="_blank" href="http://www.panynj.gov/">panynj.gov</a></li>
            <li><a target="_blank" href="https://uk.reuters.com/">reuters.com</a></li>
            <li><a target="_blank" href="https://www.schiphol.nl/en/">schiphol.nl</a></li>
            <li><a target="_blank" href="https://torontopearson.com/">torontopearson.com</a></li>
            <li><a target="_blank" href="https://tripadvisor.co.uk">tripadvisor.co.uk</a></li>
            <li><a target="_blank" href="https://www.wikipedia.org/">wikipedia.org</a></li>
            <li><a target="_blank" href="http://www.ypa.gr/">ypa.gr</a></li>
          </ul>
        </div>
      </main>
    </div>
    <!-- #############################-->
    <!-- Integration JavaScript script-->
    <!-- #############################-->
    <!-- End of BV Wrapper-->
<?php get_footer(); ?>
<?php echo("<script src=\"" . get_template_directory_uri() . "/custom-pages/airport/js/main.min.js\"></script>"); ?>
</body>
</html>



