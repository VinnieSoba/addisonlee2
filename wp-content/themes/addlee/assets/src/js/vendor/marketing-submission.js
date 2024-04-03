jQuery(document).ready(function ($) {
    var phone_call =  $("#wpforms-20687-field_1-container ul#wpforms-20687-field_1 label");
    var input = $("input#wpforms-20687-field_1_1");
    var email =  $("#wpforms-20687-field_2-container ul#wpforms-20687-field_2 label");
    var email_input = $("input#wpforms-20687-field_2_1");
    var text =  $("#wpforms-20687-field_3-container ul#wpforms-20687-field_3 label");
    var text_input = $("input#wpforms-20687-field_3_1");

    // news & updates

    var general_news = $("#wpforms-20687-field_4-container ul#wpforms-20687-field_4 label");
    var general_input = $("input#wpforms-20687-field_4_1");

    var sustainability = $("#wpforms-20687-field_5-container ul#wpforms-20687-field_5 label");
    var sustainability_input = $("input#wpforms-20687-field_5_1");

    var pros = $("#wpforms-20687-field_6-container ul#wpforms-20687-field_6 label");
    var pros_input = $("input#wpforms-20687-field_6_1");

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