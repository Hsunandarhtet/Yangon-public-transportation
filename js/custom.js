$(document).ready(function() {

	/* Preloader */
	

	
        $(window).on('load', function() {
          $('body').addClass('loaded');
        });
		
		
		
      
		
    	/* Scroll To Top */
		
        $(window).scroll(function(){
        	
        if ($(this).scrollTop() >= 500) {
            $('.scroll-to-top').fadeIn();
         } else {
            $('.scroll-to-top').fadeOut();
         }
	   });
	
	
	    $('.scroll-to-top').click(function(){
		  $('html, body').animate({scrollTop : 0},500);
		  return false;
	    });

		
	
});
 