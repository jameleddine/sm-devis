jQuery(document).ready(function($){
	//open popup
	$('.cd-popup-trigger').on('click', function(event){
		event.preventDefault();
		$('.cd-popup').addClass('is-visible').show();
		 $('.cd-popup-bis').hide();
		
		 	 $( '.cd-popup-trigger-bis').hide();
});
///////////





	//close popup
	$('.cd-popup').on('click', function(event){
		if( $(event.target).is('.cd-popup-close') || $(event.target).is('.cd-popup') ) {
			event.preventDefault();
			$(this).removeClass('is-visible');
			$( '.cd-popup-trigger-bis').show();
		}
	});
	//close popup when clicking the esc keyboard button
	$(document).keyup(function(event){
    	if(event.which=='27'){
    		$('.cd-popup').removeClass('is-visible');
			$( '.cd-popup-trigger-bis').show();
	    }
    });
});

jQuery(document).ready(function($){
	//open popup2
	$('.cd-popup-trigger-bis').on('click', function(event){
		event.preventDefault();
		$('.cd-popup-bis').addClass('is-visible-bis').show();
        $('.cd-popup').hide();     
	});

	
	
	//close popup
	$('.cd-popup-bis').on('click', function(event){
		if( $(event.target).is('.cd-popup-bis-close') || $(event.target).is('.cd-popup-bis') ) {
			event.preventDefault();
			$(this).removeClass('is-visible-bis');
		}
	});
	//close popup when clicking the esc keyboard button
	$(document).keyup(function(event){
    	if(event.which=='27'){
    		$('.cd-popup-bis').removeClass('is-visible-bis');
	    }
    });
});




