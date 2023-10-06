var ajax_call_processed1 = 0;
var ajax_call_processed2 = 0;
var selected_already = 0;
var aborted_manually = 0;
var xhr;
var scrolled_ie = 0;
var loader = '<div class="loader"></div>';

function lookupCompany() {
    jQuery("#input_42_41").autoComplete({
        minChars: 3,
        delay: 200,
        cache: true,
        renderItem: function(item, search) {

            var splits = item.split('::');
            var right_part = splits[1].replace(/;;/g, ", ");
            var re = new RegExp("(" + search.split(' ').join('|') + ")", "gi");
            return '<div class="autocomplete-suggestion" data-val="' + item + '">' + right_part.replace(re, "<b>$1</b>") + '</div>';
        },
        source: function(term, responsecall) {
            if (xhr && xhr.readystate != 4) {
                aborted_manually = 1;
                xhr.abort();
            }
            jQuery("#val_mess_sorry").remove();
            jQuery("#val_mess_timeout").remove();
            jQuery("#input_42_41").after(loader);
            var dataValues;
                       
            if(!jQuery("#toggle-search").is(":checked")) {
                dataValues = { 
                    "companyName": jQuery("#input_42_41").val(), 
                    "businessNumber": "",
                    "streetAddress": jQuery("#input_42_47_1").val(),
                    "town": jQuery("#input_42_47_3").val(),
                    "postalCode": jQuery("#input_42_47_5").val()
                };
                
            }
            else {
                dataValues = { 
                    "companyName": "", 
                    "businessNumber": jQuery("#input_42_41").val(),
                    "streetAddress": jQuery("#input_42_47_1").val(),
                    "town": jQuery("#input_42_47_3").val(),
                    "postalCode": jQuery("#input_42_47_5").val()
                }; 
            }
        
            xhr = jQuery.ajax({
                url: "/wp-content/themes/addlee/assets/src/priority-account-apps/php/lookup.php",
                dataType: 'JSON',
                type: 'POST',
                data: JSON.stringify(dataValues),
                timeout: 15000,
                success: function(response) {
                    jQuery(".loader").remove();
                    var responses = new Array();
                    var foundsmth = false;

                    if (Array.isArray(response)) {
                        for (var i = 0; i < response.length; i++) {
                            responses[i] = response[i].DUNS_NBR + ';;' + response[i].NON_POST_TOWN + '::' + response[i].NME + ';;' + response[i].ADR_LINE + ';;' + response[i].POST_CODE;
                            foundsmth = true;
                            
                        }    
                    } else {
                        if (response.hasOwnProperty('DUNS_NBR')) {
                            responses[0] = response.DUNS_NBR + ';;' + response.NON_POST_TOWN + '::' + response.NME + ';;' + response.ADR_LINE + ';;' + response.POST_CODE;
                            foundsmth = true;

                        }
                    }  

                    if (foundsmth == false) {
                        jQuery("#val_mess_sorry").remove();
                        jQuery("#field_42_41").append("<div class='validation_message err1' id='val_mess_sorry'>Company not found, please try again or <a href='javascript:manualEntryClick();'>enter your company details manually</a></div>");
                        jQuery("#input_42_41").removeClass("autocomplete-loadinggif");
                        dataLayer.push({
                            'event':'Click',
                            'eventCategory':'businessAccountApp',
                            'eventAction':'companySearch',
                            'eventLabel':'notFound'
                        });
                    } else {
                        responsecall(responses);
                    }
                },
                error: function onLookUpError(response, error) {
                    jQuery("#input_42_41").removeClass("autocomplete-loadinggif");
                    if (error == 'parsererror') {
                        jQuery("#val_mess_sorry").remove();
                        jQuery("#field_42_41").append("<div class='validation_message err2' id='val_mess_sorry'>Company not found, please try again or <a href='javascript:manualEntryClick();'>enter your company details manually</a></div>");
                        dataLayer.push({
                            'event':'Click',
                            'eventCategory':'businessAccountApp',
                            'eventAction':'companySearch',
                            'eventLabel':'parseError'
                        });
                    } else if (aborted_manually == 0) {
                        jQuery("#val_mess_timeout").remove();
                        jQuery("#field_42_41").append("<div class='validation_message err3' id='val_mess_timeout'>Sorry, there has been an error, please <a href='javascript:manualEntryClick();' >enter your company details manually</a></div>");
                        dataLayer.push({
                            'event':'Click',
                            'eventCategory':'businessAccountApp',
                            'eventAction':'companySearch',
                            'eventLabel':'timeoutError'
                        });
                    }
                    aborted_manually = 0;
                    return;
                },
                contentType: 'application/json; charset=utf-8'
            });
},
onSelect: function(term) {
    scrolled_ie = 0;
    var splits = term.split('::');
    var right_part = splits[1].split(";;");
    var left_part = splits[0].split(";;");
    jQuery("#input_42_44,#input_42_93").val(left_part[0]).change();
    jQuery("#inp_42_44_err").remove();
    jQuery("#input_42_41").val(right_part[0]);
    jQuery("#inp_42_41_err").remove();
    jQuery("#input_42_47_5").val(right_part[2]);
    jQuery("#input_42_47_3").val(left_part[1]);
    jQuery("#input_42_47_1").val(right_part[1]);
    jQuery("#inp_42_47_err").remove();
    jQuery("#input_42_41,#input_42_47_1,#input_42_47_3,#input_42_47_5").removeClass('field-error');
    jQuery("#gform_submit_button_42").show();            
    jQuery("#field_42_41,#field_42_47,.autocomplete-suggestions,#field_42_95").hide();
    jQuery("#company-details,.company-address,.company-city,.company-postcode").show();
    jQuery(".company-name").html(right_part[0]);
    jQuery(".company-address").html(right_part[1]);
    jQuery(".company-city").html(left_part[1]);
    jQuery(".company-postcode").html(right_part[2]);
    jQuery(".company-number").html('');
    jQuery("#label-toggle-manual").hide();
    dataLayer.push({
        'event':'Click',
        'eventCategory':'businessAccountApp',
        'eventAction':'companySearch',
        'eventLabel':'selectCompany'
    });

    selected_already = 1;
    if (jQuery.browser.msie) {
        jQuery('.autocomplete-suggestions').hide();
    }
}
});
}



