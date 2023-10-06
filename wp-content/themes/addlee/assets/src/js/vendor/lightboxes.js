jQuery(document).ready(function ($) {
    // lightbox background

    var lightboxWrapper = '<div id="lightbox-content"><div class="loader"></div><div class="lightbox-bg">&nbsp;</div></div>';
    var lightboxContainer = '<div class="lightbox-container animated fadeInUp"><a href="#" class="lightbox-close"><span class="icon-cancel"></span></a>' +
        '<div style="height: calc(100% + 1px);">' +
        '</div></div>';
    
    var popupContainer = '<div class="lightbox-container animated fadeInUp">' +
        '</div>';

    // ajax page content
    
    // Brand popup
    function showBrandPopup() {
        
        $('#lightbox-content').remove();
        $('body').append(lightboxWrapper).addClass('lightbox-open').fadeIn();

        var $content = $('#popup');
        var html_content = $content.html();
        $(popupContainer).prependTo('#lightbox-content');
        $('.lightbox-container').append(html_content);
        $('#lightbox-content .loader').fadeOut();
        
        $.cookie('seen_brand_popup', 'true', {
            expires: 365
        });
        
        return false;
    }

    var seenBrandPopup = $.cookie('seen_brand_popup');
    
    
    if (seenBrandPopup != 'true'  || document.location.href.indexOf('?inApp=1') != 1 ) {
        //showBrandPopup();
    }

    // Close Popup

    $('body').on('click', '.close-popup', function (e) {
        
        e.preventDefault();
        $('#lightbox-content').remove();
        $('body').removeClass('lightbox-open');
        // Hide popup for 1 yr
        $.cookie('seen_brand_popup', 'true', {
            expires: 365
        });
        return false;
    });

    
    
    ////////////////
    // get post content via ajax
    ////////////////

    $('.ajax-page-content').parent().on('click', '.ajax-page-content', function () {

        var $button = $(this);
        var url = $button.attr('href');
        var appSMSLink = $button.attr('data-appsmslink');
        
        $('#lightbox-content').remove();
        $('body').append(lightboxWrapper).addClass('lightbox-open').fadeIn();


        $.get(url, '', function (data) {
            var $content = $(data).find('.entry-content');
            var html_content = $content.html();
            $(lightboxContainer).prependTo('#lightbox-content');
            $('.lightbox-container').append(html_content);
            $('#lightbox-content .loader').fadeOut();
            
            var currentURL = window.location.href;
            if (appSMSLink != ''){
                $('#smslink').attr('value', appSMSLink);
            } else {
                $('#smslink').attr('value', currentURL);
            }
            
        });
        
        
        
        return false;
    });

    // load form via ajax 
    if ($(window).width() > 992) {
        $('.ajax-form').click(function(e) {
            e.preventDefault();
            var $button = $(this);
            var form_id = $button.data('form_id');
            var height = $button.data('iframe-height');
            var width = $button.data('iframe-width');
            var css = {};
            $('body').append(lightboxWrapper).fadeIn();
            if (height && height !== undefined) {
                css.height = height;
            }

            if (width && width !== undefined) {
                css.width = width;
            }

            var $iframe = '<iframe id="lightbox-iframe" src="/ajax-form/?form_id=' + form_id + '" width="100%" onload="jQuery(\'.lightbox-content\').scrollTop(0);"></iframe>';
            var $lightbox = $(lightboxContainer).prependTo('#lightbox-content');
            $($iframe).prependTo('.lightbox-container');
            $('body').addClass('lightbox-open');
            $($iframe).ready(function () {

                $('#lightbox-content .loader').fadeOut();
                $lightbox.find('iframe').iFrameResize({
                    autoResize: true,
                    heightCalculationMethod: 'grow',
                    log: false
                });

            });
        });
    }
    // Close lightbox
    $('body').on('click', '.lightbox-close, .lightbox-bg', function () {
        $('#lightbox-content').remove();
        $('body').removeClass('lightbox-open');
        return false;
    });

    // responsive iframe
    iFrameResize({
        enablePublicMethods: true, // Enable methods within iframe hosted page
        heightCalculationMethod: 'documentElementScroll'
    });
});
