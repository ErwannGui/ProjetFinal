$(function(){ 
	$('.top').click(function(){
	$('html, body').animate({
		scrollTop:0
	}, 'slow');
});

$(window).scroll(function() {
    if ($(window).scrollTop() >= 100){
        $('.top').fadeIn();
    }
    else{
        $('.top').fadeOut();
    }
});
});