function editBillingAddress() {
    jQuery("#field_42_47").toggle();
    if (jQuery("#field_42_47").is(":visible")) { 
        jQuery("#input_42_47_1").keyup(function(){
            var companyAddress = jQuery('#input_42_47_1').val();
            jQuery(".company-address").html(companyAddress); 
        });
        jQuery("#input_42_47_3").keyup(function(){
            var companyCity = jQuery('#input_42_47_3').val();
            jQuery(".company-city").html(companyCity); 
        });
        jQuery("#input_42_47_5").keyup(function(){
            var companyPostCode = jQuery('#input_42_47_5').val();
            jQuery(".company-postcode").html(companyPostCode); 
        });

        jQuery(".company-address,.company-city,.company-postcode").hide();
        jQuery("#edit-billing-address").html('Done');
        dataLayer.push({
            'event':'Click',
            'eventCategory':'businessAccountApp',
            'eventAction':'companySearch',
            'eventLabel':'editBillingAddress'
        });

    }
    else {
        jQuery(".company-address,.company-city,.company-postcode").show();
        jQuery("#edit-billing-address").html('Edit billing address');
    }

}

function searchAgain() {
    jQuery('#label-toggle-manual').html('Not a UK company?');
    jQuery("#field_42_95").show();
    jQuery("#field_42_47").hide();
    jQuery('#input_42_44,#input_42_93').val('').change();
    jQuery('#input_42_41').show().val('').change();
    jQuery('#input_42_47_1').val('').change();
    jQuery('#input_42_47_3').val('').change();
    jQuery('#input_42_47_5').val('').change();
    jQuery('#input_42_41').attr("placeholder", "Enter company name");
    jQuery('#field_42_41').show();
    jQuery('#input_42_41').focus();
    jQuery("#val_mess_timeout").remove();
    jQuery("#val_mess_sorry").remove();
    jQuery("#company-details,#gform_submit_button_42").hide();
    jQuery("#label-toggle-manual").show();
    lookupCompany();
    if (typeof dataLayer !== 'undefined') {
        dataLayer.push({
            'event': 'Click',
            'eventCategory': 'businessAccountApp',
            'eventAction': 'companySearch',
            'eventLabel': 'searchAgain'
        });
    }
}

