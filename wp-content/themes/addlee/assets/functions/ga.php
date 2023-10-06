<?php 
$host = $_SERVER['HTTP_HOST'];

 if($host == "www.addisonlee.com" && isset($_GET['inApp']) == false) {
// Google Tag Manager
echo "<noscript><iframe src='//www.googletagmanager.com/ns.html?id=GTM-W6H5FZ'
height='0' width='0' style='display:none;visibility:hidden'></iframe></noscript>
<script data-cookieconsent='statistics'>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-W6H5FZ');</script>
<!-- End Google Tag Manager -->";
} 
if($host == 'www.addisonlee.dev' && isset($_GET['inApp']) == false) {
// LOCAL Google Tag Manager 
echo "<noscript><iframe src='//www.googletagmanager.com/ns.html?id=GTM-PX4RJB
height='0' width='0' style='display:none;visibility:hidden'></iframe></noscript>
<script data-cookieconsent='statistics'>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','AAA');</script>
<!-- End Google Tag Manager -->";
} 
if($host == 'staging.addisonlee.com' && isset($_GET['inApp']) == false) {
// STAGING Google Tag Manager
//Google Tag Manager
echo "<noscript><iframe src='//www.googletagmanager.com/ns.html?id=GTM-PX4RJB
height='0' width='0' style='display:none;visibility:hidden'></iframe></noscript>
<script data-cookieconsent='statistics'>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PX4RJB');</script>
<!-- End Google Tag Manager -->";
}
?>