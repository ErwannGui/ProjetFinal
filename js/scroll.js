$('a[href^="#"]').click(function(){
    var the_id = $(this).attr('href');
    var slow = 700;
    
    $('html, body').animate({
        scrollTop:$(the_id).offset().top -100
    }, slow);
    
});