function manualEntry() {
    if (!jQuery('#toggle-manual').is(':checked')) {
        jQuery('#field_42_41 label:first-child').html('Company Search');
        jQuery('#label-toggle-manual').html('Not a UK company?');
        jQuery('#toggle-manual').attr('checked', false);
        jQuery('#toggle-search').attr('checked', false);
        jQuery("#company-details").hide();
        jQuery("#label-toggle-search").html('Search company reg number').show();
        jQuery("#field_42_47").hide();
        jQuery('#input_42_44,#input_42_93').val('').change();
        jQuery('#input_42_41').show().val('').change().attr("placeholder", "Enter company name");
        jQuery('#input_42_47_1,#input_42_47_3,#input_42_47_5').val('').change();
        jQuery('#field_42_41').show();
        jQuery('#input_42_41').focus();
        jQuery("#val_mess_timeout").remove();
        jQuery("#val_mess_sorry").remove();
        jQuery("#gform_submit_button_42").hide();
        lookupCompany();
    } 
    else {
        jQuery('#field_42_41 label:first-child').html('Company Name');
        jQuery('#label-toggle-manual').html('Company search');
        jQuery('#toggle-manual').attr('checked', true);
        jQuery('#toggle-search').attr('checked', false);
        jQuery("#company-details").hide();
        jQuery("#label-toggle-search").hide();
        jQuery("#field_42_41,#field_42_47").show();
        jQuery('#input_42_44').val(0).change();
        jQuery('#input_42_41').val('').change();
        jQuery("#field_42_47").show();
        jQuery('#input_42_47_1,#input_42_47_3,#input_42_47_5').val('').change();
        jQuery('#input_42_41').show().focus();
        jQuery('#input_42_41').attr("placeholder", "");
        jQuery("#val_mess_timeout").remove();
        jQuery("#val_mess_sorry").remove();
        jQuery("#input_42_41, #input_42_65").autoComplete('destroy');
        jQuery("#gform_submit_button_42").show();
        dataLayer.push({
            'event':'Click',
            'eventCategory':'businessAccountApp',
            'eventAction':'companySearch',
            'eventLabel':'manualEntry'
        });

    }
    
}
function manualEntryClick() {
    jQuery('#toggle-manual').attr('checked', true);
    manualEntry();
    }

