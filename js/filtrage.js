$(function(){
    var selectedClass = "";
    $(".category").click(function(){
    selectedClass = $(this).attr("data-rel");
    $("#blogArticlesArticles").fadeTo(100, 0.1);
    $("#blogArticlesArticles article").not("."+selectedClass).fadeOut().removeClass('animation');
    setTimeout(function(){
        $("."+selectedClass).fadeIn().addClass('animation');
        $("#blogArticlesArticles").fadeTo(300, 2);
    }, 300);
    });
});