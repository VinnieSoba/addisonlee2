<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>">
    <meta name="google-site-verification" content="yTLczded7HSN3u1SSzq69miQ6fS_i-vZCxG28-Vcuu8" />
	<?php
		if ( 'yes' === get_field('rbc_switch_off_browser_cache_for_this_page_or_post', get_the_ID() ) ) {
			?>
			<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
			<meta http-equiv="Pragma" content="no-cache" />
			<meta http-equiv="Expires" content="0" />
			<?php
		}
	?>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <script type='application/ld+json'>
        {
          "@context": "http://www.schema.org",
          "@type": "Organization",
          "name": "Addison Lee",
          "url": "https://www.addisonlee.com",
          "logo": "https://www.addisonlee.com/img/logos/logo-addisonlee@2x.png",
          "image": "https://www.addisonlee.com/wp-content/uploads/2016/08/brand-image-courier.jpg"
        }
    </script>
    <?php if(defined('ENVIRONMENT') && ENVIRONMENT == 'development'){
        require get_template_directory() . '/templates/scripts/scripts-new-relic.php';
    } else if(defined('ENVIRONMENT') && ENVIRONMENT == 'development'){
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

        <!--[if lte IE 9]>
        <script>
            window.parseTLSinfo = function(data) {
                var version = data.tls_version.split(' ');

                if(version[0] != 'TLS' || version[1] < 1.2) {
                    jQuery('.ie-banner').show();
                    jQuery('.page-navigation').addClass('has-notice');
                }
                else {
                    jQuery('.ie-banner').hide();
                    jQuery('.page-navigation').removeClass('has-notice');
                }
            };
        </script>
        <![endif]-->

    <!-- Start Visual Website Optimizer Asynchronous Code -->
    <script type='text/javascript'>
        var _vwo_code=(function(){
            var account_id=323035,
                settings_tolerance=2000,
                library_tolerance=2500,
                use_existing_jquery=false,
                    /* DO NOT EDIT BELOW THIS LINE */
                f=false,d=document;return{use_existing_jquery:function(){return use_existing_jquery;},library_tolerance:function(){return library_tolerance;},finish:function(){if(!f){f=true;var a=d.getElementById('_vis_opt_path_hides');if(a)a.parentNode.removeChild(a);}},finished:function(){return f;},load:function(a){var b=d.createElement('script');b.src=a;b.type='text/javascript';b.innerText;b.onerror=function(){_vwo_code.finish();};d.getElementsByTagName('head')[0].appendChild(b);},init:function(){settings_timer=setTimeout('_vwo_code.finish()',settings_tolerance);var a=d.createElement('style'),b='body{opacity:0 !important;filter:alpha(opacity=0) !important;background:none !important;}',h=d.getElementsByTagName('head')[0];a.setAttribute('id','_vis_opt_path_hides');a.setAttribute('type','text/css');if(a.styleSheet)a.styleSheet.cssText=b;else a.appendChild(d.createTextNode(b));h.appendChild(a);this.load('//dev.visualwebsiteoptimizer.com/j.php?a='+account_id+'&u='+encodeURIComponent(d.URL)+'&r='+Math.random());return settings_timer;}};}());_vwo_settings_timer=_vwo_code.init();
    </script>
    <!-- End Visual Website Optimizer Asynchronous Code -->

     <!-- Start Full Story Google Tag Manager -->
     <script>
        window['_fs_host'] = 'eu1.fullstory.com';
        window['_fs_script'] = 'edge.eu1.fullstory.com/s/fs.js';
        window['_fs_org'] = 'o-9DT-eu1';
        window['_fs_namespace'] = 'FS';
        (function(m,n,e,t,l,o,g,y){
            if (e in m) {if(m.console && m.console.log) { m.console.log('FullStory namespace conflict. Please set window["_fs_namespace"].');} return;}
            g=m[e]=function(a,b,s){g.q?g.q.push([a,b,s]):g._api(a,b,s);};g.q=[];
            o=n.createElement(t);o.async=1;o.crossOrigin='anonymous';o.src='https://'+_fs_script;
            y=n.getElementsByTagName(t)[0];y.parentNode.insertBefore(o,y);
            g.identify=function(i,v,s){g(l,{uid:i},s);if(v)g(l,v,s)};g.setUserVars=function(v,s){g(l,v,s)};g.event=function(i,v,s){g('event',{n:i,p:v},s)};
            g.anonymize=function(){g.identify(!!0)};
            g.shutdown=function(){g("rec",!1)};g.restart=function(){g("rec",!0)};
            g.log = function(a,b){g("log",[a,b])};
            g.consent=function(a){g("consent",!arguments.length||a)};
            g.identifyAccount=function(i,v){o='account';v=v||{};v.acctId=i;g(o,v)};
            g.clearUserCookie=function(){};
            g.setVars=function(n, p){g('setVars',[n,p]);};
            g._w={};y='XMLHttpRequest';g._w[y]=m[y];y='fetch';g._w[y]=m[y];
            if(m[y])m[y]=function(){return g._w[y].apply(this,arguments)};
            g._v="1.3.0";
        })(window,document,window['_fs_namespace'],'script','user');
    </script>
    <!-- End Full Story Google Tag Manager-->

    <?php require get_template_directory() . '/assets/functions/meta-pixel-tag-man.php'; ?>

    <?php require get_template_directory() . '/assets/functions/chat-bot.php'; ?>

</head>

<body <?php body_class(); ?> >
    <?php // Google Analytics / GTM
        require get_template_directory() . '/assets/functions/ga.php';
        require get_template_directory() . '/templates/scripts/scripts-mobile-detect.php';
        require get_template_directory() . '/assets/functions/app-redirect.php'; ?>

        <?php get_template_part('templates/content/page', 'app-banner'); ?>
        <?php get_template_part('templates/content/page', 'ie-banner'); ?>
        <?php get_template_part('templates/content/page', 'navigation'); ?>

            <main id="main" class="site-main" role="main">
                <div style="
                background-color: #f7f7ef; width: 100%;
                height: 100%;
                padding-top: 3em;
                padding-left: 2em;
                padding-bottom: 2em" class="message-status">
                    <h3 style="
                    color: #494a43;
                    font-weight: 400;
                    letter-spacing: 3px;
                    text-transform: uppercase;
                    text-align: center;
                    ">Service Update</h3>
                    <p>We are currently experiencing technical issues with our booking platforms.</p>
                    <p>You can call us on 0207 387 8888.</p>
                    <p style="margin: 0;">Thank you for your patience whilst we work to resolve this issue.</p>
                </div>
                <?php get_template_part('templates/content/page', ''); ?>

                <?php //get_template_part('templates/content/page', 'banner'); ?>

                <?php get_template_part('templates/content/page', 'banner-with-video'); ?>


                    <?php get_template_part('templates/content/page', 'primary-content'); ?>


