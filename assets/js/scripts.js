//jQuery no-conflict mode
(function( $ ) {

	// Preloader
	$(window).on('load', function() {
		setTimeout(function(){
    		$('#preloader').fadeOut('slow', function () {	
    		});
    	}, 0);
	});

	//Delay logo load
	$( document ).ready(function() {
		var $img = $('.hero--img').addClass('visible');
		setTimeout(function() {
			$img.removeClass('invisible');
		}, 2000);
	});

	//Scroll to top button
	$(document).ready(function(){ 
	    $(window).scroll(function(){ 
	        if ($(this).scrollTop() > 100) { 
	            $('#scroll').fadeIn(); 
	        } else { 
	            $('#scroll').fadeOut(); 
	        } 
	    }); 
	    $('#scroll').click(function(){ 
	        $("html, body").animate({ scrollTop: 0 }, 600); 
	        return false; 
	    }); 
	});

	$('.dropdown').on('show.bs.dropdown', function(e) {
		$(this).find('.dropdown-menu').first().stop(true, true).slideDown();
	});
	$('.dropdown').on('hide.bs.dropdown', function(e) {
		$(this).find('.dropdown-menu').first().stop(true, true).slideUp();
	});

	

})( jQuery );
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

(function( $ ) {
	$( document ).ready(function() {
		$('.hero--img').waypoint(function() {
			$('.hero--img').find('img').addClass('animated fadeInUp');
		}, {
			offset: '100%'
		});
	});
})( jQuery );