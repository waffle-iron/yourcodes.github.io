$(window).on('scroll', function () {
    var scrollTop = $(window).scrollTop();
    if (scrollTop > 10) {
        $('nav').stop().animate({height: "80px"},200);
    }
    else {
        $('nav').stop().animate({height: "120px"},200);
    }
});