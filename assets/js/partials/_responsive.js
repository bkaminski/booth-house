//jQuery no-conflict mode
(function( $ ) {
$( document ).ready(function() {

	// RESPONSIVE CONTROLS
	var $window = $(window);
	function checkWidth() {

		if ($window.width() < 768) {
			//Parallax Background
			$window = $(window);
			   $('section[data-type="background"]').each(function(){
			     var $scroll = $(this);
			      $(window).scroll(function() {                   
			        var yPos = -($window.scrollTop() / $scroll.data('speed'));
			        var coords = '10% '+ yPos + 'px';
			        $scroll.css({ backgroundPosition: coords });   
			      }); 
			   });

			$();
		};
		if ($window.width() >= 768) {
			//Parallax Background
			$window = $(window);
			   $('section[data-type="background"]').each(function(){
			     var $scroll = $(this);
			      $(window).scroll(function() {                   
			        var yPos = -($window.scrollTop() / $scroll.data('speed'));
			        var coords = '50% '+ yPos + 'px';
			        $scroll.css({ backgroundPosition: coords });   
			      }); 
			   });

			$();
		}
	}
	
	checkWidth();
	$(window).resize(checkWidth);
	
	// END RESPONSIVE CONTROL
	});	

})( jQuery );
