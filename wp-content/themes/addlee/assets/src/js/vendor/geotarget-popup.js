jQuery(document).ready(function ($) {
    var popup = $('#geotarget-popup');
    var doNotShowSession = sessionStorage.getItem('doNotShowSession');
    var doNotShowLocal = localStorage.getItem('doNotShowLocal');
    var focused = $(':focus');
    function closePopup(){
        popup.addClass('hidden');
        focused.focus()
    }
    function setOptOut(event){
        console.log(event);
        if(event.target.checked) {
            localStorage.setItem('doNotShowLocal', 'true');
        } else {
            localStorage.removeItem('doNotShowLocal');
        }
    }


    if (!doNotShowSession && !doNotShowLocal){
        sessionStorage.setItem('doNotShowSession', 'true');
        popup.removeClass('hidden');

        $('#us-site-link').focus();
        $('#geotarget-overlay').click(closePopup);
        $('#uk-site-link').click(closePopup);
        $('#geotarget-opt-out').change(setOptOut);
    }
});
