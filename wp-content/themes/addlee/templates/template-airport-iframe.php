<?php
// Template Name: Built Visible Template Airport iFrame
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <script>
      (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-W6H5FZ');
    </script>
   	<?php echo("<link rel=\"stylesheet\" type=\"text/css\" href=\"" . get_template_directory_uri() . "/custom-pages/airport/css/styles.min.css\">"); ?>
</head>
    <div id="bv__wrapper" style="margin-top: 0;">
      <main class="hidden">    
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
      </main>
    </div>
<?php echo("<script src=\"" . get_template_directory_uri() . "/custom-pages/airport/js/main.min.js\"></script>"); ?>
</html>



