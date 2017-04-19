var jq=jQuery.noConflict();

jq(window).load(function($){
	
	
//    
//    $("#loader").delay(1000).fadeOut(); 
//	$(".mask").delay(1500).fadeOut("slow");
		
	
   jq('.nav a, .nav li a, a.move, #about a').on('click',function(event){
		var $anchor = jq(this);
		jq('html, body').stop().animate({
			scrollTop: jq($anchor.attr('href')).offset().top +1
		}, 1500,'easeInOutExpo');	
		event.preventDefault();
	});
	
	
		
	jq('.mWm-animated').each(function() {	
		jq(this).appear(function() {
			if(jq(this).attr('data-animation') == 'fade-in-from-right'){
				jq(this).delay(jq(this).attr('data-delay')).animate({
					'opacity' : 1,
					'right' : '0px'
				},500,'easeOutSine');
			} else if(jq(this).attr('data-animation') == 'fade-in-from-bottom'){
				jq(this).delay(jq(this).attr('data-delay')).animate({
					'opacity' : 1,
					'bottom' : '0px'
				},500,'easeOutSine');
			
			}			
		},{accX: 0, accY: -105},'easeInCubic');
	
	});
	
    
    
});
