jQuery(document).ready(function ($) {

    $.support.cors = true;
    
    // Display user displaName if logged in
    var signInBtn = $('#sign-in');
    var signInBtnLink = $('#sign-in a');

    var isManager = false;
    var accountId = '';

    $.ajax({
        url: "https://book.addisonlee.com/al/api/user/accounts",
        xhrFields: {
            withCredentials: true
        }
    }).done(function (response) {
        if (response.data != null && response.isSuccessful == true) {

            if(response.data instanceof Array) {
                for (var i = 0; i < response.data.length; i++) {
                    var account = response.data[i];

                    if(account.isMasterSupervisor == true && isManager == false) {
                        isManager = true;
                        accountId = account.individualId;
                    }
                }
            }
        }

        if(isManager == true) {
            $('.manager-link a').attr("href", 'https://book.addisonlee.com/al/manager/' + accountId + '/people');
        }
        else {
            $('.manager-link').remove();
        }


    });

    $.ajax({
        url: "https://book.addisonlee.com/al/api/user",
        xhrFields: {
            withCredentials: true
        }
    }).done(function (response) {
        if (response.data != null) {
            $(signInBtn).addClass('signed-in');
            $('.display-name').html(response.data.displayName);
            $('#logged-out-btn').hide();
            $('.sign-in-mobile').remove();
            $('#logged-in-btn').css('display', 'block');

            $("#main").addClass('submenu-open');
            $("#make-booking").addClass('signed-in');
            $("#make-booking .cta").addClass('open');
            $("#booking-nav-links").addClass('open');


            $("#user-nav-links .sign-out a").click(function (e) {
                e.preventDefault();

                $.ajax({
                    url: "https://book.addisonlee.com/al/api/logout",
                    xhrFields: {
                        withCredentials: true
                    }
                }).done(function (response) {
                    if (response.isSuccessful == true) {
                        window.location.href = "https://book.addisonlee.com/al/sign-in";
                    }
                });

            });


            $("#logged-in-btn").click(function (e) {
                e.preventDefault();
                // close main menu first
                $('#off-canvas-menu').removeClass('open');
                $('.menu-icon').removeClass('active');

                $('#booking-nav-links').removeClass('open');
                $("#make-booking .cta").removeClass('open');

                $(this).toggleClass('open');
                $("#user-nav-links").toggleClass('open');
                $("#main").toggleClass('signed-in');

                if($(this).hasClass('open')) {
                    $("#main").addClass('submenu-open');
                }
                else {
                    $("#main").removeClass('submenu-open');
                }

            });

        }
    });

    // add padding to page banner if booking widget is present

    if ($('#booking-search-panel').is(':visible')) {
        $('body').addClass('qb-present');
    }

    $('#click-to-call').click(function () {
        $('.call-tooltip').toggleClass('show');
    });


    // scroll to div on click and focus input element
    $('.scroll-to').click(function (e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: $($(this).attr('href')).offset().top - 50
        }, 500);
        // set input ID with data attribute
        var dataID = $(this).attr('data-id');
        // focus on input element
        $(dataID).focus();
        return false;
    });
    // Forms - change border colour on focus 
    $('input,select,textarea').focusin(
        function () {
            $(this).parent('div').css('border-color', '#fedb00');
        }
    ).focusout(
        function () {
            $(this).parent('div').css('border-color', '#e6e5e5');
        });

    // Nice File Input
    $("input[type=file]").nicefileinput({
        label: 'Choose a file'
    });

    // Select Boxes - select or die jQuery plugin - https://github.com/vestman/Select-or-Die
    $('select').not('[multiple]').selectOrDie();

    // mobile menu
    $('.menu-icon').click(function (event) {
        $(window).trigger('resize');
        $('#booking-nav-links').removeClass('open');
        $('.menu-icon').toggleClass('active');
        $('#off-canvas-menu').toggleClass('open');
        $('body').toggleClass('nav-open');
    });

    $('#offcanvas-main-menu').drilldown({
        wrapper_class: 'drilldown panel panel-success',
        menu_class: 'drilldown-menu',
        submenu_class: 'sub-menu',
        parent_class: 'menu-item',
        parent_class_link: 'nav-link',
        active_class: 'active',
        header_class_list: 'breadcrumb',
        header_class: 'breadcrumbwrapper',
        class_selected: 'selected',
        event_type: 'click',
        hover_delay: 300,
        speed: 'fast',
        save_state: false,
        show_count: false,
        count_class: 'dd-count',
        icon_class: 'icon-chevron',
        link_type: 'backlink', //breadcrumb , link, backlink
        reset_text: 'Home', // All
        default_text: 'Main menu',
        show_end_nodes: false, // drill to final empty nodes
        hide_empty: true, // hide empty menu when menu_height is set, header no effected
        menu_height: '200px', // '200px' , false for auto height
        show_header: true,
        header_tag: 'div', // h3
        header_tag_class: 'list-group-item active' // hidden list-group-item active
    });


    // Animate header on on scroll down
    $(function () {
        var shrinkHeader = 100;
        $(window).scroll(function () {
            var scroll = getCurrentScroll();
            if (scroll >= shrinkHeader) {
                $('#page-navigation').addClass('nav-up');
            } else {
                $('#page-navigation').removeClass('nav-up');
            }
        });

        function getCurrentScroll() {
            return window.pageYOffset || document.documentElement.scrollTop;
        }

        if ($('.page-navigation #main-navigation #main-menu li .sub-menu').is(':visible')) {
            $('#main').addClass('sub-menu-present');
        }

    });


    // add ripple effect to menu item click
    $(function () {
        var ink, d, x, y;
        $("#logged-out-btn,#main-menu>li>a,a.cta,.gform_wrapper input[type=\"submit\"]").click(function (e) {
            $(this).find(".ink").remove();
            
            if ($(this).find(".ink").length === 0) {
                
                $(this).prepend("<span class='ink'></span>");
            }

            ink = $(this).find(".ink");
            ink.removeClass("animate");

            if (!ink.height() && !ink.width()) {
                d = Math.max($(this).outerWidth(), $(this).outerHeight());
                ink.css({
                    height: d,
                    width: d
                });
            }

            x = e.pageX - $(this).offset().left - ink.width() / 2;
            y = e.pageY - $(this).offset().top - ink.height() / 2;

            ink.css({
                top: y + 'px',
                left: x + 'px'
            }).addClass("animate-ripple");
        });
    });

    var slick_speed = 1000;

    // Content carousels
    var centerMode = true;
    if ($('.carousel>ul>li').length < 2) {
        centerMode = false;
    }

    $('.carousel.component>ul').slick({
        centerMode: true,
        centerPadding: '50px',
        slidesToShow: 3,
        slidesToScroll: 1,
        focusOnSelect: true,
        dots: true,
        slide: 'li',
        speed: slick_speed,
        variableWidth: true,
        responsive: [{
            breakpoint: 990,
            settings: {
                centerMode: true,
                centerPadding: '0px',
                slidesToShow: 1
            }
        }]
    });

    $('.carousel.testimonial>ul').slick({
        centerMode: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        fade: true,
        focusOnSelect: true,
        dots: true,
        slide: 'li',
        speed: slick_speed,
        variableWidth: true,
        responsive: [{
            breakpoint: 990,
            settings: {
                centerMode: true,
                centerPadding: '0px',
                slidesToShow: 1
            }
        }]
    });

    $('.carousel.showcase>ul').slick({
        autoplay: false,
        autoplaySpeed: 5000,
        centerMode: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        fade: false,
        focusOnSelect: true,
        dots: true,
        prevArrow: false,
        nextArrow: false,
        draggable: true,
        slide: 'li',
        speed: slick_speed,
        infinite: true,
        cssEase: 'linear',
        variableWidth: true,
        variableHeight: true,
        
    });

    $('.carousel.service-carousel>ul').slick({
        centerMode: false,
        centerPadding: '20px',
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 4,
        focusOnSelect: true,
        slide: 'li',
        dots: false,
        speed: slick_speed,
        variableWidth: true,
        
        responsive: [{
            breakpoint: 990,
            settings: {
                centerMode: true,
                centerPadding: '0px',
                slidesToShow: 1
            }
        }]
    });

    $('.carousel.clublee>ul').slick({
        centerMode: true,
        centerPadding: '50px',
        slidesToShow: 3,
        slidesToScroll: 1,
        focusOnSelect: true,
        slide: 'li',
        dots: false,
        speed: slick_speed,
        variableWidth: true,
        customPaging: function (slider, i) {
            return '<span data-role="none">' + (i + 1) + '</span>';
        },
        responsive: [{
            breakpoint: 990,
            settings: {
                centerMode: true,
                centerPadding: '0px',
                slidesToShow: 1
            }
        }]
    });

    $('.carousel.feature>ul').slick({
        centerMode: true,
        centerPadding: '50px',
        slidesToShow: 3,
        slidesToScroll: 1,
        focusOnSelect: true,
        slide: 'li',
        dots: false,
        speed: slick_speed,
        variableWidth: true,
        customPaging: function (slider, i) {
            return '<span data-role="none">' + (i + 1) + '</span>';
        },
        responsive: [{
            breakpoint: 990,
            settings: {
                centerMode: true,
                centerPadding: '0px',
                slidesToShow: 1
            }
        }]
    });

    // Homepage carousel
    var $home_carousel = $('#home-carousel');
    if ($home_carousel.length > 0) {
        $home_carousel.slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 4000,
            arrows: false,
            draggable: true,
            dots: true,
            speed: slick_speed,
            customPaging: function (slider, i) {
                return '<span data-role="none">' + (i + 1) + '</span>';
            },
            onBeforeChange: function () {
                $('.slick-cloned').addClass('slick-clone-active');
            },
            onAfterChange: function () {
                $('.slick-cloned').removeClass('slick-clone-active');
            }
        });
    }

    $(window).load(function () {
        $('.line.primary').each(function () {
            $(this).addClass("draw-line");
        });
        wow = new WOW({
            boxClass: 'wow', // default
            animateClass: 'animated', // default
            mobile: true, // default
            live: true // default
        });
        wow.init();
    });


    $(".panel.feature-blocks").mouseover(function () {
        $(".panel.feature-blocks, .panel-border").removeClass("active");
        $(this).addClass('active');
    });

    $(function () {
        var shrinkHeader = 100;
        $(window).scroll(function () {
            var scroll = getCurrentScroll();
            if (scroll >= shrinkHeader) {
                $('#page-navigation').addClass('nav-up');
            } else {
                $('#page-navigation').removeClass('nav-up');
            }
        });

        function getCurrentScroll() {
            return window.pageYOffset || document.documentElement.scrollTop;
        }

        if ($('.page-navigation #main-navigation #main-menu li .sub-menu').is(':visible')) {
            $('#main').addClass('sub-menu-present');
        }

    });


    $(window).scroll(function () {
        $('.line').not('.primary').each(function () {
            var imagePos = $(this).offset().top;
            var topOfWindow = $(window).scrollTop();
            if (imagePos < topOfWindow + 475) {
                $(this).addClass("draw-line");
            }
        });
        $('.line-central').each(function () {
            var imagePos = $(this).offset().top;
            var topOfWindow = $(window).scrollTop();
            if (imagePos < topOfWindow + 575) {
                $(this).addClass("draw-line");
            }
        });
    });

    $('#verticalTab').easyResponsiveTabs({
        type: 'vertical',
        width: 'auto',
        fit: true
    });

    jQuery('.accordion-parent-section-title').click(function (e) {
        var currentAttrValue = jQuery(this).attr('href');
        jQuery(this).toggleClass('active');
        jQuery('.accordion-parent ' + currentAttrValue).slideToggle(300);
        e.preventDefault();
    });

    /* Switch out for jQuery UI? */
    function close_accordion_section() {
        $('.accordion .accordion-section-title').removeClass('active');
        $('.accordion .accordion-section-content').slideUp(300).removeClass('open');
    }

    $('.accordion-section-title').click(function (e) {
        // Grab current anchor value
        var currentAttrValue = $(this).attr('href');

        if ($(this).hasClass('active')) {
            close_accordion_section();
        } else {
            close_accordion_section();
            // Add active class to section title
            $(this).addClass('active');
            // Open up the hidden content panel
            $('.accordion ' + currentAttrValue).slideDown(300).addClass('open');
        }

        e.preventDefault();
    });

    /* Switch out for jQuery UI? */
    $('.fm-title.primary').click(function (e) {
        // Footer Media Queries
        var window_size = window.matchMedia('(max-width: 768px)');
        if (window.matchMedia('(max-width: 768px)').matches) {
            var currentAttrValue = $(this).attr('href');
            $(this).toggleClass('open');
            $(currentAttrValue).slideToggle(500);
        }
    });

    $('.fm-title.global').click(function (e) {
        $(this).toggleClass('open');
        $('.fm-menu.global').slideToggle(500);
    });

    $(window).resize(function () {
        if($( window ).width() < 768) {
            $('.fm-menu').hide();
            $('.fm-title').removeClass('open');
        }
        else {
            $('.fm-menu').show();
        }
    });

    $('#faq-open').click(function (e) {
        $('#faq-open').fadeOut(300, function () {
            $('.faq-list').fadeIn(400);
        });
    });
    
    //Responsive Tabs
    $('#horizontalTab').easyResponsiveTabs();

    $('ul.faqs-list').each(function () {

        var LiN = $(this).find('li').length;

        if (LiN > 6) {
            $('li', this).eq(5).nextAll().hide().addClass('toggleable');
            $(this).append('<li class="more">View more...</li>');
        }

    });

    // show / hide faqs
    $('ul.faqs-list').on('click', '.more', function () {

        if ($(this).hasClass('less')) {
            $(this).html('<span>View more...</span>').removeClass('less');
        } else {
            $(this).html('<span>View less...</span>').addClass('less');
        }

        $(this).siblings('li.toggleable').fadeToggle('fast');

    });

    $( ".address-input" ).each(function( index ) {
        $(this).append('<div class="address-dropdown-wrapper"><ul></ul></div>');
    });

    $( ".address-input input" ).keyup(function() {

        var input = $(this);
        var input_val = $(this).val();
        var input_cont = $(this).parents('.address-input');
        var drop_down = input_cont.find('.address-dropdown-wrapper ul');

        if(input_val.length > 2) {

            $.ajax({
                type: 'GET',
                url: scriptVars.api_domain + '/al/api/address-search/search?query=' + input_val,
                dataType: 'json',
                success: function (response) {

                        if(response.data.length > 0) {

                            drop_down.html('');
                            for (i = 0; i < response.data.length; i++) {
                                    drop_down.append('<li>' + response.data[i].displayAddress + '</li>');
                                    input_cont.find('.address-dropdown-wrapper').show();

                                    $('.address-dropdown-wrapper ul li').click(function (e) {

                                        var address = $(this).html();
                                        if(address.length > 0) {
                                            input.val(address);
                                            input_cont.find('.address-dropdown-wrapper').hide();
                                            drop_down.html('');
                                        }

                                    });
                            }
                        }
                },
                error: function (jqXHR, textStatus, errorThrown) {
                   
                }
            });
        }


    });

    document.addEventListener('lazybeforeunveil', function(e){
        var bg = e.target.getAttribute('data-bg');
        if(bg){
            e.target.style.backgroundImage = 'url(' + bg + ')';
        }
    });


    function getUrlVars()
    {
        var vars = [], hash;
        var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
        for(var i = 0; i < hashes.length; i++)
        {
            hash = hashes[i].split('=');
            vars.push(hash[0]);
            vars[hash[0]] = hash[1];
        }
        return vars;
    }


    /* Paris Quickbooker fix - to move to widget */

    var i = 1;
    var current_tab = 1;

    $('.hw-tabs__tab').each(function() {
        $(this).attr('data-tabnum', i);

        i++;
    });

    $('.hw-tabs__tab').click(function (e) {

        if(current_tab != $(this).data('tabnum')) {
            current_tab = $(this).data('tabnum');
            checkPaymentMethods();
        }

    });

    function checkPaymentMethods() {
        if($('.hw-tab--active .hw-zone-button .flag').hasClass('flag--FR')){
            $('#hw_payment').parent().find('.hw-dropdown-menu li a').each(function() {
                if($(this).html() == "Account") {
                    $(this).trigger('click');
                }
            });
            $('#hw_payment').parent().removeClass('hw-dropdown');
        }
        else {
            $('#hw_payment').parent().addClass('hw-dropdown');
        }

    }

    $('.hw-dropdown-menu.hw-zone-button__dropdown').click(function (e) {

        checkPaymentMethods();

    });

});



