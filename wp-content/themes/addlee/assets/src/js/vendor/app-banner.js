jQuery(document).ready(function ($) {

    var getWindw = this;

    $.fn.followTo = function (pos) {
        var $this = this,
            $window = $(getWindw);

        $window.scroll(function (e) {
            if ($window.scrollTop() < pos) {
                $this.css({
                    position: 'absolute',
                    top: pos
                });
            } else {
                $this.css({
                    position: 'fixed',
                    top: 0
                });
            }
        });
    };

    $('#page-navigation').followTo(80);

    // App banner
    function showAppBanner() {
        setTimeout(
            function () {
                $('#app-banner, body').addClass('showBanner');
            },
            1000
        );
    }

    var show_app_banner = $.cookie('show_app_banner');

    // Close App Banner
    $('#app-banner .icon-cancel').click(function () {
        $('#app-banner, body').removeClass('showBanner');

        // Hide App Banner for 2 days
        $.cookie('show_app_banner', 'false', {
            expires: 2
        });
        return false;
    });

    if ($('#app-banner').length > 0 && show_app_banner !== 'false') {
        showAppBanner();
    }
});
