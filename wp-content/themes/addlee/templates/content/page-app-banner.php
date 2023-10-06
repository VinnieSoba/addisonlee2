<?php
    $smartBanner = get_field('smart_banner');
    $customTrackingURLS = get_field('custom_banner_tracking_links');
    
    $defaultBannerTitle = get_field('default_banner_title', 'option');
    $customBannerTitle = get_field('custom_banner_title');
    $bannerTitle = $customBannerTitle ? $customBannerTitle : $defaultBannerTitle;
    
    $defaultBannerCopy = get_field('default_banner_copy', 'option');
    $customBannerCopy = get_field('custom_banner_copy');
    $bannerCopyText = $customBannerCopy ? $customBannerCopy : $defaultBannerCopy;


    $defaultBannerCTA = get_field('default_banner_cta', 'option');
    $customBannerCTA = get_field('custom_banner_cta');
    $bannerCTA = $customBannerCTA ? $customBannerCTA : $defaultBannerCTA;

    if ($smartBanner) { ?>
    <div id="app-banner">
        <span class="icon-cancel"></span>
        <div class="app-icon">
        </div>
        <a href="" class="app-link cta" target="_self"><?php echo $bannerCTA; ?></a>
        <div class="banner-copy" target="_parent">
            <span class="banner-title"><?php echo $bannerTitle; ?></span>
            <?php echo $bannerCopyText; ?>
        </div>
    </div>
<?php } ?>