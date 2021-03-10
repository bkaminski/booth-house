//jQuery no-conflict mode
(function( $ ) {

	$('.dropdown').on('show.bs.dropdown', function(e) {
		$(this).find('.dropdown-menu').first().stop(true, true).slideDown();
	});
	$('.dropdown').on('hide.bs.dropdown', function(e) {
		$(this).find('.dropdown-menu').first().stop(true, true).slideUp();
	});


})( jQuery );
//jQuery no-conflict mode
(function( $ ) {




})( jQuery );