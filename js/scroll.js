<<<<<<< Updated upstream
$(document).ready(function() {
    $('.js-scroll').on('click', function() {
        var page = $(this).attr('href');
        var speed = 750; 
        $('html, body').animate( { scrollTop: $(page).offset().top
        }, speed ); 
        return false;
    });
=======
$('a[href^="#"]').click(function(){
    var the_id = $(this).attr('href');
    var slow = 700;
    
    $('html, body').animate({
        scrollTop:$(the_id).offset().top -100
    }, slow);
    
>>>>>>> Stashed changes
});