jQuery(document).ready(function($) {
    
    jQuery('#input_42_41').attr("placeholder", "Enter company name");
    jQuery('#choice_42_96_0,#toggle-manual').attr("onclick", "manualEntry('', this)");
    jQuery('#field_42_14').show();
    jQuery('#field_42_41').before('<div class="company-options"><input type="checkbox" id="toggle-manual" onclick="manualEntry()"></input><label for="toggle-manual" id="label-toggle-manual">Not a UK company?</label> | <input type="checkbox" id="toggle-search"></input><label for="toggle-search" id="label-toggle-search">Search company reg number</label></div>');

    // toggle product type
    jQuery('#input_42_38').change(function() {
        if(jQuery('#choice_42_38_0').is(":checked")) {
            jQuery("#choice_42_95_0").prop("checked", true);
        }
        else {
            jQuery("#choice_42_95_1").prop("checked", true);
        }
    });

    // toggle search
    jQuery('#toggle-search').change(function() {
        if(jQuery(this).is(":checked")) {
            searchAgain();
            jQuery('#input_42_41').attr("placeholder", "Enter company registration number");
            jQuery('#field_42_41 label:first-child').html('Company Search');
            jQuery('#toggle-entry').attr('checked', false);
            jQuery('#label-toggle-search').html('Search company name');
            
             
        }
        else {
            searchAgain();
            jQuery('#input_42_41').attr("placeholder", "Enter company name");
            jQuery('#toggle-entry').attr('checked', false);
            jQuery('#label-toggle-search').html('Search company reg number');
            if (typeof dataLayer !== 'undefined') {
                dataLayer.push({
                    'event': 'Click',
                    'eventCategory': 'businessAccountApp',
                    'eventAction': 'companySearch',
                    'eventLabel': 'enterCompanyReg'
                });
            }
        }
    });
    jQuery('#input_42_41').attr("autocomplete", "false");


    var prevVal = "";
    jQuery("#field_42_47").hide();
    jQuery("#company-details").hide();
    jQuery("#gform_submit_button_42").hide();
    jQuery("#field_42_48").hide();
    jQuery("#field_42_65").hide();
    if (jQuery("#input_42_68").length > 0) {
        if (jQuery("#input_42_67").val() != '') {
            var optionText = jQuery("#input_42_68").val().split(",");
            var loop = 0;
            jQuery.each(jQuery("#input_42_67").val().split(",").slice(0, -1), function(index, item) {
                console.log(jQuery("#input_42_69").val());
                console.log(item);
                if (item == jQuery("#input_42_69").val()) jQuery("#input_42_48").append("<option selected='selected' value='" + item + "'>" + optionText[loop] + "</option>").show().change();
                else
                    jQuery("#input_42_48").append("<option value='" + item + "'>" + optionText[loop] + "</option>").show().change();
                loop++;
            });
        }
    }
    jQuery("#input_42_41").keypress(function(evt) {
        var charCode = evt.charCode || evt.keyCode;
        if (charCode == 13) {
            return false;
        }
    });
    jQuery("#input_42_41, #input_42_65").on("focus", function() {
        if (selected_already == 0 && jQuery('#input_42_41').val().length > 2) jQuery(this).trigger("keyup");
    });

    lookupCompany();

    jQuery("#gform_42").on("submit", function() {
        var error = false,
        address_error = false;
        if (jQuery("#input_42_41").val() == '') {
            jQuery("#inp_42_41_err").remove();
            jQuery("#input_42_41").parent().append('<!--<div id="inp_42_41_err" class="gfield_description validation_message">This field is required</div>-->');
            jQuery("#input_42_41").addClass('field-error');
            jQuery("#input_42_41").focus();
            error = true;
        } else {
            jQuery("#input_42_41").removeClass('field-error');
            jQuery("#inp_42_41_err").remove();
        }
        if (jQuery("#input_42_44").val() == '') {
            jQuery("#inp_42_44_err").remove();
            jQuery("#input_42_41").parent().append('<div id="inp_42_44_err" class="gfield_description validation_message">Please enter your company and select an option from the list</div>');
            jQuery("#input_42_41").addClass('field-error');
            jQuery("#input_42_41").focus();
            error = true;
        } else {
            jQuery("#input_42_44").removeClass('field-error');
            jQuery("#inp_42_44_err").remove();
        }
        if (jQuery("#input_42_89").val() == '') {
            jQuery("#inp_42_89_err").remove();
            jQuery("#field_42_89 .sod_select").parent().append('<div id="inp_42_89_err" class="gfield_description validation_message" style="width:50%">Please select your title</div>');
            jQuery("#input_42_89").addClass('field-error');
            jQuery("#input_42_89").focus();
            error = true;
        } else {
            jQuery("#input_42_89").removeClass('field-error');
            jQuery("#inp_42_89_err").remove();
        }
        if (jQuery("#input_42_80").val() == '') {
            jQuery("#inp_42_80_err").remove();
            jQuery("#input_42_80").parent().append('<div id="inp_42_80_err" class="gfield_description validation_message">Please enter your first name</div>');
            jQuery("#input_42_80").addClass('field-error');
            jQuery("#input_42_80").focus();
            error = true;
        } else {
            jQuery("#input_42_80").removeClass('field-error');
            jQuery("#inp_42_80_err").remove();
        }
        if (jQuery("#input_42_81").val() == '') {
            jQuery("#inp_42_81_err").remove();
            jQuery("#input_42_81").parent().append('<div id="inp_42_81_err" class="gfield_description validation_message">Please enter your last name</div>');
            jQuery("#input_42_81").addClass('field-error');
            jQuery("#input_42_81").focus();
            error = true;
        } else {
            jQuery("#input_42_81").removeClass('field-error');
            jQuery("#inp_42_81_err").remove();
        }
        if (jQuery("#input_42_82").val() == '') {
            jQuery("#inp_42_82_err").remove();
            jQuery("#input_42_82").parent().append('<div id="inp_42_82_err" class="gfield_description validation_message">Please enter your email address</div>');
            jQuery("#input_42_82").addClass('field-error');
            jQuery("#input_42_82").focus();
            error = true;
        } else {
            jQuery("#input_42_82").removeClass('field-error');
            jQuery("#inp_42_82_err").remove();
        }
        if (jQuery("#input_42_14").val().length < 6) {
            jQuery("#inp_42_14_err").remove();
            jQuery("#input_42_14").parent().append('<div id="inp_42_14_err" class="gfield_description validation_message">Please enter your business telephone number</div>');
            jQuery("#input_42_14").addClass('field-error');
            jQuery("#input_42_14").focus();
            error = true;
        } else {
            jQuery("#input_42_14").removeClass('field-error');
            jQuery("#inp_42_14_err").remove();
        }
        if (jQuery("#input_42_47_1").val() == '') {
            jQuery("#input_42_47_1").addClass('field-error');
            jQuery("#input_42_47_1").focus();
            address_error = true;
            error = true;
        } else {
            jQuery("#input_42_47_1").removeClass('field-error');
        }
        if (jQuery("#input_42_47_3").val() == '') {
            jQuery("#input_42_47_3").addClass('field-error');
            jQuery("#input_42_47_3").focus();
            address_error = true;
            error = true;
        } else {
            jQuery("#input_42_47_3").removeClass('field-error');
        }
        if (jQuery("#input_42_47_5").val() == '') {
            jQuery("#input_42_47_5").addClass('field-error');
            jQuery("#input_42_47_5").focus();
            address_error = true;
            error = true;
        } else {
            jQuery("#input_42_47_5").removeClass('field-error');
        }
        if (!address_error) {
            jQuery("#inp_42_47_err").remove();
        } else {
            jQuery("#inp_42_47_err").remove();
            jQuery("#input_42_47").parent().append('<div id="inp_42_47_err" class="gfield_description validation_message">This field is required. Please enter a complete address</div>');
        }
        
        if (!jQuery('#choice_42_66_1').is(':checked')) {
            jQuery("#inp_66_1_err").remove();
            jQuery("#input_42_66").parent().append('<div id="inp_66_1_err" class="gfield_description validation_message">Please check the box to accept the Terms and Conditions of Trading</div>');
            error = true;
        } else {
            jQuery("#inp_66_1_err").remove();
        }
        if (error) {
            window["gf_submitting_42"] = false;
            return false;
        }
        
        jQuery("#gform_submit_button_42").hide();
        jQuery('#footer_ajax').remove();
        jQuery(".gform_footer").append('<img id="footer_ajax" src="/img/ajax-loader-trans.gif" />').show();
        
        
        if (ajax_call_processed1 == 0) {
            jQuery.ajax({
                url: "/wp-content/themes/addlee/assets/src/priority-account-apps/php/gdp.php",
                dataType: 'JSON',
                type: 'POST',
                data: JSON.stringify({
                    "dunsNumber": jQuery("#input_42_44").val()
                }),
                success: onGetInfoSucess,
                error: onGetInfoError,
                contentType: 'application/json; charset=utf-8'
            });
            ajax_call_processed1 = 1;
        }
        if (ajax_call_processed2 == 0) {
            jQuery.ajax({
                url: "/wp-content/themes/addlee/assets/src/priority-account-apps/php/worldbase.php",
                dataType: 'JSON',
                type: 'POST',
                data: JSON.stringify({
                    "dunsNumber": jQuery("#input_42_44").val()
                }),
                success: onGetInfoSucess2,
                error: onGetInfoError2,
                contentType: 'application/json; charset=utf-8'
            });
            ajax_call_processed2 = 1;
        }
        if (ajax_call_processed2 < 2 || ajax_call_processed1 < 2) return false;
    });
    
});

