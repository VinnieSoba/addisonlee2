jQuery(document).ready(function ($) {
    var phone_call =  $("#wpforms-20908-field_10-container ul#wpforms-20908-field_10 label");
    var input = $("input#wpforms-20908-field_10_1");
    var email =  $("#wpforms-20908-field_11-container ul#wpforms-20908-field_11 label");
    var email_input = $("input#wpforms-20908-field_11_1");
    var text =  $("#wpforms-20908-field_12-container ul#wpforms-20908-field_12 label");
    var text_input = $("input#wpforms-20908-field_12_1");

    // news & updates

    var general_news = $("#wpforms-20908-field_14-container ul#wpforms-20908-field_14 label");
    var general_input = $("input#wpforms-20908-field_14_1");

    var sustainability = $("#wpforms-20908-field_15-container ul#wpforms-20908-field_15 label");
    var sustainability_input = $("input#wpforms-20908-field_15_1");

    var pros = $("#wpforms-20908-field_16-container ul#wpforms-20908-field_16 label");
    var pros_input = $("input#wpforms-20908-field_16_1");

    // h1 text on market submission page
    //var bannerh1 = $(".page-banner .content-header");


    var switch_container = $('li.choice-1.depth-1');
    
    $(switch_container).addClass('switch-container');
    
        if(phone_call){
            $(phone_call).addClass('switch');
            $(input).appendTo(phone_call);
            $('<span class="slider round"></span>').insertAfter(input);
        }
        
        if(email) {
            $(email).addClass('switch');
            $(email_input).appendTo(email);
            $('<span class="slider round"></span>').insertAfter(email_input);
        }

        if(text) {
            $(text).addClass('switch');
            $(text_input).appendTo(text);
            $('<span class="slider round"></span>').insertAfter(text_input);
        }

        if(general_news) {
            $(general_news).addClass('switch');
            $(general_input).appendTo(general_news);
            $('<span class="slider round"></span>').insertAfter(general_input);
        }

        if(sustainability) {
            $(sustainability).addClass('switch');
            $(sustainability_input).appendTo(sustainability);
            $('<span class="slider round"></span>').insertAfter(sustainability_input);
        }

        if(pros) {
            $(pros).addClass('switch');
            $(pros_input).appendTo(pros);
            $('<span class="slider round"></span>').insertAfter(pros_input);
        }


        // slit the form into 2 columns
        var formWrap = $('form#wpforms-form-20908 .wpforms-field-container');

        //$('<p>My text goes here</p>').appendTo(bannerh1);
        
        if(formWrap){
            var comms_channel = $('.test-1');
            var news_channel = $('.test-2');
            
            
            $(formWrap).addClass("row");

            // creates left form container
            $('<div class="left-cont col-sm-12 col-md-6 col-lg-6"></div>').appendTo(formWrap);
            var leftCont = $('.left-cont');
            
            // creates the right form container
            $('<div class="right-cont col-sm-12 col-md-6 col-lg-6"></div>').appendTo(formWrap);
            var rightCont = $('.right-cont');
            $(comms_channel).appendTo(leftCont);
            $(news_channel).appendTo(rightCont);

        }
           
    });