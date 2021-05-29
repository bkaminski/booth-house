(function( $ ) {
	$( document ).ready(function() {
		$('.hero--img').waypoint(function() {
			$('.hero--img').find('img').addClass('animated fadeInUp');
		}, {
			offset: '100%'
		});
	});
})( jQuery );