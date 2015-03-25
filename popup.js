$(document).ready(function($){
	//open popup
	$('.cd-popup-trigger').on('click', function(event){
		event.preventDefault();
		$('.cd-popup').addClass('is-visible');
	});
	$('.cd-popup-trigger2').on('click', function(event){
		event.preventDefault();
		$('.cd-popup2').addClass('is-visible');
	});
	//close popup
	$('.cd-popup').on('click', function(event){
		if( $(event.target).is('.cd-popup-close, .no') || $(event.target).is('.cd-popup') ) {
			event.preventDefault();
			$(this).removeClass('is-visible');
		}
	});
	$('.cd-popup2').on('click', function(event){
		if( $(event.target).is('.cd-popup-close, .no') || $(event.target).is('.cd-popup2') ) {
			event.preventDefault();
			$(this).removeClass('is-visible');
		}
	});
	//close popup when clicking the esc keyboard button
	$(document).keyup(function(event){
    	if(event.which=='27'){
    		$('.cd-popup, .cd-popup2').removeClass('is-visible');
	    }
    });
});