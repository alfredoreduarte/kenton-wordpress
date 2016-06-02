<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script src="<?php bloginfo('template_url'); ?>/node_modules/slick-carousel/slick/slick.min.js"></script>
<script>
$(document).ready(function(){
	// sliders
	$('#single-product-slider').slick();
	//  
	$('.product-slider-main').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		centerMode: true,
		fade: true,
		asNavFor: '.product-slider-nav'
	});
	$('.product-slider-nav').slick({
		slidesToShow: 4,
		slidesToScroll: 1,
		asNavFor: '.product-slider-main',
		dots: true,
		centerMode: true,
		focusOnSelect: true,
	});
})
</script>