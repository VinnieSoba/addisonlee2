<?php
    $brandPopup = get_field('brand_popup', 'option');
    $brandPopupContent = get_field('brand_popup_content', 'option');
?>
<div id="popup">
    <div class="popup-content">
        <?php if($brandPopupContent) {
            echo $brandPopupContent;
        } ?>
        
    </div>
</div>