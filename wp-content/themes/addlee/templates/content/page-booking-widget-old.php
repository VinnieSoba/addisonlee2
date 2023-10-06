<?php 
$bookingType = get_field('booking_type');  
$bookingPayment = get_field('booking_payment');  
$bookingDate = get_field('booking_date');    
$operationZoneName = get_field('operation_zone_name');    
$operationZoneCountryCode = get_field('operation_zone_country_code');    
$operationZoneTownID = get_field('operation_zone_town_id'); 
if(ENVIRONMENT == 'production'){
    $ALQBdomain = 'https://book.addisonlee.com/al/';
} else {
    $ALQBdomain = 'https://testsite2.addisonlee.com/al/';
}
?>
<script>

    var _ALQB = _ALQB || {};
    _ALQB.domain = '<?php echo $ALQBdomain; ?>';
    _ALQB.type = '<?php echo ($bookingType) ? $bookingType : "car"; ?>';
    _ALQB.payment = '<?php echo ($bookingPayment) ? $bookingPayment : "credit_card"; ?>';
    _ALQB.isAsap = '<?php echo ($bookingDate) ? $bookingDate : "true"; ?>';
    _ALQB.operationalZone = {
        name: '<?php echo ($operationZoneName) ? $operationZoneName : "London"; ?>',
        country: {
            code: '<?php echo ($operationZoneCountryCode) ? $operationZoneCountryCode : "GB"; ?>'
        },
        town: {
            id: <?php echo ($operationZoneTownID) ? $operationZoneTownID : 1 ; ?>
        }
    };;

</script>
<section id="booking-search-panel" class="animated fadeInUp">
    <div class="container">
        <div class="row no-gutter">
            <div class="col-md-12">
                <div id="hw" data-ng-app="quickbook">
                    <div class="hw__wrapper" data-ng-controller="MainCtrl" data-ng-include="'modules/quickbook/views/main.html'"></div>
                </div>
            </div>
        </div>
    </div>
</section>