function onGetInfoSucess(response) {
    jQuery("#totalcount").hide();
    jQuery("#result").hide();
    var companyResponse = response;
    $companyContainer = jQuery(".gfield_list").find("tbody");
    $companyContainer.append(getCompanyView2(companyResponse));
    ajax_call_processed1 = 2;
    check_if_we_submit();
}

function onGetInfoSucess2(response) {
    jQuery("#totalcount").hide();
    jQuery("#result").hide();
    var companyResponse = response;
    $companyContainer = jQuery(".gfield_list").find("tbody");
    $companyContainer.append(getCompanyView2(companyResponse));
    ajax_call_processed2 = 2;
    check_if_we_submit();
}

function check_if_we_submit() {
    if (ajax_call_processed1 == 2 && ajax_call_processed2 == 2) {
        window["gf_submitting_42"] = false;
        if (jQuery("#input_42_49").val() == 0) {
            jQuery("#input_42_49").val(jQuery("#input_42_77").val());
        }
        var email = jQuery("#input_42_82").val();
        var filter = /^([\w-\.]+@(?!aol.)(?!arnet.com.ar)(?!att.net)(?!bellsouth.net)(?!blueyonder.)(?!blueyonder.co.uk)(?!bt.)(?!btinternet.)(?!charter.net)(?!comcast.net)(?!consultant.)(?!cox.net)(?!daum.net)(?!earthlink.net)(?!email.com)(?!facebook.com)(?!fastmail.)(?!fibertel.com.ar)(?!free.fr)(?!freenet.)(?!freeserve.co.uk)(?!games.com)(?!gmail.)(?!gmx.)(?!google.)(?!googleapps.)(?!googlemail.)(?!hanmail.net)(?!hotmail.)(?!hush.com)(?!hushmail.)(?!icloud.)(?!inbox.com)(?!juno.com)(?!laposte.net)(?!lavabit.com)(?!live.)(?!love.com)(?!lycos.)(?!mac.)(?!mail.)(?!mailcom.)(?!me.)(?!msn.)(?!myway.)(?!nate.com)(?!naver.com)(?!neuf.fr)(?!ntlworld.)(?!o2.)(?!office.)(?!online.)(?!orange.)(?!outlook.)(?!plus.net)(?!pobox.com)(?!prodigy.net.mx)(?!protonmail.)(?!qq.com)(?!rambler.ru)(?!rocketmail.)(?!safe-mail.net)(?!sbcglobal.net)(?!sfr.fr)(?!sina.com)(?!sky.com)(?!skymail)(?!skynet.be)(?!speedy.com.ar)(?!t-online.de)(?!talktalk.)(?!telenet.be)(?!thunderbird.)(?!tiscali.)(?!tvcablenet.be)(?!topmail.)(?!verizon.net)(?!virgin.)(?!virginmedia.)(?!voo.be)(?!wanadoo.)(?!web.de)(?!wow.com)(?!yahoo.)(?!yandex.)(?!ygm.com)(?!ymail.)(?!yopmail.)(?!zoho.)([\w-]+\.)+[\w-]{2,4})?$/;
        if (!filter.test(email)) {
            jQuery("#input_42_45").val(2).change();
        }
        jQuery("#gform_42")[0].submit();
    }
}

