$(document).ready( function() {
    $('#tiemporealCarousel').carousel({
    	interval:5000
	});	
	var clickEvent = false;
	$('#tiemporealCarousel').on('click', '.navSlider a', function() {
			clickEvent = true;
			$('.navSlider li').removeClass('active');
			$(this).parent().addClass('active');		
	}).on('slid.bs.carousel', function(e) {
		if(!clickEvent) {			
			var count = $('.navSlider').children().length -1;
			//alert(count);
			var current = $('.navSlider li.active');
			current.removeClass('active').next().addClass('active');
			var id = parseInt(current.data('slide-to'));
			if(count == id) {
				$('.navSlider li').first().addClass('active');	
			}
		}
		clickEvent = false;
	});
});