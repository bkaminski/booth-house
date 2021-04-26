//jQuery no-conflict mode
(function( $ ) {

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

	//Parallax Background
	$window = $(window);
	   $('section[data-type="background"]').each(function(){
	     // declare the variable to affect the defined data-type
	     var $scroll = jQuery(this);
	      $(window).scroll(function() {
	        // HTML5 proves useful for helping with creating JS functions!
	        // also, negative value because we're scrolling upwards                            
	        var yPos = -($window.scrollTop() / $scroll.data('speed'));
	        // background position
	        var coords = '50% '+ yPos + 'px';
	        // move the background
	        $scroll.css({ backgroundPosition: coords });   
	      }); // end window scroll
	   });  // end section function


})( jQuery );
//jQuery no-conflict mode
(function( $ ) {




})( jQuery );