function onGetInfoError() {
    jQuery("#totalcount").hide();
    jQuery("#result").hide();
    ajax_call_processed1 = 2;
    check_if_we_submit();
    return;
}

function onGetInfoError2() {
    jQuery("#totalcount").hide();
    jQuery("#result").hide();
    ajax_call_processed2 = 2;
    check_if_we_submit();
    return;
}

function getCompanyView2(companyResponse) {
    return jQuery(getCompanyDetailsView(companyResponse));
}

function getCompanyDetailsView(companyResponse, parent) {
    var parent = parent ? parent + " - " : "";
    var $details = "";
    for (field in companyResponse) {
        if (companyResponse.hasOwnProperty(field)) {
            if (companyResponse[field] instanceof Object) {
                $details += getCompanyDetailsView(companyResponse[field], field);
            } else {
                var fieldCompare = field;
                if (fieldCompare == 'DUNS_NBR') {
                    jQuery("#input_42_44").val(companyResponse[field]).change();
                } else if (fieldCompare == 'PRIM_NME') {
                    jQuery("#input_42_64").val(companyResponse[field]).change();
                } else if (parent.indexOf('ADR_LINE') != "-1") {
                    jQuery("#input_42_47_1").val(companyResponse[field]).change();
                } else if (fieldCompare == 'POST_TOWN') {
                    jQuery("#input_42_47_3").val(companyResponse[field]);
                } else if (fieldCompare == 'POST_CODE') {
                    jQuery("#input_42_47_5").val(companyResponse[field]);
                } else if (fieldCompare == 'CR_DCSN') {
                    jQuery("#input_42_45").val(companyResponse[field]).change();
                    if (jQuery('#input_42_45').val() == 1) {
                        jQuery('#input_42_92').val('Green');
                    } else {
                        jQuery('#input_42_92').val('');
                    }
                } else if (fieldCompare == 'CR_LMT') {
                    jQuery("#input_42_46").val(companyResponse[field]);
                } else if (fieldCompare == 'BUS_REGN_NBR') {
                    jQuery("#input_42_37").val(companyResponse[field]);
                } else if (fieldCompare == 'MKT_EMPL_AT_PHYS_ADR_IND') {
                    if (companyResponse[field] == 0) {
                        jQuery("#input_42_49").val(companyResponse['TOT_EMPL']);
                    } else {
                        jQuery("#input_42_49").val(companyResponse[field]);
                    }
                } else if (fieldCompare == 'TOT_EMPL') {
                    jQuery("#input_42_77").val(companyResponse[field]);
                } else {}
            }
        }
    }
    return $details;
}
jQuery('#input_42_49').change(function() {
    var value1 = jQuery('#input_42_49').val();
    var value2 = jQuery('#input_42_77').val();
    if (value1 == 0) {
        jQuery('#input_42_49').val(value2);
    }
});

