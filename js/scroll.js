$('a[href^="#"]').click(function () {
    var the_id = $(this).attr('href');

    $('html').animate({
        scrollTop:$(the_id).offset().top - 100
    }, 'slow');
});
