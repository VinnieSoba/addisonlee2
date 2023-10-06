<?php
// redirect straight to app store?
if(get_field('redirect_to_app_store')): ?>
    <div class="loading-screen">
        <div class="loader"></div>
    </div>
    <script>    
        jQuery(window).bind("load", function() {
            if(isMobile.any()) {
                window.location.href = appLink;
            }
        });     
    </script>        
<?php endif; ?>