function getCompanyView(company) {
    return jQuery('<option value=' + company.DUNS_NBR + '>' + company.NME + ', ' + company.ADR_LINE + ', ' + company.POST_CODE + '</option>');
}(function($) {
    $.fn.autoComplete = function(options) {
        var o = $.extend({}, $.fn.autoComplete.defaults, options);
        if (typeof options == 'string') {
            this.each(function() {
                var that = $(this);
                if (options == 'destroy') {
                    $(window).off('resize.autocomplete', that.updateSC);
                    that.off('keydown.autocomplete keyup.autocomplete');
                    if (that.data('autocomplete')) that.attr('autocomplete', that.data('autocomplete'));
                    else
                        that.removeAttr('autocomplete');
                    $(that.data('el')).remove();
                    that.removeData('el').removeData('autocomplete');
                }
            });
            return this;
        }
        return this.each(function() {
            var that = $(this);
            that.sc = $('<div class="autocomplete-suggestions"></div>').addClass(o.menuClass);
            that.data('el', that.sc).data('autocomplete', that.attr('autocomplete'));
            that.attr('autocomplete', 'false');
            that.cache = {};
            that.last_val = '';
            that.updateSC = function(resize, next) {
                that.sc.css({
                    top: that.offset().top + that.outerHeight(),
                    left: that.offset().left,
                    width: that.outerWidth()
                });
                if (!resize) {
                    that.sc.show();
                    if (!that.sc.maxHeight) that.sc.maxHeight = parseInt(that.sc.css('max-height'));
                    if (!that.sc.suggestionHeight) that.sc.suggestionHeight = $('.autocomplete-suggestion', that.sc).first().outerHeight();
                    if (that.sc.suggestionHeight)
                        if (!next) that.sc.scrollTop(0);
                    else {
                        var scrTop = that.sc.scrollTop(),
                        selTop = next.offset().top - that.sc.offset().top;
                        if ((selTop + that.sc.suggestionHeight) - that.sc.maxHeight > 0) that.sc.scrollTop((selTop + that.sc.suggestionHeight + scrTop) - that.sc.maxHeight);
                        else if (selTop < 0) that.sc.scrollTop(selTop + scrTop);
                    }
                }
            }
            $(window).on('resize.autocomplete', that.updateSC);
            that.sc.appendTo('body');
            that.sc.on('mouseleave.autocomplete', '.autocomplete-suggestion', function() {
                $('.autocomplete-suggestion.selected').removeClass('selected');
            });
            that.sc.on('mouseenter.autocomplete', '.autocomplete-suggestion', function() {
                $('.autocomplete-suggestion.selected').removeClass('selected');
                $(this).addClass('selected');
            });
            that.sc.on('mousedown.autocomplete', '.autocomplete-suggestion', function() {
                var v = $(this).data('val');
                o.onSelect(v);
                setTimeout(function() {
                    that.focus();
                }, 10);
            });
            that.focus(function(e) {
                if (jQuery.browser.msie && scrolled_ie == 1) {
                    scrolled_ie = 0;
                }
            });
            that.blur(function(e) {
                if (jQuery.browser.msie && scrolled_ie == 0) {
                    scrolled_ie = 1;
                    return false;
                }
                that.last_val = that.val();
                that.sc.hide();
            });

            function suggest(data) {
                var val = that.val();
                that.cache[val] = data;
                if (data.length && val.length >= o.minChars) {
                    var s = '';
                    for (i = 0; i < data.length; i++) s += o.renderItem(data[i], val);
                        that.sc.html(s);
                    that.updateSC(0);
                } else
                that.sc.hide();
            }
            that.on('keydown.autocomplete', function(e) {
                if (e.which == 40 && that.sc.html()) {
                    var next, sel = $('.autocomplete-suggestion.selected', that.sc);
                    if (!sel.length) {
                        next = $('.autocomplete-suggestion', that.sc).first();
                        that.val(next.addClass('selected').data('val'));
                    } else {
                        next = sel.next('.autocomplete-suggestion');
                        if (next.length) {
                            sel.removeClass('selected');
                            that.val(next.addClass('selected').data('val'));
                        } else {
                            sel.removeClass('selected');
                            that.val(that.last_val);
                            next = 0;
                        }
                    }
                    that.updateSC(0, next);
                    return false;
                } else if (e.which == 38 && that.sc.html()) {
                    var next, sel = $('.autocomplete-suggestion.selected', that.sc);
                    if (!sel.length) {
                        next = $('.autocomplete-suggestion', that.sc).last();
                        that.val(next.addClass('selected').data('val'));
                    } else {
                        var next = sel.prev('.autocomplete-suggestion');
                        if (next.length) {
                            sel.removeClass('selected');
                            that.val(next.addClass('selected').data('val'));
                        } else {
                            sel.removeClass('selected');
                            that.val(that.last_val);
                            next = 0;
                        }
                    }
                    that.updateSC(0, next);
                    return false;
                } else if (e.which == 27) that.val(that.last_val).sc.hide();
            });
that.on('keyup.autocomplete', function(e) {
    if (!~$.inArray(e.which, [27, 38, 40, 37, 39])) {
        var val = that.val();
        if (val.length >= o.minChars) {
            that.last_val = val;
            clearTimeout(that.timer);
            if (o.cache) {
                if (val in that.cache) {
                    suggest(that.cache[val]);
                    return;
                }
                for (i = 1; i < val.length - o.minChars; i++) {
                    var part = val.slice(0, val.length - i);
                    if (part in that.cache && !that.cache[part].length) {
                        suggest([]);
                        return;
                    }
                }
            }
            that.timer = setTimeout(function() {
                o.source(val, suggest)
            }, o.delay);
        } else {
            that.last_val = val;
            that.sc.hide();
        }
    }
});
});
}
$.fn.autoComplete.defaults = {
    source: 0,
    minChars: 3,
    delay: 100,
    cache: 1,
    menuClass: '',
    renderItem: function(item, search) {
        var re = new RegExp("(" + search.split(' ').join('|') + ")", "gi");
        return '<div class="autocomplete-suggestion" data-val="' + item + '">' + item.replace(re, "<b>$1</b>") + '</div>';
    },
    onSelect: function(term) {}
};
}(jQuery));