<?php

$bookingType = get_field('booking_type');

if($bookingType == 'courier') {
    $booking_url = 'https://book.addisonlee.com/al/booking/new/courier';
	$booking_text = 'Book a Same Day Courier';
}
else {
    $booking_url = 'https://book.addisonlee.com/al/booking/new/car';
	$booking_text = 'Get a quote';
}
?>
<div class="booking-widget-button">
<a class="cta " href="<?php echo $booking_url; ?>">
	<?php echo $booking_text; ?>
</a>
</div>